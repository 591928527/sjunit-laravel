#lrj59/sjunit-laravel

这里是是对框架的介绍

#对于框架的要求

Laravel >=5.1 & php >7.1.3

#安装方式
····yml

composer require "lrj59/sjunit-laravel"

``````

#配置方式
5.5手动配置laravel对于sjunit服务放到config/app.php中

解释路由
····php
<?php
Route::get('/', 'SJunitController@index');
Route::post('/', 'SJunitController@store')->name('junit.store');
Route::get('test', 'TestController@index');
?>

