<?php

$ambil = $koneksi->query("SELECT * FROM tb_service_center WHERE IdServiceCenter = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tb_service_center WHERE IdServiceCenter = '$_GET[id]'");

echo "<script> location='index.php?page=service_center'; </script>";

?>