<?php

namespace App\Http\Controllers\Api;

class OrderController extends Controller
{
    // 商品详情
    public function show()
    {
    	return $this->success([
    			'students' => 46,
    			'time' => 30 * 60 * 60 * 1000,
    			'courseName' => '美术世界培训班四年级语文重点特训班(提分训练营)',
    			'courseTime' => '6月15日-6月19日 开课',
    			'bookList' => [
    				[
	    				'id' => 1, 
	    				'title' => '【暑假特训班】基础知识手册',
    					'tip' => '免费包邮',
    					'img' => 'https://img.yzcdn.cn/vant/cat.jpeg',
    				],
    			],
    			'coursePrice' => 36
    	]);
    }
}