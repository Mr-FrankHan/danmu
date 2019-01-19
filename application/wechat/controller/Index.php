<?php
namespace app\wechat\controller;

use EasyWeChat\Factory;

class Index
{
    public function index()
    {
        $app = load_wechat_app();
        $app->server->push(function ($message) {
            return "您好！欢迎使用 EasyWeChat!";
        });

        $response = $app->server->serve();

        // 将响应输出
        $response->send();
    }
}