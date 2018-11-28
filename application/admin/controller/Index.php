<?php
/**
 * Created by PhpStorm.
 * User: nobita
 * Date: 10/19
 * Time: 14:26
 */

namespace app\admin\controller;


use think\Db;

class Index extends Base
{
    public function index(){
        $result = Db::name('content')
            ->select();
        $this->assign([
            'title' => '所有文章',
            'result' => $result,
            'allNews' => 'active'
        ]);
        return $this->fetch('/index');
    }

    public function search(){
        $data = input('get.');
        $keyword = $data['keyword'];
        $result = Db::name('content')
            ->where('title|content','like','%'.$keyword.'%')
            ->select();
        $this->assign([
            'title' => $keyword.'的搜索结果',
            'result' => $result
        ]);
        return $this->fetch('/index');
    }
}