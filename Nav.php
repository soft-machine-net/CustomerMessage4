<?php

namespace Plugin\CustomerMessage4;

use Eccube\Common\EccubeNav;

class Nav implements EccubeNav
{
    public static function getNav()
    {
        return [
            'customer' => [
                'children' => [
                    //設定項目にerronotify用のエラーログ項目を追加
                    'customer_message' => [
                        'name' => '会員メッセージ',
                        'url' => 'homepage',
                    ]
                ]
            ]
        ];
    }
}
