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
                                    <span class="text-dark fs-1"> Ask Questions </span>
                                </h1>
                            </div>

                            <div class="d-flex align-items-center py-1">
                                <a href="dashboard.php" class="btn btn-flex btn-sm btn-info border-0 fs-6 h-40px" id="kt_toolbar_primary_button"> Back </a>
                            </div>
                        </div>

                        

                            <div class="container mt-5">
                               
                                <form action="save-question.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" required placeholder="Your question title">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Question <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="question" rows="5" required placeholder="Describe your question..."></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Tags (optional)</label>
                                        <input type="text" class="form-control" name="tags" placeholder="E.g: PHP, React, Vue">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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
