<?php

$ambil = $koneksi->query("SELECT * FROM tb_items_category WHERE IdCategory = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tb_items_category WHERE IdCategory = '$_GET[id]'");

echo "<script> location='index.php?page=items_category'; </script>";
