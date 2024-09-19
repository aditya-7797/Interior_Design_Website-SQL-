<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_post";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["post_id"])) {
    $postId = $_POST['post_id'];
    $userName = "YourUserName"; // Replace with the actual username

    $sql = "INSERT INTO comment (post_id, user_name) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $postId, $userName);

    if ($stmt->execute()) {
        echo "Post ID stored successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
