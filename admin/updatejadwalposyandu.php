<?php
include 'koneksi.php';
$id_jadwal_posyandu=$_POST['id_jadwal_posyandu'];
$tanggal_posyandu= $_POST['tanggal_posyandu'];
$keterangan= $_POST['keterangan'];


$s=mysql_query("UPDATE jadwal_posyandu SET tanggal_posyandu='$tanggal_posyandu', keterangan='$keterangan' where id_jadwal_posyandu='$id_jadwal_posyandu'") or die(mysql_error());{
 ?>
  <script type="text/javascript">
  alert("Data Berhasil Disimpan");
  window.location.href='jadwal_posyandu.php';
 </script>
 <?php
}


 ?>