<?php

namespace App;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Lichtner\MockApi\MockApi;

class HttpMock
{
    public static function get(string $url): Response
    {
        MockApi::init($url);

        $response = Http::get($url);

        MockApi::log($url, $response);

        return $response;
    }

    public static function post(string $url, array $data): Response
    {
        MockApi::init($url, $data, 'POST');

        $response = Http::post($url, $data);

        MockApi::log($url, $response, 'POST');

        return $response;
    }

    public static function put(string $url, array $data): Response
    {
        MockApi::init($url, $data, 'PUT');

        $response = Http::put($url, $data);

        MockApi::log($url, $response, 'PUT');

        return $response;
    }

    public static function patch(string $url, array $data): Response
    {
        MockApi::init($url, $data, 'PATCH');

        $response = Http::patch($url, $data);

        MockApi::log($url, $response, 'PATCH');

        return $response;
    }

    public static function delete(string $url): Response
    {
        MockApi::init($url, null, 'DELETE');

        $response = Http::delete($url);

        MockApi::log($url, $response, 'DELETE');

        return $response;
    }
}
