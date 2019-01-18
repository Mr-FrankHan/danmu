<?php

namespace app\index\controller;

use think\Controller;

class Message extends Controller
{

    public function index()
    {
        $app = load_wechat_app();
        $response = $app->server->serve();

        // 将响应输出
        $response->send();exit;
    }
}