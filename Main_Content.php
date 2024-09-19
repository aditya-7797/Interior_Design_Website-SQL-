<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior.Design Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="path/to/bootstrap.min.css" rel="stylesheet">

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
                <a class="nav-link" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AllBlogs.php">BLOG</a>
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

    <div class = "banner">
      <center>
        <div class = "container">
        <h1 class = "banner-title">
            <span>Interior.</span> Design Blog
        </h1>
        <p>everything that you want to know about Interior Design</p>

        <form>
            <input type = "text" class = "search-input" placeholder="Find your dream design">
            <button type = "submit" class = "search-btn">
            <i class = "fas fa-search"></i>
            </button>
        </form>
        </div>
      </center>
    </div>
</header>

<br>
<br>

<section class = "design" id=" design">
  <div class = " container">
      <div class="title">
          <center>
              <h2>Recent Trends in Designs</h2>
              
          </center>
         
      </div>
      <body class="design-content">

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Enrich your Drawing Area</h5>
        <p>With Vibrant Colours and Paintings </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img4.jpg" class="d-block w-100" width=70% alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: black;">Go with Light and Sober Colours</h5>
        <p style="color: black;">And just shades play the Role!!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: black;">Focus Matters!!</h5>
        <p style="color: black;">Just Highlight the Wall and go with Sematric Design</p>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<br>

</body>
</html>