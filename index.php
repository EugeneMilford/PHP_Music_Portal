<!DOCTYPE html>

<html lang="en">
<head>
    <title>Music Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
    
</head>

<body>

    <h2>PHP Music Portal</h2>
    
    <br>

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" ><img src="images/logo.jpg"/></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
            </button>
            
        </div>
        <div>
            <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
            <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        </div>
    </nav>
    <!-- End of Navbar Section -->
    
    <!-- Welcome Section -->
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/001.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
        <img src="images/002.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
        <img src="images/005.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    
    <!-- Home Section -->
    
    <!-- Latest, popular songs, artists, your playlist etc.. -->
    
    <!-- About Section -->
    <div class="container-fluid padding">
            <div class="row padding">
                <div class="col-lg-6">
                    <h2>About the Music Portal...</h2>
                    <p>
                        The columns will automatically stack on top of each other when the screen is less than 576px.
                    </p>
                    <p>
                        Resize the browser window to see the effect.Responsive web design has become more important
                        as the amount of mobile traffic now accounts for more than half of total internet traffic.
                    </p>
                    <p>
                        It can display the web page differently depending on the screen size or viewing device.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">
                        Learn More
                    </a>
                </div>
                
                <div class="col-lg-6">
                    <img src="images/004.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    
    <!-- Music Section -->
    
    <!-- Contact Section -->

</body>
</html>

