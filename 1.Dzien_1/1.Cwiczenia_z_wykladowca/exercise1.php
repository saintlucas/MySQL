<?php

//tworzenie nowej bazy danych CREATE DATABASE ecercises_db;

$serverName = 'localhost';
$userName = 'root';
$password = 'coderslab';
$databaseName = 'WAR_PHP_W_03_exercise_db';

$conn = new mysqli($serverName, $userName, $password, $databaseName);

if($conn->connect_error){
    die("Connect error:". $conn_error);
}else {
    echo 'Connection succesful';
}

$conn->close();    //na obiekcie conn wywołamy metode close
$conn = null;

