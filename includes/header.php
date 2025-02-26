<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
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
    
            <div id="kt_header" class="header align-items-stretch">
                    <div class="container-xxl d-flex align-items-stretch justify-content-between">
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 w-lg-225px me-5">
                            <div class="btn btn-icon btn-active-icon-primary ms-n2 me-2 d-flex d-lg-none" id="kt_aside_toggle">
                                <i class="fa fa-bars fs-1"></i>
                            </div>

                            <a href="dashboard.php">
                                <img alt="Logo" src="assets/media/logos/favicon.png" class="d-none d-lg-inline h-30px theme-light-show" />
                                <img alt="Logo" src="assets/media/logos/favicon.png" class="d-none d-lg-inline h-30px theme-dark-show" />
                                <img alt="Logo" src="assets/media/logos/favicon.png" class="d-lg-none h-25px" />
                            </a>
                        </div>


                        
                        <div class="d-flex align-items-stretch justify-content-end flex-lg-grow-1">
                        
                            <div class="d-flex align-items-stretch flex-shrink-0">
                            <div class="d-flex align-items-stretch ms-1 ms-lg-2">
                                    <div
                                        id="kt_header_search"
                                        class="header-search d-flex align-items-stretch"
                                        data-kt-search-keypress="true"
                                        data-kt-search-min-length="2"
                                        data-kt-search-enter="enter"
                                        data-kt-search-layout="menu"
                                        data-kt-menu-trigger="auto"
                                        data-kt-menu-overflow="false"
                                        data-kt-menu-permanent="true"
                                        data-kt-menu-placement="bottom-end"
                                    >
                                        <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                                            <div class="btn btn-icon btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                                <i class="fa fa-search fs-3"></i>
                                            </div>
                                        </div>

                                        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                            <div data-kt-search-element="wrapper">
                                                <form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
                                                    <i class="fa fa-search fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"></i>

                                                    <input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />

                                                    <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                                                        <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                                    </span>

                                                    <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                                                        <i class="fa fa-cross fs-2 fs-lg-1 me-0"></i>
                                                    </span>


                                                </form>

                                                <div class="separator border-gray-200 mb-6"></div>

                                                <div data-kt-search-element="results" class="d-none">
                                                    <div class="scroll-y mh-200px mh-lg-350px">
                                                        <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">
                                                            Users
                                                        </h3>

                                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                            <div class="symbol symbol-40px me-4">
                                                                <img src="assets/media/avatars/1.jpg" alt="" />
                                                            </div>

                                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Karina Clark</span>
                                                                <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                                            </div>
                                                        </a>

                                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                            <div class="symbol symbol-40px me-4">
                                                                <img src="assets/media/avatars/3.jpg" alt="" />
                                                            </div>

                                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                                <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                                            </div>
                                                        </a>

                                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                            <div class="symbol symbol-40px me-4">
                                                                <img src="assets/media/avatars/1.jpg" alt="" />
                                                            </div>

                                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Ana Clark</span>
                                                                <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                                            </div>
                                                        </a>

                                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                            <div class="symbol symbol-40px me-4">
                                                                <img src="assets/media/avatars/4.jpg" alt="" />
                                                            </div>

                                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                                <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                            </div>
                                                        </a>

                                                        
                                                    </div>
                                                </div>

                                                <div class="mb-5" data-kt-search-element="main">
                                                    <div class="d-flex flex-stack fw-semibold mb-4">
                                                        <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                                    </div>

                                                    <div class="scroll-y mh-200px mh-lg-325px">
                                                        <div class="d-flex align-items-center mb-5">
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i class="fa fa-laptop fs-2 text-primary"></i>
                                                                </span>
                                                            </div>

                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                                                                <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex align-items-center mb-5">
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i class="fa fa-comment fs-2 text-primary"><span class="path3"></span><span class="path4"></span></i>
                                                                </span>
                                                            </div>

                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                                                                <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex align-items-center mb-5">
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i class="fa fa-comment fs-2 text-primary"></i>
                                                                </span>
                                                            </div>

                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                                                                <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                            </div>
                                                        </div>



                                                        <div class="d-flex align-items-center mb-5">
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i class="fa fa-comment fs-2 text-primary"></i>
                                                                </span>
                                                            </div>

                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                                                                <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div data-kt-search-element="empty" class="text-center d-none">
                                                    <div class="pt-10 pb-10">
                                                        <i class="fa fa-search-list fs-4x opacity-50"><span class="path3"></span></i>
                                                    </div>

                                                    <div class="pb-15 fw-semibold">
                                                        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                        <div class="text-muted fs-7">Please try again with a different query</div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>


                                <div class="d-flex align-items-center ms-1 ms-lg-2">
                                    <div
                                        class="btn btn-icon btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative"
                                        data-kt-menu-trigger="click"
                                        data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end"
                                    >
                                        <i class="fa fa-bell fs-3"></i>
                                        <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"> </span>

                                    </div>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
                                        <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image: url('assets/media/images/menu-header-bg.jpg');">
                                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span></h3>

                                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-content">
                                            <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <i class="fa fa-bars fs-2 text-primary"></i>
                                                                </span>
                                                            </div>

                                                            <div class="mb-0 me-2">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary">Project Alice</a>
                                                                <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                            </div>
                                                        </div>

                                                        <span class="badge badge-light fs-8">1 hr</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <i class="fa fa-information fs-2 text-danger"><span class="path3"></span></i>
                                                                </span>
                                                            </div>

                                                            <div class="mb-0 me-2">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary">HR Confidential</a>
                                                                <div class="text-gray-400 fs-7">Confidential staff documents</div>
                                                            </div>
                                                        </div>

                                                        <span class="badge badge-light fs-8">2 hrs</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <i class="fa fa-briefcase fs-2 text-warning"></i>
                                                                </span>
                                                            </div>

                                                            <div class="mb-0 me-2">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary">Company HR</a>
                                                                <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                                                            </div>
                                                        </div>

                                                        <span class="badge badge-light fs-8">5 hrs</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-success">
                                                                    <i class="fa fa-abstract-12 fs-2 text-success"></i>
                                                                </span>
                                                            </div>

                                                            <div class="mb-0 me-2">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary">Project Redux</a>
                                                                <div class="text-gray-400 fs-7">New frontend admin theme</div>
                                                            </div>
                                                        </div>

                                                        <span class="badge badge-light fs-8">2 days</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <i class="fa fa-colors-square fs-2 text-primary"><span class="path3"></span><span class="path4"></span></i>
                                                                </span>
                                                            </div>

                                                            <div class="mb-0 me-2">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary">Project Breafing</a>
                                                                <div class="text-gray-400 fs-7">Product launch status update</div>
                                                            </div>
                                                        </div>

                                                        <span class="badge badge-light fs-8">21 Jan</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-info">
                                                                    <i class="fa fa-picture fs-2 text-info"></i>
                                                                </span>
                                                            </div>

                                                            <div class="mb-0 me-2">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary">Banner Assets</a>
                                                                <div class="text-gray-400 fs-7">Collection of banner images</div>
                                                            </div>
                                                        </div>

                                                        <span class="badge badge-light fs-8">21 Jan</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <i class="fa fa-color-swatch fs-2 text-warning">
                                                                        <span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                                                        <span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                                                                        <span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span>
                                                                        <span class="path19"></span><span class="path20"></span><span class="path21"></span>
                                                                    </i>
                                                                </span>
                                                            </div>

                                                            <div class="mb-0 me-2">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary">Icon Assets</a>
                                                                <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                                                            </div>
                                                        </div>

                                                        <span class="badge badge-light fs-8">20 March</span>
                                                    </div>
                                                </div>

                                                <div class="py-3 text-center border-top">
                                                    <a href="/pages/user-profile/activity.php" class="btn btn-color-gray-600 btn-active-color-primary">
                                                        View All
                                                        <i class="fa fa-arrow-right fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                                <div class="d-flex flex-column px-9">
                                                    <div class="pt-10 pb-0">
                                                        <h3 class="text-dark text-center">
                                                            Get Pro Access
                                                        </h3>

                                                        <div class="text-center text-gray-600 fw-semibold pt-1">
                                                            Outlines keep you honest. They stoping you from amazing poorly about drive
                                                        </div>

                                                        <div class="text-center mt-5 mb-9">
                                                            <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                        </div>
                                                    </div>

                                                    <div class="text-center px-4">
                                                        <img class="mw-100 mh-200px" alt="image" src="assets/media/images/notification.png" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-success me-4">200 OK</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">Just now</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">2 hrs</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-success me-4">200 OK</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">5 hrs</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">2 days</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-success me-4">200 OK</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">1 week</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-success me-4">200 OK</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">Mar 5</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">May 15</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">Apr 3</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">Jun 30</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">Jul 10</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">Sep 10</span>
                                                    </div>

                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center me-2">
                                                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>

                                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                                        </div>

                                                        <span class="badge badge-light fs-8">Dec 10</span>
                                                    </div>
                                                </div>

                                                <div class="py-3 text-center border-top">
                                                    <a href="/pages/user-profile/activity.php" class="btn btn-color-gray-600 btn-active-color-primary">
                                                        View All
                                                        <i class="fa fa-arrow-right fs-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center ms-1 ms-lg-2">
                                    <a
                                        href="#"
                                        class="btn btn-icon btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                        data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end"
                                    >
                                        <i class="fa fa-sun theme-light-show fs-3">
                                            <span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                                            <span class="path8"></span><span class="path9"></span><span class="path10"></span>
                                        </i>
                                        <i class="fa fa-moon theme-dark-show fs-4"></i>
                                    </a>

                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                        data-kt-menu="true"
                                        data-kt-element="theme-mode-menu"
                                    >
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fa fa-sun fs-2"></i>
                                                </span>
                                                <span class="menu-title">
                                                    Light
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fa fa-moon fs-2"></i>
                                                </span>
                                                <span class="menu-title">
                                                    Dark
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fa fa-laptop fs-2"><span class="path3"></span><span class="path4"></span></i>
                                                </span>
                                                <span class="menu-title">
                                                    System
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center ms-1 ms-lg-2 d-lg-none" title="Show header menu">
                                    <button class="btn btn-icon btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_sidebar_toggle">
                                        <i class="fa fa-file fs-1"></i>
                                    </button>
                                </div>




                                <?php
                                
                                    // Fetch user details
                                    if (isset($_SESSION['user_id'])) {
                                        $user_id = $_SESSION['user_id'];
                                        $result = $conn->query("SELECT * FROM users WHERE id = $user_id");
                                        $user = $result->fetch_assoc();
                                    } else {
                                        $user = ['profile_picture' => '']; 
                                    }

                                    $profile_image = !empty($user['profile_picture']) ? '' . $user['profile_picture'] : 'assets/media/avatars/1.jpg';
                                    ?>

                                <div class="d-flex align-items-center ms-lg-5" id="kt_header_user_menu_toggle">
                                    <div
                                        class="btn btn-active-light d-flex align-items-center bg-hover-light py-2 px-2 px-md-3"
                                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end"
                                    >
                                        <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2">
                                            <span class="text-muted fs-7 fw-semibold lh-1 mb-2">Hello</span>
                                            <span class="text-dark fs-base lh-1"> <?php echo $_SESSION['username']; ?></span>
                                        </div>

                                        <div class="symbol symbol-30px symbol-md-40px">
                                            <img src="<?php echo $profile_image; ?>" class="rounded-circle" width="100" height="100" alt="Profile Picture"/>

                                        </div>
                                    </div>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <div class="symbol symbol-50px me-5">
                                                <img src="<?php echo $profile_image; ?>" class="rounded-circle" width="100" height="100" alt="Profile Picture"/>
                                                </div>

                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center fs-5">
                                                        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?>
                                                        <span class="badge badge-light-success fs-8 px-2 py-1 ms-2">Pro</span>
                                                    </div>
                                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                        <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Not logged in'; ?>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="separator my-2"></div>

                                        <div class="menu-item px-5">
                                            <a href="profile.php" class="menu-link px-5">
                                                My Profile
                                            </a>
                                        </div>

                                        <div class="menu-item px-5">
                                            <a href="Questions.php" class="menu-link px-5">
                                                <span class="menu-text">My Questions</span>
                                                <span class="menu-badge">
                                                    <span class="badge badge-light-danger badge-circle fs-7">3</span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                            <a href="#" class="menu-link px-5">
                                                <span class="menu-title">My Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="referrals.php" class="menu-link px-5">
                                                        Referrals
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="billing.php" class="menu-link px-5">
                                                        Billing
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="statements.php" class="menu-link px-5">
                                                        Payments
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="statements.php" class="menu-link d-flex flex-stack px-5">
                                                        Statements

                                                        <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                                                            <i class="fa fa-information-5 fs-5"><span class="path3"></span></i>
                                                        </span>
                                                    </a>
                                                </div>

                                                <div class="separator my-2"></div>

                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                            <span class="form-check-label text-muted fs-7">
                                                                Notifications
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        
                                        <div class="menu-item px-5 my-1">
                                            <a href="settings.php" class="menu-link px-5">
                                                Account Settings
                                            </a>
                                        </div>

                                        <div class="separator my-2"></div>


                                        <div class="menu-item px-5">
                                            <a href="logout.php" class="menu-link px-5">
                                                Sign Out
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-stretch container-xxl">
                
                <!-- Left Sidebar -->
                <?php include 'includes/leftSidebar.php'; ?>

                <!-- Main Content Area -->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">