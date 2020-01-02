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
