<?php
include 'koneksi.php';
$id_pemeriksaan=$_POST['id_pemeriksaan'];
$syarat=$_POST['id_anak'];
$tanggal_pemeriksaan = $_POST['tanggal_pemeriksaan'];
$berat_badan   = $_POST['berat_badan'];
$tinggi_badan  = $_POST['tinggi_badan'];
$lingkar_kepala = $_POST['lingkar_kepala'];
$value = (count($_POST['perilaku']) > 0) ? implode('-', $_POST['perilaku']) : ""; 


$s=mysql_query("UPDATE  pemeriksaan SET  id_anak='$syarat', tanggal_pemeriksaan='$tanggal_pemeriksaan', berat_badan='$berat_badan', tinggi_badan='$tinggi_badan', lingkar_kepala='$lingkar_kepala', perilaku='$value' where id_pemeriksaan='$id_pemeriksaan'") or die(mysql_error());{
 ?>
  <script type="text/javascript">
  alert("Data Berhasil Disimpan");
  window.location.href='penimbanganperanak.php?id_anak=<?php echo $syarat ?>';
 </script>
 <?php
}


 ?>