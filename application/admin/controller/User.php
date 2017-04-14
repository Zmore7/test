<?php

namespace app\admin\controller;

use think\Controller;

class User extends Base {

    public function index() {
        $data = \think\Db::name('admin')->select();
        $this->assign('adminlist', $data);
        return $this->fetch();
    }

    public function add() {
        if (request()->isPost()) {
            $data = [
                
                'password' => md5(input('password')),
                'username' => input('username'),
                
            ];
            $db = \think\Db::name('admin')->insert($data);
            if ($db) {
                return $this->success('添加用户成功', 'index');
            } else {
                return $this->error('添加用户失败');
            }
        }
        return $this->fetch();
    }

    public function del() {
        $user = input('id');
        if (db('admin')->delete($user)) {
            return $this->success('删除用户成功', 'index');
        } else {
            return $this->error('删除用户失败');
        }
    }

}
