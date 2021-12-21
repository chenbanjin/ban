<?php
/**
 * Created by PhpStorm
 * User: BanJin
 * Date: 2021/12/21
 * Time: 11:33
 */

namespace Ban;

use Illuminate\Support\ServiceProvider;
use Ban\EaseMobTestService;

class EaseMobTestProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/easemobtest.php' => config_path('easemobtest.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    public function register()
    {
        $this->app->singleton('easemobtest', function () {
            return new EaseMobTestService();
        });
    }
}
