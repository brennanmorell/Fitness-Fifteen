<?php

require_once "/usr/local/bin/vendor/autoload.php";

	if(isset($_POST["email"]) && isset($_POST['first']) && isset($_POST['last'])){
		$email = $_POST["email"];
		$first = $_POST["first"];
		$last = $_POST["last"];
		$date = date('Y:m:d H:i:s');

		//PHPMailer Object
		$mail = new PHPMailer;


		//From email address and name
		$mail->From = "b.morell@wustl.edu";
		$mail->FromName = "Webmaster Morell";

		//To address and name
		//$mail->addAddress("bpmorell13@yahoo.com", "Brennan Morell2");
		//$mail->addAddress("bpmorell13@yahoo.com"); //Recipient name is optional
		$mail->addAddress("fitnessfifteen@hotmail.com"); //Recipient name is optional

		//Address to which recipient will reply
		$mail->addReplyTo("b.morell@wustl.edu", "Reply");

		//CC and BCC
		//$mail->addCC("cc@example.com");
		//$mail->addBCC("bcc@example.com");

		//Send HTML or Plain Text email
		//$mail->isHTML(true);

		$mail->Subject = "New User Notification";
		$mail->Body = "A new user has signed up at fitnessfifteen.com Email: ".$email ." First: ".$first." Last: ".$last." Signup Date: ".$date;
		//$mail->AltBody = "This is the plain text version of the email content";

		if(!$mail->send()) 
		{
		    $mailError = $mail->ErrorInfo;
		    echo json_encode(array(
		        "success" => true,
		        "message" => "Failed to send email ".$mailError
		    ));
		} 
		else 
		{
		    echo json_encode(array(
		        "success" => true,
		        "message" => "Successfully sent email."
		    ));
		}
	}
	else{
		echo json_encode(array(
		    "success" => true,
		    "message" => "Failed to send email. Missing information."
		));
	}
?>

