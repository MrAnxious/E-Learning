<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelajaran</title>
    <link rel="icon" type="image/png" href="https://smpn1mayong.sch.id/images/download-removebg-preview1.png">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background-color: #f4f6f9;
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

        .content h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .table-container {
            width: 100%;
            max-width: 800px;
            overflow-x: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4e73df;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Dashboard Guru</h2>
        <img src="https://static.vecteezy.com/system/resources/previews/000/439/863/non_2x/vector-users-icon.jpg" alt="Foto Profil">
        <a href="..\dashboard\guru.php">Dashboard</a>
        <a href="profile.php">Profil</a>
        <a href="jadwal-pelajaran.php">Jadwal Pelajaran</a>
        <a href="materi-pelajaran.php">Materi Pelajaran</a>
        <a href="data-siswa.php">Data Siswa</a>
        <a href="..\logout.php">Logout</a>
    </div>

    <div class="content">
        <h1>Jadwal Pelajaran</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Mata Pelajaran</th>
                        <th>Guru</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Senin</td>
                        <td>08:00 - 09:30</td>
                        <td>Matematika</td>
                        <td>Pak Budi</td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>09:00 - 10:30</td>
                        <td>IPA</td>
                        <td>Bu Siti</td>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>10:00 - 11:30</td>
                        <td>Bahasa Indonesia</td>
                        <td>Pak Joko</td>
                    </tr>
                    <!-- Tambahkan jadwal pelajaran lainnya di sini -->
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
