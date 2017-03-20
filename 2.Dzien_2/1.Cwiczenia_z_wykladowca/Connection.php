<?php

$serverName = 'localhost';
$userName = 'root';
$password = 'coderslab';
$database = 'exercises_db';

$conn = new mysqli($serverName, $userName, $password, $database);
$conn->set_charset("utf8");

if($conn->connect_error) {
	die("Conect error: ".$conn->connect_error);
} else {
    echo ('Connection settled'). '<br>';
}
