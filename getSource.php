<?php

	$id = $_POST['Filterid'];
	include("../../zugriff.php");
		if ($mysqli->connect_error) {
		$message['error'] = 'Datenbankverbindung fehlgeschlagen: ' . $mysqli->connect_error;
	}

	$stmt = $mysqli->prepare("SELECT SourceFeed_ID FROM FilterURL WHERE Filter_ID=?");
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	
	$response = array();
	
	foreach($result as $row){
		array_push($response, $row['SourceFeed_ID']);
	}
	
	print_r(json_encode($response));
?>