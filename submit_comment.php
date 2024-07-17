<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    
    // Validate and sanitize input (optional but recommended)
    $username = htmlspecialchars($username);
    $comment = htmlspecialchars($comment);
    
    // Save comment to a file (for simplicity, you might use a database in a real application)
    $file = 'comments.txt';
    $current = file_get_contents($file);
    $current .= "Username: $username\nComment: $comment\n\n";
    file_put_contents($file, $current);
    
    // Redirect back to the forum page
    header('Location: index.html');
    exit;
}
?>
