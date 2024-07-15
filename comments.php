<?php
$filename = 'comments.txt';

// Function to save comment to the text file
function saveComment($username, $comment, $filename) {
    $commentEntry = "$username: $comment\n";
    file_put_contents($filename, $commentEntry, FILE_APPEND);
}

// Save the new comment if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $comment = htmlspecialchars($_POST['comment']);
    saveComment($username, $comment, $filename);
}

// Read and display comments
if (file_exists($filename)) {
    $comments = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($comments as $comment) {
        echo "<p>$comment</p>";
    }
} else {
    echo "No comments yet.";
}
?>
