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
        <li><a href="#">Data Penimbangan</a></li>
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
    <div class="card">
                      <?php
include 'koneksi.php';
 ?>

  <?php
    $id_anak=$_GET['id_anak'];
    $data=mysql_query("SELECT * from anak WHERE id_anak='$id_anak'");
    while ($r=mysql_fetch_array($data)) {
     ?>
                      <div class="card-body card-block">
                        <form action="updatedataanak.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3">
                                <input type="hidden" class="form-control" name="id_anak" value="<?php echo $r['id_anak']; ?>">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text" class="form-control" name="nama"  value="<?php echo $r['nama']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-9"><input type="text" class="form-control" name="jenis_kelamin"  value="<?php echo $r['jenis_kelamin']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="text" class="form-control" name="tempat_lahir"  value="<?php echo $r['tempat_lahir']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="date" class="form-control" name="tanggal_lahir"  value="<?php echo $r['tanggal_lahir']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Ayah</label></div>
                            <div class="col-12 col-md-9"><input type="text" class="form-control" name="nama_ayah"  value="<?php echo $r['nama_ayah']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Ibu</label></div>
                            <div class="col-12 col-md-9"><input type="text" class="form-control" name="nama_ibu"  value="<?php echo $r['nama_ibu']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><input type="text" class="form-control" name="alamat"  value="<?php echo $r['alamat']; ?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomer Telephone</label></div>
                            <div class="col-12 col-md-9"><input type="text" class="form-control" name="no_telp"  value="<?php echo $r['no_telp']; ?>"></div>
                          </div>
                          <button type="submit" class="btn btn-primary btn-fw">Simpan Data</button>
                          </form>
                               <?php
    }
    ?>
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
