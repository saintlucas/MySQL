<?php

if(isset($_GET['id']) && is_int($_GET['id']) && $_GET['id'] > 0) {   // czy mamy w tablicy get ustawiony parametr id i czy jest to liczba calkowita i czy jest wieksza od zera
    require_once 'connection.php';
    $product = $_GET['id']    ;
    $productQuery = "DELETE FROM Porduct WHERE id = $productId";
    if($conn->query($productQuery) && $conn->affected_rows == 1)
        echo "Product $productId deleted";
}

$conn->close();
$conn = null;