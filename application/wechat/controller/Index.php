<?php
namespace app\wechat\controller;

use EasyWeChat\Factory;

class Index
{
    public function index()
    {
        $app = load_wechat_app();
        $response = $app->server->serve();
        $response->send(); // Laravel 里请使用：return $response;
    }
}