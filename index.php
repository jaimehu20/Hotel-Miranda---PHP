<?php
require_once('./setup.php');
dbConnection();
echo $blade->run("index", ["variable1" => "value1"]);

?>