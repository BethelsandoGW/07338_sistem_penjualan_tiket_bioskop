<?php

	$id_film = $_GET['id_film'];
	$selectDataFilm1 = mysqli_query($koneksi, "SELECT film.*,studio.* FROM penayangan 
											INNER JOIN film ON penayangan.id_film = film.id_film 
											INNER JOIN studio ON penayangan.id_studio = studio.id_studio
											WHERE film.id_film=".$id_film);
	$judul = mysqli_fetch_array($selectDataFilm1);
	$selectDataFilm2 = mysqli_query($koneksi, "SELECT film.*,studio.*, penayangan.* FROM penayangan 
											INNER JOIN film ON penayangan.id_film = film.id_film 
											INNER JOIN studio ON penayangan.id_studio = studio.id_studio
											WHERE film.id_film=".$id_film);
?>
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-info">
      <strong>List Studio Yang Sedang Menayangkan <?=$judul['nama_film']?> Hari Ini. <span class="pull-right"><?=date('l, d F, Y');?></span></strong>
    </div>
  </div>
</div>

<div class="row">
<?php 
while ($row_film = mysqli_fetch_array($selectDataFilm2)) {
	$selectCountKursi = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as totKursi, (SELECT COUNT(*) as totActive FROM detail_kursi WHERE id_studio=".$row_film['id_studio']." AND status=1) as totActive FROM detail_kursi WHERE id_studio=".$row_film['id_studio']));
?>
  <div class="col-md-3">
    <div class="row space-16">&nbsp;</div>
    <div class="row">
      <div class="col-sm-12">
        <div class="thumbnail">
    	<form action="?hal=transaksi/pilih_kursi" method="POST">
    		<input type="hidden" name="id_film" value="<?=$id_film?>">
    		<input type="hidden" name="id_studio" value="<?=$row_film['id_studio']?>">
    		<input type="hidden" name="proses" value="">
        <div class="caption text-center" onclick="this.parentNode.submit();">
      </form>
            <h4 id="thumbnail-label"><?=$row_film['tipe_studio']?></h4>
            <p><i class="glyphicon glyphicon-facetime-video light-red lighter bigger-120"></i>&nbsp;Studio <?=$row_film['no_studio']?></p>
            <p><i class="glyphicon glyphicon-calendar light-red lighter bigger-120"></i>&nbsp;<?=date("Y-m-d", strtotime($row_film['waktu_tayang']))?></p>
            <p><i class="glyphicon glyphicon-time light-red lighter bigger-120"></i>&nbsp;<?=date("H:i:s", strtotime($row_film['waktu_tayang']))?></p>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <li><i class="glyphicon glyphicon-bed"></i>&nbsp;<?=$selectCountKursi['totKursi'];?> Total Kursi</li>
              <li></li>
              <li><i class="glyphicon glyphicon-ok lighter"></i>&nbsp;<?=$selectCountKursi['totActive'];?> Kursi Tersedia</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php 
}
?>
</div>