<?php
$access_token = 'crHidWVeiiN8uj7SAQRyWQckiB/neqPAcDL4ug41Y+5dviaOOKbnqElh3YwuGRmbqW/rOTggUXplHjr81FqBccnEW3K2XI/0FEdQEkhc8SmZrCVDl6gNb06lcK75QdbB7kvL2m27SfAKPaP0IwonzwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
