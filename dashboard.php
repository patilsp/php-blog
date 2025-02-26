<?php
include 'includes/config.php';

// Fetch total number of questions
$total_questions_result = $conn->query("SELECT COUNT(*) AS total FROM questions");
$total_questions = $total_questions_result->fetch_assoc()['total'];

// Fetch all questions with user details
$questions_result = $conn->query("
    SELECT q.*, u.username, u.profile_picture 
    FROM questions q
    LEFT JOIN users u ON q.user_id = u.id
    ORDER BY q.created_at DESC
");
?>

<?php include 'includes/header.php'; ?>
<div class="content flex-column-fluid" id="kt_content">
    <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column py-1">
            <h1 class="d-flex align-items-center my-1">
                <span class="text-dark fs-1"> All Questions </span>
                <small class="text-muted fs-6 fw-semibold ms-1"> (<?php echo $total_questions; ?>) </small>
            </h1>
        </div>
        <div class="d-flex align-items-center py-1">
            <a href="ask-question.php" class="btn btn-flex btn-sm btn-info border-0 fs-6 h-40px">Ask Question</a>
        </div>
    </div>

    <div class="post" id="kt_post">
        <?php while ($row = $questions_result->fetch_assoc()) { 
            $question_id = $row['id'];
            $upvotes = isset($votes[$question_id]) ? $votes[$question_id]['upvotes'] : 0;
            $downvotes = isset($votes[$question_id]) ? $votes[$question_id]['downvotes'] : 0;

            // Set user profile image or default
            $profile_image = !empty($row['profile_picture']) ? '' . $row['profile_picture'] : 'assets/media/avatars/1.jpg';

            // Set username or default to "Anonymous"
            $username = !empty($row['username']) ? htmlspecialchars($row['username']) : "Anonymous";
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
                            <img src="<?php echo $profile_image; ?>" class="rounded-circle" width="35" height="35" alt="Profile Picture"/>
                        </div>

                        <div class="d-flex flex-column align-items-start justify-content-center">
                            <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2"><?php echo $username; ?></span>
                            <span class="text-muted fs-8 fw-semibold lh-1"><?php echo date('d M Y, H:i A', strtotime($row['created_at'])); ?></span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center py-1">
                        <?php
                        // Fetch answer count for this question
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

<?php include 'includes/footer.php'; ?>
