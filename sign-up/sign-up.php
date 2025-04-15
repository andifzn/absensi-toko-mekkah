<?php
require '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_karyawan = $_POST['id_karyawan'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE id_karyawan = '$id_karyawan'");
    if (mysqli_num_rows($cek) > 0) {
        echo "ID Karyawan sudah terdaftar!";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO users (id_karyawan, nama_karyawan, password, role) VALUES ('$id_karyawan', '$nama_karyawan', '$password', '$role')");
        if ($insert) {
            echo "Sign up berhasil. Silakan login.";
        } else {
            echo "Gagal menyimpan data.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Reset Style CSS -->
    <link rel="stylesheet" href="../resetStyle/reset.css">
    <!-- style css -->
    <link rel="stylesheet" href="sign-up.css?v=<?php echo time(); ?>">

    <!-- Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <title>Sign Up | Toko Mekkah</title>
</head>
<body>
    <main>
        <section>
            <form method="POST">
                <h2>Sign Up Karyawan</h2>
                <input type="text" name="nama_karyawan" placeholder="Nama Karyawan" required>
                <input type="text" name="id_karyawan" placeholder="ID Karyawan" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <select name="role" required>
                    <option value="" disabled selected>Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="pegawai">Pegawai</option>
                </select>
                <button type="submit">Daftar</button>
            </form>
            <p>Sudah punya akun? <a href="../login.php"> Login di sini</a></p> 
        </section>
    </main>
    
</body>
</html>
