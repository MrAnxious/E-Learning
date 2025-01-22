<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
        <h1>Data Siswa</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ali</td>
                        <td>7A</td>
                        <td>Jl. Merdeka No. 1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Joko</td>
                        <td>7B</td>
                        <td>Jl. Raya No. 2</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Siti</td>
                        <td>8A</td>
                        <td>Jl. Suryakencana No. 3</td>
                    </tr>
                    <!-- Tambahkan data siswa lainnya di sini -->
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
