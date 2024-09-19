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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"> <img src="logo.jpg" alt="Bootstrap" width="75" height="48" ></a>
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
                    <a class="nav-link" href="post.html">POST YOUR BLOG</a>
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

          <div class = "banner">
          <center>
            <div class = "container">
            <h1 class = "banner-title" style="margin-top: 10px;">
                <span>Post Your.</span> Blogs
            </h1>
            <p>Express your thoughts on Interior Design</p>
          </center>
          </div>
    
    <form class = "fomm " action="connect.php" method="post" style="margin-top: 15px" enctype="multipart/form-data">
      <h3 style="color: aliceblue; font-size: large;">Blog Card Data</h3>
      
    <div class="mb-3">
    <div>
      <p style="color: rgb(255, 255, 255);">Image for BlogPost:- </p>
      <input type="file" name="blogImage" id="bimg" placeholder="Upload image for Blog Post here">
    </div>
      <label for="formGroupExampleInput" class="form-label">Name of Blog</label>
      <input type="text" class="form-control" id="bname" name="bname" placeholder="Enter Name of Your Blog">
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label" style="margin-bottom:0px;">Name of Author</label>
      <input type="text" class="form-control" id="bauthor" name="bauthor" placeholder="Enter Name of Author">
    </div>

    <div>
      <p style="color: rgb(255, 255, 255);">Date of Blog Post:- </p>
      <input type="date" id="bblogdate" name="bblogdate">
    </div>
    
    <br>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Content</label>
      <textarea class="form-control" id="bcontent" name="bcontent" rows="3"></textarea>
    </div>

  <h3 style="color: aliceblue; font-size: large;">Actual Blog</h3>

  <div class="mb-3">
      <label for="blogContent" class="form-label">Content</label>
      <textarea class="form-control" id="blogContent" name="content" rows="6"></textarea>
  </div>

  <center><input type="submit" name="submit" value="Submit" style="margin-bottom: 3%;"></center>
</form>


</header>
</body>


</html>
