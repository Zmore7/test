<?php
namespace app\index\controller;
use think\Controller;

class Newindex extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }
    
}
