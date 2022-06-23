<?php
include("koneksi.php");

if(isset($_GET['id_studio'])){

	$select_detail	= mysqli_query($koneksi, "SELECT * FROM detail_kursi WHERE id_studio=".$_GET['id_studio']);
	$num_detail		= mysqli_num_rows($select_detail);
	if($num_detail > 0){
	?>
			<script type="text/javascript">
			 alert("Studio Gagal Dihapus!\nKarena Sudah Dilakukan Pilihan Kursi!");location.href="index.php?hal=admin-master/studio/list-studio";
			</script>
	<?php
	}else{
		$delete_detail = mysqli_query($koneksi, "DELETE FROM studio WHERE id_studio=".$_GET['id_studio']);

		if($delete_detail){
	?>
			<script type="text/javascript">
			 alert("Studio Berhasil Dihapus!");location.href="index.php?hal=admin-master/studio/list-studio";
			</script>
	<?php
		} else {
	?>
			<script type="text/javascript">
			 alert("Studio Gagal Dihapus!");location.href="index.php?hal=admin-master/studio/list-studio";
			</script>
	<?php
		}

	}	
}
?>