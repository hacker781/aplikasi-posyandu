 <?php
 include 'koneksi.php';
 ?>
 
<?php
$nama   = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$nama_ayah  = $_POST['nama_ayah'];
$nama_ibu  = $_POST['nama_ibu'];
$alamat  = $_POST['alamat'];
$no_telp  = $_POST['no_telp'];

$s=mysql_query("INSERT INTO anak VALUES('', '$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$nama_ayah','$nama_ibu','$alamat','$no_telp')") or die(mysql_error());{
 ?>
 <script>
  alert("Data user Berhasil Disimpan");
  window.location.href='anak.php';

 </script>
 <?php
}

 ?>
