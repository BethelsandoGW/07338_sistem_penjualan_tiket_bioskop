<?php
if( !isset($_GET['id_kursi']) && !isset($_GET['id_studio'])){
    header('?hal=admin-master/kursi/list-kursi');
}

$select_kursi  	= mysqli_query($koneksi, "SELECT * FROM kursi WHERE id_kursi=".$_GET['id_kursi']);
$select_studio   = mysqli_query($koneksi, "SELECT * FROM studio WHERE id_studio=".$_GET['id_studio']);
$row_kursi 		= mysqli_fetch_array($select_kursi);
$nama_studio      = mysqli_fetch_array($select_studio);

if(isset($_POST['simpan'])){

    $select_kursi   = mysqli_query($koneksi, "SELECT detail_kursi.*, kursi.*, studio.* FROM detail_kursi 
                                                INNER JOIN kursi ON detail_kursi.id_kursi = kursi.id_kursi 
                                                INNER JOIN studio ON detail_kursi.id_studio = studio.id_studio 
                                                WHERE detail_kursi.id_studio=".$_GET['id_studio']." AND kursi.nama_kursi= '".$_POST['nama_kursi']."'");
    $num_kursi = mysqli_num_rows($select_kursi);

    if ($num_kursi == 0) {
        $edit_kursi = mysqli_query($koneksi,"UPDATE kursi SET nama_kursi='".$_POST['nama_kursi']."' WHERE id_kursi=".$_GET['id_kursi']);

        if ($edit_kursi) {
            echo "<script>alert('Kursi Berhasil Diubah!');location.href='index.php?hal=admin-master/kursi/list-kursi';</script>";
        }else{
            echo "<script>alert('Kursi Gagal Diubah!');location.href='?hal=admin-master/kursi/edit-kursi&id_kursi=".$_GET['id_kursi']."&id_studio=".$_GET['id_studio']."';</script>";
        }
    }else{
        echo "<script>alert('Kursi Sudah Tersedia!');location.href='?hal=admin-master/kursi/edit-kursi&id_kursi=".$_GET['id_kursi']."&id_studio=".$_GET['id_studio']."'</script>";
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
	  <header class="panel-heading">EDIT KURSI STUDIO
        <?= $nama_studio['tipe_studio'] ?>
      </header>
	   <div class="panel-body">	
		<form action="" method="POST">
        <p>
            <label for="nama_kursi">Nama Studio </label><br />
            <input type="text" id="nama_kursi" name="nama_kursi" placeholder="Masukkan Nama Kursi" value="<?=$row_kursi['nama_kursi']; ?>" required />
        </p>
        
        <p>
            <input type="submit" class="btn btn-success" name="simpan" />
			<a href="index.php?hal=admin-master/kursi/list-kursi" class="btn btn-danger">BATAL</a>
		</p>
		</form>
	   </div>
	 </section>
	</div>
</div>

