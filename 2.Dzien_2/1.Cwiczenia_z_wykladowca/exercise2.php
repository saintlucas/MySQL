<?php

/*
CREATE TABLE Opinions (
id INT PRIMARY KEY AUTO_INCREMENT,
product_id INT NOT NULL,
description TEXT NOT NULL,
FOREIGN KEY(product_id) REFERENCES Product(id) ON DELETE CASCADE
);
 
INSERT INTO Opinions (product_id, description) VALUES
(1, 'Opinion 32'),
(2, 'Opinion332'),
(2, 'Opinion sfsd3'),
(3, 'Opinion 42');
 */

require_once 'Connection.php';

$query = 'SELECT Product.id AS product_id, 
		Product.name, 
		Product.description AS product_description,
		Opinions.id AS opinion_id, 
		Opinions.description AS opinion_description
		FROM Product 
		LEFT JOIN Opinions ON Product.id = Opinions.product_id';
//to było łączenie tabel LEFT relacją jeden do wielu


if($result = $conn->query($query)) {
	$products = [];
	foreach($result as $row) {
		if(!isset($products[$row['product_id']])) {
			$products[$row['product_id']] = [];
			$products[$row['product_id']]['name'] = $row['name'];
			$products[$row['product_id']]['description'] = $row['product_description'];
			$products[$row['product_id']]['opinions'] = [];
		}
		if($row['opinion_id']) {
			$products[$row['product_id']]['opinions'][] = $row['opinion_description'];
		}
	}
//to było tworzenie tabeli produktami i opiniami

foreach($products as $product) {
		echo 'Name: ' . $product['name'] . '<br>';
		echo 'Description: ' . $product['description'] . '<br>';
		if(count($product['opinions']) > 0) {
			echo 'Opinions:<br>';
			foreach($product['opinions'] as $opinion) {
				echo $opinion . '<br>';
			}
		}
		echo '<br>';
	}
}