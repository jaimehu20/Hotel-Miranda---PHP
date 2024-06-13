<?php
require_once('./setup.php');
require_once('./getRooms.php');

echo $blade->run("rooms", ["rooms" => $rooms]);

?>