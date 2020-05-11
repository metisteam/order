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

Route::prefix('v1')->namespace('Api')->name('api.v1.')->group(function () {
	Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {
        // 游客可以访问的接口
        Route::get('orders', 'OrderController@index');
   	});
}); 