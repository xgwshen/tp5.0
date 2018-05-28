<?php
/**
 * 公用模块管理
 *
 */
namespace app\home\controller;
use app\api_v1\controller\Base;
use think\Db;
use think\Cache;
class Common extends Base{
    /*
     * 首页信息显示
     * @return
     */
    public function indexInfo() {
        $uid = empty($this->datas['uid']) ? 0: $this->datas['uid'];
        $return = array();

        //签到日历
        $date = date('Y-m-d');
        $calender['date'] = toYmdFullHanzi($date);
    }

    /**
     * @param $pwd
     * @return array
     */
    function checkPwd($pwd) {
        if($pwd == null) {
            return ['code' => 0,'data' =>'', 'msg' => '密码不能为空'];
        }
        $pwd = trim($pwd);
        if(strlen($pwd) < 6){
            //必须大于6个字符
            return ['code' => 0, 'data' => '', 'msg' => '密码必须大于等于6个字符'];

        }
        if (preg_match("/^[0-9]+$", $pwd)){
            return ['code' =>0, 'data'=> '', 'msg' => '密码不能全部是数字,请包含数字 字母大小写或特殊字符'];

        }
        if(preg_match("^[a-zA-Z]+$", $pwd)){
            return ['code' =>0, 'data'=> '', 'msg' => '密码不能全部是字母,请包含数字 字母大小写或特殊字符'];
        }
        if (preg_match('/^[0-9A-Z]+$/', $pwd)){
            return ['code' => 0, 'data' => '', 'msg' => '请包含数字，字母大小写或者特殊字符'];
        }

        return ['code' => '1', 'data' =>'', 'msg' => '密度复杂度通过验证'];
    }
    function getAreaByPos($pos)
    {
        $arr = explode(',',$pos);
        sort($arr);
        $location = implode(',',$arr);
        $request = "http://apis.map.qq.com/ws/geocoder/v1/?location=$location&key=$key";
        $content = file_get_contents($request);
        $area_arr = json_decode($content, true);
        return $area_arr['result']['ad_info'];
    }
    function sssxss(){
        $time = date("Ymd");
        $temp['uid'] = $uid ;
        $temp['lasttime'] = time();
        $temp['addtime'] = $time ;
        $channel = empty($_GET['channel'])?0:$_GET['channel'];
    }
    public function add(){
        echo time()+3600;
        echo date('Y-m-d',time());
        echo date('Y-m-d','-1 day');
        if(strtotime(time())){
            echo gettype($a);
            $a = array();
            global $a;
            $a = [1,2,3];
        }
    }
    public function edit(){
        $request = request()->param();
        var_dump($request);
        fopen('puclic/filename');

    }
}