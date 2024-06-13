<?php
require_once('./setup.php');
dbConnection();
echo $blade->run("about", ["variable1" => "value1"]);

?>