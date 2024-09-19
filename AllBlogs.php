<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interior.Design Blog</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interior.Design Blog</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <header class="Bloggg">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="logo.jpg" alt="Bootstrap" width="75" height="48"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AllBlogs.php">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newblog.php">POST YOUR BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT US</a>
            </li>
          </ul>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

        </div>
      </div>
    </nav>

    <div class="banner">
      <center>
        <div class="container">
          <h1 class="banner-title">
            <span>Explore.</span> Blogs
          </h1>
          <p>everything that you want to know about Interior Design</p>

          <form>
            <input type="text" class="search-input" placeholder="Search for Blog Posts">
            <button type="submit" class="search-btn">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
      </center>
    </div>
  </header>
  <br>
</body>
</html>

<?php

function createBlogCard($data) {
    $cardDiv = '<div class=" flex-fill" style="padding-left: 3.5rem;">';
    $cardDiv .= '<div class="card" style="width: 25rem;">';
    $cardDiv .= '<img src="' . $data['img'] . '" class="card-img-top">';
    $cardDiv .= '<div class="card-body">';
    $cardDiv .= '<h5 class="card-title" id="postName">' . $data['title'] . '</h5>';
    $cardDiv .= '<p style="margin-bottom: 4px;">Author: ' . $data['author'] . '</p>';
    $cardDiv .= '<p style="margin-bottom: 4px;">Date: ' . $data['date'] . '</p>';
    $cardDiv .= '<p>' . $data['content'] . '</p>';
    $cardDiv .= '<div class="d-flex align-items-center">';

    $cardDiv .= '<a class="btn btn-primary">Read More</a>';

    // $likeStatus = isset($data['likes']) ? $data['likes'] : 0;
    $cardDiv .= '<img src="like.png" style="width:1.6rem; margin: 0.5rem 0.5rem;" id="likeIcon" onclick="changeImage()"/>';
    $cardDiv .= '<img src="dislike.png" style="width:1.6rem; margin: 0.5rem 0.5rem;" id="dislikeIcon">';
    $cardDiv .= '<a href="comment.php?id=' . $data['id'] . '" onclick="storePostId(' . $data['id'] . ')"><img src="comment_icon.png" style="width:1.6rem; margin: 0.5rem 0.5rem;" class="comment-btn"></a>';

    $cardDiv .= '</div>';
    $cardDiv .= '</div></div></div>';
  
    return $cardDiv;
}


function fetchAndDisplayBlogData($containerId) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog_post";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM registration"; // Modify table name accordingly
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo '<div class="d-flex flex-wrap" id="' . $containerId . '" >';
      while ($row = $result->fetch_assoc()) {
        echo createBlogCard($row);
      }
      echo '</div>';
    } else {
      echo "0 results";
    }
    $conn->close();
}

fetchAndDisplayBlogData('blog-container');
?>
<!-- <script>
    const likeIcons = document.querySelectorAll('[id^="likeIcon_"]');

    likeIcons.forEach(icon => {
        icon.addEventListener('click', function(e) {
            const postId = e.currentTarget.getAttribute('data-post-id');
            const likeIcon = e.currentTarget;
            
            // AJAX to update like and change image
            fetch('update_like.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'post_id=' + postId,
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    if (data.likes == 1) {
                        likeIcon.src = 'like_done.png';
                    } else {
                        likeIcon.src = 'like.png';
                    }
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });
    });
</script> -->
<script>
    function changeImage() {
        var img1 = "like.png";
        var img2 = "like_done.png";
        var imgElement = document.getElementById('likeIcon');

        var filename = imgElement.src.split('/').pop(); // Get the filename from the src

        imgElement.src = (filename === img1) ? img2 : img1;
    }
    
    function storePostId(postId) {
    fetch('storePostId.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'post_id=' + postId,
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Log the response from the server
    })
    .catch((error) => {
        console.error('Error:', error);
    });
}

</script>


