<?php
/**
 * Created by PhpStorm.
 * User: fallstar
 * Date: 2019/7/28
 * Time: 18:22
 */

namespace Wxfallstar\SJunitLaravel\Http\Controllers;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index(){
        return "这个一个测试SJunit的测试控制器";
    }
}