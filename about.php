<?php
require_once('./setup.php');

echo $blade->run("about", ["variable1" => "value1"]);

?>