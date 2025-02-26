<?php
session_start();
include '../includes/config.php';

// Check if user is admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

// Delete user
$user_id = $_GET['id'] ?? null;
if ($user_id) {
    $conn->query("DELETE FROM users WHERE id = $user_id");
}
header("Location: users.php");
exit();
?>
