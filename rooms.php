<?php
require_once('./setup.php');
dbConnection();
echo $blade->run("rooms", ["variable1" => "value1"]);

?>