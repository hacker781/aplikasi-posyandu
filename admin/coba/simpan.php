<?php
include "koneksi2.php";

$nope =$_REQUEST['textfield'];
$pesan=$_REQUEST['textfield2'];

if ($nope=="" || $pesan=="" ){
?> <script type="text/javascript"> alert("Data tidak boleh kosong"); document.location.href='index2.php';</script> <?php
}

else {
$sql = mysql_query ("insert into outbox (DestinationNumber, TextDecoded, CreatorID) values ('$nope','$pesan','Gammu')");
?> <script type="text/javascript"> alert("Apakah pesan akan dikirim??"); document.location.href='index2.php' ;</script> <?php
}
?>