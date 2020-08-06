<?php
namespace app\index\model;

use think\Model;
class ligongBookinfo extends Model
{
    protected $auto = ['Bookid','BookName','Author','Translator','Price','Isbncode','Comeuptime','Publishcompany','State','EnteringMen','EnteringDate','Stocknumber'];

    protected function setBookidAttr($value)
    {
        return $value;
    }
    protected function setBookNameAttr($value)
    {
        return $value;
    }
    protected function setAuthorAttr($value)
    {
        return $value;
    }
    protected function setTranslatorAttr($value)
    {
        return $value;
    }
    protected function setPriceAttr($value)
    {
        return $value;
    }
    protected function setIsbncodeAttr($value)
    {
        return $value;
    }
    protected function setComeuptimeAttr($value)
    {
        return $value;
    }
    protected function setPublishcompanyAttr($value)
    {
        return $value;
    }
    protected function setStateAttr($value)
    {
        return $value;
    }
    protected function setEnteringMenAttr($value)
    {
        return $value;
    }
    protected function setEnteringDateAttr($value)
    {
        return $value;
    }
    protected function setStocknumberAttr($value)
    {
        return $value;
    }
}