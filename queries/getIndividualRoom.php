<?php
require_once('setup.php');
$mysqli = dbConnection();

$roomId = (int) ($_GET['room'] ?? null);

$query_individualRoom = "SELECT * FROM rooms r JOIN room_amenities ra ON r._id = ra.room_id JOIN amenities a ON a.id = ra.amenity_id WHERE r._id = $roomId";

$request = $mysqli->query($query_individualRoom);

$roomDetails = [];
$amenities = [];

while ($row = mysqli_fetch_assoc($request)) {
    if (empty($roomdetails)) {
        $roomDetails = [
            '_id' => $row['_id'],
            'room_number' => $row['room_number'],
            'room_type' => $row['room_type'],
            'description' => $row['description'],
            'room_rate' => $row['room_rate'],
            'room_status' => $row['room_status']
        ];
    }
    if (!in_array($row['amenities'], $amenities)) {
        $amenities[] = $row['amenities'];
    }
}

$roomdetails['amenities'] = $amenities;

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
        echo "Reserva creada exitosamente.";
    } else {
        echo "Error al crear la reserva: ";
    }
}

?>