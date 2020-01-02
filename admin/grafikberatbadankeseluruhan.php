<?php  

include("koneksi3.php");

$query = "SELECT tanggal_pemeriksaan FROM pemeriksaan GROUP BY tanggal_pemeriksaan DESC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>  
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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
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
        <div class="row">
        
						<div class="col-md-5">
						<h3 class="panel-title">Pilih Tanggal</h3>
						</div>
                        <div class="col-md-5">
                            <select name="tanggal_pemeriksaan" class="form-control" id="tanggal_pemeriksaan">
                                <option value="">Select Tanggal</option>
                            <?php
							function format_indo($date)
                                {
                                    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                                    $tahun = substr($date, 0, 4);               
                                    $bulan = substr($date, 5, 2);
                                    $tgl   = substr($date, 8, 2);
                                    $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
                                    return($result);
                                }
                            foreach($result as $row)
                            {
                                echo '<option value="'.$row["tanggal_pemeriksaan"].'">'.format_indo($row["tanggal_pemeriksaan"]).'</option>';
                            }
                            ?>
                            </select>
                        </div>
                    </div>
        </div>

        <div id="chart_area" style="width: 1000px; height: 620px;"></div>
      
            </div>
        </div> 
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback();

function load_monthwise_data(tanggal_pemeriksaan, title)
{
    var temp_title = title + ' '+tanggal_pemeriksaan+'';
    $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{tanggal_pemeriksaan:tanggal_pemeriksaan},
        dataType:"JSON",
        success:function(data)
        {
            drawMonthwiseChart(data, temp_title);
        }
    });
}

function drawMonthwiseChart(pemeriksaan, chart_main_title)
{
    var jsonData = pemeriksaan;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'id_anak');
    data.addColumn('number', 'berat_badan');
    $.each(jsonData, function(i, jsonData){
        var id_anak = jsonData.id_anak;
        var berat_badan = parseFloat($.trim(jsonData.berat_badan));
        data.addRows([[id_anak, berat_badan]]);
    });
    var options = {
        title:chart_main_title,
        hAxis: {
            title: "id_anak"
        },
        vAxis: {
            title: 'berat_badan'
        }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
    chart.draw(data, options);
}

</script>

<script>
    
$(document).ready(function(){

    $('#tanggal_pemeriksaan').change(function(){
        var tanggal_pemeriksaan = $(this).val();
        if(tanggal_pemeriksaan != '')
        {
            load_monthwise_data(tanggal_pemeriksaan, 'Tanggal');
        }
    });

});

</script>
