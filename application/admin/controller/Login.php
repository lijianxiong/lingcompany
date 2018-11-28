<?php
/**
 * Created by PhpStorm.
 * User: nobita
 * Date: 2018/10/18
 * Time: 下午6:01
 */

namespace app\admin\controller;


use think\Controller;
use think\Db;
use think\Session;

class Login extends Controller
{
    public function index(){
        $haveSession = Session::get('user.id');
        if ($haveSession){
            $this->redirect('/admin');;
        }
        //获取表单from的提交数据
        $data = input('post.');
        $username = htmlspecialchars(@$data['username']); //把表单获取到的数据进行安全转换
        $password = htmlspecialchars(@$data['password']); //同上
        $userInfo = Db::name('user')
            ->where('username',$username)
            ->find();//匹配数据库是否有这个用户名
        if (!empty($userInfo)){
            if ($username == $userInfo['username'] && md5(sha1($password)) == $userInfo['password']){//校验输入的用户是否和数据库里面的用户名一致
                $userArray = [
                    'id' => $userInfo['id'],
                    'group' => $userInfo['group'],
                    'username' => $username,
                    'face_url' => $userInfo['face_url']
                ];//Seesion需要存入的数据进行数组化
                Session::set('user',$userArray);//进行Session设置

                $settingResult = Db::name('setting')
                    ->where('type','admin')
                    ->value('content');//从数据库中取出网站的设置信息
                $setting = json_decode($settingResult,true);//把取出来的数据进行json转数组
                $settingArray = [
                    'site_name' => $setting['site_name'],
                    'admin_email' => $setting['admin_email'],
                    'web_url' => $setting['web_url'],
                    'keyword' => $setting['keyword'],
                    'description' => $setting['description']
                ];//封装数据成数组变量
                Session::set('setting',$settingArray);//设置session

                $this->redirect('/admin');
            }else{
                $this->redirect('/admin/login');
            }
        }
        $this->assign([
            'title' => '开始登录'
        ]);
        return view();
    }

    public function loginOut(){
        Session::clear();
        $this->redirect('/admin/login');
    }
}