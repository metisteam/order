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

		// 商品列表
		// Route::get('goods', 'GoodController@index');
        // 商品详情
        Route::get('goods/{good}', 'GoodController@show');
        // 商品分类
        //Route::get('goods/{good}/categoies', 'GoodController@categoies');
        // 订单
        Route::resource('orders', 'OrderController')->only([
            'show'
        ]);         
   	});
}); 