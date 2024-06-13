<?php
require_once('./setup.php');
dbConnection();
echo $blade->run("contact", ["variable1" => "value1"]);

?>