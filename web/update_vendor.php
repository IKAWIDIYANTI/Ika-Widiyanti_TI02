<?php 
include_once("database.php");

$nomor = $_POST["nomor"];
$db->query("UPDATE vendor SET nomor='$nomor',nama='$_POST[nama]',kota='$_POST[kota]',kontak='$_POST[kontak]' WHERE id='$_POST[id]' ");

header("location: list_vendor.php");

?>





