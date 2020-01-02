<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Posyandu Tulip - Tambah Data Anak</title>
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
    <div class="content mt-6">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
     
                
     <div class="card">
     <div class="card-header">
                    <strong class="card-title"></strong>
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

                </div>
                     <?php
                      $syarat=$_GET['id_anak'];
                      $data=mysql_query("SELECT pemeriksaan.id_anak, pemeriksaan.tanggal_pemeriksaan, pemeriksaan.berat_badan, pemeriksaan.tinggi_badan pemeriksaan.lingkar_kepala, pemeriksaan.perilaku FROM pemeriksaan WHERE id_anak='$syarat'");
                     
                      $no=1;
                       {
                       ?>
                      
                      <div class="card-body card-block">
                        <form action="insertdata.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <input type="hidden" class="form-control" name="id_anak" value="<?php echo $syarat ?>">
                            </div>
                          </div>
                         

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">berat badan (KG)</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="berat_badan" placeholder="Masukan berat badan" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">tinggi badan(CM)</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tinggi_badan" placeholder="Masukan tinggi badan" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lingkar Kepala (CM)</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="lingkar_kepala" placeholder="Masukan lingkar kepala" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Perilaku Anak</label></div>
                            <div class="col-12 col-md-9">

                            <?php
                              include 'koneksi.php';

                              $data=mysql_query("SELECT * FROM anak ");
                              $no=1;
                              $syarat=$_GET['id_anak'];
                              $data=mysql_query("SELECT * FROM anak WHERE id_anak='$syarat'");
                                                     
                             

                              while ($r=mysql_fetch_array($data))
                                                  
                              {
                            ?>


                            <?php
                             $tanggal_lahir = new DateTime($r['tanggal_lahir']);
                            // tanggal hari ini
                            $today = new DateTime('today');
                            // tahun
                            $y = $today->diff($tanggal_lahir)->y;
                            // bulan
                            $m = $today->diff($tanggal_lahir)->m;
                                  
                            if ($y==1) {
                               echo '<p>Pada Usia 1 Tahun : </p>
                               <input type="checkbox" name="perilaku[]" value="Berdiri dan berjalan berpegangan">Berdiri dan berjalan berpegangan<br>
                                     <input type="checkbox" name="perilaku[]" value="Memegang benda kecil">Memegang benda kecil<br>
                                     <input type="checkbox" name="perilaku[]" value="Meniru kata sederhana seperti ma..ma..pa..pa..">Meniru kata sederhana seperti ma..ma..pa..pa..<br>
                                     <input type="checkbox" name="perilaku[]" value="Mengenal anggota keluarga">Mengenal anggota keluarga<br>
                                      <input type="checkbox" name="perilaku[]" value="Takut pada orang yang belum dikenal">Takut pada orang yang belum dikenal<br>
                                       <input type="checkbox" name="perilaku[]" value="Menunjuk apa yang diinginkan">Menunjuk apa yang diinginkan<br>
                                     ';

                            } elseif ($y==2) {
                                 echo '<p>Pada Umur 2 tahun : </p>
                                     <input type="checkbox" name="perilaku[]" value="Naik tangga dan berlari">Naik tangga dan berlari<br>
                                     <input type="checkbox" name="perilaku[]" value="Mencoret coret pensil pada kertas">Mencoret coret pensil pada kertas<br>
                                     <input type="checkbox" name="perilaku[]" value="Dapat menunjuk 1 atau lebih bagian tubuhnya">Dapat menunjuk 1 atau lebih bagian tubuhnya<br>
                                      <input type="checkbox" name="perilaku[]" value="Menyebut 3 sampai 6 kata">Menyebut 3 sampai 6 kata<br>
                                      <input type="checkbox" name="perilaku[]" value="Memegang cangkir sendiri">Memegang cangkir sendiri<br>
                                      <input type="checkbox" name="perilaku[]" value="Belajar makan dan minum sendiri">Belajar makan dan minum sendiri<br>
                                     
                                     ';
                                     
                            } elseif ($y==3) {
                                 echo '<p>Pada Umur 3 tahun : </p>
                                     <input type="checkbox" name="perilaku[]" value="Mengayuh sepeda roda tiga">Mengayuh sepeda roda tiga<br>
                                     <input type="checkbox" name="perilaku[]" value="Berdiri diatas satu kaki tanpa berpegangan">Berdiri diatas satu kaki tanpa berpegangan<br>
                                     <input type="checkbox" name="perilaku[]" value="Bicara dengan baik menggunakan 2 kata">Bicara dengan baik menggunakan 2 kata<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengenal 2-4 warna">Mengenal 2-4 warna<br>
                                      <input type="checkbox" name="perilaku[]" value="Menyebut nama">Menyebut nama<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggambar garis lurus">Menggambar garis lurus<br>
                                      <input type="checkbox" name="perilaku[]" value="Bermain dengan teman">Bermain dengan teman<br>
                                      <input type="checkbox" name="perilaku[]" value="Melepas pakaiannya sendiri">Melepas pakaiannya sendiri<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengenakan baju sendiri">Mengenakan baju sendiri<br>
                                     
                                     ';

                            } elseif ($y==4) {
                                 echo '
                                     <p>Pada Usia 4 sampai 5 Tahun : </p>
                                     <input type="checkbox" name="perilaku[]" value="Melompat-lompat 1 kaki, menari dan berjalan lurus">Melompat-lompat 1 kaki, menari dan berjalan lurus<br>
                                     <input type="checkbox" name="perilaku[]" value="Menggambar orang 3 bagian (Kepala, Badan, tangan/kaki)">Menggambar orang 3 bagian (Kepala, Badan, tangan/kaki)<br>
                                     <input type="checkbox" name="perilaku[]" value="mengammbar tanda silang dan lingkaran">mengammbar tanda silang dan lingkaran<br>
                                     <input type="checkbox" name="perilaku[]" value="Menangkap bola kecil dengan kedua tangan">Menangkap bola kecil dengan kedua tangan<br>
                                      <input type="checkbox" name="perilaku[]" value="Menjawab pertanyaan dengan kata kata yang benar">Menjawab pertanyaan dengan kata kata yang benar<br>
                                       <input type="checkbox" name="perilaku[]" value="Menyebut angka, menghitung jari">Menyebut angka, menghitung jari<br>
                                       <input type="checkbox" name="perilaku[]" value="Bicaranya mudah dimengerti">Bicaranya mudah dimengerti<br>
                                       <input type="checkbox" name="perilaku[]" value="Berpakaian sendiri tandpa dibantu">Berpakaian sendiri tandpa dibantu<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengancing baju atau pakaian boneka">Mengancing baju atau pakaian boneka<br>
                                       <input type="checkbox" name="perilaku[]" value="Menggosok gigi tanpa bantuan">Menggosok gigi tanpa bantuan<br>
                                     ';
                            } elseif ($y==5) {
                                 echo '
                                     <p>Pada Usia 4 sampai 5 Tahun : </p>
                                     <input type="checkbox" name="perilaku[]" value="Melompat-lompat 1 kaki, menari dan berjalan lurus">Melompat-lompat 1 kaki, menari dan berjalan lurus<br>
                                     <input type="checkbox" name="perilaku[]" value="Menggambar orang 3 bagian (Kepala, Badan, tangan/kaki)">Menggambar orang 3 bagian (Kepala, Badan, tangan/kaki)<br>
                                     <input type="checkbox" name="perilaku[]" value="mengammbar tanda silang dan lingkaran">mengammbar tanda silang dan lingkaran<br>
                                     <input type="checkbox" name="perilaku[]" value="Menangkap bola kecil dengan kedua tangan">Menangkap bola kecil dengan kedua tangan<br>
                                      <input type="checkbox" name="perilaku[]" value="Menjawab pertanyaan dengan kata kata yang benar">Menjawab pertanyaan dengan kata kata yang benar<br>
                                       <input type="checkbox" name="perilaku[]" value="Menyebut angka, menghitung jari">Menyebut angka, menghitung jari<br>
                                       <input type="checkbox" name="perilaku[]" value="Bicaranya mudah dimengerti">Bicaranya mudah dimengerti<br>
                                       <input type="checkbox" name="perilaku[]" value="Berpakaian sendiri tandpa dibantu">Berpakaian sendiri tandpa dibantu<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengancing baju atau pakaian boneka">Mengancing baju atau pakaian boneka<br>
                                       <input type="checkbox" name="perilaku[]" value="Menggosok gigi tanpa bantuan">Menggosok gigi tanpa bantuan<br>
                                     ';


                            } elseif ($y==6) {
                                 echo '<p>Pada usia 6 Tahun : </p>
                                     <input type="checkbox" name="perilaku[]" value="Berjalan lurus">Berjalan lurus<br>
                                     <input type="checkbox" name="perilaku[]" value="Berdiri dengan 1 kaki selama 11 detik">Berdiri dengan 1 kaki selama 11 detik<br>
                                     <input type="checkbox" name="perilaku[]" value="Menangkap bola kecil dengan kedua tangan">Menangkap bola kecil dengan kedua tangan<br>
                                     <input type="checkbox" name="perilaku[]" value="Menggambar segi empat">Menggambar segi empat<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengerti arti lawan kata">Mengerti arti lawan kata<br>
                                       <input type="checkbox" name="perilaku[]" value="Menghitung angka 1-10">Menghitung angka 1-10<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengenal warna">Mengenal warna<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengikuti aturan permainan">Mengikuti aturan permainan<br>
                                       <input type="checkbox" name="perilaku[]" value="Berpakaian sendiri tanpa dibantu">Berpakaian sendiri tanpa dibantu<br>
                                      
                                     ';
                            } elseif ($m==1) {
                                 echo ' <p>Pada Umur 1 Bulan sampai 3 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Menatap ke ibu">Menatap ke ibu<br>
                                     <input type="checkbox" name="perilaku[]" value="mengeluarkan suara 0..0..">mengeluarkan suara 0..0..<br>
                                     <input type="checkbox" name="perilaku[]" value="tersenyum">tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengangkat kepala tegak ketika tengkurap">Mengangkat kepala tegak ketika tengkurap<br>
                                      <input type="checkbox" name="perilaku[]" value="tertawa">tertawa<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan kepala ke kiri dan kanan">Menggerakan kepala ke kiri dan kanan<br>
                                      <input type="checkbox" name="perilaku[]" value="Membalas tersenyum ketika diajak tersenyum">Membalas tersenyum ketika diajak tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengoceh">Mengoceh<br>
                                     ';
                            } elseif ($m==2) {
                                 echo ' <p>Pada Umur 1 Bulan sampai 3 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Menatap ke ibu">Menatap ke ibu<br>
                                     <input type="checkbox" name="perilaku[]" value="mengeluarkan suara 0..0..">mengeluarkan suara 0..0..<br>
                                     <input type="checkbox" name="perilaku[]" value="tersenyum">tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengangkat kepala tegak ketika tengkurap">Mengangkat kepala tegak ketika tengkurap<br>
                                      <input type="checkbox" name="perilaku[]" value="tertawa">tertawa<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan kepala ke kiri dan kanan">Menggerakan kepala ke kiri dan kanan<br>
                                      <input type="checkbox" name="perilaku[]" value="Membalas tersenyum ketika diajak tersenyum">Membalas tersenyum ketika diajak tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengoceh">Mengoceh<br>
                                     ';
                            } elseif ($m==3) {
                                 echo ' <p>Pada Umur 1 Bulan sampai 3 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Menatap ke ibu">Menatap ke ibu<br>
                                     <input type="checkbox" name="perilaku[]" value="mengeluarkan suara 0..0..">mengeluarkan suara 0..0..<br>
                                     <input type="checkbox" name="perilaku[]" value="tersenyum">tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengangkat kepala tegak ketika tengkurap">Mengangkat kepala tegak ketika tengkurap<br>
                                      <input type="checkbox" name="perilaku[]" value="tertawa">tertawa<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan kepala ke kiri dan kanan">Menggerakan kepala ke kiri dan kanan<br>
                                      <input type="checkbox" name="perilaku[]" value="Membalas tersenyum ketika diajak tersenyum">Membalas tersenyum ketika diajak tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengoceh">Mengoceh<br>
                                     ';

                              } elseif ($m==4) {
                                 echo ' <p>Pada Umur 4 Bulan sampai 6 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Berbalik dari telungkup ke telentang">Berbalik dari telungkup ke telentang<br>
                                     <input type="checkbox" name="perilaku[]" value="Mempertahankan posisi kepala tetap tegak">Mempertahankan posisi kepala tetap tegak<br>
                                     <input type="checkbox" name="perilaku[]" value="Meraih benda yang ada di sekitarnya">Meraih benda yang ada di sekitarnya<br>
                                      <input type="checkbox" name="perilaku[]" value="Menirukan Bunyi">Menirukan Bunyi<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengenggam Mainan">Mengenggam Mainan<br>
                                      <input type="checkbox" name="perilaku[]" value="Tersenyum ketika melihat mainan/ gambar yang menarik">Tersenyum ketika melihat mainan/ gambar yang menarik<br>
                                      
                                     ';

                              } elseif ($m==5) {
                                 echo ' <p>Pada Umur 4 Bulan sampai 6 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Berbalik dari telungkup ke telentang">Berbalik dari telungkup ke telentang<br>
                                     <input type="checkbox" name="perilaku[]" value="Mempertahankan posisi kepala tetap tegak">Mempertahankan posisi kepala tetap tegak<br>
                                     <input type="checkbox" name="perilaku[]" value="Meraih benda yang ada di sekitarnya">Meraih benda yang ada di sekitarnya<br>
                                      <input type="checkbox" name="perilaku[]" value="Menirukan Bunyi">Menirukan Bunyi<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengenggam Mainan">Mengenggam Mainan<br>
                                      <input type="checkbox" name="perilaku[]" value="Tersenyum ketika melihat mainan/ gambar yang menarik">Tersenyum ketika melihat mainan/ gambar yang menarik<br>
                                      
                                     ';

                              } elseif ($m==6) {
                                 echo ' <p>Pada Umur 4 Bulan sampai 6 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Berbalik dari telungkup ke telentang">Berbalik dari telungkup ke telentang<br>
                                     <input type="checkbox" name="perilaku[]" value="Mempertahankan posisi kepala tetap tegak">Mempertahankan posisi kepala tetap tegak<br>
                                     <input type="checkbox" name="perilaku[]" value="Meraih benda yang ada di sekitarnya">Meraih benda yang ada di sekitarnya<br>
                                      <input type="checkbox" name="perilaku[]" value="Menirukan Bunyi">Menirukan Bunyi<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengenggam Mainan">Mengenggam Mainan<br>
                                      <input type="checkbox" name="perilaku[]" value="Tersenyum ketika melihat mainan/ gambar yang menarik">Tersenyum ketika melihat mainan/ gambar yang menarik<br>
                                      
                                     ';
                                  
                             } elseif ($m==7) {
                                 echo '
                                     <input type="checkbox" name="perilaku[]" value="Merambat">Merambat<br>
                                     <input type="checkbox" name="perilaku[]" value="ma..ma..da..da..">Mengucapkan ma..ma..da..da..<br>
                                     <input type="checkbox" name="perilaku[]" value="Meraih Benda sebesar kacang">Meraih Benda sebesar kacang<br>
                                     <input type="checkbox" name="perilaku[]" value="Mencari benda/mainan yang dijatuhkan">Mencari benda/mainan yang dijatuhkan<br>
                                      <input type="checkbox" name="perilaku[]" value="Bermain tepuk tangan atau ciluk-ba">Bermain tepuk tangan atau ciluk-ba<br>
                                       <input type="checkbox" name="perilaku[]" value="Makan kue/ biskuit sendiri">Makan kue/ biskuit sendiri<br>
                                       <input type="checkbox" name="perilaku[]" value="Berdiri dan berjalan berpegangan">Berdiri dan berjalan berpegangan<br>
                                       <input type="checkbox" name="perilaku[]" value="Memegang benda kecil">Memegang benda kecil<br>
                                       <input type="checkbox" name="perilaku[]" value="Meniru kata sederhana seperti ma..ma.. pa..pa..">Meniru kata sederhana seperti ma..ma.. pa..pa..<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengenal anggota keluarga">Mengenal anggota keluarga<br>
                                        <input type="checkbox" name="perilaku[]" value="Takut pada orang yang belum dikenal">Takut pada orang yang belum dikenal<br>
                                        <input type="checkbox" name="perilaku[]" value="Menunjuk apa yang diinginkan">Menunjuk apa yang diinginkan<br>
                                     ';

                            }
                             else {
                               echo '
                                     <input type="checkbox" name="perilaku[]" value="Merambat">Merambat<br>
                                     <input type="checkbox" name="perilaku[]" value="ma..ma..da..da..">Mengucapkan ma..ma..da..da..<br>
                                     <input type="checkbox" name="perilaku[]" value="Meraih Benda sebesar kacang">Meraih Benda sebesar kacang<br>
                                     <input type="checkbox" name="perilaku[]" value="Mencari benda/mainan yang dijatuhkan">Mencari benda/mainan yang dijatuhkan<br>
                                      <input type="checkbox" name="perilaku[]" value="Bermain tepuk tangan atau ciluk-ba">Bermain tepuk tangan atau ciluk-ba<br>
                                       <input type="checkbox" name="perilaku[]" value="Makan kue/ biskuit sendiri">Makan kue/ biskuit sendiri<br>
                                       <input type="checkbox" name="perilaku[]" value="Berdiri dan berjalan berpegangan">Berdiri dan berjalan berpegangan<br>
                                       <input type="checkbox" name="perilaku[]" value="Memegang benda kecil">Memegang benda kecil<br>
                                       <input type="checkbox" name="perilaku[]" value="Meniru kata sederhana seperti ma..ma.. pa..pa..">Meniru kata sederhana seperti ma..ma.. pa..pa..<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengenal anggota keluarga">Mengenal anggota keluarga<br>
                                        <input type="checkbox" name="perilaku[]" value="Takut pada orang yang belum dikenal">Takut pada orang yang belum dikenal<br>
                                        <input type="checkbox" name="perilaku[]" value="Menunjuk apa yang diinginkan">Menunjuk apa yang diinginkan<br>
                                     ';

                             }

                            ?>
                            <?php }?>
                           
                                     <br>
                                     <br>

                                   
  
                            </div>

                          </div>

                          <button type="submit" class="btn btn-primary btn-fw">Simpan Data</button>
   </div>
 <?php } ?>
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
