<?php
namespace app\index\model;

use think\Model;
class ligongBookadmin extends Model
{
    protected $auto = ['Adnum','AdPassword','Adphone','Adname','Ademail'];

    protected function setAdnumAttr($value)
    {
        return $value;
    }
    protected function setAdPasswordAttr($value)
    {
        return md5($value);
    }
    protected function setAdphoneAttr($value)
    {
        return $value;
    }
    protected function setAdnameAttr($value)
    {
        return $value;
    }
    protected function setAdemailAttr($value)
    {
        return $value;
    }
}