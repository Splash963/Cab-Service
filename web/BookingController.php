<?php
header('Content-Type: application/json');
include_once "BookingFunctions.php";
$bookingFunctions = new BookingFunctions();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
