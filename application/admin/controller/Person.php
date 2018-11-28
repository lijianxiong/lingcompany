<?php
/**
 * Created by PhpStorm.
 * User: nobita
 * Date: 10/19
 * Time: 17:21
 */

namespace app\admin\controller;
use think\Request;
use think\Db;

class Person extends Base
{
    public function index(){
        $setting = Db::name('setting')
            ->where('type','comment')
            ->find();
        $userResult = Db::name('user')
            ->where('id',$this->userId())
            ->find();
        $settingResult = json_decode($setting['content'],true);
        $this->assign([
            'title' => '修改个人信息',
            'settingResult' => $settingResult,
            'userResult' => $userResult
        ]);
        return $this->fetch('/person');
    }

    public function uploadface(Request $request){
        $data = input('post.');
        // 获取表单上传文件
        //$file = $request->file('file');

        if ($request->file('file') == NULL){
            if (!empty($data['username']) || !empty($data['password'])){
                Db::name('user')
                    ->where('id',$this->userId())
                    ->update([
                        'username' => $data['username']?$data['username']:'',
                        'password' => $data['password']?md5(sha1($data['password'])):'',
                        'face_url' => $data['face_url']
                    ]);
            }
        }else{
            $file = \think\Image::open(request()->file('file'));
            $dirTime = iconv("UTF-8", "GBK", ROOT_PATH . 'public' . DS . 'upload/face/'.date('Ym',time()));
            if (file_exists($dirTime));
            else
                mkdir ($dirTime,0777,true);
            $fileUrl = $dirTime. DS .md5(time()).'.jpg';
            $info = $file->thumb(200, 200)->save($fileUrl);
            if ($info) {
                $faceurl = strstr($fileUrl,"/upload");
                $result = Db::name('user')
                    ->where('id',$this->userId())
                    ->update(
                        [
                            'face_url' => $faceurl
                        ]
                    );
                if ($result){
                    return $this->redirect('/admin/person');
                }
            } else {
                // 上传失败获取错误信息
                $this->error($file->getError());
            }
        }
    $this->redirect('/admin/person');
    }

    public function setting(){
        $data = input('post.');
        $result = Db::name('setting')
            ->where('type','comment')
            ->update([
                'content' => json_encode($data)
            ]);
        if ($result){
            $this->redirect('/admin/person/');
        }else{
            $this->redirect('/admin/person/');
        }
    }
}