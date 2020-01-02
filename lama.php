<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Posyandu Tulip - Jadwal Imunisasi</title>
<meta charset="iso-8859-1">
<link rel="icon" type="image/png" href="1.png">
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
      <h1>Posyandu Tulip</h1>
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
    <section id="slider"><a href="#"><img src="" alt=""></a></section>
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

               
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Imunisasi</th>
                        <th>Nama Vaksin</th>
                        <th>Tanggal Datang</th>  
                      </tr>
                    </thead>
                    <tbody>


                    <?php
                      $vaksin=array("HB-0","BCG","*Polio","*DPT-HB-Hib 1","*Polio 2","*DPT-HB-Hib 2","Polio 3","*DPT-HB-Hib 3","*Polio 4","*IPV", "Campak");
                          foreach($vaksin as $v)
                          { 
                    ?>
                     
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td>
                        <?php 
                          $date1 = new DateTime($r['tanggal_lahir']);
                           $HB = $date1->modify("+0 days");
                              echo $HB->format("d-m-Y");
                             
                              echo "<br>";
                          $date2 = new DateTime($r['tanggal_lahir']);
                          $BCG = $date2->modify("+30 days");
                              echo $BCG->format("d-m-Y");
                              echo "<br>";
                          $date3 = new DateTime($r['tanggal_lahir']);
                          $Polio = $date3->modify("+30 days");
                              echo $Polio->format("d-m-Y");
                              echo "<br>";
                          $date4 = new DateTime($r['tanggal_lahir']);
                          $BCG = $date4->modify("+30 days");
                              echo $BCG->format("d-m-Y");
                              echo "<br>";
                        ?>  
                        </td>
                        <td>
                        <?php echo $v?>
                          
                        </td>

                        
                       

                        <td><?php  $data=mysql_query("SELECT penimbangan.tanggal_penimbangan, penimbangan.berat_badan, penimbangan.tinggi_badan, anak.id_anak FROM penimbangan INNER join anak on anak.id_anak = penimbangan.id_anak ");
                     
                      $no=1;
                      
                      $syarat=$_GET['id_anak'];
                      $data=mysql_query("SELECT * FROM penimbangan WHERE id_anak='$syarat'");
                      while ($r=mysql_fetch_array($data)) { echo $r['tanggal_penimbangan']; echo "<br>";}?></td>
                        
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
</div>

<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Aplikasi Pendataan Posyandu &copy; 2019 - Nabila Carolina - D3 Sistem Informasi Universitas Pakuan </p>
  </footer>
</div>
</body>
</html>
<?php
                      }
                      ?>