<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>

    <!-- Navbar -->
    <?php
    $currentPage = 'contact';
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
                <h1 class="display-4 main-title">Get in Touch</h1>
                <p class="lead text-black">We would love to hear from you!</p>
            </div>
        </div>
    </div>
    <img src="images/Footer/footer.png" class="footer-img" alt="...">

    <!-- Contact Form -->
    <div class="container contact-form-container mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center titles mt-4 mb-4">Contact Us</h2>
                <form class="booking-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label text-black" for="exampleRadios1">
                            Review
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label text-black" for="exampleRadios2">
                            Question
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Review/Question</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="text-center titles mt-4 mb-4">Our Location</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3963.0035107713115!2d79.93563907475443!3d6.646483993348147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMzgnNDcuMyJOIDc5wrA1NicxNy42IkU!5e0!3m2!1sen!2slk!4v1753497705699!5m2!1sen!2slk" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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