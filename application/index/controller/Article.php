<?php
/**
 * Created by PhpStorm.
 * User: nobita
 * Date: 10/24
 * Time: 14:50
 */

namespace app\index\controller;


use think\Db;

class Article extends Base
{
    public function index($id){
        $result = Db::name('content')
            ->where('id',$id)
            ->find();
        $this->assign([
            'title' => $result['title'],
            'result' => $result
        ]);
        return $this->fetch('/article');
    }

}