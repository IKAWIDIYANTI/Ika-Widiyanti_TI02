<?php 
include_once("database.php");

$tanggal = $_POST["tanggal"];
$db->query("INSERT INTO pembelian VALUES('','$tanggal','$_POST[nomor]','$_POST[produk_id]','$_POST[jumlah]', '$_POST[harga]', '$_POST[vendor_id]')");
header("location: list_pembelian.php");
?>



