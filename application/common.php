<?php

// 应用公共文件
function &load_wechat_app()
{
    static $wechat;
    if (!isset($wechat)) {
        $config = [
            'app_id' => "wx9063667218217d08",
            'secret' => "8c2391e3ccfabee663aec6620af91a47",
            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'token' => '',          // Token
            'response_type' => 'array',
            "aes_key" => '',
            'http' => [
                'timeout' => 300.0,
            ],
        ];
        $wechat = \EasyWeChat\Factory::officialAccount($config);
    }

    return $wechat;
}