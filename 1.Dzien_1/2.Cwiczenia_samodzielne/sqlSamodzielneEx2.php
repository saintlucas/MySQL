<?php

/* 
 CREATE TABLE Kino (
 id INT PRIMARY KEY AUTO_INCREMENT,
 name TEXT,
 addres TEXT
 );
 
CREATE TABLE Film (
id INT PRIMARY KEY AUTO_INCREMENT,
name TEXT,
opis TEXT
);
 
 CREATE TABLE Bilet (
 id INT PRIMARY KEY AUTO_INCREMENT,
 ilosc VARCHAR(100) NOT NULL,
 cena FLOAT
 );
 
 CREATE TABLE Płatność (
 id INT PRIMARY KEY AUTO_INCREMENT,
 typ TEXT,
 data DATE
 );
  
 */

require_once 'sqlSamodzielneEx1.php';

$queries = array();

$queries ['Kino'] = '
CREATE TABLE Kino
(   
    id INT PRIMARY KEY AUTO_INCREMENT,
    name TEXT,
    address TEXT
 );';

$queries ['Film'] = '
CREATE TABLE Film
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name TEXT,
    opis TEXT
);';

$queries ['Bilet'] = '
CREATE TABLE Bilet
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ilosc VARCHAR(100) NOT NULL,
    cena FLOAT
);';

$queries ['Płatność'] = '
CREATE TABLE Płatność
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    typ TEXT,
    data DATE
);';


if(isset($queries)){
    echo ('tabele utworzone<br>');
} else{
    echo('brak tabel w bazie');
}

$queries['Rating_filmu'] = 'ALTER TABLE Film ADD COLUMN Rating DECIMAL(4,2)';

foreach($queries as $queryName => $query) {
	if($conn->query($query)) {
		echo 'Zapytanie ' . $queryName . ' wykonane poprawnie<br />';
	} else {
		echo 'Błąd przy zapytaniu ' . $queryName. ': ' . $conn->error . '<br />';
	}
}
