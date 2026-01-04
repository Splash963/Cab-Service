<?php

use PHPMailer\PHPMailer\PHPMailer;

header('Content-Type: application/json');
session_start();
include_once "BookingFunctions.php";
$bookingFunctions = new BookingFunctions();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $result = $conn->query("SELECT MAX(CAST(SUBSTRING(booking_id, 9) AS UNSIGNED)) AS max_id FROM booking");

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nextNum = $row['max_id'] + 1;
    } else {
        $nextNum = 1;
    }

    $booking_id = "booking_" . $nextNum;


    if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
        echo json_encode([
            'success' => false,
            'message' => 'User not logged in or session expired'
        ]);
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $phone_no = $_POST['phone_no'] ?? '';
    $no_of_dates = $_POST['no_of_dates'] ?? '';
    $pickup_location = $_POST['pickup_location'] ?? '';
    $drop_location = $_POST['drop_location'] ?? '';
    $pickup_date = $_POST['pickup_date'] ?? '';
    $pickup_time = $_POST['pickup_time'] ?? '';
    $vehicle_type = $_POST['vehicle_type'] ?? '';
    $ride_type = $_POST['ride_type'] ?? '';
    $additional_notes = $_POST['additional_notes'] ?? '';
    $status = "Pending";

    $result = $bookingFunctions->insert(
        $booking_id,
        $user_id,
        $phone_no,
        $no_of_dates,
        $pickup_location,
        $drop_location,
        $pickup_date,
        $pickup_time,
        $vehicle_type,
        $ride_type,
        $additional_notes,
        $status
    );

    if ($result) {
        $booking_id = $booking_id;
        $user_name = $_SESSION['user_name'] ?? '';
        $phone_no = $_POST['phone_no'] ?? '';
        $pickup_location = $_POST['pickup_location'] ?? '';
        $drop_location = $_POST['drop_location'] ?? '';
        $pickup_date = $_POST['pickup_date'] ?? '';
        $pickup_time = $_POST['pickup_time'] ?? '';
        $vehicle_type = $_POST['vehicle_type'] ?? '';
        $ride_type = $_POST['ride_type'] ?? '';
        $additional_notes = $_POST['additional_notes'] ?? '';
        $status = "Pending";

        ob_start();
        include "admin_view_mail.php";
        $mailBody = ob_get_clean();

        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'taxigeo123@gmail.com';
        $mail->Password   = 'iugz hgtr flql pgqt';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('taxigeo123@gmail.com', 'Taxi Geo');
        $mail->addAddress('theekshanahirushan10@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Booking Request';
        $mail->Body = $mailBody;

        $mail->send();
    }

    echo json_encode([
        'success' => $result,
        'message' => $result ? 'Booking added successfully!' : 'Insert failed'
    ]);
}
