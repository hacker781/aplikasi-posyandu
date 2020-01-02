 <?php
 include 'koneksi.php';
 ?>
 
<?php

$syarat = $_POST['id_anak'];
$tanggal_imunisasi   = $_POST['tanggal_imunisasi'];

$s=mysql_query("INSERT INTO penimbangan VALUES('','$syarat','$tanggal_imunisasi')") or die(mysql_error());{
 ?>
 <script>
  alert("Data user Berhasil Disimpan");
  window.location.href='imunisasiperanak.php';

 </script>
 <?php
}

 ?>
