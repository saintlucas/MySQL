<?php

require_once 'sqlEx1.php';

$productQuery = 'SELECT * FROM Product';

$result = $conn->query($productQuery);
if($result->num_rows > 0){
    foreach ($result as $product) {
        echo "{$product['id']}, {$product['name']}, {$product['description']}<br>";    
    }
}  else {
        echo 'No products to display';
}

