<?php
namespace app\wechat\controller;

use EasyWeChat\Factory;

class Index
{
    public function index()
    {
        $config = [
            'app_id' => "wx9063667218217d08",
            'secret' => "8c2391e3ccfabee663aec6620af91a47",
            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'token' => '3FptRbZ6S809jCzeEi0hOTNePNiF26fR',          // Token
            'response_type' => 'array',
            "aes_key" => '',
            'http' => [
                'timeout' => 300.0,
            ],
        ];

        $app = Factory::officialAccount($config);
        $response = $app->server->serve();
        $response->send(); // Laravel 里请使用：return $response;
    }
}