<?php

namespace app\admin\controller;

use think\Controller;

class Datadown extends Base {

    //数据库下载功能
    public function index() {

        //$tablelist=\think\Db::getTableInfo('think_user', 'fields');
        //$data=\think\Db::table('think_user')->select();['Tables_in_blog']
        $data = \think\Db::query("show tables");
        //var_dump(sizeof($data));
        for ($i = 0; $i < sizeof($data); $i++) {
            $inf = array_values($data[$i]);
            $out = \think\Db::name($inf[0])->select();
            //var_dump($out);
            for ($j = 0; $j < sizeof($out); $j++) {
                $inf2 = array_values($out[$j]);

                var_dump($inf2);
                echo '</br>';
                echo '</br>';
            }

            echo '</br>';
            echo '</br>';
            echo '</br>';
            //var_dump($inf[0]);
        }
        return $this->fetch();
    }

}
