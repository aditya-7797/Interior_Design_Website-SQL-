<?php
if(isset($_POST["submit2"])) {
    $postId = $_POST['post_id'];  // Get the post id from the hidden input

    $username = $_POST['username'];
    $comment = $_POST['comment'];

    $conn = new mysqli('localhost', 'root', '', 'blog_post');
    if($conn->connect_error) {
        die('Connection Failed: '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO comment (post_id, user_name, comment) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $postId, $username, $comment);
        if ($stmt->execute()) {
            echo "Comment Submitted Successfully! Thank You!!!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
}
?>
