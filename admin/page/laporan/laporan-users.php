<div class="list-jenis">
	<div class="row">
	 <div class="col-sm-12">
	  <section class="panel panel-default">
		<header class="panel-heading">LAPORAN CUSTOMER</header>
		<div class="panel-body">
		  <table class="table table-bordered" id="example" style="text-align: center;">
			<thead>
			 <tr>
			  <th>
			   NO
			  </th>
			  <th>
			   Customer
			  </th>
			 </tr>
			</thead>
			<tbody>
			<?php
				$no = 1;
				$select_customer = mysqli_query($koneksi, "SELECT * FROM user");
				while ($row_customer = mysqli_fetch_array($select_customer)) {
				  echo '<td>'.$no++.'</td>';
				  echo '<td style="text-align: left !important;">'.$row_customer['nama_user'].'</td>';
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
    $('#delete_link').attr('href','?hal=admin-master/kursi/delete-kursi&id_kursi='+id);
})
</script>