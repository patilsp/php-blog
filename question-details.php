<?php
session_start();
include 'includes/config.php';

if (!isset($_GET['id'])) {
    die("Question not found.");
}

$question_id = (int) $_GET['id'];

// Fetch the question with user details
$question = $conn->query("
    SELECT questions.*, users.username, users.profile_picture 
    FROM questions 
    JOIN users ON questions.user_id = users.id 
    WHERE questions.id = $question_id
")->fetch_assoc();

if (!$question) {
    die("Question not found.");
}

// Fetch all answers for this question
$answers = $conn->query("
    SELECT answers.*, users.username, users.profile_picture 
    FROM answers 
    JOIN users ON answers.user_id = users.id 
    WHERE question_id = $question_id 
    ORDER BY created_at DESC
");
?>

<?php include 'includes/header.php'; ?>

<div class="content flex-column-fluid" id="kt_content">
    <div class="post" id="kt_post">
        <div class="mb-0">
            <div class="d-flex justify-content-between align-items-center mb-9">
                <div class="d-flex align-items-center">
                    <h1 class="fs-2x fw-semibold text-gray-700 mb-0 me-1">
                        <?php echo htmlspecialchars($question['title']); ?>
                    </h1>
                </div>
                <div class="d-flex justify-content-end align-items-center py-1">
                    <a href="dashboard.php" class="btn btn-flex btn-sm btn-warning border-0 fs-6 h-40px">← Back</a>
                </div>
            </div>

            <div class="fs-4 fw-normal text-gray-700 mb-10">
                <p><?php echo nl2br(htmlspecialchars($question['question'])); ?></p>
            </div>

            <div class="d-flex flex-stack flex-wrap">
                <div class="d-flex align-items-center py-1">
                    <?php
                    // Check if user has a profile picture, otherwise use default
                    $profile_image = !empty($question['profile_picture']) ? '' . $question['profile_picture'] : 'assets/media/avatars/default.jpg';
                    ?>
                    <div class="symbol symbol-35px me-2">
                        <img src="<?php echo htmlspecialchars($profile_image); ?>" class="rounded-circle" width="40" height="40" alt="User Profile" />
                    </div>

                    <div class="d-flex flex-column align-items-start justify-content-center">
                        <span class="text-gray-800 fs-7 fw-semibold lh-1 mb-2"><?php echo htmlspecialchars($question['username']); ?></span>
                        <span class="text-muted fs-8 fw-semibold lh-1"><?php echo date('d M Y, H:i A', strtotime($question['created_at'])); ?></span>
                    </div>
                </div>

                <div class="d-flex align-items-center py-1">
                    <a href="#answers" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                        <?php echo $answers->num_rows; ?> Answers
                    </a>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed border-gray-300 mt-8 mb-10"></div>

        <?php if (isset($_SESSION['user_id'])) { ?>
            <h6>Post Your Answer</h6>
            <form action="submit-answer.php" method="POST" class="mb-5">
                <input type="hidden" name="question_id" value="<?php echo $question_id; ?>">
                <textarea name="answer" required class="form-control"></textarea>
                <button type="submit" class="btn btn-info btn-sm mt-2">Submit Answer</button>
            </form>
        <?php } else { ?>
            <p><a href="login.php">Login</a> to post an answer.</p>
        <?php } ?>

        <a id="answers"></a>
        <h2 class="fw-bold text-gray-900 mb-10">Replies (<?php echo $answers->num_rows; ?>)</h2>

        <div class="mb-10">
            <?php while ($answer = $answers->fetch_assoc()) { ?>
                <div class="border rounded p-2 p-lg-6 mb-10">
                    <div class="mb-0">
                        <div class="d-flex flex-stack flex-wrap mb-5">
                            <div class="d-flex align-items-center py-1">
                                <?php
                                $answer_profile_image = !empty($answer['profile_picture']) ? '' . $answer['profile_picture'] : 'assets/media/avatars/default.jpg';
                                ?>
                                <div class="symbol symbol-35px me-2">
                                    <img src="<?php echo htmlspecialchars($answer_profile_image); ?>" class="rounded-circle" width="40" height="40" alt="User Profile" />
                                </div>

                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <span class="text-gray-800 fs-7 fw-semibold lh-1 mb-2"><?php echo htmlspecialchars($answer['username']); ?></span>
                                    <span class="text-muted fs-8 fw-semibold lh-1"><?php echo date("d M Y, H:i A", strtotime($answer['created_at'])); ?></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-1">
                                <a href="#" class="btn btn-sm btn-flex btn-color-gray-500 btn-active-light me-1">
                                    Reply
                                </a>

                                <a href="#" class="btn btn-sm btn-flex btn-light btn-icon" data-bs-toggle="tooltip" data-bs-dismiss="click" aria-label="Upvote" data-bs-original-title="Upvote" data-kt-initialized="1">
                                    0
                                </a>
                            </div>
                        </div>

                        <div class="fs-5 fw-normal text-gray-800">
                            <?php echo nl2br(htmlspecialchars($answer['answer'])); ?>                                        
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
