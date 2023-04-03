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

Route::get('/{resource}/{id?}', function (string $resource, string $id = '') {
    $api = 'https://jsonplaceholder.typicode.com';
    $response = HttpMock::get("$api/$resource/$id");
    return response($response, $response->status());
});


