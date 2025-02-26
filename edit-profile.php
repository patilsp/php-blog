<?php
session_start();
include 'includes/config.php';

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM users WHERE id = $user_id");
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    if (!empty($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $conn->query("UPDATE users SET username='$username', email='$email', password='$password' WHERE id=$user_id");
    } else {
        $conn->query("UPDATE users SET username='$username', email='$email' WHERE id=$user_id");
    }
    
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    
    header("Location: profile.php?success=1");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en" id="mainHtml">
<head>
    <title>PHP Blog</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="PHP Blog" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled sidebar-enabled">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-column flex-column-fluid">
            
            <!-- Header -->
            <?php include 'includes/header.php'; ?>

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-stretch container-xxl">
                
                <!-- Left Sidebar -->

                <!-- Main Content Area -->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
                        <div class="content flex-column-fluid" id="kt_content">
                            
                        <div class="container mt-5">
                            <h2>Edit Profile</h2>
                            <form action="" method="POST">
                                <div class="fv-row mb-4 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <label>Username</label>
                                    <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required class="form-control">
                                </div>

                                <div class="fv-row mb-4 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <label>Email</label>
                                    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required class="form-control">
                                </div>
                                <div class="fv-row mb-4 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">

                                    <label>New Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success mt-3">Update</button>
                            </form>
                        </div>

                        </div>
                    </div>
                

                <!-- Footer -->
              
                </div>
                <!-- Right Sidebar -->
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="fa fa-arrow-up"></i>
    </div>

    <script>
        var hostUrl = "assets/";
    </script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
</body>
</html>
