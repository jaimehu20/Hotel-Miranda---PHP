<?php
require_once('./setup.php');
require_once('./queries/getRooms.php');
require_once('./queries/checkAvailableRooms.php');

echo $blade->run("index", ["rooms" => $rooms]);  

?>