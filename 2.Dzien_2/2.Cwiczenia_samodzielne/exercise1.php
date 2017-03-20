<?php

/*
CREATE TABLE Payments (
ticket_id INT NOT NULL,
type VARCHAR(60) NOT NULL,
date DATE NOT NULL,
PRIMARY KEY (ticket_id),
FOREIGN KEY(ticket_id) REFERENCES Tickets(id) ON DELETE CASCADE
);
*/

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['quantity'])) {
	//create a new ticket
        require_once 'Connection.php';

        $query = "INSERT INTO Tickets (quantity, price) VALUES ({$_POST['quantity']}, {$_POST['price']})";

        if($conn->query($query) === TRUE) {
                echo 'A new tikcet was bought<br />';
                if(isset($_POST['payment_type']) && $_POST['payment_type']) {
                        $ticketId = $conn->insert_id;
                        $paymentQuery = "INSERT INTO Payments VALUES ($ticketId, '{$_POST['payment_type']}', NOW())";
                        if($conn->query($paymentQuery) === TRUE) {
                                echo 'A new payment was added';
                        } else {
                                echo 'Error occured while adding a new payment';
                        }
                }
        } else {
		echo 'Error occured while buying a new ticket';
        }
                        
            $conn->close();
            $conn = null;
}
?>

<!Doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Buy a ticket</title>
    </head>
    
    <body>
        
        <form method="POST">
            <fieldset>
                <label>
                    Quantity
                    <input name="quantity" type="number" min="1" max="10" required= />
                </label>
                <br />
                <label>
                    Price
                    <select name="price">
                        <option value="14">14 PLN</option>
                        <option value="18">18 PLN</option>
                        <option value="20">20 PLN</option>
                    </select>
                </label>
                <br />
                <label>
                    Payment
                    <select name="payment_type">
                        <option value="">-</option>
                        <option value="card">card</option>
                        <option value="cash">cash</option>
                        <option value="transfer">transfer</option>
                    </select>
                </label>
                <br />
                <input type="submit" value="Buy" />
            </fieldset>
        </form>
    </body>
</html>