<?php

namespace app\admin\model;

use think\Model;

class Log extends Model {

    public function login($username, $password) {
        $data = \think\Db::name('admin')->where('username', '=', $username)->find();
        if ($data) {
            if(data['password']==$password) {
                return 1;
            }
            
        }
        return 0;
    }

}
