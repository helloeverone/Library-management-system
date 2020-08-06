<?php
namespace app\index\model;

use think\Model;
class ligongUserinfo extends Model
{
    protected $auto = ['Borrowid','Departments','Major','Phone','Email','Max','Time','Lendednum','Username','Upass'];

    protected function setBorrowidAttr($value)
    {
        return $value;
    }
    protected function setUpassAttr($value)
    {
        return md5($value);
    }
    protected function setDepartmentsAttr($value)
    {
        return $value;
    }
    protected function setMajorAttr($value)
    {
        return $value;
    }
    protected function setPhoneAttr($value)
    {
        return $value;
    }
    protected function setEmailAttr($value)
    {
        return $value;
    }
    protected function setMaxAttr($value)
    {
        return $value;
    }
    protected function setTimeAttr($value)
    {
        return $value;
    }
    protected function setLendednumAttr($value)
    {
        return $value;
    }
}