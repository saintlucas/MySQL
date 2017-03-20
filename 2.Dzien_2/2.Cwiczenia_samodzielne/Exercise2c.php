<?php

require_once 'connection.php';
$cinemas = array();
$cinemasQuery = "SELECT * FROM Cinemas";
$result = $conn->query($cinemasQuery);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$cinemas[] = $row;
	}
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if($_POST['cinema_id']) {
		$query = "SELECT DISTINCT Movies.* FROM Movies 
				JOIN Screenings ON Movies.id = Screenings.movie_id 
				WHERE Screenings.cinema_id = {$_POST['cinema_id']}";
		$result = $conn->query($query);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo $row['id'].' ';
				echo $row['name'].' ';
			}
		} else {
			echo 'No movies currently played at this cinema';
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
		<title>show movies played in specified cinema</title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
		        <label>
		        	Cinema
		        	<select name="cinema_id">
		        		<?php foreach($cinemas as $cinema):?>
		        			<option value="<?php echo $cinema['id']?>" <?php if(isset($_POST['cinema_id']) && $_POST['cinema_id'] == $cinema['id']) {echo 'selected';}?>>
		        				<?php echo $cinema['name']?>
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