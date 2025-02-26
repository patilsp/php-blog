
<?php
session_start();
include 'includes/config.php';

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get the current user's details
$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM users WHERE id = $user_id");
$user = $result->fetch_assoc();

// Handle profile update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Handle Profile Picture Upload
    if (!empty($_FILES['profile_picture']['name'])) {
        $target_dir = "uploads/";
        $imageFileType = strtolower(pathinfo($_FILES["profile_picture"]["name"], PATHINFO_EXTENSION));
        $target_file = $target_dir . uniqid() . '.' . $imageFileType;

        // Allow only certain file formats
        if (in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                // Update profile picture path in database
                $conn->query("UPDATE users SET profile_picture='$target_file' WHERE id=$user_id");
            } else {
                echo "<script>alert('Error uploading file.');</script>";
            }
        } else {
            echo "<script>alert('Only JPG, JPEG, PNG & GIF files are allowed.');</script>";
        }
    }

    // Check if password is changed
    if (!empty($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $conn->query("UPDATE users SET username='$username', email='$email', password='$password' WHERE id=$user_id");
    } else {
        $conn->query("UPDATE users SET username='$username', email='$email' WHERE id=$user_id");
    }

    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    header("Location: profile.php");
    exit();    
}

?>


<!DOCTYPE html>
<html lang="en" id="mainHtml">
    <head>
        <title>Brain QA</title>
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
                    <!-- Main Content Area -->
                    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                        <div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
                            <div class="content flex-column-fluid" id="kt_content">
                                <div class="card mb-5 mb-xl-10">
                                    <div class="card-body pt-9 pb-0">
                                        <div class="d-flex flex-wrap flex-sm-nowrap">
                                            <div class="me-7 mb-4">
                                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                     <?php
                                                            $profile_image = !empty($user['profile_picture']) ? '' . $user['profile_picture'] : 'assets/media/avatars/default.png';
                                                       
                                                        ?>
                                                        <img src="<?php echo $profile_image; ?>" class="rounded-circle" width="100" height="100" alt="Profile Picture"/>


                                                    <div class="position-absolute translate-middle top-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                                </div>
                                            </div>

                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?php echo htmlspecialchars($user['username']); ?></a>
                                                            <a href="#">
                                                                <i class="fa fa-verify fs-1 text-primary"></i>
                                                            </a>
                                                        </div>

                                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                                                <i class="fa fa-profile-circle fs-4 me-1"><span class="path3"></span></i> Developer
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                                                <i class="fa fa-geolocation fs-4 me-1"></i> Kolhapur, Pune
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                                                <i class="fa fa-sms fs-4"></i>
                                                                <?php echo htmlspecialchars($user['email']); ?>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex my-4">
                                                        <a href="#" class="btn btn-sm btn-warning me-2" id="kt_user_follow_button">
                                                            <i class="fa fa-check fs-3 d-none"></i>

                                                            <span class="indicator-label"> Follow</span>

                                                            <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-wrap flex-stack">
                                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="fa fa-arrow-up fs-3 text-success me-2"></i>
                                                                    <div class="fs-2 fw-bold counted" >$4,500</div>
                                                                </div>

                                                                <div class="fw-semibold fs-6 text-gray-500">Earnings</div>
                                                            </div>

                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="fa fa-arrow-down fs-3 text-danger me-2"></i>
                                                                    <div class="fs-2 fw-bold counted" >80</div>
                                                                </div>

                                                                <div class="fw-semibold fs-6 text-gray-500">Answers</div>
                                                            </div>

                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="fa fa-arrow-up fs-3 text-success me-2"></i>
                                                                    <div class="fs-2 fw-bold counted" >%60</div>
                                                                </div>

                                                                <div class="fw-semibold fs-6 text-gray-500">Success Rate</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                            <span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
                                                            <span class="fw-bold fs-6">50%</span>
                                                        </div>

                                                        <div class="h-5px mx-3 w-100 bg-light mb-3">
                                                            <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    <div class="card-header border-0">
                                        <div class="card-title">
                                            <h2>Profile</h2>
                                        </div>
                                    </div>

                                    <div class="card-body pt-0 pb-5">
                                        <div class="mt-5">
                                        <?php if (isset($_GET['success'])): ?>
                                            <div id="successMessage" class="alert alert-success">
                                                Profile updated successfully!
                                            </div>
                                        <?php endif; ?>


                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-dashed gy-5">
                                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                                        <tr>
                                                            <td>Profile Picture</td>
                                                             <td>
                                                                <div class="d-flex align-items-center">                                                                   
                                                        
                                                                    <input type="file" class="form-control" name="profile_picture" accept="image/*" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Username</td>
                                                            <td><input type="text" class="form-control" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td><input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>New Password (Leave blank to keep current password)</td>
                                                            <td><input type="password" class="form-control" name="password" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="d-flex justify-content-end align-items-center mt-12">
                                                <a href="index.php" class="btn btn-light me-5">Cancel</a>
                                                <button type="submit" class="btn btn-primary">
                                                    <span class="indicator-label">Save</span>
                                                    <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                                                </button>
                                            </div>
                                        </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
