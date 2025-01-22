<?php
// Tambahkan pengecekan jika sesi sudah login
session_start();
if (isset($_SESSION['role'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reset Password - E-Learning SMPN 1 Mayong</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://smpn1mayong.sch.id/images/download-removebg-preview1.png">

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://smpn1mayong.sch.id/images/Gambar/gedungsmpn.jpeg') no-repeat center center;
            background-size: cover;
            font-family: 'Nunito', sans-serif;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .logo {
            width: 190px;
            margin-bottom: 20px;
        }

        h1 {
            font-weight: bold;
            margin: 10px 0;
        }

        .form-control {
            font-size: 14px;
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            width: 100%;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .btn {
            background-color: #4e73df;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            width: 100%;
            cursor: pointer;
        }

        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: rgba(0, 0, 0, 0.7);
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="https://smpn1mayong.sch.id/images/download-removebg-preview1.png" alt="Logo SMPN 1 Mayong" class="logo">
        <h2>Reset Password</h2>
        <form action="proses-reset.php" method="POST">
            <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda" required>
            <hr>
            <button type="submit" class="btn">Reset</button>
        </form>
        <div class="footer">
            &copy; <span id="year"></span> SMPN 1 Mayong. All Rights Reserved.
        </div>
    </div>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
</body>

</html>
