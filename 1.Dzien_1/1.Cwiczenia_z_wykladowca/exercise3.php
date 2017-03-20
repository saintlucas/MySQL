<?php

/*
INSERT INTO Porduct (name, description) VALUES ('Product1 1', 'Product desc 1');
INSERT INTO Porduct (name, description) VALUES ('Product1 2', 'Product desc 2');
INSERT INTO Porduct (name, description) VALUES ('Product1 3', 'Product desc 3');


INSERT INTO `Order` ( description) VALUES ('Order 234');
INSERT INTO `Order` ( description) VALUES ('Order 44');
INSERT INTO `Order` ( description) VALUES ('Order 2');

INSERT INTO Client ( name, surname)
VALUES ('Client 1', 'Surname 1'), ('Client 2','Surname 2')
*/

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     if(isset($_POST['name']) && strlen(trim($_POST['name'])) > 0){
        require_once 'connection.php';
        
        $name = trim($_POST['name']); 
        $description = trim($_POST['description']); 
        $productQuery = "INSERT INTO Product(name, description)
                 VALUES('$name', '$description')";
         
        if($conn->query($productQuery)){
            echo 'Product added id: '.$conn->insert_id. '<br>'; //na obiekcie conn wykonam metode query
            
        }  else {
            echo 'Error while adding product<br>';
        }
        
        $conn->close(); //wykonujemy metode close(zamkniecie polaczenia) na objekcie conn
        $conn = null;
     }
}


?>

<form method="POST">
    <label>
        Name:<br>
        <input type="text" name="name"/>
    </label>
    <br>
    <label>
        Description:<br>
        <textarea rows="8" cols="30" name="description"></textarea>>
    </label>
    <br>
    <input type="submit" value="Add product">
</form>