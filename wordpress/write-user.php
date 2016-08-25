<?php
	require 'f15-db.php';
	header("Content-Type: application/json");

	if(isset($_POST["email"]) && isset($_POST['first']) && isset($_POST['last'])){
		$email = $_POST["email"];
		$first = $_POST["first"];
		$last = $_POST["last"];
		$date = date('Y:m:d H:i:s');

		//check if user exists
		$checkExistingUser = $mysqli->PREPARE("SELECT COUNT(*) FROM f15_pre_launch WHERE email=?");
        $checkExistingUser->bind_param('s', $email);
        if(!$checkExistingUser){
			echo json_encode(array(
				"success" => false,
				"message" => "Failed to write user to db."
			));
			exit;
        }
        $checkExistingUser->execute();
        $checkExistingUser->bind_result($exists);
        $checkExistingUser->fetch();
        $checkExistingUser->close();

        if($exists > 0){
			echo json_encode(array(
				"success" => false,
				"message" => "User already exists with this email."
			));
			exit;
        }
        
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
