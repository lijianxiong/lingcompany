<?php
/**
 * Created by PhpStorm.
 * User: nobita
 * Date: 2018/10/21
 * Time: 上午1:13
 */

namespace app\admin\controller;

use think\Request;
use think\Db;

class Product extends Base
{
    public function index(){
        $result = Db::name('product')
            ->select();
        $this->assign([
            'title' => '产品管理',
            'result' => $result,
            'productActive' => 'active'
        ]);
        return $this->fetch('/product');

    }

    public function add(){
        $this->assign([
            'title' => '发布产品',
            'productAdd' => 'active'
        ]);
        return $this->fetch('/product/add');
    }

    public function edit($id){
        $result = Db::name('product')
            ->where('id',$id)
            ->find();
        $product = json_decode($result['product_info'],true);

        $countNum = count($product['info']);
        $this->assign([
            'title' => '编辑产品',
            'productAdd' => 'active',
            'result' => $result,
            'product' => $product['info'],
            'num' => $countNum
        ]);
        return $this->fetch('/product/edit');
    }

    public function del($id){
        $result = Db::name('product')
            ->where('id',$id)
            ->delete();
        if ($result){
            $this->redirect('/admin/product');
        }else{
            $this->redirect('/admin/product');
        }
    }

    public function post(Request $request){
        $data = input('post.');
        if (!empty($data)){
            $data['info'] = array_filter($data['info']);
            if ($request->file('file')){
                $file = \think\Image::open(request()->file('file'));
                $dirTime = iconv("UTF-8", "GBK", ROOT_PATH . 'public' . DS . 'upload/product/'.date('Ym',time()));
                if (file_exists($dirTime));
                else
                    mkdir ($dirTime,0777,true);
                $fileUrl = $dirTime. DS .md5(time()).'.jpg';
                $info = $file->thumb(600, 600)->save($fileUrl);
                if ($info) {
                    $thumbUrl = strstr($fileUrl,"/upload");
                } else {
                    // 上传失败获取错误信息
                    $this->error($file->getError());
                }
            }
            if (empty($thumbUrl)){
                echo '必须上传产品图片!';exit;
            }
            $result = Db::name('product')
                ->insert([
                    'title' => $data['title'],
                    'description' => $data['description']?$data['description']:'',
                    'thumb' => $thumbUrl?$thumbUrl:'',
                    'product_info' => json_encode($data),
                    'create_time' => time(),
                    'keywords' => $data['keywords']?$data['keywords']:''
                ]);
            if ($result){
                $this->redirect('/admin/product');
            }
        }
    }

    public function update(Request $request){
        $data = input('post.');
        if (!empty($data)){
            $data['info'] = array_filter($data['info']);
            if ($request->file('file') == NULL){
                $thumbUrl = $data['thumb'];
            }
            else{
                $file = \think\Image::open(request()->file('file'));
                $dirTime = iconv("UTF-8", "GBK", ROOT_PATH . 'public' . DS . 'upload/product/'.date('Ym',time()));
                if (file_exists($dirTime));
                else
                    mkdir ($dirTime,0777,true);
                $fileUrl = $dirTime. DS .md5(time()).'.jpg';
                $info = $file->thumb(600, 600)->save($fileUrl);
                if ($info) {
                    $thumbUrl = strstr($fileUrl,"/upload");
                } else {
                    // 上传失败获取错误信息
                    $this->error($file->getError());
                }
            }
            if (empty($thumbUrl)){
                echo '必须上传产品图片!';exit;
            }
            $result = Db::name('product')
                ->where('id',$data['id'])
                ->update([
                    'title' => $data['title'],
                    'description' => $data['description']?$data['description']:'',
                    'keywords' => $data['keywords']?$data['keywords']:'',
                    'thumb' => $thumbUrl?$thumbUrl:'',
                    'product_info' => json_encode($data),
                    'create_time' => time()
                ]);
            if ($result){
                $this->redirect('/admin/product');
            }
        }
    }
}