<?php
/**
 * This file will show a simple implementation of Chikka API SMS library
 * @author Ronald Allan Mojica
 * 
 */
//$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$message = $_POST['limitedtextarea'];


include('ChikkaSMS.php');

$clientId = '8d6230e313bd0e8bf63f956104465272f3d38832ef63efd4e8642f9bf3d59605';
$secretKey = '69ce8d5d0f044dda8425041ad7096823021bea382129f94a41daba54775f0382';
$shortCode = '292901606';
$chikkaAPI = new ChikkaSMS($clientId,$secretKey,$shortCode);
$response = $chikkaAPI->sendText('innovalynx123', $receiver, $message);


//if($response->status != 200){
	header("HTTP/1.1 " . $response->status . " " . $response->message);
//}
//This is a changed comment
//echo $response->description;

?>