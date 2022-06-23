<?php
if(isset($_POST['daftar'])){
  if(!empty($_POST['nama_film']) && !empty($_POST['genre']) && !empty($_POST['sinopsis']) && !empty($_POST['harga'])){

    $insert_film = mysqli_query($koneksi,"INSERT INTO film VALUES('','".$_POST['genre']."', '".$_POST['nama_film']."', '".$_POST['sinopsis']."', ".$_POST['harga'].")");

    if( $insert_film ) {
		header('Location: ?hal=admin-master/film/list-film');
    }else{
        header('Location: index.php');
    }
  }else{
	echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	       <strong>Input gagal</strong></div>';  
  }
} 

$select_film = mysqli_query($koneksi,"SELECT * FROM film");
?>

<style>

ul.ui-autocomplete {
width: auto;
border: none;
}

ul.ui-autocomplete li.ui-menu-item {
font-size: 15px;
padding: 3px;
border: none;
}

ul.ui-autocomplete li.ui-menu-item:hover {
border: none;
}

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
		<header class="panel-heading">LIST FILM</header>
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
			   NAMA FILM
			  </th>
			  <th>
			   GENRE
			  </th>
			  <th>
			   SINOPSIS
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
			while($row_film = mysqli_fetch_array($select_film)){
			  echo '<tr>';
			  echo '<td>'.$no++.'</td>';
			  echo '<td style="text-align: left !important;">'.$row_film['nama_film'].'</td>';
			  echo '<td style="text-align: left !important;">'.$row_film['genre'].'</td>';
			  echo '<td style="text-align: left !important;">'.$row_film['sinopsis'].'</td>';
			  echo '<td style="text-align: left !important;">Rp. '.number_format($row_film['harga'], 0, ",", ".").'</td>';
			  echo "<td><a href='?hal=admin-master/film/edit-film&id=".$row_film['id_film']."' class='btn btn-warning' role='button'><i class='glyphicon glyphicon-pencil'></i></a>
                        <a href='#modal_delete' data-id='".$row_film['id_film']."' data-toggle='modal' class='btn btn-danger buang' role='button'><i class='glyphicon glyphicon-trash'></i></a>
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
						<h4 class="modal-title">Tambah Film</h4>
					</div>
					<div class="modal-body">
						<form action="" name="modal_popup" method="post">
							<input name="nama_film" type="text" class="form-control" placeholder="Masukkan Nama Film" required />
							<br>
							<input name="genre" type="text" class="form-control" placeholder="Masukkan Genre" required />
							<br>
							<textarea name="sinopsis" class="form-control" placeholder="Masukkan Sinopsis" required=""></textarea>
							<br>
							<input name="harga" type="text" class="form-control" placeholder="Masukkan Harga" required />
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
    $('#delete_link').attr('href','?hal=admin-master/film/delete-film&id_film='+id);
})
</script>

