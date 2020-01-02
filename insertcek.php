 <?php
 include 'koneksi.php';
 ?>
 
<?php

$perilaku  = $_POST['perilaku'];


$s=mysql_query("INSERT INTO pemeriksaan(id_pemeriksaan, perilaku) VALUES('','$perilaku')") or die(mysql_error());{
 ?>
 <script>
  alert("Data user Berhasil Disimpan");
  window.location.href='imunisasiperanak.php?id_anak=<?php echo $id_anak ?>';

 </script>
 <?php
}

 ?>

