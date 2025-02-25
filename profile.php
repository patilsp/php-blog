<?php
    include 'includes/config.php';
    $user_id = $_SESSION['user_id'];
    $result = $conn->query("SELECT * FROM users WHERE id = $user_id");
    $user = $result->fetch_assoc();
?>



<!DOCTYPE html>
<html lang="en" id="mainHtml">
<head>
    <title>My Profile</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/style.bundle.css" />
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled sidebar-enabled">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-column flex-column-fluid">
            
            <!-- Header -->
            <?php include 'includes/header.php'; ?>

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-stretch container-xxl">
                
                <!-- Left Sidebar -->
                <?php include 'includes/leftSidebar.php'; ?>

                <!-- Main Content Area -->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <div class="content flex-column-fluid mt-5" id="kt_content">


                    <div class="card mb-5 mb-xl-10">
                        <div class="card-body pt-9 pb-0">
                            <div class="d-flex flex-wrap flex-sm-nowrap">
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="assets/media/avatars/1.jpg" alt="image" />
                                        <div class="position-absolute translate-middle top-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?php echo htmlspecialchars($user['username']); ?></a>
                                                <a href="#">
                                                    <i class="ki-duotone ki-verify fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                </a>
                                            </div>

                                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                                    <i class="ki-duotone ki-profile-circle fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Developer
                                                </a>
                                                <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                                    <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> Kolhapur, Pune
                                                </a>
                                                <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                                    <i class="ki-duotone ki-sms fs-4"><span class="path1"></span><span class="path2"></span></i> <?php echo htmlspecialchars($user['email']); ?>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex my-4">
                                            <a href="#" class="btn btn-sm btn-warning me-2" id="kt_user_follow_button">
                                                <i class="ki-duotone ki-check fs-3 d-none"></i>

                                                <span class="indicator-label"> Follow</span>

                                                <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                                            </a>

                                            <a href="edit-profile.php" class="btn btn-sm btn-primary me-3">Edit Profile</a>

                                            
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap flex-stack">
                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                            <div class="d-flex flex-wrap">
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1">$4,500</div>
                                                    </div>

                                                    <div class="fw-semibold fs-6 text-gray-500">Earnings</div>
                                                </div>

                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1">80</div>
                                                    </div>

                                                    <div class="fw-semibold fs-6 text-gray-500">Answers</div>
                                                </div>

                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">%60</div>
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


                       
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Scroll to Top Button -->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="fa fa-arrow-up"></i>
    </div>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
</body>
</html>
