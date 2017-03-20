<?php

/*
CREATE TABLE Kino (
 id INT PRIMARY KEY AUTO_INCREMENT,
name TEXT,
address TEXT
);


CREATE TABLE Film(
        id INT PRIMARY KEY AUTO_INCEREMENT,
        name TEXT,
        opis TEXT
);

CREATE TABLE Bilet(
        id INT PRIMARY KEY AUTO_INCREMENT,
        ilosc VARCHAR(100) NOT NULL,
        cena FLOAT
);

CREATE TABLE Platnosc(
        id INT PRIMARY KEY AUTO_INCREMENT,
        typ TEXT,
        data DATE
);

 

  
  
 */

require_once 'connection_exercise1.php';

$queries = array();


$queries['Cinema'] = '
CREATE TABLE Cinema
(
	id INT AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	address VARCHAR(255) NOT NULL,
	PRIMARY KEY(id)
);';

$queries['Movie'] = '
CREATE TABLE Movie
(
	id INT AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	description TEXT,
	PRIMARY KEY(id)
);';
$queries['Ticket'] = '
CREATE TABLE Ticket
(
	id INT AUTO_INCREMENT,
	quantity INT NOT NULL,
	price DECIMAL(9,2) NOT NULL,
	PRIMARY KEY(id)
);';
		
$queries['Payment'] = '
CREATE TABLE Payment
(
	id INT AUTO_INCREMENT,
	type VARCHAR(60) NOT NULL,
	date DATE NOT NULL,
	PRIMARY KEY(id)
);';


$queries['Movie_rating'] = 'ALTER TABLE Movie ADD COLUMN rating DECIMAL(4,2)';

foreach($queries as $queryName => $query) {
	if($conn->query($query)) {
		echo 'Zapytanie ' . $queryName . ' wykonane poprawnie<br />';
	} else {
		echo 'Błąd przy zapytaniu ' . $queryName. ': ' . $conn->error . '<br />';
	}
}
$conn->close();
$conn = null;