<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/styles.css">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
    <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home"><i class="bi bi-house-door icon-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#destinations"><i class="bi bi-shop"></i> Destinations</a></li>
                    <li class="nav-item"><a class="nav-link" href="#booking">Booking</a></li>
                    <li class="nav-item"><a href="/Pages/services.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><i class="bi bi-telephone-plus-fill"></i> Contact</a></li>
                </ul>
            </div>
    </div>
  </div>
    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../Image/pixel.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../Image/sand.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../Images/tree.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
          <div class="text">
            <br>
            <div class="row">
              <div class="col-md-5">
              <h4 class="text-light fst-italic">Hello <?php echo $_SESSION['full_name'];?>!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
              </div>
              <div class="col-md-7">
                <a href='../DB/logout.php'><button class="btn btn-danger">
                <i class="bi bi-box-arrow-in-left fst-italic"></i>Logout</button>
                </a>
              </div>
            </div>
            <br>
            <h2 class="header">Welcome to Bonfire adventures</h2>
            <p class="text-light">Discover Your Next Adventure
                Welcome to Bonfire adventures, where every journey begins with inspiration! Whether you're a thrill-seeker, a culture enthusiast, or a lover of serene escapes, we’ve got something special for you.
            </p>
            <br><br><br><br><br>
            <div class="container">
                <h3 class="text-warning">Featured Destinations</h3>
                    <div class="row justify-content-center">
                        <div class="col-md-4"><p><strong>1. Exotic Beaches</strong>
                            Escape to crystal-clear waters and golden sands. Perfect for sunbathing, water sports,
                             or just unwinding.</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>2. Vibrant Cities</strong>
                                Experience the heartbeat of the world's most exciting cities. Enjoy cultural landmarks, shopping, and nightlife.</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>3. Nature Adventures</strong>
                                Embark on thrilling adventures in the great outdoors. Hike, camp, or explore wildlife reserves.</p>
                        </div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            <footer class="bg-secondary p-4">
                <p>&COPY; 2024 Visit our website and explore different services</p>
            </footer>
          </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>