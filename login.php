<?php
session_start();
$error = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem E-Learning SMPN 1 Mayong</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://smpn1mayong.sch.id/images/download-removebg-preview1.png">

    <!-- Font Awesome for Eye Icon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        /* General styling */
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://smpn1mayong.sch.id/images/Gambar/gedungsmpn.jpeg') no-repeat center center;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }

        /* Card styling */
        .card {
            background-color: rgba(0, 0, 0, 0.7);
            width: 100%;
            max-width: 400px;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            text-align: center;
            animation: fadeInUp 1s ease-out;
            backdrop-filter: blur(5px);
        }

        /* Logo styling with animation */
        .logo {
            width: 180px;
            margin-bottom: 20px;
            animation: zoomIn 1s ease-out;
        }

        /* Header styling */
        h2 {
            font-weight: 600;
            font-size: 24px;
            margin: 10px 0;
            animation: fadeInUp 1.2s ease-out;
        }

        /* Form input styling */
        .form-control {
            font-size: 16px;
            padding: 12px;
            border-radius: 8px;
            border: none;
            width: 100%;
            margin-bottom: 15px;
            box-sizing: border-box;
            background-color: #f1f1f1;
            color: #333;
            transition: all 0.3s ease;
        }

        /* Focus effect for form inputs */
        .form-control:focus {
            border: 2px solid #4e73df;
            outline: none;
            box-shadow: 0 0 8px rgba(78, 115, 223, 0.6);
        }

        /* Button styling */
        .btn {
            background-color: #4e73df;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            padding: 14px 20px;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Hover effect for button */
        .btn:hover {
            background-color: #3759c1;
            transform: translateY(-3px);
        }

        /* Password visibility icon position */
        .password-container {
            position: relative;
        }

        .password-container span {
            position: absolute;
            right: 12px;
            top: 12px;
            cursor: pointer;
            z-index: 10;
        }

        /* Styling for the eye icon */
        .fa-eye, .fa-eye-slash {
            font-size: 20px;
        }

        /* Reset link styling */
        .reset-link {
            color: #ddd;
            font-size: 14px;
            text-decoration: none;
        }

        .reset-link:hover {
            color: #4e73df;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #bbb;
        }

        /* Animations */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            0% {
                transform: scale(0.7);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="https://smpn1mayong.sch.id/images/download-removebg-preview1.png" alt="Logo SMPN 1 Mayong" class="logo">
        <h2>E-LEARNING</h2>
        <h2>SMP NEGERI 1 MAYONG</h2>
        
        <!-- Form login -->
        <form class="user" method="POST" action="proses-login.php">
            <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda..." required>
            <div class="password-container">
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password..." required>
                <span onclick="togglePassword()">
                    <i id="toggleIcon" class="fas fa-eye"></i>
                </span>
            </div>
            <button type="submit" class="btn">Login</button>
            <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
        </form>

        <!-- Password Reset Link -->
        <hr>
        <a href="reset-password.php" class="reset-link">Lupa Password?</a>

        <!-- Footer -->
        <div class="footer">
            &copy; <span id="year"></span> SMPN 1 Mayong. All Rights Reserved.
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Set the current year in footer
        document.getElementById("year").textContent = new Date().getFullYear();

        // Toggle password visibility
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const toggleIcon = document.getElementById("toggleIcon");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
