<?php 

require_once 'dbConfig.php';

function insertIntoStudentRecords($pdo,$first_name, $last_name, $gender, $yearLevel, $dream, $religion) {

	$sql = "INSERT INTO student_records (first_name,last_name,gender,year_level,dream,religion) VALUES (?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $yearLevel, $dream, $religion]);

	if ($executeQuery) {
		return true;	
	}
}
?>