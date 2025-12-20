<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/about.css">
</head>

<body>

    <!-- Navbar -->
    <?php
    session_start();

    $currentPage = 'about';
    include 'layouts/navbar.php';
    ?>

    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/About/Caousel/image1.jpg" class="d-block w-100 main-img" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Rating and Feedback</h5>
                    <p>Passengers can rate their ride experience and provide comments.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/About/Caousel/image2.jpg" class="d-block w-100 main-img" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Cab Booking</h5>
                    <p>Users can easily reserve a ride through a simple and intuitive interface.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/About/Caousel/image4.jpg" class="d-block w-100 main-img" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Instant Quick Service</h5>
                    <p>Streamlined, user-friendly cab booking for instant ride access.</p>
                </div>
            </div>
        </div>
        <img src="images/Footer/footer.png" class="footer-img" alt="...">
    </div>


    <!-- Contact Button -->
    <div id="main-button" class="position-fixed bottom-0 end-0 mb-5 z-3 rounded-3 contact-button">
        <img src="images/icons/download (1).png" class="rounded-circle contact-button" alt="...">
    </div>

    <!-- Option Buttons -->
    <div id="extra-buttons" class="extra-button-container mb-5">
        <button class="btn btn-primary mb-2 contact-op-btn op-btn1 fs-6 text-white">Phone</button><br>
        <button class="btn btn-success contact-op-btn op-btn2 fs-6 text-white">Whatsapp</button>
    </div>

    <!-- About -->
    <h1 class="main-title mt-5 mb-3 fade-only">About Us</h1>
    <div class="container text-center fade-only">
        <div class="row">
            <div class="col-md-6">
                <p class="text-white ptag">
                    Welcome to <strong>Taxi Geo</strong> – your reliable travel partner for every journey. We specialize in fast cab bookings,
                    airport transfers, wedding event rides, and custom trip transport services.
                    Whether you need a quick ride across town or transportation for a special occasion,
                    our professional drivers and comfortable vehicles are here to get you there safely and on time.
                </p>
            </div>
            <div class="col-md-6">
                <img src="images/About/about_us/about.png" class="about-img" alt="">
            </div>
        </div>
    </div>


    <!-- Vehicles -->
    <h2 class="mt-5 titles ps-2">Our Vehicles</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 me-0">

        <div class="col mt-5 container slide-up">
            <div class="services-card container">
                <div class="services-card">
                    <div class="card-image">
                        <img src="images/About/Vehicles/three-wheel.png" class="services-img mt-3" alt="...">
                    </div>
                    <div class="card-title">
                        <p class="">Three Wheel</p>
                    </div>
                    <div class="card-description">
                        <ul class="">
                            <li class="">Instant pickup and drop-off.</li>
                            <li class="">Affordable and convenient transport.</li>
                            <li class="">Budget-friendly and time-saving.</li>
                            <li class="">Great for short-distance rides.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col container mt-5 slide-up">
            <div class="services-card container">
                <div class="services-card">
                    <div class="card-image">
                        <img src="images/About/Vehicles/car.png" class="services-img mt-3" alt="...">
                    </div>
                    <div class="card-title">
                        <p class="">Car</p>
                    </div>
                    <div class="card-description">
                        <ul class="">
                            <li class="">Easy booking with flexible schedules.</li>
                            <li class="">A/C vehicles with driver.</li>
                            <li class="">Fuel, parking & highway tolls included.</li>
                            <li class="">Safe, reliable, and comfortable ride.</li>
                            <li class="">Suitable for daily hire or tour packages.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col container mt-5 mb-5 slide-up">
            <div class="services-card container">
                <div class="services-card">
                    <div class="card-image">
                        <img src="images/About/Vehicles/van.png" class="services-img mt-3" alt="...">
                    </div>
                    <div class="card-title">
                        <p class="">Van</p>
                    </div>
                    <div class="card-description">
                        <ul class="">
                            <li class="">Spacious and air-conditioned vans.</li>
                            <li class="">Comfortable seating for 6–15 passengers.</li>
                            <li class="">Fuel, driver, parking & tolls included.</li>
                            <li class="">Driver accommodation covered.</li>
                            <li class="">Perfect for tours, events, and long-distance travel.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Book -->
    <div class="text-center mt-5 booking-main">
        <div class="row">
            <div class="col">
                <div class="col fade-only">
                    <p class="text-booking fs-1 fw-bold">Why Wait? Your Cab is Just One Click Away!</p>
                    <a href="booking.php">
                        <button type="button" class="booking-btn rounded-pill fw-bold mt-5">Book Now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img src="images/Footer/footer.png" class="footer-img" alt="...">


    <!-- why choose us -->
    <h1 class="main-title mt-5 mb-5">Why choose us</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col-12 col-md-4 mt-5 slide-up">
                <div class="choose-card container">
                    <div class="choose-card">
                        <div class="choose-image">
                            <img src="images/About/Choose us/cab.png" class="choose-img" alt="...">
                        </div>
                    </div>
                </div>
                <p class="card-title mt-5">100+ Cabs Ready Anytime</p>
                <p class="card-description mt-3">We have a large fleet of well-maintained vehicles available 24/7 to meet your travel needs.</p>
            </div>

            <div class="col-12 col-md-4 mt-5 slide-up">
                <div class="choose-card container">
                    <div class="choose-card">
                        <div class="choose-image">
                            <img src="images/About/Choose us/response.png" class="choose-img" alt="...">
                        </div>
                    </div>
                </div>
                <p class="card-title mt-5">Fast Response Service</p>
                <p class="card-description mt-3">Your time matters! Our team responds instantly to bookings with quick confirmations and timely pickups.</p>
            </div>

            <div class="col-12 col-md-4 mt-5 slide-up">
                <div class="choose-card container">
                    <div class="choose-card">
                        <div class="choose-image">
                            <img src="images/About/Choose us/money.png" class="choose-img" alt="...">
                        </div>
                    </div>
                </div>
                <p class="card-title mt-5">Affordable Pricing</p>
                <p class="card-description mt-3">Enjoy competitive and transparent rates with no hidden charges – comfort that fits your budget.</p>
            </div>

            <div class="col-12 col-md-4 mt-5 slide-up">
                <div class="choose-card container">
                    <div class="choose-card">
                        <div class="choose-image">
                            <img src="images/About/Choose us/drive.png" class="choose-img" alt="...">
                        </div>
                    </div>
                </div>
                <p class="card-title mt-5">Experienced Drivers</p>
                <p class="card-description mt-3">Friendly, licensed, and professional drivers ensure you have a safe and smooth journey every time.</p>
            </div>

            <div class="col-12 col-md-4 mt-5 slide-up">
                <div class="choose-card container">
                    <div class="choose-card">
                        <div class="choose-image">
                            <img src="images/About/Choose us/islandwide.png" class="choose-img" alt="...">
                        </div>
                    </div>
                </div>
                <p class="card-title mt-5">Islandwide Coverage</p>
                <p class="card-description mt-3">Wherever you are, we’ll reach you – offering reliable rides across the country.</p>
            </div>

            <div class="col-12 col-md-4 mt-5 mb-5 slide-up">
                <div class="choose-card container">
                    <div class="choose-card">
                        <div class="choose-image">
                            <img src="images/About/Choose us/easy-booking.png" class="choose-img" alt="...">
                        </div>
                    </div>
                </div>
                <p class="card-title mt-5">Easy Booking System</p>
                <p class="card-description mt-3">Book your ride in seconds through our user-friendly online platform or via a quick call.</p>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php include 'layouts/footer.php'; ?>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
    <script src="js/animation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>