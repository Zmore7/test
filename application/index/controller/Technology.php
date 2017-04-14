<?php
namespace app\index\controller;
use think\Controller;

class Technology extends Controller
{
    public function index()
    {
        $tacticle= \think\Db::name('article')->select();
        
        $this->assign('tarticle', $tacticle);
        return $this->fetch();
    }
}
