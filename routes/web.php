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
    // $sms = resolve(Notification::class);
    // $user = User::find(1);
    // $sms->sendSms($user,2222);
    // return auth()->user()->activeCode()->create([
    //     'code' => 23,
    //     'expired_at' => now()->addMinutes(1)
    // ]);
    return view('index');
});
Route::namespace('Auth')->group(function () {
Route::get('logout/', 'LoginController@logout')->name('logout');
Route::get('login/', 'LoginController@showLoginForm');
Route::post('login/', 'LoginController@login')->name('login');
Route::post('register/', 'RegisterController@register')->name('register');
Route::get('register/', 'RegisterController@showRegistrationForm');
});
    Route::get('loginwithcode/' , 'Auth\AuthCode\LoginWithCodeController@showLoginForm');
    Route::post('loginwithcode/', 'LoginController@login')->name('login_with_code');
    Route::post('a', 'LoginController@verifyCode')->name('verify_login_code');