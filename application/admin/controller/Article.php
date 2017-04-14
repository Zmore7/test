<?php

namespace app\admin\controller;

use think\Controller;

class Article extends Base {
//article主页
    public function article() {

        $articles = \think\Db::name('article')->select();
        
        $this->assign('articles', $articles);
        return $this->fetch('article');
    }
//增添文章
    public function add() {
        if (request()->isPost()) {

            $data = [
                'id' => input('id'),
                'title' => input('title'),
                'cate' => input('identity'),
                'time' => date("Y.m.d"),
                'content'=>  input('container')
                
            ];

            $db = \think\Db::table('article')->insert($data);
            if ($db) {
                return $this->success('添加文章成功', 'article');
            } else {
                return $this->error('添加文章失败');
            }
        }

        return $this->fetch();
    }
//文章删除功能
    public function del() {
        $id = input('id');
        if (db('article')->delete($id)) {
            return $this->success('删除文章成功', 'article');
        } else {
            return $this->error('删除文章失败');
        }
    }

}

//if (request()->isPost()) {
//          }
//if () {
//                return $this->success('删除文章成功');
//            } else {
//                return $this->error('删除文章失败');
//            }
//下面是驗證信息use think\Validate;
//            $rule = [
//                'title' => 'require|max:25',
//                'cate' => 'require',
//            ];
//
//            $msg = [
//                'title.require' => '名称必须',
//                'title.max' => '名称最多不能超过25个字符',
//                'cate.require' => '種類必须',
//            ];
//
//            $validate = new Validate($rule, $msg);
//
//            if ($validate->check($data)) {
//    } else {
//                echo $validate->getError();
//            }