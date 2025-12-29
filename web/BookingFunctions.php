<?php
include "db.php";

class BookingFunctions
{
    public function insert(
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
    ) {

        global $conn;

        try {

            $stmt = $conn->prepare("INSERT INTO booking (booking_id, user_id, phone_no, no_of_dates, pickup_location, drop_location, pickup_date, pickup_time, vehicle_type, ride_type, additional_notes, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("ssssssssssss", $booking_id, $user_id, $phone_no, $no_of_dates, $pickup_location, $drop_location, $pickup_date, $pickup_time, $vehicle_type, $ride_type, $additional_notes, $status);

            return $stmt->execute();
        } catch (mysqli_sql_exception $e) {
            die("Insert Data Failed :" . $e->getMessage());
        }
    }
}
