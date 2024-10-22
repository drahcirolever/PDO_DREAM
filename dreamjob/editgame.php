<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getGameById = getGameById($pdo, $_GET['game_id']); ?>
	<form action="core/handleForms.php?game_id=<?php echo $_GET['game_id']; ?>" method="POST">
		<p>
			<label for="game">Game</label> 
			<input type="text" name="game" value="<?php echo $getGameById['game']; ?>">
		</p>
		<p>
			<label for="price">Price</label> 
			<input type="text" name="price" value="<?php echo $getGameById['price']; ?>">
		</p>
		<p>
			<label for="date_release">Date Release</label>
			<input type="text" name="date_release" value="<?php echo $getGameById['date_release']; ?>">
		</p>
		<p>
			<label for="age_requirement">Age Requirement</label>
			<input type="text" name="age_requirement" value="<?php echo $getGameById['age_requirement']; ?>">
		</p>
		<p>
			<label for="genre">Genre</label>
			<input type="text" name="genre" value="<?php echo $getGameById['genre']; ?>">
		</p>
		<p>
			<label for="size">Size</label>
			<input type="text" name="size" value="<?php echo $getGameById['size']; ?>"></p>
		<p>
			<label for="developer">Developer</label>
			<input type="text" name="developer" value="<?php echo $getGameById['developer']; ?>">
			<input type="submit" name="editGameBtn">
		</p>
	</form>
</body>
</html>