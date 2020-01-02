<?php


error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Posyandu Tulip - Home</title>
<meta charset="iso-8859-1">
<link rel="icon" type="image/png" href="family1.png">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style>
.mainmenubtn {
    background-color: red;
    color: white;
    border: none;
    cursor: pointer;
    padding:20px;
    margin-top:20px;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-child {
    display: none;
    background-color: black;
    min-width: 100px;
}
.dropdown-child a {
    color: white;
    padding: 10px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
</style>
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">

      <h1></a>Posyandu Tulip</h1>
      <h2>Perumahan Alam Tirta Lestari jl. Kerinci blok E</h2>
    </div>
    
     <nav>
       <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="kader.php">Kader</a></li>
        <li><a href="anak.php">Anak</a></li>
        <li><a href="penimbangan.php">Pemeriksaan</a></li>
        <li><a href="jadwal_imunisasi.php">Jadwal Imunisasi</a></li>

        <div class="dropdown">LAPORAN
          <div class="dropdown-child">
            <a href="laporan/dataanak.php">Lap.Anak</a>
            <a href="laporanperanak.php">Lap.Data Perkembangan Anak</a>
            <a href="laporanminggu.php">Lap. perminggu</a>
          </div>
        </div>
        &nbsp&nbsp&nbsp&nbsp

        <li><a href="logout.php">Logout</a></li>   
      </ul>
    </nav>
  </header>
</div>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    <section id="shout">
     <?php 
include 'koneksi.php';

$syarat=$_GET['id_anak'];
  $tampil2=mysql_query("SELECT *  FROM anak WHERE nama_anak='$syarat'");
        $row=mysql_fetch_array($tampil2);

        
?>
<h4 style="text-align: center;">LAPORAN PENIMBANGAN PER BALITA</h4><hr><br>


  
   <div class="card-body card-block">
                        <form action="laporan/dataperbalita.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"></div>
                            
                          </div>
                         <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">nama anak</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <select  name="id_anak" class="form-control ">
                                <option value="">Nama Anak</option>
                                  <?php
                                    include "koneksi.php";
                                    $sqllomba = "SELECT * FROM anak";
                                    $querylomba = mysql_query($sqllomba);
                                    while ($data = mysql_fetch_array($querylomba)) {
                                                echo '<option value="' . $data['id_anak'] . '">' . $data['nama_anak'] . '</option>';
                                    }
                                    ?>
                              </select>
                            </div>
                          </div>
  <div class="row form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <input type="submit" class="btn btn-warning" value="Cetak">
    </div>
 
  </div>
</form>
</div>

    </section>
  </div>
</div>


<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Aplikasi Pendataan Posyandu &copy; 2019 - Nabila Carolina - D3 Sistem Informasi Universitas Pakuan </p>
  </footer>
</div>
</body>
</html>
