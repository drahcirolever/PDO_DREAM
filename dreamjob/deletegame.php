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
	<h1>Are you sure you want to delete this game?</h1>
	<?php $getGameById = getGameById($pdo, $_GET['game_id']); ?>
	<form action="core/handleForms.php?game_id=<?php echo $_GET['game_id']; ?>" method="POST">

		<div class="gameContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>Game: <?php echo $getGameById['game']; ?></p>
			<p>Price: <?php echo $getGameById['price']; ?></p>
			<p>Date Release: <?php echo $getGameById['date_release']; ?></p>
			<p>Age Requirement: <?php echo $getGameById['age_requirement']; ?></p>
			<p>Genre: <?php echo $getGameById['genre']; ?></p>
			<p>Size: <?php echo $getGameById['size']; ?></p>
			<p>Developer: <?php echo $getGameById['developer']; ?></p>
			<input type="submit" name="deleteGameBtn" value="Delete">
		</div>
	</form>
</body>
</html>