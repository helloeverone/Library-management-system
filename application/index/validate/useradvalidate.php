<?php
namespace app\index\validate;

use think\Validate;

class useradvalidate extends Validate
{
    protected $rule = [
        'Username|用户名'=>'require|min:3',
        'Upass|密码'=>'require|min:6',

    ];
    protected $message = [
        'Username.require'=>'用户名不能为空',
        'Username.min'=>'用户名长度不能少于3位',
        'Upass.require'=>'密码不能为空',
        'Upass.min'=>'密码长度不能少于6位',

    ];

}