<?php
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!'); window.location='login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />

</head>

    <body id="kt_body" class="bg-bs-light auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat login-block">
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-column flex-column-fluid flex-lg-row">
                <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                    <div class="d-flex flex-center flex-lg-start flex-column">
                        <a href="/index.html" class="mb-7">
                            <img alt="Logo" src="assets/media/logos/favicon.png" class="h-15px"  />
                        </a>

                        <h2 class="text-white fw-normal m-0">
                            Branding tools designed for your business
                        </h2>
                    </div>
                </div>

                <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-10 p-lg-10">
                    <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                        <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-2">
                            <form
                                class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"                               
                                id="kt_sign_up_form"                                
                                action="" method="POST"
                            >
                                <div class="text-center mb-11">
                                    <h1 class="text-gray-900 fw-bolder mb-3">
                                        Sign Up
                                    </h1>

                                    <div class="text-gray-500 fw-semibold fs-6">
                                        Your Social Campaigns
                                    </div>
                                </div>

                                <div class="row g-3 mb-9">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                            <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />
                                            Sign in with Google
                                        </a>
                                    </div>

                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                            <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3" />
                                            Sign in with Apple
                                        </a>
                                    </div>
                                </div>

                                <div class="separator separator-content my-14"><span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span></div>

                                <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <input type="text" placeholder="User Name" name="username" autocomplete="off" class="form-control bg-transparent"/>

                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>

                                <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent"/>

                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>

                                <div class="fv-row mb-8 fv-plugins-icon-container">
                                    <input type="text" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />

                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>

                                <div class="fv-row mb-8 fv-plugins-icon-container">
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1"> I Accept the <a href="#" class="ms-1 link-primary">Terms</a> </span>
                                    </label>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>

                                <div class="d-grid mb-5">
                                    <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                        <span class="indicator-label"> Sign up</span>

                                        <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                                    </button>
                                </div>

                                <div class="text-gray-500 text-center fw-semibold fs-6">
                                    Already have an Account?

                                    <a href="login.php" class="link-primary fw-semibold">
                                        Sign in
                                    </a>
                                </div>
                            </form>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
