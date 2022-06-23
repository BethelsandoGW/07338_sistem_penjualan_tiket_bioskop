<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/jquery-ui.css">
<link rel="stylesheet" href="../../css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<link rel="stylesheet" type="text/css" href="../../css/responsive.css">
<link rel="stylesheet" href="../../datatables/dataTables.bootstrap.css"/>
<style type="text/css">
.thumbnail {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
transition: 0.3s;
min-width: 40%;
border-radius: 5px;
}

.thumbnail-description {
min-height: 40px;
}

.thumbnail:hover {
cursor: pointer;
box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 1);
}
</style>
<script src="../../jquery/jquery-3.3.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
<?php
date_default_timezone_set("Asia/Jakarta");
include("admin-sidebar.php");
include("admin-navbar.php");
?>

<section id="content-wrapper">
        <?php 
			if (isset($_GET['hal']) && strlen($_GET['hal']) > 0) {
                $hal = str_replace(".", "/", $_GET['hal']) . ".php";
            } else {
                $hal = "dashboard.php";
            }
            if (file_exists($hal)) {
                include($hal);
            } else {
                include("dashboard.php");
            }
        ?>
</section>
</div>

<script src="../../datatables/jquery.dataTables.js"></script>
<script src="../../datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript">
$(function(){
$("#sidebar-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
</body>
</html>