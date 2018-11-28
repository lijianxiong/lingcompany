<?php
namespace app\index\controller;

use think\Db;

class Index extends Base
{
    public function index()
    {
        $this->assign([
            'title' => '凌力电池'
        ]);
        return $this->fetch('/index');
    }

    public function about(){
        $this->assign([
            'title' => '关于我们'
        ]);
        return $this->fetch('/about');
    }

    public function news(){
        $result = Db::name('content')
            ->select();
        $this->assign([
            'title' => '新闻中心',
            'result' => $result
        ]);
        return $this->fetch('/news');
    }

    public function product(){
        $result = Db::name('product')
            ->select();
        $this->assign([
            'title' => '产品中心',
            'result' => $result
        ]);
        return $this->fetch('/product');
    }

    public function honor(){
        $this->assign([
            'title' => '誉满全球'
        ]);
        return $this->fetch('/honor');
    }

    public function oem(){
        $this->assign([
            'title' => 'OEM'
        ]);
        return $this->fetch('/oem');
    }

    public function contact(){
        $result = Db::name('setting')
            ->where('type','comment')
            ->find();
        $comment = json_decode($result['content'],true);
        $this->assign([
            'title' => '联系我们',
            'comment' => $comment
        ]);
        return $this->fetch('/contact');
    }

    public function comment(){
        $data = input('post.');
        $result = Db::name('comment')
            ->insert([
                'parent_id' => 0,
                'type' => 'article',
                'author' => htmlspecialchars($data['author']),
                'email' => htmlspecialchars($data['email']),
                'phone' => htmlspecialchars($data['phone']),
                'content' => htmlspecialchars($data['content']),
                'create_time' => time()
            ]);
        if ($result){
            $this->sendMail(array('4020426@qq.com','1030863932@qq.com'),'你有一条新的留言，请注意查收!','留言者：'.htmlspecialchars($data['author']).'-----留言内容：'.htmlspecialchars($data['content']));
            $this->redirect('/actionsuccess');
        }
    }

    public function actionSuccess(){
        $this->assign([
            'title' => '留言成功',
            'tips' => '留言成功'
        ]);
        return $this->fetch('/success');
    }
}
