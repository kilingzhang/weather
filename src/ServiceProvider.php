<?php
/**
 * Created by PhpStorm.
 * User: kilingzhang
 * Date: 2018/8/21
 * Time: 23:17
 */

namespace Kilingzhang\Weather;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}