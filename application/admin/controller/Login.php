<?php

namespace app\admin\controller;

use think\Controller;

//use app\admin\model\Log;

class Login extends Controller {

    public function index() {
        if (request()->isPost()) {
            //$login=new Log();
            //$ck=$login->login(input('username'),input('password'));
            $username = input('username');
            $password = input('password');

            $check = \think\Db::name('admin')->where('username', '=', $username)->find();
            if ($check) {
                if ($check['password'] == md5($password)) {
                    \think\Session::set('username', $check['username']);
                    return $this->success('登陆成功', 'index/index');
                } else {
                    return $this->error();
                }
            } else {
                return $this->error();
            }

//            if ($ck == 1) {
//                return $this->success('登陆成功', 'admin/index');
//            } else {
//                return $this->error('账号或密码错误', 'admin/index');
//            }
        }
        return $this->fetch();
    }
    
    public function logout() {
        session(null);
        
        return $this->redirect('admin\login\index');
    }

}
