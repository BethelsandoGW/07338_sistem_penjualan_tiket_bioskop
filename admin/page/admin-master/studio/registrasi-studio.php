<?php
// var_dump($_POST);
if (isset($_POST['kursi'])) {
    $_SESSION['kursi'] = $_POST['jumlah_kursi'];
}

if(isset($_POST['simpan'])){
	    
    $selectDataStudio = mysqli_query($koneksi, "SELECT * FROM studio WHERE tipe_studio = '".$_POST['tipe_studio']."'");
    $num_studio = mysqli_num_rows($selectDataStudio);

    if ($num_studio == 0) {
        mysqli_query($koneksi, "INSERT INTO studio VALUES('', '".$_POST['tipe_studio']."', '".$_POST['no_studio']."')");
        $id_studio = mysqli_insert_id($koneksi);

        for ($a=0; $a <$_SESSION['kursi']; $a++) { 
            mysqli_query($koneksi, "INSERT INTO kursi VALUES('', '".$_POST['nama_kursi'][$a]."')");

            $id_kursi = mysqli_insert_id($koneksi);

            mysqli_query($koneksi, "INSERT INTO detail_kursi VALUES('$id_kursi','$id_studio', '1')");
        }
        unset($_SESSION['kursi']);
        
        echo "<script> 
                alert('Studio dan Kursi Berhasil Diinput!');location.href='index.php?hal=admin-master/studio/list-studio';
            </script>";
    }else{
        echo "<script> 
                alert('Tipe Studio Sudah Tersedia!');
                location.href='index.php?hal=admin-master/studio/list-studio';
            </script>";
    }
}

if (isset($_POST['batal'])) {
    unset($_SESSION['kursi']);
    header('Location: index.php?hal=admin-master/studio/list-studio');
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
	  <header class="panel-heading">TAMBAH STUDIO</header>
	   <div class="panel-body">

        <form action="" method="POST">
        <p>
            <label for="jumlah_kursi">Jumlah Kursi : </label><br />
            <input type="number" id="jumlah_kursi" min="1" name="jumlah_kursi" placeholder="Masukkan Jumlah Kursi Yang Akan Di input" value='<?php if(isset($_SESSION['kursi'])) echo $_SESSION['kursi']?>' required />
            <input type="submit" class="btn btn-info btn-lg" name="kursi" />
        </p>    
        </form>

		<form action="" method="POST">
        <p>
            <label for="tipe_studio">Tipe Studio </label><br />
            <input type="text" id="tipe_studio" name="tipe_studio" placeholder="Masukkan Tipe Studio" required />
        </p>

        <p>
            <label for="no_studio">Nomor Studio </label><br />
            <input type="number" min="1" id="no_studio" name="no_studio" placeholder="Masukkan Nomor Studio" required />
        </p>
        
        <?php 
            if (isset($_SESSION['kursi'])) {
                $a = 1;
                for ($i = 0; $i < $_SESSION["kursi"]; $i++){
                    echo " <input type='text' name='nama_kursi[$i]' placeholder='Nama Kursi Ke-".$a++."' required>";
                }
            }
        ?>

        <p>
            <input type="submit" class="btn btn-success"  name="simpan" />
        </form>
        <form action="" method="POST">
            <button type="submit" class="btn btn-danger" name="batal">Batal</button>
        </form>
		</p>
		
	   </div>
	 </section>
	</div>
</div>

