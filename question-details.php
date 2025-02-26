
<?php

include 'includes/config.php';

if (!isset($_GET['id'])) {
    die("Question not found.");
}

$question_id = (int) $_GET['id'];
$question = $conn->query("SELECT * FROM questions WHERE id = $question_id")->fetch_assoc();

if (!$question) {
    die("Question not found.");
}

// Fetch all answers for this question
$answers = $conn->query("SELECT answers.*, users.username 
                         FROM answers 
                         JOIN users ON answers.user_id = users.id 
                         WHERE question_id = $question_id 
                         ORDER BY created_at DESC");
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

                        <div class="d-flex align-items-center">
                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="User replied" data-bs-original-title="User replied" data-kt-initialized="1">
                                <i class="fa fa-check text-success fs-1"></i>
                            </span>
                        </div>
                    </div>

                        <div class="d-flex justify-content-end align-items-center py-1">
                            <a href="dashboard.php" class="btn btn-flex btn-sm btn-warning border-0 fs-6 h-40px"><- Back </a>
                        </div>

                </div>

                <div class="fs-4 fw-normal text-gray-700 mb-10">
                    <p><?php echo nl2br(htmlspecialchars($question['question'])); ?></p>
                
                </div>

                <div class="d-flex flex-stack flex-wrap">
                    <div class="d-flex align-items-center py-1">
                        <div class="symbol symbol-35px me-2">
                            <div class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">
                                A
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-start justify-content-center">
                            <span class="text-gray-800 fs-7 fw-semibold lh-1 mb-2">James Hunt</span>
                            <span class="text-muted fs-8 fw-semibold lh-1">24 minutes ago</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center py-1">
                        <a href="#answers" data-kt-scroll-toggle="true" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                        <?php echo $answers->num_rows; ?> Answers
                        </a>

                        <a href="tag.html" class="btn btn-sm btn-light px-4 me-2">
                            Tag
                        </a>

                        <a href="#" class="btn btn-sm btn-icon btn-light me-2">                       
                            <i class="fa fa-save fs-2"><span class="path1"></span><span class="path2"></span></i>
                        </a>

                        <a href="#" class="btn btn-sm btn-flex btn-light px-4" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-original-title="Upvote this question" data-kt-initialized="1">
                            23
                            <i class="fa fa-right fs-7 ms-1 me-1"></i>
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

            <div class="collapse" id="kt_devs_ask_formatting">
                <div class="pt-3 mb-5 fs-6">
                    Here's a how to add some HTML formatting to your comment:
                </div>

                <ul class="list-unstyled p-0 mb-10">
                    <li class="py-1 fs-6"><b>&lt;strong&gt;&lt;/strong&gt;</b>&nbsp;to make things bold</li>
                    <li class="py-1 fs-6"><b>&lt;em&gt;&lt;/em&gt;</b>&nbsp;to emphasize</li>
                    <li class="py-1 fs-6"><b>&lt;ul&gt;&lt;li&gt;</b>&nbsp;or <b>&lt;ol&gt;&lt;li&gt;</b>&nbsp; to make lists</li>
                    <li class="py-1 fs-6"><b>&lt;h3&gt;</b>&nbsp;or <b>&lt;h4&gt;</b>&nbsp;to make headings</li>
                    <li class="py-1 fs-6"><b>&lt;pre&gt;&lt;/pre&gt;</b>&nbsp;for code blocks</li>
                    <li class="py-1 fs-6"><b>&lt;code&gt;&lt;/code&gt;</b>&nbsp;for a few words of code</li>
                    <li class="py-1 fs-6"><b>&lt;a&gt;&lt;/a&gt;</b>&nbsp;for links</li>
                    <li class="py-1 fs-6"><b>&lt;img&gt;</b>&nbsp;to paste in an image</li>
                    <li class="py-1 fs-6"><b>&lt;blockquote&gt;&lt;/blockquote&gt;</b>&nbsp;to quote somebody</li>
                    <li class="py-1 fs-6"><img alt="happy" src="assets/media/smiles/happy.png" />&nbsp;&nbsp;:)</li>
                    <li class="py-1 fs-6"><img alt="shocked" src="assets/media/smiles/shocked.png" />&nbsp;&nbsp;:|</li>
                    <li class="py-1 fs-6"><img alt="sad" src="assets/media/smiles/sad.png" />&nbsp;&nbsp;:(</li>
                </ul>
            </div>

            <a id="answers" data-kt-scroll-offset="{default: 100, lg: 125}"></a>
            <h2 class="fw-bold text-gray-900 mb-10">
                Replies(<?php echo $answers->num_rows; ?>)
            </h2>

            <div class="mb-10">

            <?php while ($answer = $answers->fetch_assoc()) { ?>
                    
                    

                


                <div class="border rounded p-2 p-lg-6 mb-10">
                    <div class="mb-0">
                        <div class="d-flex flex-stack flex-wrap mb-5">
                            <div class="d-flex align-items-center py-1">
                                <div class="symbol symbol-35px me-2">
                                    <img src="assets/media/avatars/2.jpg" alt="user" />
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

                    <div class="ps-10 mb-0"></div>
                </div>

                <?php } ?>
                

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

<?php include 'includes/footer.php'; ?>
