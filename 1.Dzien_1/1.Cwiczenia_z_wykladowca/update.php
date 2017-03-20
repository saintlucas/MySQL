<?php

require_once 'connection.php';

$productUpdate = "UPDATE Product SET Name =  'Product 44' WHERE id = 60";
if($conn->query($productUpadate) && $conn->affected_rows == 1){
    echo "Product updated";   
}