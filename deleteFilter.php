<?php
	$filterID = $_GET['text'];
	include("../../zugriff.php");
		if ($mysqli->connect_error) {
		$message['error'] = 'Datenbankverbindung fehlgeschlagen: ' . $mysqli->connect_error;
	}
	$stmt="DELETE FROM Filter WHERE ID=".$filterID;
	$mysqli->query($stmt);
	$stmt="DELETE FROM FilterURL WHERE Filter_ID=".$filterID;
	$mysqli->query($stmt);
	$stmt="DELETE FROM SourceFeed WHERE Filter_ID =".$filterID;
	$mysqli->query($stmt);
	$mysqli->close();
?>