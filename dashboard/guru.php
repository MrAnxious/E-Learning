<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'guru') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru</title>
    <link rel="icon" type="image/png" href="https://smpn1mayong.sch.id/images/download-removebg-preview1.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            display: flex;
            height: 100vh;
            background: #f1f2f6;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            background-color: #4e73df;
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .sidebar h2 {
            font-size: 22px;
            margin: 0;
            padding-bottom: 20px;
            border-bottom: 2px solid #fff;
        }

        .sidebar img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .sidebar a {
            display: block;
            color: #fff;
            text-decoration: none;
            margin: 10px 0;
            font-size: 18px;
            padding: 8px 12px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #3759c1;
        }

        /* Content styling */
        .content {
            flex-grow: 1;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 28px;
            color: #333;
        }

        .card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    justify-content: flex;  /* Menjajarkan card ke kanan */
}

.card {
    width: 22%;  /* Lebar card */
    min-width: 180px;  /* Ukuran minimum card */
    max-width: 200px;  /* Ukuran maksimum card */
    padding: 20px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: 0.3s;
    height: 280px;  /* Menentukan tinggi card */
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.card .card-icon-large img {
    width: 50px;
    height: 50px;
    object-fit: contain;
    margin-bottom: 15px;
}

.card h5 {
    font-size: 18px;
    margin-bottom: 10px;
}

.card h2 {
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 15px;
    color: white;
}

.progress {
    height: 8px;
    background-color: #e0e0e0;
    border-radius: 5px;
    overflow: hidden;
}

.progress-bar {
    height: 100%;
    border-radius: 5px;
}

.l-bg-cherry {
    background: linear-gradient(to right, #f09, #493240);
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #4286f4, #373b44);
}

.l-bg-green-dark {
    background: linear-gradient(to right, #38ef7d, #0a504a);
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #ffba56, #a86008);
}


        .info-box {
            background-color: #f8f9fc;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-top: 30px;
        }

        .info-box img {
            width: 30px;
            height: 30px;
            margin-right: 15px;
        }

        .info-box p {
            font-size: 14px;
            color: #333;
        }

        .info-title {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Dashboard Guru</h2>
        <img src="https://static.vecteezy.com/system/resources/previews/000/439/863/non_2x/vector-users-icon.jpg" alt="Foto Profil">
        <h2><?= $_SESSION['username']; ?></h2>
        <a href="..\dashboard\guru.php">Dashboard</a>
        <a href="..\guru\profile.php">Profil</a>
        <a href="..\guru\jadwal-pelajaran.php">Jadwal Pelajaran</a>
        <a href="..\guru\materi-pelajaran.php">Materi Pelajaran</a>
        <a href="..\guru\data-siswa.php">Data Siswa</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="content">
        <div class="header">
            <h1>Selamat Datang, <?= $_SESSION['username']; ?></h1>
        </div>

        <div class="card-container">
            <!-- Card 1 -->
            <div class="card l-bg-cherry">
                <div class="card-icon-large">
                    <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/non_2x/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt="Jumlah Siswa">
                </div>
                <h5>Jumlah Siswa</h5>
                <h2>100</h2>
                <div class="progress">
                    <div class="progress-bar" style="width: 25%; background-color: #289cf5;"></div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card l-bg-blue-dark">
                <div class="card-icon-large">
                    <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/non_2x/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt="Jumlah Guru">
                </div>
                <h5>Jumlah Guru</h5>
                <h2>20</h2>
                <div class="progress">
                    <div class="progress-bar" style="width: 50%; background-color: #23bdb8;"></div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card l-bg-orange-dark">
                <div class="card-icon-large">
                    <img src="https://png.pngtree.com/png-vector/20230412/ourmid/pngtree-process-flat-icon-vector-png-image_6701344.png" alt="Kegiatan Aktif">
                </div>
                <h5>Kegiatan Aktif</h5>
                <h2>15</h2>
                <div class="progress">
                    <div class="progress-bar" style="width: 75%; background-color: #f9900e;"></div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card l-bg-green-dark">
                <div class="card-icon-large">
                    <img src="..\asset\image_2025-01-21_161453720-removebg-preview.png" alt="Materi Tersedia">
                </div>
                <h5>Materi Tersedia</h5>
                <h2>50</h2>
                <div class="progress">
                    <div class="progress-bar" style="width: 60%; background-color: #0a504a;"></div>
                </div>
            </div>
        </div>

        <!-- Information Box -->
        <div class="info-box">
            <img src="https://png.pngtree.com/png-clipart/20220901/ourmid/pngtree-3d-red-portable-megaphone-speaker-announcement-and-promotion-png-image_6133300.png" alt="Announcement Logo">
            <p><strong class="info-title">Informasi:</strong> Pastikan Anda telah mendaftar untuk mendapatkan akses ke materi e-learning SMPN 1 Mayong.</p>
        </div>
    </div>
</body>

</html>
