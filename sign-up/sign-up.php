<?php
require '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_karyawan = $_POST['id_karyawan'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE id_karyawan = '$id_karyawan'");
    if (mysqli_num_rows($cek) > 0) {
        echo "ID Karyawan sudah terdaftar!";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO users (id_karyawan, password) VALUES ('$id_karyawan', '$password')");
        if ($insert) {
            echo "Sign up berhasil. Silakan login.";
        } else {
            echo "Gagal menyimpan data.";
        }
    }
}
?>

<form method="POST">
    <h2>Sign Up Karyawan</h2>
    <input type="text" name="id_karyawan" placeholder="ID Karyawan" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Daftar</button>
</form>
<a href="../login.php">Sudah punya akun? Login di sini</a>
