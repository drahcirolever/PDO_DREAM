<?php 

require_once 'dbConfig.php';

function insertIntoGameRecords($pdo, $game, $price, $date_release, $age_requirement, $genre, $size, $developer) {

	$sql = "INSERT INTO game_records (game, price, date_release, age_requirement, genre, size, developer) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$game, $price, $date_release, $age_requirement, 
		$genre, $size, $developer]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllGameRecords($pdo) {
	$sql = "SELECT * FROM game_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getGameByID($pdo, $game_id) {
	$sql = "SELECT * FROM game_records WHERE game_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$game_id])) {
		return $stmt->fetch();
	}
}

function updateAGame($pdo, $game_id, $game, $price, 
	$date_release, $age_requirement, $genre, $size, $developer) {

	$sql = "UPDATE game_records 
				SET game = ?, 
					price = ?, 
					date_release = ?, 
					age_requirement = ?, 
					genre = ?, 
					size = ?, 
					developer = ? 
			WHERE game_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$game, $price, $date_release, 
		$age_requirement, $genre, $size, $developer, $game_id]);

	if ($executeQuery) {
		return true;
	}
}

function deleteAGame($pdo, $game_id) {

	$sql = "DELETE FROM game_records WHERE game_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$game_id]);

	if ($executeQuery) {
		return true;
	}

}
?>