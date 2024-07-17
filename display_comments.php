<?php
$file = 'comments.txt';

// Check if the file exists and is readable
if (file_exists($file) && is_readable($file)) {
    // Output comments from the file
    $comments = file_get_contents($file);
    echo nl2br($comments); // Convert newlines to <br> for HTML output
} else {
    echo "No comments yet.";
}
?>
