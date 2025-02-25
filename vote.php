<?php
include 'includes/config.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["status" => "error", "message" => "Login required"]);
    exit();
}

$user_id = $_SESSION['user_id'];
$question_id = $_POST['question_id'];
$vote_type = $_POST['vote_type'];

// Check if the user has already voted
$check_vote = $conn->query("SELECT * FROM votes WHERE user_id = $user_id AND question_id = $question_id");
if ($check_vote->num_rows > 0) {
    $existing_vote = $check_vote->fetch_assoc();
    if ($existing_vote['vote_type'] == $vote_type) {
        // User clicked the same vote again, remove vote
        $conn->query("DELETE FROM votes WHERE user_id = $user_id AND question_id = $question_id");
        echo json_encode(["status" => "removed"]);
    } else {
        // User switched vote (up to down or down to up)
        $conn->query("UPDATE votes SET vote_type = '$vote_type' WHERE user_id = $user_id AND question_id = $question_id");
        echo json_encode(["status" => "updated"]);
    }
} else {
    // User is voting for the first time
    $conn->query("INSERT INTO votes (user_id, question_id, vote_type) VALUES ($user_id, $question_id, '$vote_type')");
    echo json_encode(["status" => "success"]);
}
?>
