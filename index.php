<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="img-fluid" style="width: 60px; height: 60px; border-radius: 9px;" src='./Image/sign.png'>&nbsp; &nbsp;
            <span style=" font-family: 'Georgia', serif; text-align: center; background: linear-gradient(90deg, #ff7e5f, #feb47b); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 2.0rem;">Bonfire Adventures</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home"><i class="bi bi-house-door icon-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#destinations"><i class="bi bi-shop"></i> Destinations</a></li>
                    <li class="nav-item"><a class="nav-link" href="#booking"><i class="bi bi-building-add"></i>&nbsp;Booking</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><i class="bi bi-telephone-plus-fill"></i> Contact</a></li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#authModal">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="text-center text-light d-flex align-items-center">
        <div class="container">
            <h1 id="bonfire" style="font-family: 'Poppins', sans-serif;"></h1>
            <p>Discover the best destinations around the world!</p>
            <a href="#destinations" class="btn btn-primary">Explore Now</a>
        </div>
    </section>

    <section id="destinations" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Featured Destinations</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./Image/cortana.webp" class="card-img-top" alt="Destination 1">
                        <div class="card-body">
                            <h5 class="card-title">Paris, France</h5>
                            <p class="card-text">The city of lights and love, known for the Eiffel Tower and its rich culture.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./Image/city.jpg" class="card-img-top" alt="Destination 2">
                        <div class="card-body">
                            <h5 class="card-title">Nakuru, Kenya</h5>
                            <p class="card-text">Experience the perfect blend of tradition and modernity in this bustling city.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./Image/boat.webp" class="card-img-top" alt="Destination 3">
                        <div class="card-body">
                            <h5 class="card-title">Mombasa, Kenya</h5>
                            <p class="card-text">Famous for its iconic Opera House and stunning beaches.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="booking" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Book Your Trip</h2>
            <form id="bookingForm" class="row g-3" method='post' action="./DB/trip.php">
                <div class="col-md-6">
                    <label for="destination" class="form-label">Destination</label>
                    <select id="destination" class="form-select" name="destination">
                        <option value="paris">Paris</option>
                        <option value="nakuru">Nakuru</option>
                        <option value="mombasa">Mombasa</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="date" class="form-label">Travel Date</label>
                    <input type="date" id="date" class="form-control" name="date">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="emailId" id="email" class="form-control">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary" id="bookingForm" name="book">Book Now</button>
                </div>
            </form>
        </div>
    </section>

    <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="authModalLabel">Welcome to Bonfire Adventures</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs mb-3" id="authTabs" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" role="tab">Login</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" role="tab">Register</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="login" role="tabpanel">
                            <form id="loginForm" method="post" action="./DB/login.php">
                                <div class="mb-3">
                                    <label for="loginEmail" class="form-label">Email</label>
                                    <input type="email" name="email" id="loginEmail" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="loginPassword" class="form-label">Password</label>
                                    <input type="password" name="pword" id="loginPassword" class="form-control" required>
                                </div>
                                <input name='submit' type="submit" value="Login" class="btn btn-outline-primary w-100">
                            </form>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel">
                            <form id="registerForm" method='post' action='./DB/register.php'>
                                <div class="mb-3">
                                    <label for="registerName" class="form-label">Full Name</label>
                                    <input type="text" id="registerName" name="full_name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="registerEmail" class="form-label">Email</label>
                                    <input type="email" id="registerEmail" name="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="registerPassword" class="form-label">Password</label>
                                    <input type="password" id="registerPassword" name="password" class="form-control" required>
                                </div>
                                <input class="btn btn-success" type="submit" name="submit" value="Register">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-3 bg-dark text-light">
        <p>&copy; 2024 Bonfire Adventures. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function Toggle(){
            var element = document.body;
            element.classList.toggle('dark_mode');
        }
        var typed = new Typed('#bonfire', {
            strings: [
            "Discover the World with Bonfire Adventures!",
            "Explore Exotic Destinations...",
            "Unforgettable Safaris in Kenya!",
            "Exclusive Travel Packages for Every Budget.",
            "Your Next Adventure Awaits!"
        ],
        typeSpeed: 90, 
        backSpeed: 60, 
        loop: true 
        });
/*
        document.addEventListener("DOMContentLoaded", function () {
        const bookingForm = document.getElementById("bookingForm");

        bookingForm.addEventListener("submit", function (event) {
            event.preventDefault();

            const formData = new FormData(bookingForm);

            fetch('./DB/trip.php', {
    method: 'POST',
    body: formData
})
.then(response => response.json())
.then(data => {
    console.log(data); 
    if (data.success) {
        Swal.fire({
            title: "Booking Successful!",
            text: "Your trip has been successfully booked.",
            icon: "success",
            confirmButtonText: "OK"
        });
    } else {
        Swal.fire({
            title: "Booking Failed!",
            text: data.message || "An error occurred while booking.",
            icon: "error",
            confirmButtonText: "Try Again"
        });
    }
})
.catch(error => {
    console.error("Error:", error);
    Swal.fire({
        title: "Error!",
        text: "Something went wrong. Please try again later.",
        icon: "error",
        confirmButtonText: "OK"
    });
});
        });
    });*/
    </script>
</body>
</html>
