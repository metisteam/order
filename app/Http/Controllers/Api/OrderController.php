<?php

namespace App\Http\Controllers\Api;

class OrderController extends Controller
{
    public function index()
    {
    	return $this->success([
    			'pingList' => [
    				['id' => 1, 'avatar' => 'https://img.yzcdn.cn/vant/cat.jpeg', 'name' => '天下第一暗器', 'time' => 30 * 60 * 60 * 1000],
    				['id' => 2, 'avatar' => 'https://img.yzcdn.cn/vant/cat.jpeg', 'name' => '天下第一暗器', 'time' => 10 * 60 * 60 * 1000],
    				['id' => 3, 'avatar' => 'https://img.yzcdn.cn/vant/cat.jpeg', 'name' => '天下第一暗器', 'time' => 20 * 60 * 60 * 1000]
    			],
    			'animation' => false,
    			'srcImage' => 'https://img.huxiucdn.com/article/cover/202004/23/204858345271.jpg'
    	]);
    }
}