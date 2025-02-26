
<?php

// Fetch total number of questions
$total_questions_result = $conn->query("SELECT COUNT(*) AS total FROM questions");
$total_questions = $total_questions_result->fetch_assoc()['total'];

// Fetch all questions
$questions_result = $conn->query("SELECT * FROM questions ORDER BY created_at DESC");
?>

<div
    class="sidebar p-5 px-lg-0 py-lg-11"
    data-kt-drawer="true"
    data-kt-drawer-name="sidebar"
    data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="275px"
    data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_sidebar_toggle"
>
    <form id="kt_sidebar_search_form" action="/search.html" class="w-100 position-relative mb-5 mb-lg-10" autocomplete="off">
        <input type="hidden" />

        <i class="fa fa-search fs-2 text-gray-700 position-absolute top-50 translate-middle-y ms-4"><span class="path1"></span><span class="path2"></span></i>

        <input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px" name="search" value="" placeholder="Search" />
    </form>
    <!-- Popular Questions for School Kids -->
    <div class="post" id="kt_post">
      
        <div class="card bg-light mb-5 mb-lg-10 shadow-none border-0">
            <div class="card-header align-items-center border-0">
                <h3 class="card-title text-gray-900 fs-3">School Kids Q&A</h3>
            </div>
            <div class="card-body mb-0">
            <?php while ($row = $questions_result->fetch_assoc()) { $question_id = $row['id']; ?>
                <div class="d-flex align-items-center mb-4">
                    <i class="fa fa-question-circle fs-2 mt-0 me-2"></i>
                    <a href="question-details.php?id=<?php echo $question_id; ?>" class="text-gray-700 text-hover-primary fs-6">
                        <?php echo htmlspecialchars($row['title']); ?>
                        
                    </a>
                   
                </div>
                <?php } ?>
            </div>
        </div>
        
    </div>

    <!-- Latest Tutorials for School Kids -->
    <div class="card mb-5 mb-xl-8">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">Suggestions for you</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Top Creators</span>
        </h3>
    </div>

    <div class="card-body pt-5">
        
        <?php
       

        // Fetch all users
        $users_query = "SELECT id, username, email FROM users ORDER BY id DESC LIMIT 10"; // Limit to 10 users
        $users_result = $conn->query($users_query);

        if ($users_result->num_rows > 0) {
            while ($user = $users_result->fetch_assoc()) {
                $profileImage = !empty($user['profile_image']) ? "uploads/" . $user['profile_image'] : "assets/media/avatars/1.jpg";
                ?>
                <div class="d-flex flex-stack mb-4">
                    <div class="symbol symbol-40px me-5">
                        <!-- <img src="<?php echo $profileImage; ?>" class="h-50 align-self-center rounded-circle" alt="<?php echo htmlspecialchars($user['username']); ?>" /> -->
                        <img src="assets/media/avatars/1.jpg" class="h-50 align-self-center" alt="" />
                    </div>

                    <div class="d-flex align-items-center flex-row-fluid gap-1">
                        <div class="flex-grow-1 me-2">
                            <a href="user-profile.php?id=<?php echo $user['id']; ?>" class="text-gray-800 text-hover-primary fs-6 fw-bold">
                                <?php echo htmlspecialchars($user['username']); ?>
                            </a>
                            <!-- <span class="text-muted fw-semibold d-block fs-7"><?php echo htmlspecialchars($user['email']); ?></span> -->
                        </div>

                        <a href="#" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                    </div>
                </div>

                <div class="separator separator-dashed my-4"></div>
            <?php }
        } else {
            echo "<p class='text-muted text-center'>No users found.</p>";
        }
        ?>
    </div>
</div>


</div>
