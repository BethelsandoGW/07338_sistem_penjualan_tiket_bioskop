<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('?hal=admin-master/film/list-film');
}

$select_film    	= mysqli_query($koneksi, "SELECT * FROM film WHERE id_film=".$_GET['id']);
$row_film    		= mysqli_fetch_array($select_film);

if(isset($_POST['simpan'])){

    $select_film = mysqli_query($koneksi, "SELECT * FROM film WHERE nama_film='".$_POST['nama_film']."'");
    $num_film = mysqli_num_rows($select_film);

    if($num_film == 0){
        $edit_film = mysqli_query($koneksi,"UPDATE film SET nama_film='".$_POST['nama_film']."', genre='".$_POST['genre']."', sinopsis='".$_POST['sinopsis']."', harga=".$_POST['harga']." WHERE id_film=".$_GET['id']);

        if ($edit_film) {
            echo "<script> 
                alert('Film Berhasil Diubah!');location.href='index.php?hal=admin-master/film/list-film';
            </script>";
        }else{
            echo "<script>alert('Film Gagal Diubah!');location.href='?hal=admin-master/film/edit-film&id=".$_GET['id']."';</script>";
        }

    }else{
         echo "<script> 
                alert('Nama Film Sudah Tersedia!');location.href='index.php?hal=admin-master/film/list-film';
            </script>";
    }
}
?>

<style>

select {
  width: 30%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}


input[type=number]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

textarea{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

</style>

<div class="row list-jenis">
	<div class="col-sm-12">
	 <section class="panel panel-default">
	  <header class="panel-heading">EDIT FILM</header>
	   <div class="panel-body">	
		<form action="" method="POST">
        <p>
            <label for="nama_film">Nama Film </label><br />
            <input type="text" id="nama_film" name="nama_film" placeholder="Nama Film" value="<?=$row_film['nama_film']; ?>" required />
        </p>
		
		<p>
            <label for="genre">Genre </label><br />
            <input type="text" id="genre" name="genre" placeholder="Genre" value="<?=$row_film['genre']; ?>" required />
        </p>

        <p>
            <label for="sinopsis">Sinopsis </label><br />
            <textarea id='sinopsis' name='sinopsis' required><?=$row_film['sinopsis'];?></textarea>
        </p>

        <p>
            <label for="harga">Harga </label><br />
            <input type="number" id="harga" min="10000" name="harga" placeholder="harga" value="<?=$row_film['harga']; ?>" required />
        </p>
        
        <p>
            <input type="submit" class="btn btn-success" value="SIMPAN" name="simpan" />
			<a href="index.php?hal=admin-master/pelanggan/list-pelanggan" class="btn btn-danger">BATAL</a>
		</p>
		</form>
	   </div>
	 </section>
	</div>
</div>

