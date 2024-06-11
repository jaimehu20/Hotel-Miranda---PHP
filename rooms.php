<?php
require_once('./setup.php');

echo $blade->run("rooms", ["variable1" => "value1"]);

?>