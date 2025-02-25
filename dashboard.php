<?php
include 'includes/config.php';
// Fetch total number of questions
$total_questions_result = $conn->query("SELECT COUNT(*) AS total FROM questions");
$total_questions = $total_questions_result->fetch_assoc()['total'];

// Fetch all questions
$questions_result = $conn->query("SELECT * FROM questions ORDER BY created_at DESC");
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
                                        <small class="text-muted fs-6 fw-semibold ms-1"> (<?php echo $total_questions; ?>) </small>
                                    </h1>
                                </div>
                                <div class="d-flex align-items-center py-1">
                                    <a href="ask-question.php" class="btn btn-flex btn-sm btn-primary border-0 fs-6 h-40px">Ask Question</a>
                                </div>
                            </div>

                            <div class="post" id="kt_post">
                                <?php while ($row = $questions_result->fetch_assoc()) { 
                                    $question_id = $row['id'];
                                    $upvotes = isset($votes[$question_id]) ? $votes[$question_id]['upvotes'] : 0;
                                    $downvotes = isset($votes[$question_id]) ? $votes[$question_id]['downvotes'] : 0;
                                ?>
                                <div class="mb-10">
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <a href="question-details.php?id=<?php echo $question_id; ?>" class="fs-2 text-gray-900 text-hover-primary me-1">
                                                <?php echo htmlspecialchars($row['title']); ?> ?
                                            </a>
                                        </div>

                                        <div class="fs-base fw-normal text-gray-700 mb-4">
                                            <?php echo substr(htmlspecialchars($row['question']), 0, 150); ?>...
                                        </div>

                                        <div class="d-flex flex-stack flex-wrap">
                                            <div class="d-flex align-items-center py-1">
                                                <div class="symbol symbol-35px me-2">
                                                    <div class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">
                                                        <?php echo strtoupper(substr($row['title'], 0, 1)); ?>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-column align-items-start justify-content-center">
                                                    <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Anonymous</span>
                                                    <span class="text-muted fs-8 fw-semibold lh-1"><?php echo date('d M Y, H:i A', strtotime($row['created_at'])); ?></span>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center py-1">
                                                
                                            <?php
                                            // Fetch answer count for this question
                                            $question_id = $row['id'];
                                            $answer_result = $conn->query("SELECT COUNT(*) as total_answers FROM answers WHERE question_id = $question_id");
                                            $answer_count = $answer_result->fetch_assoc()['total_answers'];
                                            ?>

                                            <a href="question-details.php?id=<?php echo $question_id; ?>" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                Answers (<?php echo $answer_count; ?>)
                                            </a>



                                                <?php if (!empty($row['tags'])) { ?>
                                                    <a href="#" class="btn btn-sm btn-light px-4 me-2"><?php echo htmlspecialchars($row['tags']); ?></a>
                                                <?php } ?>

                                                <!-- Upvote & Downvote Buttons -->
                                                <button class="btn btn-sm btn-light upvote" data-id="<?php echo $question_id; ?>">
                                                    👍 <span class="upvote-count"><?php echo $upvotes; ?></span>
                                                </button>

                                                <button class="btn btn-sm btn-light downvote ms-2" data-id="<?php echo $question_id; ?>">
                                                    👎 <span class="downvote-count"><?php echo $downvotes; ?></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="separator separator-dashed border-gray-300 my-8"></div>
                                </div>
                                <?php } ?>
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
    <script src="assets/js/vote.js"></script>
</body>
</html>
