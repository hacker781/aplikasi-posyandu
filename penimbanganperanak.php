

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Posyandu Tulip - Penimbangan</title>
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

$syarat=$_GET['id_anak'];
 $data=mysql_query("SELECT * FROM anak WHERE id_anak='$syarat'");
                      
                      while ($r=mysql_fetch_array($data)) {
?>


 
&nbsp  &nbsp<a href="tambahdata.php?id_anak=<?php echo $r['id_anak'];?>""><input type="submit" class="btn btn-primary btn-fw" value="Tambah Data"></a>
&nbsp  &nbsp<a href="grafik.php?id_anak=<?php echo $r['id_anak'];?>""><input type="submit" class="btn btn-primary btn-fw" value="Grafik Berat Badan"></a>
&nbsp  &nbsp<a href="grafiktinggi.php?id_anak=<?php echo $r['id_anak'];?>""><input type="submit" class="btn btn-primary btn-fw" value="Grafik Tinggi Badan"></a>
&nbsp  &nbsp<a href="grafiklingkarkepala.php?id_anak=<?php echo $r['id_anak'];?>""><input type="submit" class="btn btn-primary btn-fw" value="Grafik Lingkar Kepala"></a>
<?php }?>
<br>
<br>


 <div class="content mt-6">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                </div>
                <?php
                  include 'koneksi.php';

                  $data=mysql_query("SELECT * FROM anak ");
                  $no=1;
                  $syarat=$_GET['id_anak'];
                  $data=mysql_query("SELECT * FROM anak WHERE id_anak='$syarat'");
                                         
                  // Konversi tanggal ke bahasa indonesia

                  while ($r=mysql_fetch_array($data))
                                      
                  {
                ?>
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
<?php }?>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Penimbangan</th>
                        <th>Berat Badan (KG)</th>
                        <th>Tinggi Badan (CM)</th>
                        <th>Lingkar Kepala</th>
                        <th>Perilaku</th>
                        <th>aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                     <?php

                      $data=mysql_query("SELECT pemeriksaan.id_anak, pemeriksaan.tanggal_pemeriksaan, pemeriksaan.berat_badan, pemeriksaan.tinggi_badan, pemeriksaan.lingkar_kepala, pemeriksaan.perilaku FROM pemeriksaan INNER join anak on anak.id_anak = pemeriksaan.id_anak ");
                     
                      $no=1;
                      
                      $syarat=$_GET['id_anak'];
                      $data=mysql_query("SELECT * FROM pemeriksaan WHERE id_anak='$syarat'");

                      function format_indo($date)
                        {
                            $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                            $tahun = substr($date, 0, 4);               
                            $bulan = substr($date, 5, 2);
                            $tgl   = substr($date, 8, 2);
                            $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
                            return($result);
                        }

                      while ($r=mysql_fetch_array($data)) {
                       ?>
                       
                       
                        <tr>
                       <td><?php echo $no++ ?></td>
                       <td><?php echo format_indo ($r['tanggal_pemeriksaan']); ?></td>
                       <td><?php echo $r['berat_badan']; ?></td>
                       <td><?php echo $r['tinggi_badan']; ?></td>
                       <td><?php echo $r['lingkar_kepala']; ?></td>
                       <td><?php echo $r['perilaku']; ?></td>
                        <td><a href='ubahpenimbanganperanak.php?id_anak=<?php echo $r['id_anak'];?>?id_pemeriksaan=<?php echo $r['id_pemeriksaan'];?>'><input type="button" class="btn btn-outline-primary" value="ubah"></a></td>
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
    <p class="fl_left">Aplikasi Pendataan Posyandu &copy; 2019 - Nabila Carolina - D3 Sistem Informasi Universitas Pakuan </p>
  </footer>
</div>
</body>
</html>
