<?php
$access_token = '6dicd9KuJuDb0tVJ9z93+S2cdG3ly4RIkuBgmyiWPy8N26FJmAUs1zUmsO6gm+u0qW/rOTggUXplHjr81FqBccnEW3K2XI/0FEdQEkhc8SkJHaWo8A+p+jGxYPJY1Hpdfda0Kq2uRDRgVL0sBUk8agdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
