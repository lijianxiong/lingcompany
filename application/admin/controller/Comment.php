<?php
/**
 * Created by PhpStorm.
 * User: nobita
 * Date: 10/19
 * Time: 17:49
 */

namespace app\admin\controller;


use think\Db;

class Comment extends Base
{
    public function index(){
        $result = Db::name('comment')
            ->select();
        $this->assign([
            'title' => '留言管理',
            'result' => $result,
            'allComment' => 'active'
        ]);
        return $this->fetch('/comment');
    }

    public function edit($id){
        $result = Db::name('comment')
            ->where('id',$id)
            ->find();
        $this->assign([
            'title' => '编辑留言',
            'result' => $result
        ]);
        return $this->fetch('/comment/edit');
    }

    public function del($id){
        $result = Db::name('comment')
            ->where('id',$id)
            ->delete();
        if ($result){
            $this->redirect('/admin/comment');
        }else{
            $this->redirect('/admin/comment');
        }
    }
}