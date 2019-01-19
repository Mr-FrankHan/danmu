<?php
namespace app\index\controller;

use EasyWeChat\Factory;

class Index{
    public function index(){
        // 一些配置
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

        // 使用配置来初始化一个公众号应用实例。
        $app = Factory::officialAccount($config);

        $response = $app->server->serve();

        // 将响应输出
        $response->send(); exit;
    }
}

