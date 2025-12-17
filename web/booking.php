<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/booking.css">
</head>

<body>

    <!-- Navbars -->
    <nav class="navbar navbar-expand-lg nav-background p-0 transparent-bg">
        <div class="container-fluid d-flex justify-content-end">
            <nav class="navbar p-0">
                <div class="container-fluid p-0">
                    <a class="navbar-brand" href="#">
                        <img src="images/icons/Logo.png" class="head-logo" alt="Bootstrap">
                        <span class="ms-2 fs-4 text-black">TaxiGeo.com</span>
                    </a>
                </div>
            </nav>
            <button class="navbar-toggler ms-auto nav-icon" type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end half-screen" tabindex="-1"
                id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item pe-3">
                            <a class="nav-link nav-color" href="index.php">Home</a>
                        </li>
                        <li class="nav-item pe-3">
                            <a class="nav-link nav-color" href="about.php">About</a>
                        </li>
                        <li class="nav-item pe-3">
                            <a class="nav-link nav-color" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item pe-3">
                            <a class="nav-link active-color" href="booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contact Button -->
    <div id="main-button" class="position-fixed bottom-0 end-0 mb-5 z-3 rounded-3 contact-button">
        <img src="images/icons/download (1).png" class="rounded-circle contact-button" alt="...">
    </div>

    <!-- Option Buttons -->
    <div id="extra-buttons" class="extra-button-container mb-5">
        <button class="btn btn-primary mb-2 contact-op-btn op-btn1 fs-6 text-white">Phone</button><br>
        <button class="btn btn-success contact-op-btn op-btn2 fs-6 text-white">Whatsapp</button>
    </div>

    <!-- Contact Header -->
    <div class="container-fluid contact-header">
        <div class="row">
            <div class="col-md-12 text-center mt-5 mb-5 fade-only">
                <h1 class="display-4 main-title">Book Your Taxi Now</h1>
                <p class="lead text-black">Fill in Your Details & Book Your Cab in Seconds</p>
            </div>
        </div>
    </div>
    <img src="images/Footer/footer.png" class="footer-img" alt="...">

    <!-- Contact Form -->
    <div class="container contact-form-container mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center titles mt-4 mb-4">Book Now</h2>
                <form class="booking-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone-no" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone-no" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">No of Dates</label>
                        <input type="text" class="form-control" id="date" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Pickup Location" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Drop-off Location" aria-label="Last name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Pickup Date" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Pickup Time" aria-label="Last name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Vehicle Type</option>
                                <option value="1">Car</option>
                                <option value="2">Van</option>
                                <option value="3">Three Wheeler</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Type</option>
                                <option value="1">Short Ride</option>
                                <option value="2">Holiday & Tour Packages</option>
                                <option value="3">Wedding & Event Cars</option>
                                <option value="4">Airport Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Additional Notes</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary submit-button">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <!-- <img src="images/Footer/footer.png" class="footer-img mt-3" alt="..."> -->
    <div class="footer-bg">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="images/icons/Logo.png" class="img-fluid" style="width: 160px; height:150px" alt="...">
                    <p class="fs-2 fw-semibold text-white">Ride Safe, Ride Smart.</p>
                </div>
                <div class="col">
                    <p class="fs-4 fw-medium text-white mt-5">Links</p>
                    <div class="">
                        <p class="footer-links">About</p>
                        <p class="footer-links">Get a Taxi</p>
                        <p class="footer-links">Our Reviews</p>
                        <p class="footer-links">Book a Taxi</p>
                    </div>
                </div>
                <div class="col">
                    <p class="fs-4 fw-medium text-white mt-5">Contact Us</p>
                    <div class="">
                        <p class="footer-links">Phone</p>
                        <p class="footer-links">Whatsapp</p>
                        <p class="footer-links">Email</p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-certification text-center pb-3 pt-5">
            <small>&copy; Taxi Geo <span id="year"></span> | All rights reserved</small>
        </footer>
    </div>
    <img src="images/Footer/footer.png" class="footer-img" alt="...">

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
    <script src="js/animation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>