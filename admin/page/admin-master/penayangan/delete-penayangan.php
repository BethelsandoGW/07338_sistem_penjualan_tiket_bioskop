<?php
include("koneksi.php");

if(isset($_GET['id_penayangan'])){

	$delete_penayangan = mysqli_query($koneksi, "DELETE FROM penayangan WHERE id_penayangan=".$_GET['id_penayangan'])or die(mysqli_error($koneksi));

		// apakah query hapus berhasil?
		if( $delete_penayangan ){
	?>
			<script type="text/javascript">
			 alert("Penayangan Berhasil Dihapus!");location.href="index.php?hal=admin-master/penayangan/list-penayangan";
			</script>
	<?php
		} else {
	?>
			<script type="text/javascript">
			 alert("Penayangan Gagal Dihapus!");location.href="index.php?hal=admin-master/penayangan/list-penayangan";
			</script>
	<?php
		}
}
?>