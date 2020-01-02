<?php
include 'koneksi.php';
 ?>
<?php
$id_jadwal_posyandu =$_GET['id_jadwal_posyandu'];
$db=mysql_query("DELETE FROM jadwal_posyandu WHERE id_jadwal_posyandu='$id_jadwal_posyandu'") or die(mysql_error());
{?>
<script type="text/javascript">
 alert("Anda Yakin ??");
 window.location.href="jadwal_posyandu.php";
</script>

<?php } ?>