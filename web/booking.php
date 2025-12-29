<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/booking.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <!-- Navbar -->
    <?php
    session_start();

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
                <form class="booking-form" id="bookingform">
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        echo "<input type='hidden' name='user_id' value='" . $_SESSION['user_id'] . "'>";
                    } else {
                        echo "<input type='hidden' name='user_id' value=''>";
                    }
                    ?>
                    <div class="mb-3">
                        <label for="phone-no" class="form-label">Additional Phone Number</label>
                        <input type="number" name="phone_no" class="form-control" id="phone-no" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">No of Dates</label>
                        <input type="text" name="no_of_dates" class="form-control" id="date" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="pickup_location" class="form-control" placeholder="Pickup Location" required>
                        </div>
                        <div class="col">
                            <input type="text" name="drop_location" class="form-control" placeholder="Drop-off Location" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <input type="date" name="pickup_date" class="form-control" placeholder="Pickup Date" required>
                        </div>
                        <div class="col">
                            <input type="time" name="pickup_time" class="form-control" placeholder="Pickup Time" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <select name="vehicle_type" class="form-select" aria-label="Default select example" required>
                                <option selected>Vehicle Type</option>
                                <option value="Car">Car</option>
                                <option value="Van">Van</option>
                                <option value="Three Wheeler">Three Wheeler</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="ride_type" class="form-select" aria-label="Default select example" required>
                                <option selected>Type</option>
                                <option value="Short Ride">Short Ride</option>
                                <option value="Holiday & Tour Packages">Holiday & Tour Packages</option>
                                <option value="Wedding & Event Cars">Wedding & Event Cars</option>
                                <option value="Airport Transfer">Airport Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Additional Notes</label>
                        <textarea class="form-control" name="additional_notes" id="message" rows="4" required></textarea>
                    </div>
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        echo '<button type="submit" name="submit" id="submitBtn" class="btn btn-warning submit-button">Submit</button>';
                    } else {
                        echo '<button type="button" class="btn btn-warning" onclick="window.location.href=\'login.php\'">Login to Continue</button>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'layouts/footer.php'; ?>

    <script>
        $("#bookingform").submit(function(e) {
            e.preventDefault();

            let submitBtn = $("#submitBtn");
            submitBtn.text("Saving...").prop("disabled", true);

            $.ajax({
                url: "BookingController.php",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    alert(response.message);
                    $("#bookingform")[0].reset();
                    submitBtn.text("Submit").prop("disabled", false); // re-enable
                },
                error: function() {
                    submitBtn.text("Submit").prop("disabled", false);
                }
            });
        });
    </script>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
    <script src="js/animation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>