<?php
/**
 * Created by PhpStorm.
 * User: fallstar
 * Date: 2019/7/28
 * Time: 18:07
 */

namespace Wxfallstar\SJunitLaravel\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

/**
 * 这是一个控制器，需要继承一个Laravel所提供的控制器
 * Class SJunitController
 * @package Wxfallstar\SJunitLaravel\Http\Controllers
 */
class SJunitController extends Controller
{

    public function index(){
        return view("sjunit::index");
    }

    // 如下内容，想要丰富就自个完善吧
    //用来接收测试的请求
    public function store(Request $request)
    {
        $namespace  = $request->input('namespace');
        $className  = $request->input('className');
        $action     = $request->input('action');
        $param      = $request->input('param');
        $class = ($className == "") ? $namespace : $namespace.'\\'.$className;
        // 要提换的值  需要的结果
        $class = str_replace("/", "\\", $class);
        $object = new $class();
        $param = ($param == "") ? [] : explode('|', $param) ;
        $data = call_user_func_array([$object, $action], $param);
        return (is_array($data)) ? json_encode($data) : dd($data);
    }
}