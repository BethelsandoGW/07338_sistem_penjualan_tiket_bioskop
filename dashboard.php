<?php
include('koneksi.php');
?>
<style>
.panel-group {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    min-width: 40%;
    border-radius: 5px;
}
</style>
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-info">
      <strong>List Film Yang Sedang Tayang Hari Ini. <span class="pull-right"><?=date('l, d F, Y');?></span></strong>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php 
            $no = 1;
            $result = mysqli_query($koneksi, "SELECT film.*, penayangan.* FROM penayangan 
                INNER JOIN film ON penayangan.id_film = film.id_film GROUP BY film.id_film");
            while($row = mysqli_fetch_array($result)){
        ?>
        <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading" style="font-size: 24px;"><b><?=$row['nama_film'];?>  <span class="pull-right">#<?=$no++?></span></b></div>
            <div class="panel-body">
              <p> <b>Sinopsis :</b> <?=$row['sinopsis'];?>  </p>
              <p> <small class="text-muted">Genre : <?=$row['genre'];?></small>  </p>

              <div class="row">
                  <div class="col-md-12">
                      <a href="?hal=transaksi/transaksi&id_film=<?=$row['id_film']?>" class="btn btn-info btn-lg pull-right">
                        <i class="glyphicon glyphicon-shopping-cart"></i> Pesan Tiket
                      </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
            }
        ?>
    </div>
</div>