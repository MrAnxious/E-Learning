<?php
// Pengecekan jika email tidak valid atau tidak ada dalam database
session_start();

// Menghubungkan ke database
require 'koneksi.php'; // Ganti dengan file koneksi Anda

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Cek apakah email ada dalam database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        // Buat token reset dan waktu kadaluarsa
        $token = bin2hex(random_bytes(16));
        $expires = date("U") + 3600; // Token berlaku selama 1 jam

        // Simpan token ke database
        $stmt = $pdo->prepare("UPDATE users SET reset_token = ?, reset_expires = ? WHERE email = ?");
        $stmt->execute([$token, $expires, $email]);

        // Kirim email dengan instruksi reset
        $resetLink = "http://localhost/reset-password.php?token=$token"; // Ganti dengan URL Anda
        $subject = "Instruksi Reset Password - E-Learning SMPN 1 Mayong";
        $message = "Halo,\n\nKlik link berikut untuk mereset password Anda:\n$resetLink\n\nJika Anda tidak meminta reset password, abaikan email ini.";

        // Kirim email
        if (mail($email, $subject, $message)) {
            echo "Instruksi reset password telah dikirim ke email Anda.";
        } else {
            echo "Gagal mengirim email. Coba lagi.";
        }
    } else {
        echo "Email tidak terdaftar.";
    }
}
?>
