<?php
namespace app\admin\controller;
use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {
       if(session('username')){
           
       }  else {
           return $this->error('未登录','admin\login\index');
       }
    }
    
}
