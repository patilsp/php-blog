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
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
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
                    <div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
                    <div class="content flex-column-fluid" id="kt_content">
                        <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
                            <div class="page-title d-flex flex-column py-1">
                                <h1 class="d-flex align-items-center my-1">
                                    <span class="text-dark fs-1"> All Questions </span>

                                    <small class="text-muted fs-6 fw-semibold ms-1"> (6,299) </small>
                                </h1>
                            </div>  

                            <div class="d-flex align-items-center py-1">
                                <a href="ask-question.php" class="btn btn-flex btn-sm btn-primary border-0 fs-6 h-40px" id="kt_toolbar_primary_button"> Ask Question </a>
                            </div>
                        </div>

                        <div class="post" id="kt_post">
                            <div class="mb-10">
                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <a href="../demo5/apps/devs/question.html" class="fs-2 text-gray-900 text-hover-primary me-1"> How to use Metronic with Django Framework ? </a>

                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="New question" data-bs-original-title="New question" data-kt-initialized="1">
                                                <i class="bi-duotone bi-information-5 text-primary fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            </span>
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="User replied" data-bs-original-title="User replied" data-kt-initialized="1">
                                                <i class="bi-duotone bi-sms text-danger fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        I’ve been doing some ajax request, to populate a inside drawer, the content of that drawer has a sub menu, that you are using in list and all card toolbar.
                                    </div>

                                    <div class="d-flex flex-stack flex-wrap">
                                        <div class="d-flex align-items-center py-1">
                                            <div class="symbol symbol-35px me-2">
                                                <div class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">
                                                    J
                                                </div>
                                            </div>

                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">James Hunt</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">24 minutes ago</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center py-1">
                                            <a href="../demo5/apps/devs/question.html#answers" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                16 Answers
                                            </a>

                                            <a href="../demo5/apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2"> Metronic </a>

                                            <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-original-title="Upvote this question" data-kt-initialized="1">
                                                23 <i class="bi-duotone bi-black-right fs-3ms-2 me-0 fs-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator separator-dashed border-gray-300 my-8"></div>

                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <a href="../demo5/apps/devs/question.html" class="fs-2 text-gray-900 text-hover-primary me-1"> When to expect new version of Laravel ? </a>

                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="In-process" data-bs-original-title="In-process" data-kt-initialized="1">
                                                <i class="bi-duotone bi-information-5 text-warning fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        When approx. is the next update for the Laravel version planned? Waiting for the CRUD, 2nd factor etc. features before starting my project. Also can we expect the Laravel + Vue version in the next update ?
                                    </div>

                                    <div class="d-flex flex-stack flex-wrap">
                                        <div class="d-flex align-items-center py-1">
                                            <div class="symbol symbol-35px me-2">
                                                <img src="assets/media/avatars/3.jpg" alt="user" />
                                            </div>

                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Sandra Piquet</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">1 day ago</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center py-1">
                                            <a href="../demo5/apps/devs/question.html#answers" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                2 Answers
                                            </a>

                                            <a href="../demo5/apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2"> Pre-sale </a>

                                            <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-original-title="Upvote this question" data-kt-initialized="1">
                                                4 <i class="bi-duotone bi-black-right fs-3ms-2 me-0 fs-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator separator-dashed border-gray-300 my-8"></div>

                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <a href="../demo5/apps/devs/question.html" class="fs-2 text-gray-900 text-hover-primary me-1"> Could not get Demo 7 working </a>

                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="In-process" data-bs-original-title="In-process" data-kt-initialized="1">
                                                <i class="bi-duotone bi-information-5 text-warning fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        could not get demo7 working from latest metronic version. Had a lot of issues installing, I had to downgrade my npm to 6.14.4 as someone else recommended here in the comments, this goot it to compile but when I ran
                                        it, the browser showed errors TypeErr..
                                    </div>

                                    <div class="d-flex flex-stack flex-wrap">
                                        <div class="d-flex align-items-center py-1">
                                            <div class="symbol symbol-35px me-2">
                                                <div class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">
                                                    N
                                                </div>
                                            </div>

                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Niko Roseberg</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">2 days ago</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center py-1">
                                            <a href="../demo5/apps/devs/question.html#answers" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                4 Answers
                                            </a>

                                            <a href="../demo5/apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2"> Angular </a>

                                            <a href="#" class="btn btn-sm btn-flex btn-light btn-icon" data-bs-toggle="tooltip" data-bs-dismiss="click" aria-label="Upvote this question" data-bs-original-title="Upvote this question" data-kt-initialized="1">
                                                <i class="bi-duotone bi-black-right fs-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator separator-dashed border-gray-300 my-8"></div>

                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <a href="../demo5/apps/devs/question.html" class="fs-2 text-gray-900 text-hover-primary me-1"> I want to get refund </a>

                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Resolved" data-bs-original-title="Resolved" data-kt-initialized="1">
                                                <i class="bi-duotone bi-check-circle text-success fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        Your Metronic theme is so good but the reactjs version is typescript only. The description did not write any warn about it. Since I only know javascript, I can not do anything with your theme. I want to refund.
                                    </div>

                                    <div class="d-flex flex-stack flex-wrap">
                                        <div class="d-flex align-items-center py-1">
                                            <div class="symbol symbol-35px me-2">
                                                <img src="assets/media/avatars/300-23.jpg" alt="user" />
                                            </div>

                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Alex Bold</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">1 day ago</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center py-1">
                                            <a href="../demo5/apps/devs/question.html#answers" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                22 Answers
                                            </a>

                                            <a href="../demo5/apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2"> React </a>
                                            <a href="../demo5/apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2"> Demo 1 </a>

                                            <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-original-title="Upvote this question" data-kt-initialized="1">
                                                11 <i class="bi-duotone bi-black-right fs-3ms-2 me-0 fs-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator separator-dashed border-gray-300 my-8"></div>

                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <a href="../demo5/apps/devs/question.html" class="fs-2 text-gray-900 text-hover-primary me-1"> How to integrate Metronic with Blazor Server Side ? </a>

                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="In-process" data-bs-original-title="In-process" data-kt-initialized="1">
                                                <i class="bi-duotone bi-check-circle text-success fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        could not get demo7 working from latest metronic version. Had a lot of issues installing, I had to downgrade my npm to 6.14.4 as someone else recommended here in the comments, this goot it to compile but when I ran
                                        it, the browser showed errors TypeErr..
                                    </div>

                                    <div class="d-flex flex-stack flex-wrap">
                                        <div class="d-flex align-items-center py-1">
                                            <div class="symbol symbol-35px me-2">
                                                <div class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">
                                                    T
                                                </div>
                                            </div>

                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Tim Nilson</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">3 days ago</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center py-1">
                                            <a href="../demo5/apps/devs/question.html#answers" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                44 Answers
                                            </a>

                                            <a href="../demo5/apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2"> Blazor </a>

                                            <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-original-title="Upvote this question" data-kt-initialized="1">
                                                3 <i class="bi-duotone bi-black-right fs-3ms-2 me-0 fs-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator separator-dashed border-gray-300 my-8"></div>

                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <a href="../demo5/apps/devs/question.html" class="fs-2 text-gray-900 text-hover-primary me-1"> Using Metronic with .NET multi tenant application </a>

                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Resolved" data-bs-original-title="Resolved" data-kt-initialized="1">
                                                <i class="bi-duotone bi-check-circle text-success fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        When approx. is the next update for the Laravel version planned? Waiting for the CRUD, 2nd factor etc. features before starting my project. Also can we expect the Laravel + Vue version in the next update ?
                                    </div>

                                    <div class="d-flex flex-stack flex-wrap">
                                        <div class="d-flex align-items-center py-1">
                                            <div class="symbol symbol-35px me-2">
                                                <img src="assets/media/avatars/1.jpg" alt="user" />
                                            </div>

                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Ana Quil</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">5 days ago</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center py-1">
                                            <a href="../demo5/apps/devs/question.html#answers" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                2 Answers
                                            </a>

                                            <a href="../demo5/apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2"> Aspdotnet </a>

                                            <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-original-title="Upvote this question" data-kt-initialized="1">
                                                4 <i class="bi-duotone bi-black-right fs-3ms-2 me-0 fs-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator separator-dashed border-gray-300 my-8"></div>
                            </div>

                            <div class="d-flex flex-center mb-0">
                                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">1</a>
                                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2 active">2</a>
                                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">3</a>
                                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">4</a>
                                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">5</a>
                                <span class="text-muted fw-semibold fs-6 mx-2">..</span>
                                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">19</a>
                            </div>
                        </div>
                    </div>
                  
                </div>


                    <!-- Footer -->
                    <?php include 'includes/footer.php'; ?>
                </div>

                <!-- Right Sidebar -->
                <?php include 'includes/rightSidebar.php'; ?>
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
