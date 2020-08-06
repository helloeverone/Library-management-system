<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
class Checklogin extends Controller
{
    //如果你的控制器类继承了\think\Controller类的话，可以定义控制器初始化方法_initialize，在该控制器的方法调用之前首先执行。
    public function _initialize()
    {
        //判断有无admin_username这个session，如果没有，跳转到登陆界面
        if(!session('name')){
            return $this->error('您没有登陆',url('Login/login'));
        }
    }
}