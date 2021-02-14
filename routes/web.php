<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\services\Notifications\Notification;
use App\User;

Route::get('/', function () {
    $sms = resolve(Notification::class);
    $user = User::find(1);
    $sms->sendSms($user,2222);
});
Route::post('register/', 'Auth\RegisterController@register');
Route::get('register/', 'Auth\RegisterController@showRegistrationForm');