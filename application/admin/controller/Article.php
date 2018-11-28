<?php
/**
 * Created by PhpStorm.
 * User: nobita
 * Date: 10/19
 * Time: 16:09
 */

namespace app\admin\controller;


use think\Db;

class Article extends Base
{
    public function edit($id){
        $result = Db::name('content')
            ->where('id',$id)
            ->find();
        $this->assign([
            'title' => $result['title'],
            'result' => $result
        ]);
        return $this->fetch('/edit');
    }

    public function update(){
        $data = input('post.');
        $result = Db::name('content')
            ->where('id',$data['id'])
            ->update([
                'title' => $data['title'],
                'update_time' => strtotime($data['update_time']),
                'content' => $data['content'],
                'keywords' => $data['keywords']?htmlspecialchars($data['keywords']):'',
                'description' => $data['description']?htmlspecialchars($data['description']):''
            ]);
        if ($result){
            $this->redirect('/admin/article/edit/'.$data['id']);
        }else{
            $this->redirect('/admin/article/edit/'.$data['id']);
        }
    }

    public function del($id){
        $result = Db::name('content')
            ->where('id',$id)
            ->delete();
        if ($result){
            $this->redirect('/admin');
        }else{
            $this->redirect('/admin');
        }
    }

    public function add(){
        $this->assign([
            'title' => '开始发布文章',
            'postArticle' => 'active'
        ]);
        return $this->fetch('/add');
    }

    public function post(){
        $data = input('post.');
        $result = Db::name('content')
            ->insert([
                'title' => $data['title'],
                'create_time' => strtotime($data['create_time']),
                'content' => $data['content'],
                'keywords' => $data['keywords']?htmlspecialchars($data['keywords']):'',
                'description' => $data['description']?htmlspecialchars($data['description']):''
            ]);
        if ($result){
            $this->redirect('/admin');
        }
    }
}