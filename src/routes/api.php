<?php

use App\Http\Controllers\NotificationsController;
use App\Models\Notifications;
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

Route::get('notifications', 'App\Http\Controllers\NotificationsController@findAllNotifications');
Route::post('notifications', 'App\Http\Controllers\NotificationsController@createOneNotification');
