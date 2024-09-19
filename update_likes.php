<?php
if(isset($_POST['post_id'])) {
    $postId = $_POST['post_id'];
    
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'blog_post');
    if($conn->connect_error) {
        die('Connection Failed: '.$conn->connect_error);
    }

    // Check the current like status
    $query = "SELECT likes FROM registration WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $postId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $currentLikes = $row['likes'];

    // Update the like status
    if($currentLikes == 0) {
        $query = "UPDATE registration SET likes = 1 WHERE id = ?";
    } else {
        $query = "UPDATE registration SET likes = 0 WHERE id = ?";
    }

    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $postId);
    if($stmt->execute()) {
        echo json_encode(['status' => 'success', 'likes' => $currentLikes == 0 ? 1 : 0]);
    } else {
        echo json_encode(['status' => 'error']);
    }

    $stmt->close();
    $conn->close();
}
?>



