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
		$stmt = $mysqli->prepare("SELECT * FROM SourceFeed WHERE ID=? AND Filter_ID=?");
		$stmt->bind_param("ii", $row['SourceFeed_ID'],$id);
		$stmt->execute();
		$result2 = $stmt->get_result();
		$cmp = "twit";
		foreach($result2 as $row2){
			$bool = substr_compare($row2['URL'], $cmp, 8, 4);
			if(!$bool){
				array_push($response, $row2['Title']);
			}
		}
	}
	
	print_r(json_encode($response));
?>