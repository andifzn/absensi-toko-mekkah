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

    <!-- Font Family -->
    <!-- Roboto -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    </style>

    <!-- Poppins -->
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <title>Home | Absensi Toko Mekkah</title>
</head>
<body>
    <header>
        <section class="first-header">
            <img src="../assets/logo.png" alt="">

            <div class="profile">
                <img src="../assets/user.png" alt="">
                <article class="profile-information">
                    <h1><?= $_SESSION['nama_karyawan']; ?></h1>
                    <p><?= $_SESSION['role']; ?> </p>
                </article>
            </div>
        </section>

        <nav>
            <div class="navbar-menu">
                <img src="../assets/home.png" alt="">
                <a href="">Home</a>
            </div>
            <div class="navbar-menu">
                <img src="../assets/employees.png" alt="">
                <a href="">Pegawai</a>
            </div>
            <div class="navbar-menu">
                <img src="../assets/master-data.png" alt="">
                <select name="master-data" required>
                    <option value="" disabled selected>Master Data</option>
                    <option value="jabatan">Jabatan</option>
                    <option value="Pegawai">Lokasi Presensi</option>
                </select>
            </div>
            <div class="navbar-menu">
                <img src="../assets/attendant-list.png" alt="">
                <select name="rekap-presensi" required>
                    <option value="" disabled selected>Rekap Presensi</option>
                    <option value="jabatan">Rekap Harian</option>
                    <option value="Pegawai">Rekap Bulanan</option>
                </select>
            </div>
            <div class="navbar-menu">
                <img src="../assets/absent.png" alt="">
                <a href="">Ketidakhadiran</a>
            </div>
            <div class="navbar-menu">
                <img src="../assets/logout.png" alt="">
                <a href="../home/logout.php">Logout</a>
            </div>
        </nav>

    </header>    

</body>
</html>
