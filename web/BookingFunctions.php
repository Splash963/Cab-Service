<?php
include "db.php";

class BookingFunctions
{
    public function insert(
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
    ) {

        global $conn;

        try {

            $stmt = $conn->prepare("INSERT INTO booking (user_id, phone_no, no_of_dates, pickup_location, drop_location, pickup_date, pickup_time, vehicle_type, ride_type, additional_notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("ssssssssss", $user_id, $phone_no, $no_of_dates, $pickup_location, $drop_location, $pickup_date, $pickup_time, $vehicle_type, $ride_type, $additional_notes);

            return $stmt->execute();
        } catch (mysqli_sql_exception $e) {
            die("Insert Data Failed :" . $e->getMessage());
        }
    }
}
