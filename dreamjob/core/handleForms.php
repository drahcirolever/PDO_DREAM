<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertNewGameBtn'])) {
    $game_id = ($_GET['game_id']);
    $game = ($_POST['game']);
	$price = ($_POST['price']);
	$date_release = ($_POST['date_release']);
	$age_requirement = ($_POST['age_requirement']);
	$genre = ($_POST['genre']);
	$size = ($_POST['size']);
	$developer = ($_POST['developer']);

    if (!empty($game) && !empty($price) && !empty($date_release) && !empty($age_requirement) && !empty($genre)  && !empty($size)  && !empty($developer)) {
        $query = insertIntoGameRecords($pdo, $game, $price, 
        $date_release, $age_requirement, $genre, $size, $developer);

    if ($query) {
        header("Location: ../index.php");
    }

    else {
        echo "Insertion failed";
    }
}

else {
    echo "Make sure that no fields are empty";
}

}


if (isset($_POST['editGameBtn'])) {
$game_id = trim($_GET['game_id']);
$game = trim($_POST['game']);
$price = trim($_POST['price']);
$date_release = trim($_POST['date_release']);
$age_requirement = trim($_POST['age_requirement']);
$genre = trim($_POST['genre']);
$size = trim($_POST['size']);
$developer = trim($_POST['developer']);

if (!empty($game_id) && !empty($game) && !empty($price) && !empty($date_release) && !empty($age_requirement) && !empty($genre) && !empty($size) && !empty($developer)) {

    $query = updateAGame($pdo, $_GET['game_id'], $game, $price, $date_release, $age_requirement, $genre, $size, $developer);

    if ($query) {
        header("Location: ../index.php");
    }
    else {
        echo "Update failed";
    }

}

else {
    echo "Make sure that no fields are empty";
}

}





if (isset($_POST['deleteGameBtn'])) {

$query = deleteAGame($pdo, $_GET['game_id']);

if ($query) {
    header("Location: ../index.php");
}
else {
    echo "Deletion failed";
}
}




?>