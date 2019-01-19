<?php
namespace app\wechat\controller;

class Index
{
    public function index()
    {
        $app = load_wechat_app();
        $app->server->push(function ($message) {
            return $message['ToUserName']."+".$message['FromUserName']."+".$message['CreateTime']."+".$message['MsgId']."+".$message['MsgType']."+".$message['Content'];
        });

        $response = $app->server->serve();

        // 将响应输出
        $response->send();
    }
}