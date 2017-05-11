<?php

	$id = $_POST['Filterid'];
	include("../../zugriff.php");
		if ($mysqli->connect_error) {
		$message['error'] = 'Datenbankverbindung fehlgeschlagen: ' . $mysqli->connect_error;
	}
	
	$stmt = $mysqli->prepare("SELECT SearchIndex FROM FilterKeyword WHERE Filter_ID=?");
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	
	$response = array();
	
	foreach($result as $row){
		$response[0] = $row['SearchIndex'];
	}
	
	$stmt = $mysqli->prepare("SELECT Inverted FROM FilterKeyword WHERE Filter_ID=?");
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	
	foreach($result as $row){
		$response[1] = $row['Inverted'];
	}
	
	print_r(json_encode($response));
?>