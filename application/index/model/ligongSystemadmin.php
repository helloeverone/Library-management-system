<?php
namespace app\index\model;
use think\Model;

class ligongSystemadmin extends Model
{
    protected $auto = ['Adminid','AdminName','AdminPassword','Adminphone','Adminemail'];

    protected function setAdminidAttr($value)
    {
        return $value;
    }
    protected function setAdminNameAttr($value)
    {
        return $value;
    }
    protected function setAdminPasswordAttr($value)
    {
        return md5($value);
    }
    protected function setAdminphoneAttr($value)
    {
        return $value;
    }
    protected function setAdminemailAttr($value)
    {
        return $value;
    }
}