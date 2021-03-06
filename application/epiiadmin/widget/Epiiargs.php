<?php
/**
 * Created by PhpStorm.
 * User: mrren
 * Date: 2018/6/29
 * Time: ����1:29
 */

namespace app\epiiadmin\widget;


class Epiiargs
{


    public function data()
    {
        $manager = app(\wslibs\i\epiiadmin\IJavaScriptArgs::class);

        $data = [
            "baseUrl" => STATIC_URL_ROOT . "/js/",
            "appUrl" => WEB_SITE_ROOT."static/js/app/",
            "pluginsUrl" => "./plugins/",
            "epiiInitFunctionsName" => "epiiInitFunctions",
            "init_models" => [],
            "min" => "",
            "site_url" => WEB_SITE_ROOT,
            "version" => time(),
            "window_id"=>md5(request()->url()),
            "data"=>['title'=>""]
        ];

        $data['data'] = array_merge($data['data'],$manager->getData());
        if (isset($data['data']['appName'])) $data['appName'] = $data['data']['appName'];
        return json_encode($data);
    }
}