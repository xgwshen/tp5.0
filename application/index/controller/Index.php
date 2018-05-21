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
        echo 1111;
    }
}