<?php
include("koneksi.php");

if(isset($_GET['id_film'])){

    // buat query hapus
	$select_penayangan	= mysqli_query($koneksi, "SELECT * FROM penayangan WHERE id_film=".$_GET['id_film']);
	$num_penayangan		= mysqli_num_rows($select_penayangan);
	if($num_penayangan > 0){
	?>
			<script type="text/javascript">
			 alert("Film Gagal Dihapus!\nKarena Sudah Dilakukan Penayangan!");location.href="index.php?hal=admin-master/film/list-film";
			</script>
	<?php
	}else{
		$delete_penayangan = mysqli_query($koneksi, "DELETE FROM film WHERE id_film=".$_GET['id_film']);

		if( $delete_penayangan ){
	?>
			<script type="text/javascript">
			 alert("Film Berhasil Dihapus!");location.href="index.php?hal=admin-master/film/list-film";
			</script>
	<?php
		} else {
	?>
			<script type="text/javascript">
			 alert("Film Gagal Dihapus!");location.href="index.php?hal=admin-master/film/list-film";
			</script>
	<?php
		}

	}	
}
?>