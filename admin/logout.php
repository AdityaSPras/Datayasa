<?php
// Mengaktifkan Session
session_start();

// Menghapus Semua Session
session_destroy();

// Mengalihkan Halaman Sambil Mengirim Pesan Logout
echo "<script>alert('Berhasil Keluar');</script>";
echo "<script>location='login.php';</script>";
