<?php

namespace JuCloud\Extensions\Pay\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use JuCloud\Extensions\Pay\Gateways\Alipay;
use JuCloud\Extensions\Pay\Gateways\Wechat;

class Pay extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'pay.alipay';
    }

    /**
     * Return the facade accessor.
     *
     * @return Alipay
     */
    public static function alipay()
    {
        return app('pay.alipay');
    }

    /**
     * Return the facade accessor.
     *
     * @return Wechat
     */
    public static function wechat()
    {
        return app('pay.wechat');
    }
}
