<?php

namespace App\Mvc\Controllers;

use App\Mvc\Models\Model;

class Controller
{
    public function sendCurlRequest()
    {
        $model = new Model();
        $model->curlRequest();
    }

    public function sendGuzzleRequest()
    {
        $model = new Model();
        $model->guzzleRequest();
    }
}