<?php
require_once('./setup.php');

echo $blade->run("offers", ["variable1" => "value1"]);

?>