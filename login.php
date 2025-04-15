<?php
session_start();
if (isset($_SESSION['id_karyawan'])) {
    if ($_SESSION['role'] == 'admin') {
        header("Location: admin/admin.php");
    } else {
        header("Location: home/home.php");
    }
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Reset Css -->
    <link rel="stylesheet" href="resetStyle/reset.css">

    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">

    <!-- Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <title>Login Menu | Toko Mekkah</title>
</head>
<body>
    <main>
        <section>
            <div class="greetings">
                <h1>Selamat Datang di Toko Mekkah!</h1>
                <p>Silakan login untuk mulai mencatat kehadiran.</p>
            </div>
            <form action="includes/login-process.php" method="POST">
                <div>
                    <input type="text" id="username" name="id_karyawan" placeholder="Masukkan ID Karyawan" required />
                </div>

                <div>
                    <input type="password" id="password" name="password" placeholder="Password" required />
                </div>

                <button type="submit">Sign In</button>
            </form>
            <p style="margin-top:3rem;">Belum Punya akun? <a href="sign-up/sign-up.php">Daftar di sini</a></p>
        </section>
    </main>

    <script src="login.js"></script>
</body>
</html>