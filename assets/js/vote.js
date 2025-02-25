document.addEventListener("DOMContentLoaded", function () {
    function sendVote(questionId, voteType, button) {
        fetch("vote.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `question_id=${questionId}&vote_type=${voteType}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success" || data.status === "updated") {
                let voteCount = button.querySelector("span");
                voteCount.textContent = parseInt(voteCount.textContent) + (voteType === "up" ? 1 : -1);
            } else if (data.status === "removed") {
                let voteCount = button.querySelector("span");
                voteCount.textContent = parseInt(voteCount.textContent) - 1;
            } else {
                alert("Error: " + data.message);
            }
        });
    }

    document.querySelectorAll(".upvote").forEach(button => {
        button.addEventListener("click", () => sendVote(button.dataset.id, "up", button));
    });

    document.querySelectorAll(".downvote").forEach(button => {
        button.addEventListener("click", () => sendVote(button.dataset.id, "down", button));
    });
});
