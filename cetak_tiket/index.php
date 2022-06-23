<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Cetak Tiket</title>

    <!-- Bootstrap cdn 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom font montseraat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

    <!-- Custom style invoice1.css -->
    <link rel="stylesheet" type="text/css" href="invoice1.css">
    <style type="text/css"></style>
</head>
<body>
<?php 

$no_tiket = $_GET['no_tiket'];

$selectAllDataTiket = mysqli_query($koneksi, "SELECT 
    studio.tipe_studio, tiket.no_tiket, film.nama_film, penayangan.waktu_tayang, kursi.nama_kursi
    FROM detail_tiket 
    INNER JOIN tiket ON detail_tiket.no_tiket = tiket.no_tiket
    INNER JOIN kursi ON detail_tiket.id_kursi = kursi.id_kursi
    INNER JOIN studio ON detail_tiket.id_studio = studio.id_studio
    INNER JOIN film ON tiket.id_film = film.id_film
    INNER JOIN penayangan ON studio.id_studio = penayangan.id_studio AND film.id_film = penayangan.id_film 
    WHERE tiket.no_tiket = $no_tiket
    ");
?>
    <section class="back">
        <div class="container">
            <?php 
            while($row = mysqli_fetch_array($selectAllDataTiket)){
            ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="invoice-wrapper">
                        <div class="invoice-bottom" style="background-color: #FFFFFF;">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2 class="title"></h2>
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="invoice-bottom-left">
                                        <h2 style="margin: 0px;"><?=$row['tipe_studio']?>.</h2>
                                        <h4 style="margin: 0px;">Nomor Tiket : <?=$row['no_tiket']?></h4>
                                    </div>
                                </div>
                                <div class="col-md-offset-1 col-md-8 col-sm-9">
                                    <div class="invoice-bottom-right">
                                        <p style="text-transform: uppercase;font-size: 22px;"><b><?=$row['nama_film']?></b></p>
                                        <table style="width: 100%;">
                                            <tr>
                                                <th>Date</th>
                                                <td><?=date('Y-m-d', strtotime($row['waktu_tayang']));?></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Time</th>
                                                <td><?=date('H:i:s', strtotime($row['waktu_tayang']));?></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Kursi</th>
                                                <td><?=$row['nama_kursi']?></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
        <?php 
        }
        ?>
    </section>
    

    <!-- jquery slim version 3.2.1 minified -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
<script type="text/javascript">
    window.print();
</script>