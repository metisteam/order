<?php

namespace App\Http\Controllers\Api;

class GoodController extends Controller
{
    // 商品详情
    public function show()
    {
    	return $this->success([
    			'pingList' => [
    				['id' => 1, 'avatar' => 'https://img.yzcdn.cn/vant/cat.jpeg', 'name' => '天下第一暗器' . rand(1 , 100), 'time' => 30 * 60 * 60 * 1000],
    				['id' => 2, 'avatar' => 'https://img.yzcdn.cn/vant/cat.jpeg', 'name' => '天下第一暗器'. rand(1 , 100), 'time' => 10 * 60 * 60 * 1000],
    				['id' => 3, 'avatar' => 'https://img.yzcdn.cn/vant/cat.jpeg', 'name' => '天下第一暗器'. rand(1 , 100), 'time' => 20 * 60 * 60 * 1000]
    			],
                'actions' => [
                    ['id' => 1, 'name' => '学前班'],
                    ['id' => 2, 'name' => '一年级'],
                    ['id' => 3, 'name' => '二年级']
                ]
    	]);
    }
}