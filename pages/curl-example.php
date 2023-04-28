<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.theknot.com/marketplace/picture-this-wedding-we-offer-microwedding-packages-dover-nh-2001934");
curl_setopt($ch, CURLOPT_HTTPGET, 1);

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$serverResponse = curl_exec($ch);

curl_close($ch);

// echo $serverResponse;

var_dump($serverResponse);