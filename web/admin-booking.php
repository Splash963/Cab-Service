<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Booking</title>

    <link href="images/icons/Logo.png" rel="icon">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>

    <head>

        <?php
        session_start();
        if (!isset($_SESSION['user_type'])) {
            header("Location: login.php");
            exit();
        }
        if ($_SESSION['user_type'] !== 'admin') {
            header("Location: index.php");
            exit();
        }

        $currentPage = "admin-booking";

        ?>

        <?php include('layouts/offcanvas.php') ?>
        <?php include('layouts/spinner.php') ?>
    </head>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>