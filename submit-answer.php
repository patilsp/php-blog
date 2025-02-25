<?php
// session_start();
include 'includes/config.php';

if (!isset($_SESSION['user_id'])) {
    die("Unauthorized access.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $question_id = (int) $_POST['question_id'];
    $answer = trim($_POST['answer']);

    if (!empty($answer)) {
        $stmt = $conn->prepare("INSERT INTO answers (user_id, question_id, answer) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $user_id, $question_id, $answer);
        $stmt->execute();
        $stmt->close();
    }

    header("Location: question-details.php?id=" . $question_id);
    exit();
} else {
    die("Invalid request.");
}
