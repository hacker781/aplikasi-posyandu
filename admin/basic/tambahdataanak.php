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
                      
                      <div class="card-body card-block">
                        <form action="insertdataanak.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"></div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Masukan Nama" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tempat_lahir" placeholder="Masukan Tempat Lahir" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Ayah</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_ayah" placeholder="Masukan Nama Ayah" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Ibu</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_ibu" placeholder="Masukan Nama ibu" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" placeholder="Masukan Alamat" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomer Telephone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="no_telp" placeholder="Masukan Nomer Telephone" class="form-control"></div>
                          </div>
                          <button type="submit" class="btn btn-primary btn-fw">Simpan Data</button>
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
