<?php
	$mysqli = new mysqli('localhost', 'brennanmorell', 'Sn00pD0gg', 'wordpress'); //unsecure. Needs to be changed

	if($mysqli->connect_errno){
	       printf("Connection failed: %s\n", $mysqli->connect_error);
	       exit;
	}
?>
