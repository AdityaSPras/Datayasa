<?php

$ambil = $koneksi->query("SELECT * FROM tb_service WHERE IdService = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tb_service WHERE IdService = '$_GET[id]'");

echo "<script> location='index.php?page=service'; </script>";
