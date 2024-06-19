<?php
require_once('setup.php');
$mysqli = dbConnection();

$query = "SELECT * FROM rooms";
$request = $mysqli->query($query);

$rooms = array();

if($request->num_rows > 0) {
    while($row = $request->fetch_assoc()) {
        $rooms[] = $row;
    }
    return $rooms;
} else {
    echo "No results";
}

?>