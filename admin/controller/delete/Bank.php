<?php

$ambil = $koneksi->query("SELECT * FROM tb_bank WHERE IdBank = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tb_bank WHERE IdBank = '$_GET[id]'");

echo "<script> location='index.php?page=bank'; </script>";
