<?php

use App\Http\Controllers\ApiControllers\ProductController;
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
Route::group(['prefix' => 'v1' ], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
        Route::post('register', 'AuthController@register');
        Route::post('reset', 'AuthController@reset');
        Route::post('loginwithcode', 'AuthController@loginWithCode');
    
    });
    Route::group([ 'namespace' => 'ApiControllers'],function () {
        Route::get('basket/add/{product}', 'ProductController@add')->name('basket.add');
        Route::get('basket/clear/' , 'ProductController@clear');
        Route::get('basket/','ProductController@index')->name('basket.index');
        Route::post('basket/update/{product}','ProductController@update')->name('basket.update');
        Route::get('basket/checkout', 'ProductController@checkoutForm')->name('basket.checkout.form');
        Route::post('basket/checkout', 'ProductController@checkout')->name('basket.checkout');
    
    });
});