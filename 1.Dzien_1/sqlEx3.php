<?php

/* 
INSERT INTO Product (name, description) VALUES ('Product 1, 'Product description 1');
INSERT INTO Product (name, description) VALUES ('Product 2', 'Prodcut description 2');
INSERT INTO Product (name, description) VALUES ('Product 3', 'Product desrciption 3'); 

INSERT INTO `Order` (description) VALUE ('Order 123'); 
INSERT INTO `Order` (description) VALUE ('Order 456');
INSERT INTO `Order` (description) VALUE ('Order 789');
 
INSERT INTO Client (name, surname) VALUE ('Client 1', 'Surname 1');
INSERT INTO Client (name, surname) VALUE ('Client 2', 'Surname 2');
INSERT INTO Client (name, surname) VALUE ('Client 3','Surname 3');
 */
 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['name']) && strlen(trim($_POST['name'])) > 0){
            require_once 'sqlEx1.php';
            
            $name = trim($_POST['name']);
            $description = trim($_POST['description']);
            $productQuery = "INSERT INTO Product (name, description)
                    VALUES ('$name', '$description')";
                        
            if($conn->query($productQuery)){
                    echo 'Product added, id: '.$conn->insert_id.'<br>';    
            } else {
                    echo 'Error while adding product<br>';
    
            }

            $conn->close();
            $conn = null;
        }

 }
?>


<form method="POST">
    <label>
        Name:<br>
        <input type="text" name="name"/>
    <label/>
    <br>
    <label>
        Description:<br>
        <textarea rows="8" cols="30" name="description"></textarea>
    <label/>
    <br>
    <input type="submit" value="Add product">
</form>
