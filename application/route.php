<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//    'redis' => ['index/redis', ['method' => 'get']],
////    'login' => ['index/login', ['method' => 'get']],
//    Route::any('login','index/login',['method'=>'get']),
//];

use think\Route;
// 注册路由到index模块的News控制器的read操作 any方法其实和rule方法是一样的，区别在于不用写第三个参数。 不推荐使用return 数组的形式 使用route类更加直观和方便
//Route::get('login/:id','index/index/login',['id'=>'/d']);
//Route::get('hello','index/index/hello');
//Route::rule('hello/:name','index/Index/hello','get');

Route::any('hello/:name','index/index/hello',[
    'ext'=>'html',
    'method'=>'get',
],[
    'name'=>'[0-9]+'
]);