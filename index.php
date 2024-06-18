<?php
require_once('./setup.php');
require_once('./queries/getRooms.php');

echo $blade->run("index", ["rooms" => $rooms]);  

?>