<?php

namespace App\Mvc\Models;

use GuzzleHttp\Client;

class Model
{
    public function curlRequest()
    {
        $vendorName = 'Picture This Wedding: We offer Micro-Wedding Packages!';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://www.theknot.com/marketplace/picture-this-wedding-we-offer-microwedding-packages-dover-nh-2001934");
        curl_setopt($ch, CURLOPT_HTTPGET, 1);

        // Receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $serverResponse = curl_exec($ch);

        curl_close($ch);

        // echo $serverResponse;
        var_dump($serverResponse);
        // var_dump($this->checkIfStringContainsVendorName($serverResponse, $vendorName));

        // echo substr($serverResponse, 0);

        /*$pattern = '/\{.*\}/s';
        preg_match($pattern, $serverResponse, $matches);
        var_dump($matches);*/
    }

    public function guzzleRequest()
    {
        $client = new Client();

        // var_dump($client);
        // die();

        $response = $client->request('GET', 'https://www.theknot.com/marketplace/picture-this-wedding-we-offer-microwedding-packages-dover-nh-2001934');
        // $response = $client->request('GET', 'http://laravel2023.project/test-route');

        // var_dump($response);

        echo $response->getStatusCode();
        // echo $response->getHeaderLine('content-type');
        echo $response->getBody();

        // Send an asynchronous request.
        // $request = new \GuzzleHttp\Psr7\Request('GET', 'https://www.theknot.com/marketplace/picture-this-wedding-we-offer-microwedding-packages-dover-nh-2001934');
        // $promise = $client->sendAsync($request)->then(function ($response) {
        //     echo 'I completed! ' . $response->getBody();
        // });

        // $promise->wait();
    }

    private function checkIfStringContainsVendorName($string, $vendorName)
    {
        if(str_contains($string, $vendorName)) {
            // echo 'found vendor name';
            return true;
        }

        return false;
    }
}