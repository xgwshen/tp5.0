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

//        throw new \think\exception\HttpException(404, '页面不存在');
        $res = isMobile();
        if($res){
            echo '手机端-----this a phone';
        }else{
            return $this->fetch('Index/index');
        }
    }
    public function img($img){
        return $this->fetch('index/img',['img'=>$img]);
    }
    public function secondDay(){
        echo '我万万没有想到是 ，我刚到公司的第二天 ， 另一个小伙伴就离职了 。 人生的运气也是难以琢磨的。不是吗？ 我们唯有做好自己的事而已！';
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
               $this->redirect('index/img',['img'=>$info->getSaveName(),]);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }
    //自怨自艾
    public function test(){
        echo '本地可以 ， 但线上就不行 ，这是很尴尬的事情 。我也是没办法的 ！';
    }
    public function key(){
        $data['name'] = '..';
        return $this->fetch();
    }
    public function entry(){
        return true;
    }
    public function notify(){
        return false;
    }
}