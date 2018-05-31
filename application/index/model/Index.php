<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/21 0021
 * Time: 11:52
 */
namespace app\index\model;

use think\Model;
class Index extends Model{
    public function index(){
        return 'heelo';
    }

    public function nosCan(){
        return $this->thisClass();
    }
    protected function thisClass(){
        return 'thisClass_todayWith_qq_weChat_tx';
    }
}