<?php
namespace app\index\controller;
use think\Controller;

class PublicTop extends Controller
{
    public function index()
    {
        return $this->fetch('top');
    }
    
}
