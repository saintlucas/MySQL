<?php

require_once 'Connection.php';

$cinemas = array();
$movies = array();

$cinemasQuery = "SELECT * FROM Cinemas";
$result = $conn->query($cinemasQuery);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$cinemas[] = $row;
	}
}

$moviesQuery = "SELECT * FROM Movies";
    $result = $conn->query($moviesQuery);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$movies[] = $row;
	}
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if($_POST['cinema_id'] && $_POST['movie_id'] && $_POST['date'] && $_POST['time']) {
		$dateTime = $_POST['date'].' '.$_POST['time'].':00';
		$insertQuery = "INSERT INTO Screenings(movie_id, cinema_id, date_time) VALUES ({$_POST['movie_id']}, {$_POST['cinema_id']}, '$dateTime')";
		if($conn->query($insertQuery)) {
			echo 'New screening added successfully';
		} else {
			echo 'Error occured while adding a new screening';
		}
	} else {
		echo 'Incorrect data';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>add screening</title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
		        <label>
		        	Cinema
		        	<select name="cinema_id">
		        		<?php foreach($cinemas as $cinema):?>
		        			<option value="<?php echo $cinema['id']?>"><?php echo $cinema['name']?></option>
		        		<?php endforeach;?>
		        	</select>
		        </label>
		        <br />
		        <label>
		        	Movie
		        	<select name="movie_id">
		        		<?php foreach($movies as $movie):?>
		        			<option value="<?php echo $movie['id']?>"><?php echo $movie['name']?></option>
		        		<?php endforeach;?>
		        	</select>
		        </label>
		        <br />
		        <label>
		        	Date		        	
		        	<input type="date" name="date" />
		        </label>
		        <br />
		        <label>
		        	Time		        	
		        	<input type="time" name="time" />
		        </label>
		        <br />
		        <input type="submit" value="Add screening" />
	        </fieldset>
	  	</form>
	</body>
</html>
