 <?php
 include 'koneksi.php';
 ?>
 
<?php
$nama_kader   = $_POST['nama_kader'];
$username   = $_POST['username'];
$password  = $_POST['password'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat  = $_POST['alamat'];
$no_telp  = $_POST['no_telp'];
$hak_akses  = $_POST['hak_akses'];

$s=mysql_query("INSERT INTO kader VALUES('', '$nama_kader','$username','$password','$jenis_kelamin','$alamat','$no_telp', '$hak_akses')") or die(mysql_error());{
 ?>
 <script>
  alert("Data user Berhasil Disimpan");
  window.location.href='admin.php';

 </script>
 <?php
}

 ?>
