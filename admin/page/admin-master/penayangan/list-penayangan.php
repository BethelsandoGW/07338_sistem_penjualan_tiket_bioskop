<?php
if(isset($_POST['daftar'])){
  if(!empty($_POST['id_film']) && !empty($_POST['id_studio']) && !empty($_POST['waktu_tayang'])){

  	$waktu_tayang = date("Y-m-d H:i:s",strtotime($_POST['waktu_tayang']));

    $insert_penayangan = mysqli_query($koneksi,"INSERT INTO penayangan VALUES('',".$_POST['id_studio'].", ".$_POST['id_film'].", '$waktu_tayang')")or die(mysqli_error($koneksi));

    if( $insert_penayangan ) {
		header('Location: ?hal=admin-master/penayangan/list-penayangan');
    }else{
        header('Location: index.php');
    }
  }else{
	echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	       <strong>Input gagal</strong></div>';  
  }
} 

$select_penayangan = mysqli_query($koneksi,"SELECT film.*, studio.*, penayangan.* FROM penayangan 
																						INNER JOIN film ON film.id_film = penayangan.id_film
																						INNER JOIN studio ON studio.id_studio = penayangan.id_studio");
?>

<style>
input[type=text] {
  background-color: white;
  padding: 5px 5px 5px 10px;
  margin-bottom: 8px;
  
}

input[type=number] {
  background-color: white;
  padding: 5px 5px 5px 10px;
  margin-bottom: 8px;
  
}


</style>
<div class="list-jenis">
	<div class="row">
	 <div class="col-sm-12">
	  <section class="panel panel-default">
		<header class="panel-heading">LIST PENAYANGAN</header>
		<div class="panel-body">	
		 <nav>
			<button type="button" data-target="#ModalAdd" data-toggle="modal" class="btn btn-primary">
			 Tambah Baru <i class="fa fa-plus"></i>
			</button>
		 </nav>
		 <br>
		  <table class="table table-bordered" id="example" style="text-align: center;">
			<thead>
			 <tr>
			  <th>
			   NO
			  </th>
			  <th>
			   FILM
			  </th>
			  <th>
			   STUDIO
			  </th>
			  <th>
			   WAKTU TAYANG
			  </th>
			  <th>
			   HARGA
			  </th>
			  <th>
			   AKSI
			  </th>
			 </tr>
			</thead>
			<tbody>
			<?php
			$no = 1;
			while($row_penayangan = mysqli_fetch_array($select_penayangan)){
			  echo '<tr>';
			  echo '<td>'.$no++.'</td>';
			  echo '<td style="text-align: left !important;">'.$row_penayangan['nama_film'].'</td>';
			  echo '<td style="text-align: left !important;">'.$row_penayangan['tipe_studio'].'</td>';
			  echo '<td style="text-align: left !important;">'.$row_penayangan['waktu_tayang'].'</td>';
			  echo '<td style="text-align: left !important;">Rp. '.number_format($row_penayangan['harga'], 0, ",", ".").'</td>';
			  echo "<td><a href='?hal=admin-master/penayangan/edit-penayangan&id=".$row_penayangan['id_penayangan']."' class='btn btn-warning' role='button'><i class='glyphicon glyphicon-pencil'></i></a>
                        <a href='#modal_delete' data-id='".$row_penayangan['id_penayangan']."' data-toggle='modal' class='btn btn-danger buang' role='button'><i class='glyphicon glyphicon-trash'></i></a>
					</td>";
			  echo '</tr>';
			 }
			?>
			</tbody>
			</table>
		</div>
	  </section>
	 </div>
	</div>
</div>
 
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Penayangan</h4>
					</div>
					<div class="modal-body">
						<form action="" name="modal_popup" method="post">
							<br>
							<label>Film</label>
							<select name="id_film" class="form-control" required>
								<?php 
									$selectDataFilm = mysqli_query($koneksi, "SELECT * FROM film");
									while ($row_film = mysqli_fetch_array($selectDataFilm)) {
										echo "<option value='".$row_film['id_film']."'>".$row_film['nama_film']."</option>";
									}
								?>
							</select>
							<br>
							<label>Studio</label>
							<select name="id_studio" class="form-control" required>
								<?php 
									$selectDataStudio = mysqli_query($koneksi, "SELECT * FROM studio");
									while ($row_studio = mysqli_fetch_array($selectDataStudio)) {
										echo "<option value='".$row_studio['id_studio']."'>".$row_studio['tipe_studio']."</option>";
									}
								?>
							</select>
							<br>
							<label>Waktu Tayang</label>
							<input type="datetime-local" name="waktu_tayang" class="form-control" required>
							<div class="modal-footer">
								<button class="btn btn-default" name="daftar" type="submit">
									Tambah
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Apa anda yakin ingin menghapus data ini?</h4>
					</div>
                    <div class="modal-body">
					  <div class="alert alert-warning">Data yang sudah dihapus
					  <br> tidak akan bisa dikembalikan lagi!</div>
					</div>					
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:right;">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a href="#" role="button" class="btn btn-danger" id="delete_link">Delete</a>
					</div>
				</div>
			</div>
		</div>
<script>
$('.buang').click(function(){
    var id=$(this).data('id');
    $('#delete_link').attr('href','?hal=admin-master/penayangan/delete-penayangan&id_penayangan='+id);
})
</script>

