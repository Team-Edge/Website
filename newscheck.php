<?php
include("../../zugriff.php");
if ($mysqli->connect_error) {
$message['error'] = 'Datenbankverbindung fehlgeschlagen: ' . $mysqli->connect_error;
}
$stmt=$mysqli->prepare("UPDATE `Newsfeed`.`CustomFeed` SET `Newsletter` = ? WHERE `CustomFeed`.`ID` = ?");
$stmt->bind_param('ii',$check, $ID);

if($_POST['checked']=='false'){
	$check=1;
}else{
	$check=0;
}
$ID=strip_tags($_POST['text']);
$stmt->execute();
echo $check;
?>