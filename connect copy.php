<?php
    $img = $_FILES["blogImage"]["name"];
    $title = $_POST['bname'];
    $author = $_POST['bauthor'];
    $date = $_POST['bblogdate'];
    $content = $_POST['bcontent'];
    $acontent = $_POST['content'];

    $conn = new mysqli('localhost','root','','blog_post');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }    else{
        $stmt = $conn->prepare("insert into registration(img,title,author,date,content,acontent)
        values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$img,$title,$author,$date,$content,$acontent);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
    }

    $img_path = '';
    if(isset($_FILES['blogImage']) && $_FILES['blogImage']['error'] == UPLOAD_ERR_OK){
        $img_name = $_FILES['blogImage']['name'];
        $img_tmp = $_FILES['blogImage']['tmp_name'];
        $uploadsDirectory = 'uploads/';
        $img_path = $uploadsDirectory . $img_name; // Path to store the image
        
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES["blogImage"]["name"]);


        // Move uploaded file to the specified path
        if(move_uploaded_file($img_tmp, $img_path)) {
            echo "File successfully uploaded. Path: " . $img_path . "<br>";
        } else {
            echo "Error uploading file.<br>";
        }
    } else {
        echo "No file uploaded or error occurred during upload.<br>";
    }

    // Debugging: Print image path
    echo "Image Path: " . $img_path . "<br>";
?>