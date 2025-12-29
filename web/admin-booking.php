<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <head>
        <link href="images/icons/Logo.png" rel="icon">
    </head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <?php

    $currentPage = 'admin-booking';

    session_start();
    if (!isset($_SESSION['user_type'])) {
        header("Location: login.php");
        exit();
    }
    if ($_SESSION['user_type'] !== 'admin') {
        header("Location: index.php");
        exit();
    }
    ?>

    <?php include('layouts/offcanvas.php') ?>
    <?php include('layouts/spinner.php') ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>