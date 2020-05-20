<?php

$ambil = $koneksi->query("SELECT * FROM tb_supplier WHERE IdSupplier = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tb_supplier WHERE IdSupplier = '$_GET[id]'");

echo "<script> location='index.php?page=supplier'; </script>";

?>