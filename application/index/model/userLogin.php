<?php
namespace app\index\model;
use think\Model;

class userLogin extends Model
{
    protected $auto = ['Username','Upass'];

    protected function setUsernameAttr($value)
    {
        return $value;
    }
    protected function setUpassAttr($value)
    {
        return md5($value);
    }

}
