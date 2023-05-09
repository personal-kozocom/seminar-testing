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


Route::get('users', function () {
    return response()->json([
        [
            'id' => 'bff64842-ea1c-11ed-a05b-0242ac120003',
            'name' => 'Nguyen Huu Tuan',
            'email' => 'tuannh@kozo-japan.com',
        ]
    ]);
});
