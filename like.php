<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postId = $_POST['postId'];

    $conn = new mysqli('localhost', 'root', '', 'blog_post');
    if($conn->connect_error) {
        die('Connection Failed: '.$conn->connect_error);
    } else {
        // Check if the post is already liked
        $stmt = $conn->prepare("SELECT COUNT(*) as count FROM likes WHERE post_id = ?");
        $stmt->bind_param("s", $postId);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        if ($data['count'] > 0) {
            // Unlike the post
            $stmt = $conn->prepare("DELETE FROM likes WHERE post_id = ?");
            $stmt->bind_param("s", $postId);
            $stmt->execute();

            $liked = false;
        } else {
            // Like the post
            $stmt = $conn->prepare("INSERT INTO likes (post_id) VALUES (?)");
            $stmt->bind_param("s", $postId);
            $stmt->execute();

            $liked = true;
        }

        // Update the like count in the blog_post table
        $stmt = $conn->prepare("UPDATE blog_post SET like_count = (SELECT COUNT(*) FROM likes WHERE post_id = ?) WHERE id = ?");
        $stmt->bind_param("ss", $postId, $postId);
        $stmt->execute();

        echo json_encode(['liked' => $liked]);
    }

    $stmt->close();
    $conn->close();
}
?>
