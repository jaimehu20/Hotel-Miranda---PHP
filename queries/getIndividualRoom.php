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

?>