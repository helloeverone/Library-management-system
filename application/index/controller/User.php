<?php
namespace app\index\controller;
use think\Controller;
use app\admin\controller\Checklogin;
use app\index\model\ligongUserinfo as UserModel;
use app\index\model\ligongBookinfo as BookModel;
use app\index\validate\advalidate as SysadminValidate;
use app\index\model\ligongBorrowrecords as RecordModel;
use think\Session;

class User extends Controller
{
    public function readerPersonal()
    {

        $check = new Checklogin();
        $check->_initialize();

        $loginname = Session::get('name');

//        $data = input('post.');
//        dump($data);


        $this->assign('data', UserModel::where('Username', $loginname)->find());
//        echo loginname;
//        die;


//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
        return $this->fetch();
    }

    public function readerAlterData()
    {

        $id = input('get.id');
        $data = UserModel::get($id);
        $this->assign('data',$data);
//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
        return $this->fetch();
    }
    public function readerAlterPaswd()
    {
//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
        return $this->fetch();
    }
    public function readerBorrowing()
    {
//        $loginname = Session::get('name');

//        $data = input('post.');
//        dump($data);


        $this->assign('data', RecordModel::where('BorrowID', '112056')->find());

//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
        return $this->fetch();
    }
    public function readerBorrowed()
    {
        $this->assign('data', RecordModel::where('BorrowID', '112056')->find());
//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
        return $this->fetch();
    }

    public function readerupdate()
    {

        $dataPhone = input('post.Phone');
        $dataEmail = input('post.Email');
        $id = input('post.id');

        $user = new UserModel();


//        $ret = $user->allowField(['Phone','Email'])->save($data,['id'=>$id]);
//        $ret = $user->where(id = $id)->setField(post.Phone,post.Email);
//        $ret = $user->where("uid = $id")->setField(array(Phone,Email),array($data.Phone,$data.Email));
        $ret = $user->where('id','=',"$id")->update(['Phone'=>$dataPhone,'Email'=>$dataEmail]);
        if($ret){
            $this->success('修改用户信息成功');
        }
        else{
            $this->error('修改用户信息失败');
        }
//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
        return $this->fetch();
    }
    public function readerpsupdate()
    {

        $loginname = Session::get('name');


        $Upass = input('post.Upass');
        $Newupass = input('post.Newupass');
        $reNewupass = input('post.reNewupass');
        $userpass = UserModel::where('Username', $loginname)->find()->Upass;

        if(md5($Upass) === $userpass){
            if($Newupass == $reNewupass){
                $uppass = new UserModel();
                $ret = $uppass->where('Username','=',"$loginname")->update(['Upass'=>md5($Newupass)]);
                if($ret){
                    $this->success('密码修改成功');
                }
                else{
                    $this->success('密码修改失败');
                }
            }
            else{
                $this->error('输入的两次新密码不一致，请重新输入');
            }
        }
        else{
            $this->error('输入的原密码不正确');
        }

    }
    public function searchResult()
    {
        $data = input('post.searchdata');
        $this->assign('data', BookModel::where('BookName', $data)->find());

//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
        return $this->fetch();
    }
    public function souyetiaoz()
    {
        $this->success('正在跳转到首页','http://ligong.com/');

//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';

    }
    public function denglutiaoz()
    {
        $this->success('正在跳转到登陆页面','Login/login');

//        $goods = \think\Db::table('ligong_Bookinfo') ->find();
//        dump($goods);die;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2e5cd5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #ffffff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';

    }


}
