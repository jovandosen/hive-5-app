<?php

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://www.theknot.com/marketplace/picture-this-wedding-we-offer-microwedding-packages-dover-nh-2001934');

var_dump($response);

// echo $response->getStatusCode();
// echo $response->getHeaderLine('content-type');
// echo $response->getBody();

// Send an asynchronous request.
// $request = new \GuzzleHttp\Psr7\Request('GET', 'https://www.theknot.com/marketplace/picture-this-wedding-we-offer-microwedding-packages-dover-nh-2001934');
// $promise = $client->sendAsync($request)->then(function ($response) {
//     echo 'I completed! ' . $response->getBody();
// });

// $promise->wait();