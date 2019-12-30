<?php
namespace  Lrj59\SJunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class SJunitServiceProvider extends ServiceProvider
{
    public function register(){
        //echo "这是junit服务提供者";

        //注册组件路由
        $this->registerRoutes();

        //telescope 指定的组件的名称，自定义的资源目录地址
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'sjunit'
        );
    }

    public function boot(){

    }

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
            // 'domain' => config('telescope.domain', null), 
            //定义访问路由的命名空间
            'namespace' => 'Lrj59\SJunitLaravel\Http\Controllers',
            //这是前缀
            'prefix' => 'sjunit',
            //这是中间件
            'middleware' => 'web',
        ];
    }



}