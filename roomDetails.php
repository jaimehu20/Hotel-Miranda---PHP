<?php
require_once('./queries/getIndividualRoom.php');

echo $blade->run("roomDetails", ["roomDetails" => $roomDetails]);  

?>