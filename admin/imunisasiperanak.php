<!doctype html>

<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Posyandu Tulip - Admin - Jadwal Imunisasi</title>
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
                    </div>
                </div>
            </div>
        </div>

        <?php
      include 'koneksi.php';

      $data=mysql_query("SELECT * FROM anak ");
      $no=1;
      $syarat=$_GET['id_anak'];
      $data=mysql_query("SELECT * FROM anak WHERE id_anak='$syarat'");
                             
      // Konversi tanggal ke bahasa indonesia
      function format_indo($date)
      {
          $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

          $tahun = substr($date, 0, 4);               
          $bulan = substr($date, 5, 2);
          $tgl   = substr($date, 8, 2);
          $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
          return($result);
      }

      while ($r=mysql_fetch_array($data))
                          
      {
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

                Nama Lengkap : <?php echo $r['nama_anak']; ?>
                <br>
                Tanggal Lahir : <?php echo format_indo($r['tanggal_lahir']); ?>
                <br>

                <?php
                // tanggal lahir
                $tanggal_lahir = new DateTime($r['tanggal_lahir']);
                // tanggal hari ini
                $today = new DateTime('today');
                // tahun
                $y = $today->diff($tanggal_lahir)->y;
                // bulan
                $m = $today->diff($tanggal_lahir)->m;
                // hari
                $d = $today->diff($tanggal_lahir)->d;
                echo "Umur : " . $y . " tahun " . $m . " bulan " . $d . " hari";
                ?>
<br>
<br>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                         <th>Tanggal Imunisasi</th>
                        <th>Nama Vaksin</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                     <tbody>
                     <?php 
                          $date1 = new DateTime($r['tanggal_lahir']);
                           $HB = $date1->modify("+0 days");
                              
                              
                          $date2 = new DateTime($r['tanggal_lahir']);
                          $BCG = $date2->modify("+30 days");
                              
                              
                          $date3 = new DateTime($r['tanggal_lahir']);
                          $Polio = $date3->modify("+30 days");
                              
                              
                          $date4 = new DateTime($r['tanggal_lahir']);
                          $DPT = $date4->modify("+60 days");

                          $date5 = new DateTime($r['tanggal_lahir']);
                          $Polio2 = $date5->modify("+60 days");

                          $date6 = new DateTime($r['tanggal_lahir']);
                          $DPT2 = $date6->modify("+90 days");

                          $date7 = new DateTime($r['tanggal_lahir']);
                          $Polio3 = $date7->modify("+90 days");

                          $date8 = new DateTime($r['tanggal_lahir']);
                          $DPT3 = $date8->modify("+120 days");

                          $date9 = new DateTime($r['tanggal_lahir']);
                          $Polio4 = $date9->modify("+120 days");

                          $date10 = new DateTime($r['tanggal_lahir']);
                          $IPV = $date10->modify("+120 days");

                          $date11 = new DateTime($r['tanggal_lahir']);
                          $Campak = $date11->modify("+270 days");

                         
                          $tanggal_datang= new DateTime();
                              
                          $vaksin = array ("HB-0","BCG","*Polio","*DPT","Polio 2","*DPT 2","Polio 3","*DPT 3","*Polio 4","*IPV","Campak","*Polio 5","*DPT 5","Campak 2","*DPT 6");
                         
                           
                              
                        ?>
                      <tr>
                        <td><?php echo $HB->format("d-F-Y");?></td>
                        <td><?php echo $vaksin[0];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($HB <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                       
                     
                      </tr>

                      <tr>
                        <td><?php echo $BCG->format("d-F-Y");?></td>
                        <td><?php echo $vaksin[1];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($BCG <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>

                      </tr>
                      <tr>
                        <td><?php echo $Polio->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[2];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $DPT->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[3];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($DPT <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Polio2->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[4];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio2 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $DPT2->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[5];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($DPT2 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Polio3->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[6];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio3 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $DPT3->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[7];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($DPT3 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Polio4->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[8];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio4 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $IPV->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[9];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($IPV <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Campak->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[10];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Campak <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                     
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
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
    }
?>