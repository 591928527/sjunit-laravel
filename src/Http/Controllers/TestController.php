<?php
namespace Lrj59\SJunitLaravel\Http\Controllers;

use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index(){
         
        return "这是测试junit的一个控制器 测试的目标是与laravel集成的控制器和服务";
    }
}