<?php
require_once('setup.php');
$mysqli = dbConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $reservation_id = uniqid();
    $order_date = date('Y-m-d');
    $check_in = $_POST['check_in'] ?? '';
    $check_out = $_POST['check_out'] ?? '';
    $room_id = $roomDetails['_id'];
    $room_type = $roomDetails['room_type'];
    $special_request = $_POST['special_request'] ?? '';
    $status = 'Pending';

    $insertQuery = "INSERT INTO bookings
    (first_name, last_name, reservation_id, order_date, check_in, check_out, room_number, room_id, room_type, special_request, status) 
    VALUES 
    ('$first_name', '$last_name', '$reservation_id', '$order_date', '$check_in', '$check_out', {$roomDetails['room_number']}, {$roomDetails['_id']}, '{$roomDetails['room_type']}', '$special_request', '$status')";

    if ($mysqli->query($insertQuery)) {
        echo "<script>alert('¡Reserva lista! Recibirás un correo con los siguientes pasos...')</script>";
    } else {
        echo "<script>alert('¡Error al crear la reserva! Inténtalo de nuevo más tarde.')</script>";
    }
}
?>