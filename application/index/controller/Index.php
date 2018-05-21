<?php
namespace app\index\controller;



class Index
{
    public function index()
    {
        $res = model('index')->index();
        echo $res;
    }
}