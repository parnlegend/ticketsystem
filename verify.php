<?php
$access_token = '+weDl3+s6Oh3bp8+whhrc8cwFz34JBm9nWQB0XMNeg3fSXekwYMhGpZaQd7x2wSlYlfTY0xOrw8PBXk+67yvUhXDd7BsnYo9AN6xKnVhl+oT+TEnVfG/otCGRqL/JfQfeb8UzSsPnDT2ZtFbYtHyeAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;