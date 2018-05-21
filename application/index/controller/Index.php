<?php
namespace app\index\controller;

use think\Cache;

class Index
{
    public function index()
    {
        $res = model('index')->index();
        echo $res;
        $res = model('index')->nosCan();
        echo $res;
    }

    public function redis(){
//        import('Rediso',EXTEND_PATH);
//        $redis = new \Rediso();
//        var_dump($redis);
        echo  '<pre>';
        echo "
            我每天走过的路，从来没有留心过，无论脚下的尘埃还是野草。
            每天的生活忙忙碌碌，却不知道到底为了什么。
            那些曾经的山水景色，不过是记忆的剪影。
            我不过是生活的尘埃，也是不经意的野草。
        ";
        echo  '</pre>';

    }
}