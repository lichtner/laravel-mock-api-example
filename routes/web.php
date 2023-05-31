<?php

use App\HttpMock;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get/{resource}/{id?}', function (string $resource, string $id = '') {
    $api = 'https://jsonplaceholder.typicode.com';
    $response = HttpMock::get("$api/$resource/$id");
    return response($response, $response->status());
});

Route::get('/post/posts', function () {
    $api = 'https://jsonplaceholder.typicode.com';
    $response = HttpMock::post("$api/posts", [
        'userId' => 1,
        'title' => 'title 1',
        'body' => 'body 1',
    ]);
    return response($response, $response->status());
});

Route::get('/put/posts/1', function () {
    $api = 'https://jsonplaceholder.typicode.com';
    $response = HttpMock::put("$api/posts/1", [
        'userId' => 1,
        'title' => 'title 1 updated',
        'body' => 'body 1 updated',
    ]);
    return response($response, $response->status());
});

Route::get('/patch/posts/1', function () {
    $api = 'https://jsonplaceholder.typicode.com';
    $response = HttpMock::patch("$api/posts/1", [
        'title' => 'title 1 patched',
    ]);
    return response($response, $response->status());
});

Route::get('/delete/posts/1', function () {
    $api = 'https://jsonplaceholder.typicode.com';
    $response = HttpMock::delete("$api/posts/1");
    return response($response, $response->status());
});





