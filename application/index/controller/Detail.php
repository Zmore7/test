<?php

namespace app\index\controller;

use think\Controller;

class Detail extends Controller {

    public function index() {

        
            $artdetail = \think\Db::name('article')->select(input('id'));
            $this->assign('data', $artdetail[0]);
            

        return $this->fetch();
    }

}
