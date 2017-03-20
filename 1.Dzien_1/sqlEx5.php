<?php

if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0){
    require_once 'sqlEx1.php';
    
    $productId = $_GET['id'];
    $productQuery = "DELETE FROM Product WHERE id = $productId";
    if($conn->query($productQuery) && $conn->affected_rows == 1) {
        echo "Product $productId deleted";
    }
    
    $conn->close();
    $conn = null;
    
}


