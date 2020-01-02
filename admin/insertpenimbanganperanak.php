 <?php
 include 'koneksi.php';
 ?>
 
<?php

$tanggal_penimbangan   = $_POST['tanggal_penimbangan'];
$berat_badan  = $_POST['berat_badan'];
$tinggi_badan  = $_POST['tinggi_badan'];

$s=mysql_query("INSERT INTO penimbangan VALUES('','$tanggal_penimbangan','$berat_badan','$tinggi_badan')") or die(mysql_error());{
 ?>
 <script>
  alert("Data user Berhasil Disimpan");
  window.location.href='penimbanganperanak.php?id_anak=<?php echo $r['id_anak'];?>';

 </script>
 <?php
}

 ?>
