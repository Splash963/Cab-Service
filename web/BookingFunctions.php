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

    public function view()
    {

        global $conn;

        try {

            $result = $conn->query("
        SELECT 
            b.booking_id,
            u.name AS user_name,
            u.number,
            u.profile,
            b.phone_no,
            b.pickup_date,
            b.pickup_time,
            b.vehicle_type,
            b.ride_type,
            b.status
        FROM booking b
        INNER JOIN users u ON b.user_id = u.user_id
        ");

            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            die("Show Data Failed :" . $e->getMessage());
        }
    }

    public function pending()
    {
        global $conn;

        try {

            $result = $conn->query("
        SELECT 
            b.booking_id,
            u.name AS user_name,
            u.number,
            u.profile,
            b.phone_no,
            b.pickup_date,
            b.pickup_time,
            b.vehicle_type,
            b.ride_type,
            b.status
        FROM booking b
        INNER JOIN users u ON b.user_id = u.user_id
        WHERE b.status = 'pending'
        ");

            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            die("Show Data Failed :" . $e->getMessage());
        }
    }

    public function confirmed()
    {
        global $conn;

        try {

            $result = $conn->query("
        SELECT 
            b.booking_id,
            u.name AS user_name,
            u.number,
            u.profile,
            b.phone_no,
            b.pickup_date,
            b.pickup_time,
            b.vehicle_type,
            b.ride_type,
            b.status
        FROM booking b
        INNER JOIN users u ON b.user_id = u.user_id
        WHERE b.status = 'confirmed'
        ");

            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            die("Show Data Failed :" . $e->getMessage());
        }
    }
}
