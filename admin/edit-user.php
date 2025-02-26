<?php
session_start();
include '../includes/config.php';

// Check if user is admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

$user_id = $_GET['id'] ?? null;
if (!$user_id) {
    die("Invalid User ID");
}

// Fetch user details
$user_result = $conn->query("SELECT * FROM users WHERE id = $user_id");
$user = $user_result->fetch_assoc();

// Update user details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_role = $_POST['role'];
    $conn->query("UPDATE users SET role='$new_role' WHERE id=$user_id");
    header("Location: users.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="../assets/css/style.bundle.css">
</head>
<body>
    <div class="card mt-5">
    <div class="card-header border-0 pt-6">
                                <h2 class="mb-4">Edit User</h2>
                                    <div class="d-flex justify-content-end py-1">
                                        <a href="../dashboard.php" class="btn btn-flex btn-sm btn-info border-0 fs-6 h-40px"><- Back</a>
                                    </div>
                        </div>
                        <div class="card-body">
        <form method="POST">
            <div class="mb-3">
                <label>Username:</label>
                <input type="text" class="form-control" value="<?php echo htmlspecialchars($user['username']); ?>">
            </div>
            <div class="mb-3">
                <label>Email:</label>
                <input type="text" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>">
            </div>
            <div class="mb-3">
                <label>Role:</label>
                <select class="form-control" name="role">
                    <option value="user" <?php if ($user['role'] === 'user') echo 'selected'; ?>>User</option>
                    <option value="admin" <?php if ($user['role'] === 'admin') echo 'selected'; ?>>Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="users.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
    </div>
</body>
</html>
