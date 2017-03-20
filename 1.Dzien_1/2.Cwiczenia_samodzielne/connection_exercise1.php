<?php

$serverName = 'localhost';
$userName = 'root';
$password = 'coderslab';
$database = 'cinemas_db';

$conn = new mysqli($serverName, $userName, $password, $database); //tworzymu nowe połączenie poprzez objekt $conn

//sprawdzamy czy polaczenie udalo sie
if($conn->connect_error){
    die("Polaczenie nieudane. Blad: " . $conn->connect_error);
}
//ustawiamy zestaw znakow dla polaczenia
$conn->set_charset("utf8");
