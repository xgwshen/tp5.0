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
// 注册路由到index模块的News控制器的read操作
//Route::get('login/:id','index/index/login',['id'=>'/d']);
//Route::get('hello','index/index/hello');
Route::rule('hello/:name','index/Index/hello','get');
