 <?php
 //koneksi
   
  $host = "localhost";
  $uname = "root";
  $pswd = "";
  $nama_db = "posyandu_ta";

  $koneksi = mysql_connect($host,$uname,$pswd) or 
  die ("gagal terhubung ke server MYSQL");

  mysql_select_db($nama_db, $koneksi) or die("gagal memilih database!");
 ?>

<!doctype html>

<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Posyandu Tulip - Admin - Tambah Data</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="family1.png">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="family.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

           <div id="main-menu" class="main-menu collapse navbar-collapse">
                 <ul class="nav navbar-nav">

                    <li>
                        <a href="home.php"> <i class="menu-icon fa fa-dashboard"></i>Home</a>
                    </li>

                    <h3 class="menu-title">User</h3><!-- /.menu-title -->
                    <li>
                        <a href="admin.php"> <i class="menu-icon ti-user"></i>Admin</a>
                    </li>
                    <li>
                        <a href="kader.php"> <i class="menu-icon ti-id-badge"></i>Kader</a>
                    </li>

                    <h3 class="menu-title">Data Posyandu</h3><!-- /.menu-title -->
                    <li>
                        <a href="anak.php"> <i class="menu-icon ti-reddit"></i>Data Anak</a>
                    </li>
                    <li>
                        <a href="penimbangan.php"> <i class="menu-icon ti-anchor"></i>Data Pemeriksaan</a>
                    </li>
                    

                     <li>
                        <a href="jadwal_imunisasi.php"> <i class="menu-icon ti-anchor"></i>Jadwal Imunisasi</a>
                    </li>
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="laporan/dataanak.php">Lap. Data Anak</a>
                            </li>
                            <li>
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="laporanperanak.php">Lap. Data Perkembangan Anak</a>
                            </li>
                            <li>
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="laporanminggu.php">Lap. Minggu</a>
                            </li>
                           
                           
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>SMS Gateway</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="index2.php">Kirim SMS</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- nav -->
        </nav>
    </aside>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                     <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                        <div class="header-left">
                            <h3>Posyandu Tulip</h3>
                                <div class="form-inline">
                                    <form class="search-form">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                    </form>
                                </div>
                        </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/girl.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data</h1>
                    </div>
                </div>
            </div>
        </div>


 <div class="content mt-6">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
                              <div class="col-lg-12">
                    <div class="card">
                      
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"></div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_kader" placeholder="Masukan Nama" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="username" placeholder="Masukan Username" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="password" placeholder="Masukan Password" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-9">
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" checked>Laki-Laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" placeholder="Masukan Alamat" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomer Telephone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="no_telp" placeholder="Masukan Nomer Telephone" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hak Akses</label></div>
                            <div class="col-12 col-md-9">
                            <input type="radio" name="hak_akses" value="1" checked>Admin
                            <input type="radio" name="hak_akses" value="2">Kader
                            </div>
                          </div>
                          <button type="submit" name="simpan">Simpan Data</button>
        </div>
    </div> 
</div>

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

       <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>

<?php
//proses
    if(isset($_POST['simpan'])) {
    $nama_kader=$_POST['nama_kader'];
    $username=$_POST['username'];
    $password=$_POST['password'];


    // Cek input kosong
    if(empty($nama_kader)){
        echo "<script>window.alert('nama belum diisi')
        window.location='tambahdatakader.php'</script>";
        break;
    }
    if(empty($username)){
        echo "<script>window.alert('username belum diisi')
        window.location='tambahdatakader.php'</script>";
        break;
    }
      
    // Kode cek username hanya boleh huruf a-z dan A-Z
    if(!preg_match("/^[a-zA-Z]*$/",$username)){
        echo "<script>window.alert('Hanya huruf yang diijinkan, dan tidak boleh menggunakan spasi')
        window.location='tambahdatakader.php'</script>";
        break;   
    }

    // Cek minimal karakter password (minimal 8 digit)
    if(strlen($password) <= 8){
        echo "<script>window.alert('password minimal 8 digit')
        window.location='tambahdatakader.php'</script>";
        break;
    }


   
   
//script validasi data
    $cek=mysql_num_rows(mysql_query("SELECT * FROM kader WHERE nama_kader='$nama_kader' or username='$username'"));

    if ($cek > 0){
    echo "<script>window.alert('nama atau username yang anda masukan sudah ada')
    window.location='tambahdatakader.php'</script>";
    }

    else {
      mysql_query("INSERT INTO kader VALUES('', '$nama_kader','$username','$password','$jenis_kelamin','$alamat','$no_telp', '$hak_akses')") or die(mysql_error());{

    echo "<script>window.alert('DATA SUDAH DISIMPAN')
    window.location='kader.php'</script>";}
    }

    

    
}
    ?>