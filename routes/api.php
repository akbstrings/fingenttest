<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//1 = 60 Seconds
//0.5 = 30 seconds.
//0.0167 = 1 second.

//To make 5 requests per second change to "throttle:5,0.0167"

Route::group(['prefix' => 'fingent','middleware' => ["throttle:1,0.0167"]],function ()
{

Route::get('/getusers', 'Api\UserApiController@GetUsers');

});
