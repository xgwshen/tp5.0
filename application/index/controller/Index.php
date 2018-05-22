<?php
namespace app\index\controller;

use think\Cache;
use think\Controller;
use think\exception\HttpException;
class Index extends Controller
{
    //为什么说tp5.0是为API而生的
    public function index(){
//        $data = ['name','age'];
//        return ['data'=>$data,'code'=>1,'message'=>'操作完成'];
//        return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);json
//        return xml(['data'=>$data,'code'=>1,'message'=>'操作完成']);xml
//        return jsonp(['data'=>$data,'code'=>1,'message'=>'操作完成']);//jsonpReturn({"data":["name","age"],"code":1,"message":"操作完成"});
//        return view(['data'=>$data,'code'=>1,'message'=>'操作完成']);//jsonpReturn({"data":["name","age"],"code":1,"message":"操作完成"});
        //用户表
        //红包表
        //权限表
        //会员表
//        throw new \think\exception\HttpException(404, '页面不存在');
        $res = isMobile();
        var_dump($res);
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