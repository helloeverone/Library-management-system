<?php
namespace app\index\validate;

use think\Validate;

class advalidate extends Validate
{
    protected $rule = [
        'Adname|用户名'=>'require|min:3',
        'AdPassword|密码'=>'require|min:6',

    ];
    protected $message = [
        'Adname.require'=>'用户名不能为空',
        'Adname.min'=>'用户名长度不能少于3位',
        'AdPassword.require'=>'密码不能为空',
        'AdPassword.min'=>'密码长度不能少于6位',

    ];

}