<?php
/* CREATE DATABASE cinemas2_db;
 * 
 */

$serverName = 'localhost';
$userName = 'root';
$password = 'coderslab';
$database = 'cinemas2_db';

$conn = new mysqli($serverName, $userName, $password, $database);

if($conn->connect_error){
    die("Połączenie nieudane. Blad: ". $conn->conn_error);
}

$conn->set_charset("utf8");