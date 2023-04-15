<?php 
include_once("database.php");

$kode = $_POST["kode"];
$db->query("INSERT INTO kartu VALUES('','$kode','$_POST[nama]','$_POST[diskon]','$_POST[iuran]')");
header("location: list_kartu.php");
?>



