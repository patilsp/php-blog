<?php
session_start();
include '../includes/config.php';

// Check if user is admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

// Fetch all users
$users_result = $conn->query("SELECT * FROM users ORDER BY id DESC");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Brain QA</title>
    <link rel="shortcut icon" href="assets/media/logos/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
    
</head>

    <body id="kt_body" class="bg-bs-light auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            
                <div class="content flex-row-fluid" id="kt_content">
                    
                    <div class="card">
                       
                        <div class="card-header border-0 pt-6">
                        <h2 class="mb-4">User Management</h2>
                                    <div class="d-flex justify-content-end py-1">
                                        <a href="../dashboard.php" class="btn btn-flex btn-sm btn-info border-0 fs-6 h-40px"><- Back</a>
                                    </div>
                        </div>
                            <div class="card-body">
                                <div class="mt-5">
                                   
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($user = $users_result->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $user['id']; ?></td>
                                                <td><?php echo htmlspecialchars($user['username']); ?></td>
                                                <td><?php echo htmlspecialchars($user['email']); ?></td>
                                                <td><?php echo htmlspecialchars($user['role']); ?></td>
                                                <td>
                                                    <a href="edit-user.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="delete-user.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>