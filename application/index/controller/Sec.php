<?php
namespace app\index\controller;
use think\Controller;

class Sec extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
