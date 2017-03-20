<?php

require_once 'connection.php';

$productQuery = 'SELECT * FROM Product';

//$conn->query($productQuery);  //podajemy do metody

$result = $conn->query($productQuery);
echo $result->num_rows;
echo '<br>';

if($result->num_rows > 0){
    foreach ($result as $product)
        echo "{$product['id']}, {$product['name']}, {$product['description']}<br> ";
        
}  else {
    echo 'No products to display';
    
}
