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
	<?php
    require_once 'core/dbConfig.php';
    require_once 'core/models.php';

    if (isset($_POST['insertNewStudentBtn'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $gender = $_POST['gender'];
        $yearLevel = $_POST['yearLevel'];
        $dream = $_POST['dream'];
        $religion = $_POST ['religion'];

        $query = insertIntoStudentRecords($pdo, $firstname, $lastName,
        $gender, $yearLevel, $dream, $religion);

        if ($query) {
            header("Location: ../index.php");
        }  
        
        else {
            echo "Query Failed";
        }

    


    }
