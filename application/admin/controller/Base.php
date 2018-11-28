<?php
/**
 * Created by PhpStorm.
 * User: nobita
 * Date: 2018/10/18
 * Time: 下午5:58
 */
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\View;
use think\Db;
use think\Session;

class Base extends Controller
{
    public $_N;
    protected $userResult;
    public function _initialize()
    {
        $this->userResult = Session::get('user');//获取session中的登录数据
        $setting = Session::get('setting');
        $userInfo = Db::name('user')
            ->where('id',$this->userId())
            ->find();
        if (!$this->userResult['group'] == 'admin'){//判断用户的用户组别是否为admin，如果不是的话就直接返回false，回到登录界面不允许任何操作
            $this->redirect('/admin/login');
            return false;
        }
        $this->_N['public'] = '/'; //定于根目录的路径
        $this->_N['theme_path'] = './theme/admin/';//定义后台主题模板的路径
        //主题视图实例化
        $this->view = new View([
            'type' => 'php',
            'view_path' => $this->_N['theme_path'],
            'view_suffix' => 'php',
            'view_depr' => '/'
        ]);

        if (!defined('__THEME__')){
            define('__THEME__','./theme/admin');
            define('__PUBLIC__','/theme/admin');
            define('__THEMEHEADER__','./theme/admin/header.php');
            define('__THEMEFOOTER__','./theme/admin/footer.php');
        }
        $this->assign(
            [
                'title' => $setting['site_name'],
                'description' => $setting['description'],
                'setting' => $setting,
                'userInfo' => $this->userResult,
                'navBar' => $this->navBar(),
                'user' => $userInfo,
                '_n' => $this->_N
            ]
        );
    }


    public function userId(){
        return $this->userResult['id'];
    }

    public function navBar() {
        return [
            [
                ['article', '/admin/center', '<i class="czs-pen-write"></i> 创作中心']
            ],
            [
                ['bookmark', '/admin/bookmark', '<i class="czs-book-l"></i> 收藏中心']
            ],
            [
                ['links', '/admin/links', '<i class="czs-share"></i> 外链中心']
            ],
            [
                ['category', '/admin/category', '<i class="czs-newspaper-l"></i> 创作分类']
            ],
            [
                ['trash', '/admin/trash/', '<i class="czs-trash-l"></i> 回收的箱']
            ],
            [
                ['setting', '/admin/setting/', '<i class="czs-setting-l"></i> 网站设置']
            ]
        ];
    }


}