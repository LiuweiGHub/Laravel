<?php

namespace App\Providers;

use function foo\func;
use Illuminate\Database\Connection;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * 是否延时加载提供器
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('view', function(){

        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Connection::class, function ($app) {
            return new Connection(config('risk'));
        });
    }

    /**
     * 获取提供器提供的服务
     * @return array
     */
    public function provides()
    {
        return [Connection::class];
    }
}
