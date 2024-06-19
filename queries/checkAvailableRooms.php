<?php
require_once('setup.php');
$mysqli = dbConnection();

function getBookings()
{
    $bookings = array();
    global $mysqli;
    $query = "SELECT * FROM bookings";
    $request = $mysqli->query($query);

    return $request;
}

function isOccupied($startDate, $endDate)
{
    global $mysqli;

    $startDate = date('Y-m-d', strtotime($startDate));
    $endDate = date('Y-m-d', strtotime($endDate));

    $bookingQuery = "SELECT COUNT(*) AS all_bookings FROM bookings WHERE check_in < '$endDate' AND check_out > '$startDate'";

    $request = $mysqli->query($bookingQuery);

    if ($request) {
        $row = mysqli_fetch_assoc($request);
        $all_bookings = (int) $row['all_bookings'];
        if ($all_bookings === 0) {
            return true;
        } else {
            return false;
        }
    } else {
        die('Error en la consulta');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inital_date = $_POST['arrival'] ?? '';
    $end_date = $_POST['departure'] ?? '';
    $isOcupied = isOccupied($inital_date, $end_date);
    if ($isOcupied) {
        echo "La habitacion esta disponible";
    } else {
        echo "<script>alert('Lo sentimos, no hay habitaciones disponibles en las fechas seleccionadas.')</script>";
    }
}

?>