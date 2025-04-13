<?php
session_start();
if (!isset($_SESSION['id_karyawan'])) {
    header("Location: ../login.php");
    exit;
}
?>
<h1>Halo, <?= $_SESSION['id_karyawan']; ?>! 👋</h1>
<p>Selamat datang di sistem absensi Toko Mekkah.</p>
<a href="../logout.php">Logout</a>
