<?php
session_start();
require 'db.php';

$id_karyawan = $_POST['id_karyawan'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM users WHERE id_karyawan = '$id_karyawan'");
$user = mysqli_fetch_assoc($data);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['id_karyawan'] = $user['id_karyawan'];
    $_SESSION['nama_karyawan'] = $user['nama_karyawan'];
    $_SESSION['role'] = $user['role'];

    if ($user['role'] == 'admin') {
        header("Location: ../admin/admin.php");
    } else {
        header("Location: ../home/pegawai-home.php");
    }
} else {
    echo "Login gagal. Cek ID dan password.";
}

?>
