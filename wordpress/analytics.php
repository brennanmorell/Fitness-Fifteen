<?php
	require 'f15-db.php';
	header("Content-Type: application/json");

	$ip = $_SERVER['REMOTE_ADDR'];
	$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
	$city = $details->city;
	$region = $details->region;
	$organization = $details->org;
	$date = date('Y:m:d H:i:s');

	$writeVisit = $mysqli->PREPARE("INSERT INTO visits (ip, city, region, organization, date) VALUES (?,?,?,?,?)");
	if(!$writeVisit){
		echo json_encode(array(
			"success" => false,
			"message" => "Failed to track site visitor info."
		));
		exit;
	}
	$writeVisit->bind_param('sssss', $ip, $city, $region, $organization, $date);
	$writeVisit->execute();
	$writeVisit->close();


	echo json_encode(array(
		"success" => true,
		"message" => "Successfully tracked visitor info.",
	));
	exit;

?>
