<style>
.blue{
  background-color: #6b8fba;
}

.green{
  background-color: #4a8251;
}

.yellow{
  background-color: #CACD72;
}

.red{
  background-color: #C56262;
}

.states-info .fa{
  font-size: 60px;
}

.states-info .glyphicon{
  font-size: 50px;
}

</style>

<div class="list-jenis">
  <div class="row states-info">

        <a href="?hal=laporan/laporan-users" style="color: #fff;">
            <div class="col-md-3">
                <div class="panel blue">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title">CUSTOMERS</span>
                                <h4><?=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM user"));?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    
    <a href="?hal=admin-master/studio/list-studio" style="color: #fff;">
            <div class="col-md-3">
                <div class="panel green">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-film"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title">STUDIO</span>
                                <h4><?=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM studio"));?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    
    <a href="?hal=admin-master/penayangan/list-penayangan" style="color: #fff;">
            <div class="col-md-3">
                <div class="panel yellow">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="glyphicon glyphicon-facetime-video"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title">PENAYANGAN</span>
                                <h4><?=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM penayangan"));?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    
    <a href="?hal=admin-master/film/list-film" style="color: #fff;">
            <div class="col-md-3">
                <div class="panel red">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="glyphicon glyphicon-cd"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title">FILM</span>
                                <h4><?=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM film LEFT JOIN penayangan ON film.id_film = penayangan.id_film"));?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    
    </div>
  
  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel panel-heading" style="margin-bottom: 0px;">
          <i class="fa fa-users" aria-hidden="true"></i> New Customers
        </div>
        <div class="panel-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
            <?php
             $no = 1;
             $select_user = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user DESC LIMIT 5");
             while($row_user = mysqli_fetch_array($select_user)){
               echo "<tr>";
               echo "<td>".$no++."</td>";
               echo "<td>".$row_user['nama_user']."</td>";
               echo "</tr>";
             }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel panel-heading" style="margin-bottom: 0px;">
          <i class="glyphicon glyphicon-facetime-video"></i> Yang Sedang Tayang
        </div>
        <div class="panel-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Film</th>
                <th>Studio</th>
                <th>Waktu Tayang</th>
              </tr>
            </thead>
            <tbody>
            <?php
             $no = 1;
             $select_film = mysqli_query($koneksi, "SELECT film.*, penayangan.*, studio.* FROM film 
              INNER JOIN penayangan ON film.id_film = penayangan.id_film 
              INNER JOIN studio ON penayangan.id_studio = studio.id_studio
              ORDER BY film.id_film DESC LIMIT 5");
             while($row_film = mysqli_fetch_array($select_film)){
               echo "<tr>";
               echo "<td>".$no++."</td>";
               echo "<td>".$row_film['nama_film']."</td>";
               echo "<td>".$row_film['tipe_studio']."</td>";
               echo "<td>".$row_film['waktu_tayang']."</td>";
               echo "</tr>";
             }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>