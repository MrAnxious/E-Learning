<?php
// Konfigurasi database
$host = "localhost"; // Nama host, biasanya localhost
$user = "root"; // Username database
$password = ""; // Password database (kosong jika default)
$database = "db_akademik"; // Nama database Anda

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
