<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/v1/sharo_example', 'SharoExampleController@index');

Route::get('/v1/users/{id}', function ($id) {
    /*================
    /v1/users/:id の id を返すサンプル
    ================*/
    return ["id" => $id];
});

Route::get('/v1/auth', 'AuthController@read');
Route::post('/v1/register', 'RegisterController@post');
Route::get('/v1/register/confim', 'ConfimController@get');
