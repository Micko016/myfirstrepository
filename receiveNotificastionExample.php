<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include('ChikkaSMS.php');
$clientId = '545755ee87a34179389b8e056b29a260186c8209ad453989ab1973e9f22306ea';
$secretKey = '1f5abdc1f5da7ff3dcb1208372f631dd1c5ced359fcdb88e5c55416c070e9ec3';
$shortCode = '29290301600';
$chikkaAPI = new ChikkaSMS($clientId, $secretKey, $shortCode);

if($_POST){
    
    if ($chikkaAPI->receiveNotifications() === null) {
            header("HTTP/1.1 400 Error");
            echo "Message has not been processed.";
        }
    else{
        echo "Message has been successfully processed.";
    }
    var_dump($chikkaAPI->receiveNotifications());
}
?>
