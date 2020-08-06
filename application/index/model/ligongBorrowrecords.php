<?php
namespace app\index\model;

use think\Model;
class ligongBorrowrecords extends Model
{
    protected $auto = ['BorrowID','Userid','Bookid','Bookname','BorrowTime','ShouldTime','ReturnTime','State'];

    protected function setBorrowIDAttr($value)
    {
        return $value;
    }
    protected function setUseridAttr($value)
    {
        return $value;
    }
    protected function setBookidAttr($value)
    {
        return $value;
    }
    protected function setBooknameAttr($value)
    {
        return $value;
    }
    protected function setShouldTimeAttr($value)
    {
        return $value;
    }
    protected function setReturnTimeAttr($value)
    {
        return $value;
    }
    protected function setStateAttr($value)
    {
        return $value;
    }
}