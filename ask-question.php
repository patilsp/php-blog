            <!-- Header -->
            <?php include 'includes/header.php'; ?>

            <div class="content flex-column-fluid" id="kt_content">
                <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
                    <div class="page-title d-flex flex-column py-1">
                        <h1 class="d-flex align-items-center my-1">
                            <span class="text-dark fs-1"> Ask Questions </span>
                        </h1>
                    </div>

                    <div class="d-flex align-items-center py-1">
                        <a href="dashboard.php" class="btn btn-flex btn-sm btn-warning border-0 fs-6 h-40px" id="kt_toolbar_primary_button"><- Back </a>
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

                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
            </div>
        
            <?php include 'includes/footer.php'; ?>
        