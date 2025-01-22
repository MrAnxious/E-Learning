<?php
session_start();
include 'koneksi.php'; // Pastikan file koneksi.php sudah benar terhubung dengan database

// Cek jika form login dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data email dan password dari form
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Gunakan prepared statement untuk menghindari SQL Injection
    $query = "SELECT username, password, role FROM users WHERE email = ? LIMIT 1";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Cek apakah ada hasil
    if (mysqli_num_rows($result) > 0) {
        // Ambil data user
        $user = mysqli_fetch_assoc($result);
        $db_password = $user['password'];
        $role = $user['role'];
        $username = $user['username'];

        // Verifikasi password dengan membandingkan teks biasa
        if ($password === $db_password) {
            // Sukses login, simpan data session
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;
            $_SESSION['email'] = $email;

            // Redirect ke dashboard sesuai dengan role
            if ($role == 'admin') {
                header("Location: dashboard\admin.php"); // Gunakan forward slash (/) sebagai separator path
            } elseif ($role == 'guru') {
                header("Location: dashboard\guru.php"); // Gunakan forward slash (/) sebagai separator path
            } else {
                header("Location: dashboard\siswa.php"); // Gunakan forward slash (/) sebagai separator path
            }
            exit();
        } else {
            // Password salah
            header("Location: login.php?error=Password salah");
            exit();
        }
    } else {
        // Email tidak ditemukan
        header("Location: login.php?error=Email tidak ditemukan");
        exit();
    }

    // Tutup koneksi
    mysqli_stmt_close($stmt);
} else {
    // Jika form login tidak dikirim
    header("Location: login.php");
    exit();
}
?>
