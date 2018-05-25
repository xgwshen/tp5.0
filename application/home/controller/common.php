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

    }

}