<?php
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $question = mysqli_real_escape_string($conn, $_POST['question']);
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);

    $sql = "INSERT INTO questions (title, question, tags) VALUES ('$title', '$question', '$tags')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Question submitted successfully!'); window.location='ask-question.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
