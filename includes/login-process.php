<?php
session_start();
require 'db.php';

$id_karyawan = $_POST['id_karyawan'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM users WHERE id_karyawan = '$id_karyawan'");
$user = mysqli_fetch_assoc($data);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['id_karyawan'] = $user['id_karyawan'];
    header("Location: ../home/home.php");
} else {
    echo "Login gagal. Cek ID dan password.";
}
?>
