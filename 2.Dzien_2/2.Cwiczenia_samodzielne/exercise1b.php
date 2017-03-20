<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	require_once 'Connection.php';
        
        $query = "SELECT * FROM Tickets 
			LEFT JOIN Payments ON Tickets.id = Payments.ticket_id";
        
        if($_POST['payment_type']) {
		$query .= " WHERE Payments.type = '{$_POST['payment_type']}'";
	} else {
		$query .= " WHERE Payments.ticket_id IS NULL";
	}
	
	$result = $conn->query($query);
	if($result->num_rows > 0) {
		echo '<table>';
		echo '<tr><th>id</th><th>quantity</th><th>price</th><th>payment type</th></tr>';
		while($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo '<td>'.$row['id'].'</td>';
			echo '<td>'.$row['quantity'].'</td>';
			echo '<td>'.$row['price'].'</td>';
			echo '<td>'.$row['type'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>show the tickets</title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
		        <label>
		        	Payment type
		        	<select name="payment_type">
		        		<option value="">not paid</option>
		        		<option value="card">card</option>
		        		<option value="cash">cash</option>
						<option value="transfer">transfer</option>
		        	</select>
		        </label>
		        <br />
		        <input type="submit" value="Show tickets" />
	        </fieldset>
	  	</form>
	</body>
</html>