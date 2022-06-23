<?php
if(isset($_GET['id_studio'])){
    if(isset($_GET['id_kursi'])){
        $konfirmasi_kursi = mysqli_query($koneksi, "UPDATE detail_kursi SET status=0 WHERE id_kursi=".$_GET['id_kursi']." AND id_studio=".$_GET['id_studio']);

        if ( $konfirmasi_kursi ) {
            echo "<script>alert('Kursi Berhasil Dinonaktifkan!');location.href='index.php?hal=admin-master/kursi/list-kursi';</script>";
        }else{
            echo "<script>alert('Kursi Gagal Dinonaktifkan!');location.href='index.php?hal=admin-master/kursi/list-kursi';</script>";
        }
    }
    else{
        $konfirmasi_kursi = mysqli_query($koneksi, "UPDATE detail_kursi SET status=0 WHERE id_studio=".$_GET['id_studio']);

        if ( $konfirmasi_kursi ) {
            echo "<script>alert('Kursi Berhasil Dinonaktifkan!');location.href='index.php?hal=admin-master/kursi/list-kursi';</script>";
        }else{
            echo "<script>alert('Kursi Gagal Dinonaktifkan!');location.href='index.php?hal=admin-master/kursi/list-kursi';</script>";
        }
    }
}
?>