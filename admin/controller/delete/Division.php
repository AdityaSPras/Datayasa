<?php

$ambil = $koneksi->query("SELECT * FROM tb_division WHERE IdDivision = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tb_division WHERE IdDivision = '$_GET[id]'");

echo "<script> location='index.php?page=division'; </script>";

?>