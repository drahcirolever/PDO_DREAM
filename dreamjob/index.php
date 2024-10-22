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
	<h3>Welcome to the Game Management System. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="game">Game</label> <input type="text" name="game"></p>
		<p><label for="price">Price</label> <input type="text" name="price"></p>
		<p><label for="date_release">Date Release</label> <input type="text" name="date_release"></p>
		<p><label for="age_requirement">Age Requirement</label> <input type="text" name="age_requirement"></p>
		<p><label for="genre">Genre</label> <input type="text" name="genre"></p>
		<p><label for="size">Size</label> <input type="text" name="size"></p>
		<p><label for="developer">Developer</label> <input type="text" name="developer">
			<input type="submit" name="insertNewGameBtn">
		</p>

	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Game ID</th>
	    <th>Game</th>
	    <th>Price</th>
	    <th>Date Release</th>
	    <th>Age Requirement</th>
	    <th>Genre</th>
	    <th>Size</th>
	    <th>Developer</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllGameRecords = seeAllGameRecords($pdo); ?>
	  <?php foreach ($seeAllGameRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['game_id']; ?></td>
	  	<td><?php echo $row['game']; ?></td>
	  	<td><?php echo $row['price']; ?></td>
	  	<td><?php echo $row['date_release']; ?></td>
	  	<td><?php echo $row['age_requirement']; ?></td>
	  	<td><?php echo $row['genre']; ?></td>
	  	<td><?php echo $row['size']; ?></td>
	  	<td><?php echo $row['developer']; ?></td>
	  	<td>
	  		<a href="editgame.php?game_id=<?php echo $row['game_id'];?>">Edit</a>
	  		<a href="deletegame.php?game_id=<?php echo $row['game_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>

</body>
</html>