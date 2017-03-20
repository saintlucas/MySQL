<?php

$serverName = 'localhost';
$userName = 'root';
$password = 'coderslab';

$conn = new mysqli($serverName, $userName, $password);
if($conn->connect_error){
    die("Connect error:". $conn_error);
}else {
    echo 'Connection succesful';
}

$conn->close();    //na objekcie conn wywołamy metode close
$conn = null;