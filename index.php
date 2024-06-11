<?php
require_once('./setup.php');

echo $blade->run("index", ["variable1" => "value1"]);

?>