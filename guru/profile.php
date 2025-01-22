<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Guru</title>
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

        .profile-card {
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .profile-card h2 {
            margin-bottom: 20px;
        }

        .profile-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-card input[type="file"] {
            margin-bottom: 20px;
        }

        .profile-card label {
            display: block;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .profile-card input[type="text"],
        .profile-card input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .profile-card button {
            background-color: #4e73df;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .profile-card button:hover {
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
        <div class="profile-card">
            <h2>Profil Guru</h2>

            <!-- Foto Profil -->
            <div style="text-align: center;">
                <img id="profile-image" src="https://static.vecteezy.com/system/resources/previews/000/439/863/non_2x/vector-users-icon.jpg" alt="Foto Profil">
                <input type="file" id="profile-image-input" accept="image/*" onchange="changeProfileImage()">
            </div>

            <!-- Form Profil -->
            <form action="update_profile.php" method="POST">
                <label for="username">Nama Pengguna</label>
                <input type="text" id="username" name="username" value="Nama Guru" required>

                <label for="password">Kata Sandi Baru</label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi baru">

                <label for="confirm-password">Konfirmasi Kata Sandi</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Konfirmasi kata sandi baru">

                <button type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </div>

    <script>
        // Fungsi untuk mengganti foto profil
        function changeProfileImage() {
            const fileInput = document.getElementById('profile-image-input');
            const profileImage = document.getElementById('profile-image');

            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    profileImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>
