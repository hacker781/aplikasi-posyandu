 <?php
 include 'koneksi.php';
 ?>
 
<?php
$syarat = $_POST['id_Anak'];
$tanggal_pemeriksaan   = $_POST['tanggal_pemeriksaan'];
$berat_badan  = $_POST['berat_badan'];
$tinggi_badan   = $_POST['tinggi_badan'];

$s=mysql_query("INSERT INTO pemeriksaan VALUES('','$syarat','$tanggal_pemeriksaan','$berat_badan','$tinggi_badan')") or die(mysql_error());{
 ?>
 <script>
  alert("Data user Berhasil Disimpan");
  window.location.href='penimbanganperanak.php';

 </script>
 <?php
}

 ?>
