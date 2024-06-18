<?php
require_once('./queries/getRooms.php');

echo $blade->run("rooms", ["rooms" => $rooms]);

?>