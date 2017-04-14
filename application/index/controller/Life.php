<?php
namespace app\index\controller;
use think\Controller;

class Life extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
