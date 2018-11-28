<?php
/**
 * Created by PhpStorm.
 * User: nobita
 * Date: 10/27
 * Time: 16:24
 */

namespace app\index\controller;


use think\Db;

class Item extends Base
{
    public function index($id){
        $result = Db::name('product')
            ->where('id',$id)
            ->find();
        $productItem = json_decode($result['product_info'],true);
        unset($productItem['thumb'],$productItem['id'],$productItem['title'],$productItem['description'],$productItem['keywords']);
        $this->assign([
            'title' => $result['title'],
            'result' => $result,
            'items' => $productItem['info']
        ]);
        return $this->fetch('/item');
    }
}