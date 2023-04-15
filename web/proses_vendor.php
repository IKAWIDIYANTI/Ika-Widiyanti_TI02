<?php 
include_once("database.php");

$nomor = $_POST["nomor"];
$db->query("INSERT INTO vendor VALUES('','$nomor','$_POST[nama]','$_POST[kota]','$_POST[kontak]')");
header("location: list_vendor.php");
?>



