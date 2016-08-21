<?php
	require 'f15-db.php';
	header("Content-Type: application/json");

	if(isset($_POST["email"]) && isset($_POST['first']) && isset($_POST['last'])){
		$email = $_POST["email"];
		$first = $_POST["first"];
		$last = $_POST["last"];
		$date = date('Y:m:d H:i:s');

		//sanitize input fields here TODO

		//Write user to f15__pre_launch
		$writeUser = $mysqli->PREPARE("INSERT INTO f15_pre_launch (email, first, last, date) VALUES (?,?,?, ?)");
		if(!$writeUser){
			echo json_encode(array(
				"success" => false,
				"message" => "Failed to write user to db."
			));
			exit;
		}
		$writeUser->bind_param('ssss', $email, $first, $last, $date);
		$writeUser->execute();
		$writeUser->close();

		echo json_encode(array(
			"success" => true,
			"message" => "Successfully added user to db."
		));
		exit;
	}
	else{
		echo json_encode(array(
			"success" => false,
			"message" => "Missing information to add user to db."
		));
		exit;
	}
?>
