<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Pelajaran</title>
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

        .upload-container {
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .upload-container form {
            display: flex;
            flex-direction: column;
        }

        .upload-container input[type="file"] {
            margin-bottom: 20px;
        }

        .upload-container button {
            background-color: #4e73df;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .upload-container button:hover {
            background-color: #3759c1;
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
        <h1>Materi Pelajaran</h1>
        <div class="upload-container">
            <form action="upload_materi.php" method="POST" enctype="multipart/form-data">
                <label for="materi-file">Pilih Materi Pelajaran (PDF, DOCX, PPT):</label>
                <input type="file" id="materi-file" name="materi-file" required>
                <button type="submit">Unggah Materi</button>
            </form>
        </div>
    </div>
</body>

</html>
