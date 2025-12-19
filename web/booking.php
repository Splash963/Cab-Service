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

    <!-- Navbar -->
    <?php
    $currentPage = 'booking';
    include 'layouts/navbar.php';
    ?>

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
    <?php include 'layouts/footer.php'; ?>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
    <script src="js/animation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>