<?php
require_once('./BladeOne.php');
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);

function dbConnection(){
    $host = 'localhost';
    $username = 'root';
    $password = 'jaime123';
    $database = 'hotelmiranda';
    $port = 3306;

    $connection = new mysqli($host, $username, $password, $database, $port); 
    return $connection;
}
?>