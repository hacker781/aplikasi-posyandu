<!doctype html>

<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Posyandu Tulip - Admin - Home</title>
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
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
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
                        
                    </div>
                </div>
            </div>

            <div class="content mt-6">
                <div class="animated fadeIn">
                    <div class="row">
                      <div class="col-md-12">
                       

        <script src="Chart.js/Chart.bundle.js"></script>

        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>

        <div class="container">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tanggal</label>
                </div>
                <div class="col-12 col-md-9">
                    <select  name="tanggal_pemeriksaan" class="form-control ">
                        <option value="">Pilih Tanggal</option>
                            <?php
                                include "koneksi.php";
                                $sql = "SELECT * FROM pemeriksaan GROUP BY tanggal_pemeriksaan";
                                $query = mysql_query($sql);

                                function format_indo($date)
                                {
                                    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                                    $tahun = substr($date, 0, 4);               
                                    $bulan = substr($date, 5, 2);
                                    $tgl   = substr($date, 8, 2);
                                    $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
                                    return($result);
                                }


                                while ($data = mysql_fetch_array($query)) {
                                    echo '<option value="' . $data['tanggal_pemeriksaan'] . '">' . format_indo($data['tanggal_pemeriksaan']) . '</option>';
                                }
                            ?>
                    </select>
                </div>
            </div>
             <?php
                            $koneksi     = mysqli_connect("localhost", "root", "", "posyandu_ta");

                            $tanggal_pemeriksaan = mysqli_query($koneksi, "SELECT id_anak,nama_anak,tanggal_pemeriksaan FROM pemeriksaan INNER JOIN anak USING(id_anak) WHERE tanggal_pemeriksaan='2019-04-10'");
                            $berat_badan = mysqli_query($koneksi, "SELECT berat_badan FROM pemeriksaan WHERE tanggal_pemeriksaan='2019-04-10'");
                        ?>
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php while ($b = mysqli_fetch_array($tanggal_pemeriksaan)) { echo '"' . $b['nama_anak'] . '",';}?>],
                    datasets: [{
                            label: 'Berat Badan Keseluruhan',
                            data: [<?php while ($p = mysqli_fetch_array($berat_badan)) { echo '"' . $p['berat_badan'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
        
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

