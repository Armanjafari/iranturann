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
    // $sms = resolve(Notification::class);
    // $user = User::find(1);
    // $sms->sendSms($user,2222);
    // return auth()->user()->activeCode()->create([
    //     'code' => 23,
    //     'expired_at' => now()->addMinutes(1)
    // ]);
    //   return view('index');
    //dd(auth()->user()->can('add user'));
    //dd(auth()->user()->hasRole('teacher'));

use App\Role;
use App\services\Notifications\Notification;
use App\User;

Route::get('/', function () {
    auth()->user()->refreshRoles();

});
Route::namespace('Auth')->group(function () {
Route::get('logout/', 'LoginController@logout')->name('logout');
Route::get('login/', 'LoginController@showLoginForm');
Route::post('login/', 'LoginController@login')->name('login');
Route::post('register/', 'RegisterController@register')->name('register');
Route::get('register/', 'RegisterController@showRegistrationForm');
});
Route::namespace('Auth\AuthCode')->group(function () {
    Route::get('loginwithcode/' , 'LoginWithCodeController@showLoginForm');
    Route::post('loginwithcode/', 'LoginWithCodeController@login')->name('login_with_code');
    Route::get('verify', 'LoginWithCodeController@verifyForm')->name('verify_login_code');
    Route::post('verify', 'LoginWithCodeController@codeValidator')->name('validate_code');
});
Route::get('main', function () {
    return view('index');
});
// can:add post (for example)
Route::group(['prefix' => 'admin' , 'middleware' => 'role:admin'],function () { 
    Route::get('users/', 'UserController@index')->name('users.index');
    Route::get('users/{user}/edit','UserController@edit' )->name('users.edit');
    Route::post('users/{user}/edit','UserController@update' )->name('users.update');

    Route::get('roles', 'RoleController@index')->name('roles.index');
    Route::post('roles','RoleController@store')->name('roles.store');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
    Route::post('roles/{role}/edit','RoleController@update' )->name('roles.update');
    
});

Route::group([ 'namespace' => 'Product'],function () {
    Route::get('products', 'ProductController@index')->name('product.index');
    Route::get('basket/add/{product}', 'BasketController@add')->name('basket.add');
    Route::get('basket/clear/' , 'BasketController@clear');
    Route::get('basket/','BasketController@index')->name('basket.index');
    Route::post('basket/update/{product}','BasketController@update')->name('basket.update');
    Route::get('basket/checkout', 'BasketController@checkoutForm')->name('basket.checkout.form');
    Route::post('basket/checkout', 'BasketController@checkout')->name('basket.checkout');

});
Route::group([ 'namespace' => 'Product\Payment'],function () {

Route::post('payment/{gateway}/callback', 'PaymentController@verify')->name('payment.verify');
});

Route::group(['namespace' => 'Coupons'],function () {
    Route::post('coupons' , 'CouponsController@store')->name('coupons.store');
    Route::get('coupons/remove' , 'CouponsController@remove')->name('coupons.remove');

});
