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
           <center>
            <h2 class="banner-title"; style="margin-top: 2%; color: white;">Our Authors</h2>
           </center>
           <br>
          <section class="sec1" style="margin-left: 5%;">
            <div >
                <div class="row row-cols-1 row-cols-md-3" id="about-container">
            </div>
            </div>     
          </section>  
    </header> 
    
<script>
  function createBlogCard(data) {
        var cardDiv = document.createElement("div");
        cardDiv.setAttribute("class", "p-2 flex-fill");

        var cardInner = document.createElement("div");
        cardInner.setAttribute("class", "card");
        cardInner.style.width = "25rem";

        var imgElement = document.createElement("img");
        imgElement.setAttribute("src", data.image);
        imgElement.setAttribute("class", "card-img-top");

        var cardBody = document.createElement("div");
        cardBody.setAttribute("class", "card-body");

        var titleElement = document.createElement("h5");
        titleElement.setAttribute("class", "card-title");
        titleElement.innerText = data.title;

        var authorElement = document.createElement("p");
        authorElement.style.marginBottom = "4px";
        authorElement.innerText = "Author of: " + data.author;

        cardBody.appendChild(titleElement);
        cardBody.appendChild(authorElement);
        cardInner.appendChild(imgElement);
        cardInner.appendChild(cardBody);

        cardDiv.appendChild(cardInner);

        return cardDiv;
    }

    async function fetchAndDisplayBlogData(url, containerId) {
        try {
            const response = await fetch(url);
            const jsonData = await response.json();

            var blogContainer = document.getElementById(containerId);

            if (blogContainer) {
                jsonData.forEach(function (postData) {
                    var blogCard = createBlogCard(postData);

                    blogContainer.appendChild(blogCard);
                });
            } else {
                console.error('Container element not found:', containerId);
            }
        } catch (error) {
            console.error('Error fetching or parsing JSON:', error);
        }
    }

    fetchAndDisplayBlogData('abt.json', 'about-container');
    

</script>    
</body>
</html>