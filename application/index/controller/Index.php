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

//        $a='';
        $a=0;
//        if(isset($a) && $a==''){
//            echo '0';
//        }else{
//            echo '空字符';
//        }
//        echo gettype($a);
        if($a==='0'){
            echo '0';
        }else{
            echo 'string';
        }
    }
    public function login($id){
        echo 'login/route--'.$id;
    }
}