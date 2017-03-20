<?php

/*
CREATE TABLE Product_Order (
id INT PRIMARY KEY AUTO_INCREMENT,
product_id INT NOT NULL,
order_id INT NOT NULL,
FOREIGN KEY(product_id) REFERENCES Product(id) ON DELETE CASCADE,
FOREIGN KEY(order_id) REFERENCES `Order`(id) ON DELETE CASCADE
);
INSERT INTO Product_Order(product_id, order_id) VALUES
(1,3)
(1,2)
(2,3) 
(7,2)
 */

require_once 'Connection.php';

$query = 'SELECT `Order`.id AS order_id, 
		`Order`.description AS order_description,
		Product.id AS product_id,
		Product.name
		FROM `Order` 
		LEFT JOIN Product_Order ON `Order`.id = Product_Order.order_id
		LEFT JOIN Product ON Product.id = Product_Order.product_id';

if($result = $conn->query($query)) {
	
	echo 'Wszystkie zamowienia:<br>';
        
        $orders = [];
        foreach ($result as $row) {
            if(!isset($orders[$row['order_id']])){
                $orders[$row['order_id']] = [];
                $orders[$row['order_id']] ['description'] = $row['order_description'];
                $orders[$row['order_id']]['products'] = [];
            }
            if ($row['product_id']){
                    $orders[$row['order_id']]['products'][] = $row['name'];
            }
            
        }
        
        foreach($orders as $order) {
		echo $order['description'] . '<br>';
		if($order['products']) {
			echo 'Products: <br>';
			foreach($order['products'] as $product) {
				echo $product . '<br>';
			}
		}
		echo '<br>';
                
	}
}


$query = 'SELECT `Order`.id AS order_id, 
		`Order`.description AS order_description,
		Product.id AS product_id,
		Product.name
		FROM Product 
		LEFT JOIN Product_Order ON Product.id = Product_Order.product_id
		LEFT JOIN `Order` ON `Order`.id = Product_Order.order_id';

if($result = $conn->query($query)) {
	echo 'Wszystkie Produkty:<br>';
	
	$products = [];
	foreach($result as $row) {
		if(!isset($products[$row['product_id']])) {
			$products[$row['product_id']] = [];
			$products[$row['product_id']]['name'] = $row['name'];
			$products[$row['product_id']]['orders'] = [];
		}
		if($row['order_id']) {
			$products[$row['product_id']]['orders'][] = $row['order_description'];
		}
	}
	
	foreach($products as $product) {
		echo $product['name'] . '<br>';
		if($product['orders']) {
			echo 'Orders:<br>';
			foreach($product['orders'] as $order) {
				echo $order . '<br>';
			}
		}
		echo '<br>';
	}
}
$conn->close();
$conn = null;

