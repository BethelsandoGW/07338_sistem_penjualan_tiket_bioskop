<div class="list-jenis">
	<div class="row">
	 <div class="col-sm-12">
	  <section class="panel panel-default">
		<header class="panel-heading">RIWAYAT TRANSAKSI</header>
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
			  <th>
			   Nama Film
			  </th>
			  <th>
			   Waktu Transaksi
			  </th>
			  <th>
			   Jumlah Tiket
			  </th>
			 </tr>
			</thead>
			<tbody>
			<?php
				$no = 1;
				$select_transaksi = mysqli_query($koneksi, "SELECT user.nama_user, film.nama_film, transaksi.waktu_transaksi, transaksi.quantity 
															FROM transaksi
															INNER JOIN user ON (transaksi.id_user = user.id_user)
															INNER JOIN tiket ON (transaksi.no_transaksi = tiket.no_transaksi)
															INNER JOIN film ON (tiket.id_film = film.id_film)");
				while ($row_transaksi = mysqli_fetch_array($select_transaksi)) {
				  echo '<td>'.$no++.'</td>';
				  echo '<td style="text-align: left !important;">'.$row_transaksi['nama_user'].'</td>';
				  echo '<td style="text-align: left !important;">'.$row_transaksi['nama_film'].'</td>';
				  echo '<td style="text-align: left !important;">'.$row_transaksi['waktu_transaksi'].'</td>';
				  echo '<td style="text-align: left !important;">'.$row_transaksi['quantity'].'</td>';
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
		