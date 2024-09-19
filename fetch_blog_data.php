<?php
// Assuming you have established a connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_post";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch blog data from MySQL table
$sql = "SELECT id, title, author, date, content FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    $blogData = "";
    while($row = $result->fetch_assoc()) {
        // Format the data as HTML for blog cards
        $blogData .= "<div class='blog-card'>";
        $blogData .= "<h2>" . $row["title"] . "</h2>";
        $blogData .= "<p>Author: " . $row["author"] . "</p>";
        $blogData .= "<p>Date: " . $row["date"] . "</p>";
        $blogData .= "<p>" . $row["content"] . "</p>";
        $blogData .= "</div>";
    }
    echo $blogData;
} else {
    echo "0 results";
}
$conn->close();
?>
