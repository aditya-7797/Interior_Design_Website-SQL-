<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interior.Design Blog</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
  body {
    background-color: #f8f9fa;
    /* Light gray background */
    color: #212529;
    /* Black text */
  }

  .container {
    width: 60%;
    /* Set width to 70% */
    margin: 0 auto;
    /* Center the container */
  }

  .comments {
    margin-top: 20px;
  }

  .comment {
    background-color: #fff;
    /* White background */
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .comment p {
    margin-bottom: 0;
  }

  .comment-info {
    font-weight: bold;
  }

  .no-comments {
    color: white;
    /* Gray text */
    font-style: italic;
  }

  .comment-form {
    margin-top: 20px;
  }
</style>

<body>
  <header class="cu">
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
              <a class="nav-link" href="Index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">CONTACT US</a>
            </li>
          </ul>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

        </div>
      </div>
    </nav>

    <section>
    <form class="fomm" action="connect_comment.php" method="post" style="margin-top: 15px" enctype="multipart/form-data">
    <input type="hidden" name="post_id" id="post_id">

    <div class="mb-3">
        <label for="user_name" class="form-label">Name:-</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Type your name...">
    </div>
    <div class="mb-3">
        <label for="commentBox" class="form-label">Comment:</label>
        <textarea class="form-control" id="commentBox_blog" name="comment" rows="5" placeholder="Type your Comment here..."></textarea>
    </div>
    <input type="Submit" name="submit2" value="Submit" style="margin-bottom: 3%;">
</form>

</form>





    </section>

    <h3 style="margin-left: 20%; color: white; margin-bottom: 0px; margin-top:10px">Comments</h3>

    <div class="container">
      <div class="comments">
        <?php
        // Establish connection to your database
        $conn = new mysqli('localhost', 'root', '', 'blog_post');
        if ($conn->connect_error) {
          die('Connection Failed: ' . $conn->connect_error);
        }

        // Fetch comments from the database
        $sql = "SELECT * FROM comment";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Output data of each row
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="comment">
              <p class="comment-info"><?php echo $row["user_name"]; ?></p>
              <p><?php echo $row["comment"]; ?></p>
            </div>
        <?php
          }
        } else {
          echo "<p class='no-comments'>No comments yet.</p>";
        }

        // Close the database connection
        $conn->close();
        ?>
      </div>
    </div>

  </header>
  </script>
</body>
</html>