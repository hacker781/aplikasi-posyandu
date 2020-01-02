<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Basic 84</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
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
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1>Basic 84</h1>
      <h2>Free HTML5 Website Template</h2>
    </div>
    
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="kader.php">Kader</a></li>
        <li><a href="anak.php">Data Anak</a></li>
        <li><a href="penimbangan.php">Data Penimbangan</a></li>
        <li class="last"><a href="#">Jadwal Imunisasi</a></li>
        &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
        <li class="last"><a href="#">Laporan</a></li>
      </ul>
    </nav>
  </header>
</div>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    <section id="slider"><a href="#"><img src="" alt=""></a></section>
    <?php
include 'koneksi.php';
?>


 <div class="content mt-6">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                </div>
                <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Kader</th>
                        <th>Tanggal Penimbagan</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Lingkar Kepala</th>
                        <th>aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                      $data=mysql_query("SELECT * FROM penimbangan ORDER BY id_penimbangan");
                      $no=1;
                      while ($r=mysql_fetch_array($data)) {
                       ?>
                        <tr>
                       <td><?php echo $no++ ?></td>
                       <td><?php echo $r['nama_kader']; ?></td>
                       <td><?php echo $r['tanggal_penimbangan']; ?></td>
                       <td><?php echo $r['berat_badan']; ?></td>
                       <td><?php echo $r['tinggi_badan']; ?></td>
                       <td><?php echo $r['lingkar_kepala']; ?></td>
                        <td><a href='ubahdatapenimbangan.php?id_penimbangan=<?php echo $r['id_penimbangan'];?>'><input type="button" class="btn btn-outline-primary" value="ubah"></a></td>
                      </tr>
                       <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div> 
</div>
  </div>
</div>

<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Domain Name</a></p>
  </footer>
</div>
</body>
</html>
