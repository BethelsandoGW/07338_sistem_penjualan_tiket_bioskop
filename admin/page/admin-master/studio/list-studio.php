<?php
$select_studio = mysqli_query($koneksi,"SELECT * FROM studio");
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
		<header class="panel-heading">LIST STUDIO</header>
		<div class="panel-body">	
		 <nav>
			<a href="?hal=admin-master/studio/registrasi-studio" class="btn btn-primary"> Tambah Baru <i class="fa fa-plus"></i></a>
		 </nav>
		 <br>
		  <table class="table table-bordered" id="example" style="text-align: center;">
			<thead>
			 <tr>
			  <th>
			   NO
			  </th>
			  <th>
			   NAMA STUDIO
			  </th>
			  <th>
			   NOMOR STUDIO
			  </th>
			  <th>
			   AKSI
			  </th>
			 </tr>
			</thead>
			<tbody>
			<?php
			$no = 1;
			while($row_studio = mysqli_fetch_array($select_studio)){
			  echo '<tr>';
			  echo '<td>'.$no++.'</td>';
			  echo '<td style="text-align: left !important;">'.$row_studio['tipe_studio'].'</td>';
			  echo '<td>'.$row_studio['no_studio'].'</td>';
			  echo "<td><a href='?hal=admin-master/studio/edit-studio&id=".$row_studio['id_studio']."' class='btn btn-warning' role='button'><i class='glyphicon glyphicon-pencil'></i></a>
                        <a href='#modal_delete' data-id='".$row_studio['id_studio']."' data-toggle='modal' class='btn btn-danger buang' role='button'><i class='glyphicon glyphicon-trash'></i></a>
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
    $('#delete_link').attr('href','?hal=admin-master/studio/delete-studio&id_studio='+id);
})
</script>

