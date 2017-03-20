<?php

$serverName = 'localhost';
$userName = 'root';
$password = 'coderslab';
$databaseName = 'sqlEx1_db';

$conn = new mysqli($serverName, $userName, $password, $databaseName);

if($conn->connect_error){
    die('Connection error: '. $conn->connect_error);
} else {
echo 'Connection succesful<br>';
}


//$conn->close();
//$conn = null;