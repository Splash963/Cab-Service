<?php
header('Content-Type: application/json');
include_once "BookingFunctions.php";
$bookingFunctions = new BookingFunctions();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $result = $conn->query("SELECT booking_id FROM booking ORDER BY booking_id DESC LIMIT 1");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lastId = $row['booking_id'];
        $num = (int)str_replace("booking_", "", $lastId);
        $nextNum = $num + 1;
    } else {
        $nextNum = 1;
    }
    $booking_id = "booking_" . $nextNum;

    $user_id = $_POST['user_id'];
    $phone_no = $_POST['phone_no'];
    $no_of_dates = $_POST['no_of_dates'];
    $pickup_location = $_POST['pickup_location'];
    $drop_location = $_POST['drop_location'];
    $pickup_date = $_POST['pickup_date'];
    $pickup_time = $_POST['pickup_time'];
    $vehicle_type = $_POST['vehicle_type'];
    $ride_type = $_POST['ride_type'];
    $additional_notes = $_POST['additional_notes'];

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
        $additional_notes
    );

    echo json_encode([
        'success' => $result,
        'message' => $result ? 'Booking added successfully!' : 'Insert failed'
    ]);
}
