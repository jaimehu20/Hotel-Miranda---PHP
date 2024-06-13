<?php
require_once('./BladeOne.php');
use eftec\bladeone\BladeOne;

$connData = parse_ini_file(".env");

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);

function dbConnection(){
    $host = 'localhost';
    $username = 'root';
    $password = 'jaime123';
    $database = 'hotelmiranda';
    $port = 3306;

    $mysqli = new mysqli($host, $username, $password, $database, $port);
}
?>