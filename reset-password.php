<?php
session_start();
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Check if email exists
    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($result->num_rows > 0) {
        $token = bin2hex(random_bytes(50)); // Generate secure token
        $conn->query("UPDATE users SET reset_token='$token' WHERE email='$email'");

        $reset_link = "http://yourwebsite.com/new-password.php?token=$token";
        
        // Send Email (For example, using PHP Mail)
        $subject = "Reset Your Password";
        $message = "Click the link below to reset your password: \n$reset_link";
        $headers = "From: no-reply@yourwebsite.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "<script>alert('Password reset link sent to your email.'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('Failed to send email. Try again later.');</script>";
        }
    } else {
        echo "<script>alert('Email not found!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="assets/css/style.bundle.css">
    <style>
         .login-bg {
            background-image: url("assets/media/images/login-bg.jpg");
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat; 
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .logo-container img {
            width: 50px;
            height: auto;
            display: block;
            margin: 0 auto; 
        }
        .reset-container {
            width: 400px;
            margin: auto;
            padding: 20px;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
</head>
<body class="login-bg">
    <div class="reset-container">
        <h2>Reset Password</h2>
        <p>Enter your email and we’ll send you a link to reset your password.</p>
        <form action="" method="POST">
            <input type="email" name="email" class="form-control mb-5" placeholder="Enter your email" required>
            <button type="submit" class="btn btn-primary">Send Reset Link</button>
        </form>
        <br>
        <a href="login.php" class="text-black bg-white p-2 m-2 rounded-1"> <- Back to Login</a>
    </div>
</body>
</html>
