<?php
if (isset($_POST['kursi'])) {
    $_SESSION['kursi'] = $_POST['jumlah_kursi'];
}

if( !isset($_GET['id']) ){
    header('?hal=admin-master/studio/list-studio');
}

$select_studio  	= mysqli_query($koneksi, "SELECT * FROM studio WHERE id_studio=".$_GET['id']);
$row_studio 		= mysqli_fetch_array($select_studio);

if(isset($_POST['simpan'])){
    if (isset($_SESSION['kursi'])) {
        for ($a=0; $a < $_SESSION['kursi']; $a++) { 
            mysqli_query($koneksi, "INSERT INTO kursi VALUES('', '".$_POST['nama_kursi'][$a]."')");

            $id_kursi = mysqli_insert_id($koneksi);

            mysqli_query($koneksi, "INSERT INTO detail_kursi VALUES(".$id_kursi.", ".$_GET['id'].", 1)");
        }
    }

    $edit_studio = mysqli_query($koneksi,"UPDATE studio SET tipe_studio='".$_POST['tipe_studio']."', no_studio=".$_POST['no_studio']." WHERE id_studio=".$_GET['id']);

    unset($_SESSION['kursi']);
    if($edit_studio){
		echo "<script type='text/javascript'>alert('Update Berhasil!');location.href='index.php?hal=admin-master/studio/list-studio';</script>";
    }else{
		echo "<script>alert('Update Gagal!');location.href='index.php?hal=admin-master/studio/edit-studio&id=".$_GET['id']."';</script>";
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
	  <header class="panel-heading">EDIT STUDIO</header>
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
            <label for="tipe_studio">Nama Studio </label><br />
            <input type="text" id="tipe_studio" name="tipe_studio" placeholder="Masukkan Tipe Studio" value="<?=$row_studio['tipe_studio']; ?>" required />
        </p>

        <p>
            <label for="no_studio">Nomor Studio </label><br />
            <input type="number" id="no_studio" name="no_studio" placeholder="Masukkan Nomor Studio" value="<?=$row_studio['no_studio']; ?>" required />
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
            <input type="submit" class="btn btn-success" value="SIMPAN" name="simpan" />
        </form>
		</p>
        <form action="" method="POST">
            <button type="submit" class="btn btn-danger" name="batal">BATAL</button>
        </form>
	   </div>
	 </section>
	</div>
</div>

