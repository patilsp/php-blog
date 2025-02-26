<?php
session_start(); // Ensure session is started
include 'includes/config.php';

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('You need to log in to post a question.'); window.location='login.php';</script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id']; // Get logged-in user ID
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $question = mysqli_real_escape_string($conn, $_POST['question']);
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);

    // Insert query including user_id
    $sql = "INSERT INTO questions (user_id, title, question, tags) VALUES ('$user_id', '$title', '$question', '$tags')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Question submitted successfully!'); window.location='ask-question.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
