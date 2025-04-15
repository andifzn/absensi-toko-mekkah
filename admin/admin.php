<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: ../home/home.php"); // redirect kalau bukan admin
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Reset Style CSS -->
    <link rel="stylesheet" href="../resetStyle/reset.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="admin.css">

    <title>Home | Absensi Toko Mekkah</title>
</head>
<body>
    
</body>
</html>

<h1>Halo, <?= $_SESSION['id_karyawan']; ?>! 👋</h1>
<p>role : <?= $_SESSION['role']; ?> </p>
<a href="../home/logout.php">Logout</a>