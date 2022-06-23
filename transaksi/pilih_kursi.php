<?php 

	if(isset($_POST['pesan'])){
		if (empty($_POST['kursi'])) {
			echo "<script>
				window.alert('Pastikan Cek Kursi Masih Tersedia atau Belum Dipilih');
				window.location.href='?hal=transaksi/transaksi&id_film=".$_POST['id_film']."';
			</script>";	
		}

		$last_id = null;
		$queryUser = 'SELECT * FROM user WHERE nama_user = "'.$_POST['nama_user'].'"';
		$selectUserByName = mysqli_fetch_row(mysqli_query($koneksi, $queryUser));
		if($selectUserByName == 0){
			mysqli_query($koneksi, 'INSERT INTO user VALUES("", "'.$_POST['nama_user'].'")');
			$last_id = mysqli_insert_id($koneksi);
		}else{
			$last_id = mysqli_fetch_array(mysqli_query($koneksi, $queryUser));
			$last_id = $last_id['id_user'];
		}

		$data = [
			'nama_user' => $_POST['nama_user'],
			'date' => date("Y-m-d H:i:s"),
			'quantity' => count($_POST['kursi']),
			'id_film' => $_POST['id_film'],
			'id_studio' => $_POST['id_studio']
		];

		//insert data ke dalam transaksi, tiket dan detail_tiket
		$insertDataTransaksi 	= mysqli_query($koneksi, 'INSERT INTO transaksi VALUES("", '.$last_id.', "'.$data['date'].'", "'.$data['quantity'].'")');
		$last_id				= mysqli_insert_id($koneksi);
		$insertDataTiket		= mysqli_query($koneksi, "INSERT INTO tiket VALUES('', ".$last_id.", ".$data['id_film'].")");
		$last_id				= mysqli_insert_id($koneksi);
		for ($a=0; $a < $data['quantity']; $a++) { 
			mysqli_query($koneksi, "INSERT INTO detail_tiket VALUES('', ".$_POST['kursi'][$a].", ".$data['id_studio'].", ".$last_id.")");

			mysqli_query($koneksi, "UPDATE detail_kursi SET status=0 WHERE id_kursi=".$_POST['kursi'][$a]."  AND id_studio=".$data['id_studio']);
		}

		if ($insertDataTransaksi && $insertDataTiket) {

			echo "
			<script>
				window.alert('Transaksi Berhasil');
	    		window.open('cetak_tiket/index.php?no_tiket=$last_id', '_blank');
	    		window.location.href='?hal=Dasboard';

			</script>
			";
		}else{
			echo "
			<script>
				window.alert('Transaksi Gagal');
	    		window.location.href='?hal=Dasboard';
			</script>
			";
		}
	}

if(isset($_POST['proses'])){
	$selectDataStudio 	= mysqli_fetch_array(mysqli_query($koneksi, "SELECT studio.*,film.* FROM studio INNER JOIN penayangan ON studio.id_studio = penayangan.id_studio INNER JOIN film ON penayangan.id_film=film.id_film WHERE studio.id_studio = ".$_POST['id_studio']));
?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?=$selectDataStudio['tipe_studio'];?></h1>
    <p class="lead"><?=$selectDataStudio['nama_film']?>. Akan Segera Tayang!</p>
  </div>
</div>
<form action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id_studio" value="<?=$_POST['id_studio']?>">
<input type="hidden" name="id_film" value="<?=$_POST['id_film']?>">
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading"><strong>Isi Nama Anda dan Pilih Kursi Yang Tersedia! <span class="pull-right"><?=date('l, d F, Y');?></span></strong></div>
      <div class="panel-body">
      	<div class="col-md-4">
      	<div class="form-group">
			    <label for="nama">Nama Lengkap :</label>
			    <input type="text" class="form-control" name="nama_user" id="nama" required><br>
			    <button type="submit" class="btn btn-info btn-md" name="pesan"><i class="	glyphicon glyphicon-shopping-cart"></i> Pesan Sekarang</button>
		    </div>	
      	</div>
      </div>
    </div>
</div>
<hr>
<div class="row">
	<?php 
		$query = mysqli_query($koneksi, "SELECT kursi.*,detail_kursi.* FROM kursi INNER JOIN detail_kursi ON kursi.id_kursi = detail_kursi.id_kursi WHERE detail_kursi.id_studio = ".$_POST['id_studio']."");
		while ($row_kursi = mysqli_fetch_array($query)) {
	?>
	<div class="col-sm-2">
		<div class="panel panel-info">
			<div class="panel-body" style="padding: 10px;border-radius: 2px;">
	    		<div class="card">
	      			<div class="card-body">
	      				<center>
	      					<div class="alert alert-info">
  <strong><i class="glyphicon glyphicon-bed"></i></strong><h1 class="card-title"><?=$row_kursi['nama_kursi']?></h1>
</div>
	        			
	        			<input type="checkbox" name="kursi[]" value="<?=$row_kursi['id_kursi']?>" <?php if($row_kursi['status'] == 0) echo "disabled"; ?>>
	        			</center>
	      			</div>
	    		</div>
	    	</div>
		</div>
	</div>
	<?php 
	}
	?>
</div>
</form>
<?php
}
?>