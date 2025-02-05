<?php
session_start();
include 'koneksi.php'; // Pastikan file koneksi.php sudah benar terhubung dengan database

// Cek jika form login dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data email dan password dari form
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Array tabel yang digunakan untuk login
    $tables = ['admin', 'guru', 'siswa'];
    $user = null;
    $role = '';

    // Looping untuk mencari pengguna di masing-masing tabel
    foreach ($tables as $table) {
        $query = "SELECT nama, password FROM $table WHERE email = ? LIMIT 1";
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $role = $table; // Role diambil dari nama tabel
            break; // Keluar dari loop jika ditemukan
        }
        
        mysqli_stmt_close($stmt);
    }

    if ($user) {
        // Verifikasi password dengan teks biasa (sebaiknya gunakan password_hash di database)
        if ($password === $user['password']) {
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['role'] = $role;
            $_SESSION['email'] = $email;

            // Redirect ke dashboard sesuai dengan role
            header("Location: dashboard/$role.php");
            exit();
        } else {
            header("Location: login.php?error=Password salah");
            exit();
        }
    } else {
        header("Location: login.php?error=Email tidak ditemukan");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
