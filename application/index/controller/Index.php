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
        if($res){
            echo '手机端-----this a phone';
        }else{
            return $this->fetch('Index/index');
        }
    }

    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('image');

        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg
//                echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                echo $info->getSaveName();
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
//                echo $info->getFilename();
                $this->fetch('index/index',['img'=>$info->getSaveName(),]);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
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