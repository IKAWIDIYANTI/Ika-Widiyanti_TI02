<?php 
include_once("database.php");

$tanggal = $_POST["tanggal"];
$db->query("UPDATE pembelian SET tanggal='$tanggal',nomor='$_POST[nomor]',produk_id='$_POST[produk_id]',jumlah='$_POST[jumlah]',harga='$_POST[harga]',vendor_id='$_POST[vendor_id]' WHERE id='$_POST[id]' ");

header("location: list_pembelian.php");

?>





