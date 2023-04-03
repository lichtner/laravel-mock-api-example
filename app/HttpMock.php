<?php

namespace App;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Lichtner\MockApi\MockApi;

class HttpMock
{
    public static function get($url): Response
    {
        MockApi::init($url);

        $response = Http::get($url);

        MockApi::log($url, $response);

        return $response;
    }
}
