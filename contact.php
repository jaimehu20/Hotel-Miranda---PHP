<?php
require_once('./setup.php');

echo $blade->run("contact", ["variable1" => "value1"]);

?>