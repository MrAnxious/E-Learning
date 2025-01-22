<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
    <link rel="icon" type="image/png" href="https://smpn1mayong.sch.id/images/download-removebg-preview1.png">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #4e73df;
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            margin: 0 0 20px;
        }

        .sidebar img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 10px 0;
        }

        .sidebar a {
            display: block;
            color: #fff;
            text-decoration: none;
            margin: 15px 0;
            font-size: 18px;
        }

        .sidebar a:hover {
            background-color: #3759c1;
            padding-left: 10px;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            width: 100%;
            max-width: 900px;
        }

        .card {
            flex: 1 1 calc(45% - 10px);
            min-width: 150px;
            max-width: 200px;
            text-align: center;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #fff;
        }

        .card .card-title {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .card .card-icon-large {
            text-align: center;
            margin: 0 auto;
        }

        .card .card-icon-large .icon-img {
            width: 50px;
            height: 50px;
            object-fit: contain;
            margin-bottom: 10px;
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
            background: linear-gradient(to right, #493240, #f09) !important;
            color: #fff;
        }

        .l-bg-blue-dark {
            background: linear-gradient(to right, #373b44, #4286f4) !important;
            color: #fff;
        }

        .l-bg-green-dark {
            background: linear-gradient(to right, #0a504a, #38ef7d) !important;
            color: #fff;
        }

        .l-bg-orange-dark {
            background: linear-gradient(to right, #a86008, #ffba56) !important;
            color: #fff;
        }

        .info-box {
            background-color: #f8f9fc;
            border: 1px solid #ddd;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
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

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                text-align: center;
                padding: 10px;
            }

            .sidebar a {
                font-size: 16px;
            }

            .content {
                padding: 10px;
            }

            .card {
                flex: 1 1 100%;
                max-width: 100%;
            }

            .card-container {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Dashboard Siswa</h2>
        <img src="https://static.vecteezy.com/system/resources/previews/000/439/863/non_2x/vector-users-icon.jpg" alt="Foto Profil">
        <div class="username"> Nama Siswa </div>
        <a href="dashboard-siswa.php">Dashboard</a>
        <a href="profile-siswa.php">Profil</a>
        <a href="jadwal-pelajaran-siswa.php">Jadwal Pelajaran</a>
        <a href="materi-pelajaran-siswa.php">Materi Pelajaran</a>
        <a href="nilai.php">Nilai</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="content">
        <h1>Selamat Datang, Siswa!</h1>
        <div class="card-container">
            <!-- Card 1 -->
            <div class="card l-bg-cherry">
                <div class="card-icon-large">
                    <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/non_2x/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt="Tugas Terselesaikan" class="icon-img">
                </div>
                <h5 class="card-title">Tugas Terselesaikan</h5>
                <h2>10</h2>
                <div class="progress">
                    <div class="progress-bar" style="width: 40%; background-color: #f09;"></div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card l-bg-blue-dark">
                <div class="card-icon-large">
                    <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/non_2x/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt="Kehadiran" class="icon-img">
                </div>
                <h5 class="card-title">Kehadiran</h5>
                <h2>90%</h2>
                <div class="progress">
                    <div class="progress-bar" style="width: 90%; background-color: #4286f4;"></div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card l-bg-orange-dark">
                <div class="card-icon-large">
                    <img src="asset\image_2025-01-21_161453720-removebg-preview.png" alt="Tugas" class="icon-img">
                </div>
                <h5 class="card-title">Tugas Tersedia</h5>
                <h2>2</h2>
                <div class="progress">
                    <div class="progress-bar" style="width: 75%; background-color: #ffba56;"></div>
                </div>
            </div>
        </div>
        <hr>
        <div class="info-box">
            <img src="https://png.pngtree.com/png-clipart/20220901/ourmid/pngtree-3d-red-portable-megaphone-speaker-announcement-and-promotion-png-image_6133300.png" alt="Announcement Logo">
            <p><strong class="info-title">Informasi:</strong> Jangan lupa untuk menyelesaikan tugas mingguan sebelum batas waktu.</p>
        </div>
    </div>
</body>

</html>
