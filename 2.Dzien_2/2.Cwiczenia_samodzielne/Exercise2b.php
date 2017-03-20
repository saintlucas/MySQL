<?php

require_once 'connection.php';
$movies = array();
$moviesQuery = "SELECT * FROM Movies";
$result = $conn->query($moviesQuery);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$movies[] = $row;
	}
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if($_POST['movie_id']) {
		$query = "SELECT DISTINCT Cinemas.* FROM Cinemas 
				JOIN Screenings ON Cinemas.id = Screenings.cinema_id 
				WHERE Screenings.movie_id = {$_POST['movie_id']}";
		$result = $conn->query($query);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo $row['id'].' ';
				echo $row['name'].' ';
				echo $row['adress'].'<br />';
			}
		} else {
			echo 'No cinema that currently play this movie';
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
		<title>show cinemas playing specified movie</title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
		        <label>
		        	Movie
		        	<select name="movie_id">
		        		<?php foreach($movies as $movie):?>
		        			<option value="<?php echo $movie['id']?>" <?php if(isset($_POST['movie_id']) && $_POST['movie_id'] == $movie['id']) {echo 'selected';}?>>
		        				<?php echo $movie['name']?>
		        			</option>
		        		<?php endforeach;?>
		        	</select>
		        </label>
		        <br />
		        <input type="submit" value="Show" />
	        </fieldset>
	  	</form>
	</body>
</html>