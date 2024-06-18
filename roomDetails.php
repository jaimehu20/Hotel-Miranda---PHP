<?php
require_once('./queries/getIndividualRoom.php');
require_once('./queries/postNewBooking.php');

echo $blade->run("roomDetails", ["roomDetails" => $roomDetails]);  

?>