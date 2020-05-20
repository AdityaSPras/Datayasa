<?php

$ambil = $koneksi->query("SELECT * FROM tb_users WHERE IdUser = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tb_users WHERE IdUser = '$_GET[id]'");

echo "<script> location='index.php?page=users'; </script>";

?>