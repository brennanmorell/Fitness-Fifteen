<?php
	header("Content-Type: application/json");

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	if(isset($_POST['email']) && isset($_POST['first']) && isset($_POST['last'])){

		//empty fields
		if($_POST['email'] == "" || $_POST['first'] == "" || $_POST['last'] == ""){
			//required fields empty error
			echo json_encode(array(
			    "success" => false,
			    "message" => "Missing required fields."
			));
			exit;
		}

		//fields only whitespace
		if (ctype_space($_POST['email']) || ctype_space($_POST['first']) || ctype_space($_POST['last'])) {
			echo json_encode(array(
			    "success" => false,
			    "message" => "Missing required fields."
			));
			exit;
		}

		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			//email error
			echo json_encode(array(
				"success" => false,
				"message" => "Please enter a valid email address."
			));
			exit;
		}
		
		$first = test_input($_POST["first"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$first)) {
			//first name error
			echo json_encode(array(
				"success" => false,
				"message" => "Name fields may only consist of letters and whitespace."
			));
			exit;
		}

		$last = test_input($_POST["last"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
			//last name error
			echo json_encode(array(
				"success" => false,
				"message" => "Name fields may only consist of letters and whitespace."
			));
			exit;
		}

		echo json_encode(array(
			"success" => true,
			"message" => "Successfully validated all input fields"
		));
		exit;
	}
	else{
		echo json_encode(array(
			"success" => false,
			"message" => "Missing required fields."
		));
		exit;
	}	

?>
