<?php

if( !isset($_GET['id']) ){
    header('?hal=admin-master/penayangan/list-penayangan');
}

$select_penayangan = mysqli_query($koneksi, "SELECT * FROM penayangan");
$row_penayangan = mysqli_fetch_array($select_penayangan);

if(isset($_POST['simpan'])){

    $waktu_tayang = date("Y-m-d H:i:s",strtotime($_POST['waktu_tayang']));

    $edit_penayangan = mysqli_query($koneksi,"UPDATE penayangan SET id_studio = ".$_POST['id_studio'].", id_film = ".$_POST['id_film'].", waktu_tayang='".$waktu_tayang."' WHERE id_penayangan=".$_GET['id']);

    // apakah query update berhasil?
    if($edit_penayangan){
?>
		<script type="text/javascript">
		alert("Update Berhasil!");location.href="index.php?hal=admin-master/penayangan/list-penayangan";
		</script>
<?php
    }else{
		echo "<script>alert('Update Gagal!');location.href='?hal=admin-master/penayangan/edit-penayangan&id=".$_GET['id']."';</script>";
    }
}
?>

<style>

select {
  width: 30%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}


input[type=number]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=datetime-local] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

textarea{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

</style>

<div class="row list-jenis">
	<div class="col-sm-12">
	 <section class="panel panel-default">
	  <header class="panel-heading">EDIT PENAYANGAN</header>
	   <div class="panel-body">	
		<form action="" method="POST">
        <p>
            <label>Nama Studio </label><br />
            <select name="id_studio">
                <?php 
                    $select_studio = mysqli_query($koneksi, "SELECT * FROM studio");
                    while ($row_studio = mysqli_fetch_array($select_studio)) {
                        echo "<option value='".$row_studio['id_studio']."'>".$row_studio['tipe_studio']."</option>";
                    }
                ?>
            </select>
        </p>
		
		<p>
            <label>Nama Film </label><br />
            <select name="id_film">
                <?php 
                    $select_film = mysqli_query($koneksi, "SELECT * FROM film");
                    while ($row_film = mysqli_fetch_array($select_film)) {
                        echo "<option value='".$row_film['id_film']."'>".$row_film['nama_film']."</option>";
                    }
                ?>
            </select>
        </p>

        <p>
            <label>Jam Tayang</label><br>
            <input type="datetime-local" name="waktu_tayang" required>
        </p>
        
        <p>
            <input type="submit" class="btn btn-success" value="SIMPAN" name="simpan" />
			<a href="index.php?hal=admin-master/penayangan/list-penayangan" class="btn btn-danger">BATAL</a>
		</p>
		</form>
	   </div>
	 </section>
	</div>
</div>

