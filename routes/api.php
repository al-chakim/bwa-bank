<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TopUpController;
use App\Http\Controllers\Api\WebHookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('test', function (Request $request) {
//     return 'success';
// })->middleware('jwt.verify');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/webhooks', [WebHookController::class, 'update']);

Route::group(['middleware' => 'jwt.verify'], function($router){
    Route::post('/top-ups', [TopUpController::class, 'store']);
});
