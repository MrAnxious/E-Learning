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
            color: #fff;
            position: relative;
        }

        /* Overlay Effect */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Overlay gelap */
            z-index: 0;
        }

        .card {
            position: relative;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.85);
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            width: 180px;
            margin-bottom: 20px;
            animation: zoomIn 1s ease-out;
        }

        h2 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .form-control {
            font-size: 14px;
            padding: 12px 15px;
            border-radius: 30px;
            border: 1px solid #ddd;
            width: 100%;
            margin-bottom: 15px;
            box-sizing: border-box;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #4e73df;
            outline: none;
            box-shadow: 0 0 10px rgba(78, 115, 223, 0.5);
        }

        .btn {
            background: linear-gradient(90deg, #4e73df, #1cc88a);
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            padding: 12px 20px;
            width: 100%;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn:hover {
            background: linear-gradient(90deg, #1cc88a, #4e73df);
            transform: translateY(-2px);
        }

        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: rgba(0, 0, 0, 0.7);
        }

        .footer span {
            color: #4e73df;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="https://smpn1mayong.sch.id/images/download-removebg-preview1.png" alt="Logo SMPN 1 Mayong" class="logo">
        <h2>Reset Password</h2>
        <form action="proses-reset.php" method="POST">
            <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda" required>
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
