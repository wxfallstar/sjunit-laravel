<?php

namespace Wxfallstar\SJunitLaravel\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
/**
 * 这是单元测试的服务提供者
 * 用来加载sjunit组件
 *
 * 组件传统引用的方式composer require xxx
 *
 * 如何加载到laravel服务中
 * Created by PhpStorm.
 * User: fallstar
 * Date: 2019/7/28
 * Time: 18:29
 */
class SJunitServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        //echo '这是sjunit服务提供者1';
        //注册组件路由
        $this->registerRoutes();
        //自定义组件的名称，自定义的资源目录地址
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'sjunit'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            //定义访问路由的域名
            //'domain' => config('telescope.domain', null),
            //定义路由的命名空间
            'namespace' => 'Wxfallstar\SJunitLaravel\Http\Controllers',
            //这是前缀
            'prefix' => 'sjunit',
            //这是中间件
            'middleware' => 'web',
        ];
    }
}