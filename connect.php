<?php
if (isset($_POST["submit"])) {
    // Your existing code for submitting blog post data
    $target_dir = "upload/"; 
    $target_file = $target_dir . basename($_FILES["blogImage"]["name"]); 
    
    $check = getimagesize($_FILES["blogImage"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["blogImage"]["tmp_name"], $target_file)) {
            $img = $target_file; 
            $title = $_POST['bname'];
            $author = $_POST['bauthor'];
            $date = $_POST['bblogdate'];
            $content = $_POST['bcontent'];
            $acontent = $_POST['content'];

            $conn = new mysqli('localhost', 'root', '', 'blog_post');
            if ($conn->connect_error) {
                die('Connection Failed: ' . $conn->connect_error);
            } else {
                $stmt = $conn->prepare("INSERT INTO registration (img, title, author, date, content, acontent) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $img, $title, $author, $date, $content, $acontent);
                $stmt->execute();
                echo "Submitted Successfully!";
                $stmt->close();
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }

    // Assuming you already have $data array containing blog post details
    $postId = $data['id']; // Assuming 'id' is the primary key of your blog post table

    // Handle liking and disliking
    if (isset($_POST["like"])) {
        $action = "like";
    } elseif (isset($_POST["dislike"])) {
        $action = "dislike";
    }

    if (isset($action)) {
        $conn = new mysqli('localhost', 'root', '', 'blog_post');
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        } else {
            // Increment like or dislike count based on the action
            $stmt = $conn->prepare("UPDATE registration SET $action = $action + 1 WHERE id = ?");
            $stmt->bind_param("i", $postId);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        }
    }
}

?>
