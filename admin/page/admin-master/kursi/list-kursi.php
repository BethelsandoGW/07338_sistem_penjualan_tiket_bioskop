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
		<header class="panel-heading">LIST KURSI</header>
		<div class="panel-body">	
		 <nav>
		 	<form action="" method="POST">
		 			<p>
		 				<select name='id_studio' class='form-control' style="width: 25%; display: inline;">
		 					<?php 
		 						$selectDataStudio = mysqli_query($koneksi, "SELECT * FROM studio");
		 						while ($row_studio = mysqli_fetch_array($selectDataStudio)) {
		 							echo "<option value='".$row_studio['id_studio']."'>".$row_studio['tipe_studio']."</option>";
		 						}
		 					?>
		 				</select>
		 				<button type="submit" class="btn btn-primary" name='view_kursi'>Pilih</button>
		 			</p>
		 	</form>
		 </nav>
		 <br>
		  <table class="table table-bordered" id="example" style="text-align: center;">
			<thead>
			 <tr>
			  <th>
			   NO
			  </th>
			  <th>
			   KURSI
			  </th>
			  <th>
			   STUDIO
			  </th>
			  <th>
			   NOMOR STUDIO
			  </th>
			  <th>
			   STATUS
			  </th>
			  <th>
			   AKSI
			  </th>
			 </tr>
			</thead>
			<tbody>
			<?php
			if (isset($_POST['view_kursi'])) {
				$no = 1;
				$select_kursi = mysqli_query($koneksi, "SELECT kursi.*, studio.*, detail_kursi.* FROM detail_kursi 
																										INNER JOIN kursi ON detail_kursi.id_kursi = kursi.id_kursi 
																										INNER JOIN studio ON detail_kursi.id_studio = studio.id_studio
																										WHERE detail_kursi.id_studio = ".$_POST['id_studio']);
				while ($row_kursi = mysqli_fetch_array($select_kursi)) 
				{
				  echo '<td>'.$no++.'</td>';
				  echo '<td style="text-align: left !important;">'.$row_kursi['nama_kursi'].'</td>';
				  echo '<td style="text-align: left !important;">'.$row_kursi['tipe_studio'].'</td>';
				  echo '<td style="text-align: left !important;">'.$row_kursi['no_studio'].'</td>';
				  if ($row_kursi['status'] == 0) 
				  {
				  	echo '<td style="text-align: left !important;color: red;">Dipakai</td>';
				  }
				  else
				  {
				  	echo '<td style="text-align: left !important;color: green;">Tersedia</td>';
				  }
				  echo "<td><a href='?hal=admin-master/kursi/edit-kursi&id_kursi=".$row_kursi['id_kursi']."&id_studio=".$row_kursi['id_studio']."' class='btn btn-warning' role='button'><i class='glyphicon glyphicon-pencil'></i></a>";
          
          if($row_kursi['status'] == 0)
          {
          echo      " <a href='?hal=admin-master/kursi/konfirmasi-kursi&id_kursi=".$row_kursi['id_kursi']."&id_studio=".$row_kursi['id_studio']."' class='btn btn-success' role='button'><i class='glyphicon glyphicon-ok-circle'></i></a>
								</td>";
          }
          else
          {
					echo      " <a href='?hal=admin-master/kursi/cancel-kursi&id_kursi=".$row_kursi['id_kursi']."&id_studio=".$row_kursi['id_studio']."' class='btn btn-danger' role='button'><i class='glyphicon glyphicon-ban-circle'></i></a>
								</td>";
          }
				  echo '</tr>';
				  $all_row = $row_kursi;
				} 
		 			
		 			
			}
			?>
			</tbody>
			</table>
			<?php  
				// $all_row = mysqli_fetch_array($select_kursi);
				// var_dump($all_row);
				if (isset($all_row)) {
					echo "<a href='?hal=admin-master/kursi/konfirmasi-kursi&id_studio=".$all_row['id_studio']."' class='btn btn-success' role='button'>Aktif Semua</a>";
					echo "   ";
					echo "<a href='?hal=admin-master/kursi/cancel-kursi&id_studio=".$all_row['id_studio']."' class='btn btn-danger' role='button'>Penuh Semua</a>";
				}
				
			?>
		</div>
	  </section>
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
    $('#delete_link').attr('href','?hal=admin-master/kursi/delete-kursi&id_kursi='+id);
})
</script>