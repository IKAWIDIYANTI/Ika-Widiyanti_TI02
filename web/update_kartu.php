<?php 
include_once("database.php");

$kode = $_POST["kode"];
$db->query("UPDATE kartu SET kode='$kode',nama='$_POST[nama]',diskon='$_POST[diskon]',iuran='$_POST[iuran]' WHERE id='$_POST[id]' ");

header("location: list_kartu.php");

?>





