<?php
namespace app\index\controller;

use think\Cache;
use think\Controller;
use think\exception\HttpException;
use think\Db;

class Index extends Controller
{
    public function test(){
//        $time = strtotime('1989-03-08');
//        $two =  date('y', $time)[1];
//        if($two >= 5){
//            return date('y', $time)[0].'5';
//        } else {
//            return date('y', $time)[0].'0';
//
//        }
//        $res = $this->getAreaByPos('31.11,118.56');
        $posy = 31.2303806967;
        $posx = 121.4537286758;
        $dataarr = Db::name('users')
            ->field("id,openid,nickname,sex,age,price,avatar_image,lasttime,is_online,getDistance(posy,posx,'$posy','$posx') as distance,`posx`,posy,height,weight,district,constellation,message,reputation,reputation_star,money,fans,attends,birthday,price_status")
            ->order('distance asc,reputation,lasttime asc')
            ->select();
        dump($dataarr);
    }
    function getAreaByPos($pos)
    {
        $arr = explode(',', $pos);
        sort($arr); //升序  31.11,118.5648
        $location = implode(',', $arr);
        $request = "http://apis.map.qq.com/ws/geocoder/v1/?location=$location&key=sssssssssssss";
        $content = file_get_contents($request);
        $area_arr = json_decode($content, true);
        return $area_arr['result']['ad_info']; // 市/区
    }
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

}