<?php
require_once('./setup.php');
dbConnection();
echo $blade->run("offers", ["variable1" => "value1"]);

?>