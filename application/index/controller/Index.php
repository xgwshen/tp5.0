<?php
namespace app\index\controller;

use think\Cache;
use think\Controller;
class Index extends Controller
{
    //为什么说tp5.0是为API而生的
    public function hello($name){
        $data = ['name','age'];
//        return ['data'=>$data,'code'=>1,'message'=>'操作完成'];
        return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);
    }
//    public function index()
//    {
//        $res = model('index')->index();
//        echo $res;
//        $res = model('index')->nosCan();
//        echo $res;
//    }
//
//    public function redis(){
////        import('Rediso',EXTEND_PATH);
////        $redis = new \Rediso();
////        var_dump($redis);
//
////        $a='';
//        $a=0;
////        if(isset($a) && $a==''){
////            echo '0';
////        }else{
////            echo '空字符';
////        }
////        echo gettype($a);
////        if($a==='0'){
////            echo '0';
////        }else{
////            echo 'string';
////        }
//        return $this->fetch('Index/index');
//    }
//    public function login($id){
//        echo 'login/route--'.$id;
//    }
//    public function validate(){
//        $request = request();
//        dump($request);
//    }
//    public function uploads(){
////        echo '上传文件';
//
//    }


}