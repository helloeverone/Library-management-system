<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\ligongUserinfo;
use app\index\model\ligongBookadmin as BookadminModel;
use app\index\model\ligongSystemadmin;

class Login extends Controller
{
    public function login()
    {
//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
        return $this->fetch();
    }
    public function logincheck()
    {

        $data = input('post.');
        $user = new ligongUserinfo();
        $result = $user->where('Username',$data['username'])->find();
        if($result){
            if($result['Upass'] === md5($data['password'])){
                session('name', $data['username']);
                $this->success('登陆成功','User/readerPersonal');
            }
            else{
                $this->error('密码不正确');
            }
        }
        else{
            $this->error('用户名不正确');
        }
//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }

    public function adminlogincheck()
    {

        $data = input('post.');
        $user = new BookadminModel();
        $result = $user->where('Adname',$data['username'])->find();
        if($result){
            if($result['AdPassword'] === md5($data['password'])){
                session('name', $data['username']);
                $this->success('登陆成功','Admin/adCheckBook');
            }
            else{
                $this->error('密码不正确');
            }
        }
        else{
            $this->error('用户名不正确');
        }
//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }

    public function syslogincheck()
    {
        $data = input('post.');
        $user = new ligongSystemadmin();
        $result = $user->where('AdminName',$data['username'])->find();
        if($result){
            if($result['AdminPassword'] === md5($data['password'])){
                session('name', $data['username']);
                $this->success('登陆成功','Systemadmin/adminAddReader');
            }
            else{
                $this->error('密码不正确');
            }
        }
        else{
            $this->error('用户名不正确');
        }
//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }

}

