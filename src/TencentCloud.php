<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Janhve\TencentCloud;

use Illuminate\Support\Facades\Facade;

/**
 * Class TencentCloud
 *
 * @mixin TencentCloudManage
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class TencentCloud extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return TencentCloudManage::class;
    }

    /**
     * 获取 Yunsou
     * @return \TencentCloud\Yunsou\V20191115\YunsouClient
     */
    public static function yunsou()
    {
        return static::getFacadeRoot()->with('yunsou');
    }

    /**
     * 获取 STS
     * @return \TencentCloud\Sts\V20180813\StsClient
     */
    public static function sts()
    {
        return static::getFacadeRoot()->with('sts');
    }

    /**
     * 获取 OCR
     * @return \TencentCloud\Ocr\V20181119\OcrClient
     */
    public static function ocr()
    {
        return static::getFacadeRoot()->with('ocr');
    }

    /**
     * 获取 Live
     * @return \TencentCloud\Live\V20180801\LiveClient
     */
    public static function live()
    {
        return static::getFacadeRoot()->with('live');
    }

    /**
     * 获取CDN
     * @return \TencentCloud\Cdn\V20180606\CdnClient
     */
    public static function cdn()
    {
        return static::getFacadeRoot()->with('cdn');
    }

    /**
     * 获取CMS
     * @return \TencentCloud\Cms\V20190321\CmsClient
     */
    public static function cms()
    {
        return static::getFacadeRoot()->with('cms');
    }

    /**
     * 获取视频点播
     * @return \TencentCloud\Vod\V20180717\VodClient
     */
    public static function vod()
    {
        return static::getFacadeRoot()->with('vod');
    }

    /**
     * 获取 SMS
     * @return \TencentCloud\Sms\V20190711\SmsClient
     */
    public static function sms()
    {
        return static::getFacadeRoot()->with('sms');
    }
}
