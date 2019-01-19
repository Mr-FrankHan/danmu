<?php
namespace app\wechat\controller;

class Index
{
    public function index()
    {
        $app = load_wechat_app();
        $app->server->push(function ($message) {
            return $message['Content'];
        });

        $response = $app->server->serve();

        // 将响应输出
        $response->send();
    }
}