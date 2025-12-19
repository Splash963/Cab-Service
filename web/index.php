<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar -->
    <?php
    $currentPage = 'home';
    include 'layouts/navbar.php';
    ?>


    <!-- Head -->
    <div class="card text-bg-dark rounded-0 border border-0 shadow-none">
        <img src="images/Background img.jpg" class="card-img rounded-0 main-img" alt="...">
        <div class="d-flex p-2 card-img-overlay">
            <div class="p-2 w-100">
                <h5 class="col-12 main-title">Your Seamless
                    Cab Booking
                    Experience
                </h5>
                <button type="button" class="about-button mt-3">Learn More</button>
            </div>
        </div>
        <img src="images/Footer/footer.png" class="footer-img" alt="...">
    </div>

    <!-- Contact Button -->
    <!-- Main floating button -->
    <div id="main-button" class="position-fixed bottom-0 end-0 mb-5 z-3 rounded-3 contact-button">
        <img src="images/icons/download (1).png" class="rounded-circle contact-button" alt="...">
    </div>

    <!-- Extra buttons that animate upward -->
    <div id="extra-buttons" class="extra-button-container mb-5">
        <button class="btn btn-primary mb-2 contact-op-btn op-btn1 fs-6 text-white">Phone</button><br>
        <button class="btn btn-success contact-op-btn op-btn2 fs-6 text-white">Whatsapp</button>
    </div>

    <!-- Quick service -->
    <h2 class="mt-5 titles ps-2">Quick Service</h2>
    <div class="container text-center container text-center fade-only">
        <div class="row">
            <div class="col">
                <div class="col mt-3 text-white">
                    <p class="fs-1 fw-bold">Looking for a Taxi??</p>
                    <p class="fs-6 ptag text-center">Our cab service system offers reliable, safe, and efficient
                        transportation solutions. Whether you need a quick ride across town or a longer
                        journey, we prioritize your comfort and convenience.
                    </p>
                </div>
                <div class="container-fluid text-center mt-3">
                    <div class="container">
                        <button type="button" class="quick-button1 rounded-pill fw-normal text-white">Whatsapp</button>
                    </div>
                    <div class="container mt-3">
                        <button type="button" class="quick-button2 rounded-pill fw-normal text-white">Contact US</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Services -->
    <h2 class="mt-5 titles ps-2">Our Services</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 me-0">

        <div class="col mt-5 container slide-up">
            <div class="services-card container">
                <div class="services-card">
                    <div class="card-image">
                        <img src="images/card-images/quick-service-img.png" class="services-img mt-3" alt="...">
                    </div>
                    <div class="card-title">
                        <p class="">Quick Cab Service</p>
                    </div>
                    <div class="card-description">
                        <p class="">Fast service, no time lost.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mt-5 slide-up">
            <div class="services-card container">
                <div class="services-card">
                    <div class="card-image">
                        <img src="images/card-images/airport-service.png" class="services-img mt-3" alt="...">
                    </div>
                    <div class="card-title">
                        <p class="">Airport Transfers</p>
                    </div>
                    <div class="card-description">
                        <p class="container">Smooth, reliable transport from airport to your doorstep.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mt-5 slide-up">
            <div class="services-card container">
                <div class="services-card">
                    <div class="card-image">
                        <img src="images/card-images/Trip.png" class="services-img mt-3" alt="...">
                    </div>
                    <div class="card-title">
                        <p class="">Holiday & Tour Packages</p>
                    </div>
                    <div class="card-description">
                        <p class="container">Relaxing rides designed to kick-start your vacation with ease and freedom.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mt-5 slide-up">
            <div class="services-card container">
                <div class="services-card">
                    <div class="card-image">
                        <img src="images/card-images/wedding.png" class="services-img mt-3" alt="...">
                    </div>
                    <div class="card-title">
                        <p class="">Wedding & Event Cars</p>
                    </div>
                    <div class="card-description">
                        <p class="container">Stylish, reliable cars for weddings and special events.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Booking -->
    <div class="d-flex mt-5 center-image">
        <img src="images/Footer/footer.png" class="footer-img" alt="...">
    </div>
    <div class="container-fluid p-0 m-0">
        <div class="d-flex justify-content-center align-items-center">
            <div class="position-relative card rounded-0 border-0 shadow-none booking-card w-100">
                <img src="images/Background 2.jpg" class="img-fluid booking-image" alt="...">
                <div class="card-img-overlay p-0">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="fade-only text-center container">
                            <p class="booking-text-title">
                                Effortless Cab Booking for Every Ride, Anytime, Anywhere!
                            </p>
                            <p class="booking-text-description">
                                Say goodbye to waiting—say hello to seamless rides.
                                Wherever you're headed, our smart cab service gets
                                you there with real-time tracking and 24/7 availability—all with just a few taps.
                            </p>
                            <div class="container-fluid text-center mt-3 p-0">
                                <div class="d-flex flex-column align-items-center gap-2">
                                    <button type="button" class="Booking-button1 rounded-pill fw-semibold text-black">Contact US</button>
                                    <button type="button" class="Booking-button2 rounded-pill fw-semibold text-black">Whatsapp</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex center-image">
        <img src="images/Footer/footer.png" class="footer-img" alt="...">
    </div>

    <!-- Customer Reviews -->
    <h1 class="mt-5 titles fs-1 fw-bold text-center">Reviews</h1>
    <div class="text-center container mt-5 mb-1">
        <div class="row row-cols-1">
            <div class="col">
                <div class="row row-cols-auto">
                    <div class="d-flex flex-row container" style="overflow-x:auto; scrollbar-width: thin;">

                        <div class="card mb-3 review-card position-relative ms-5">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <img src="images/Users/images.png" class="rounded-circle" alt="..." style="width: 30px; height:30px;">
                                    Theekshana
                                </div>
                                <p class="card-text overflow-y-auto mt-3" style="height: 120px; scrollbar-width: thin;">
                                    Amazing service always ready to help and for fair prices
                                    TaxiBentota has made our trip through Sri Lanka unforgettable with their excellent service.
                                    They were always on time and thought along with us to offer the best routes and experiences.
                                    The organization and the drivers were of exceptional quality.
                                    We are very grateful for their help in moving smoothly and comfortably from A to B.
                                    Thank you to TaxiBentota for the fantastic service. Greetings WH
                                </p>
                                <a href="#" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x mb-1">View</a>
                            </div>
                        </div>

                        <div class="card mb-3 review-card position-relative ms-5">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <img src="images/Users/images.png" class="rounded-circle" alt="..." style="width: 30px; height:30px;">
                                    Theekshana
                                </div>
                                <p class="card-text overflow-y-auto mt-3" style="height: 120px; scrollbar-width: thin;">
                                    Amazing service always ready to help and for fair prices
                                    TaxiBentota has made our trip through Sri Lanka unforgettable with their excellent service.
                                    They were always on time and thought along with us to offer the best routes and experiences.
                                    The organization and the drivers were of exceptional quality.
                                    We are very grateful for their help in moving smoothly and comfortably from A to B.
                                    Thank you to TaxiBentota for the fantastic service. Greetings WH
                                </p>
                                <a href="#" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x mb-1">View</a>
                            </div>
                        </div>

                        <div class="card mb-3 review-card position-relative ms-5">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <img src="images/Users/images.png" class="rounded-circle" alt="..." style="width: 30px; height:30px;">
                                    Theekshana
                                </div>
                                <p class="card-text overflow-y-auto mt-3" style="height: 120px; scrollbar-width: thin;">
                                    Amazing service always ready to help and for fair prices
                                    TaxiBentota has made our trip through Sri Lanka unforgettable with their excellent service.
                                    They were always on time and thought along with us to offer the best routes and experiences.
                                    The organization and the drivers were of exceptional quality.
                                    We are very grateful for their help in moving smoothly and comfortably from A to B.
                                    Thank you to TaxiBentota for the fantastic service. Greetings WH
                                </p>
                                <a href="#" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x mb-1">View</a>
                            </div>
                        </div>

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
                    <p class="text-booking fs-1 fw-bold">Book Your Cab Instantly and Travel with Ease!</p>
                    <a href="booking.php">
                        <button type="button" class="booking-btn rounded-pill fw-bold mt-5">Start Now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'layouts/footer.php'; ?>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
    <script src="js/animation.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>