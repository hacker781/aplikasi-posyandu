 <?php
 include 'koneksi.php';
 ?>
 
<?php
$tanggal_posyandu   = $_POST['tanggal_posyandu'];
$ket   = $_POST['ket'];

$s=mysql_query("INSERT INTO jadwal_posyandu VALUES('', '$tanggal_posyandu', '$ket')") or die(mysql_error());{
 ?>
 <script>
  alert("Data user Berhasil Disimpan");
  window.location.href='jadwal_posyandu.php';

 </script>
 <?php
}

 ?>
