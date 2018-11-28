<?php
/**
 * Created by PhpStorm.
 * User: nobita
 * Date: 10/23
 * Time: 15:05
 */

namespace app\index\controller;
use Nette\Mail\Message;
use Nette\Mail\SmtpMailer;
use think\Controller;
use think\View;
use think\Db;

class Base extends Controller
{
    public $_N;
    public function _initialize()
    {
        $this->_N['public'] = '/'; //定于根目录的路径
        $this->_N['theme_path'] = './theme/index/';//定义后台主题模板的路径
        //主题视图实例化
        $this->view = new View([
            'type' => 'php',
            'view_path' => $this->_N['theme_path'],
            'view_suffix' => 'php',
            'view_depr' => '/'
        ]);

        if (!defined('__THEME__')){
            define('__THEME__','./theme/index');
            define('__PUBLIC__','/theme/index');
            define('__THEMEHEADER__','./theme/index/header.php');
            define('__THEMEFOOTER__','./theme/index/footer.php');
        }
    }

    public function sendMail($to=[],$subject='',$content=''){
        $mail = new Message();
        //read email setting
        $emailSetting = Db::name('setting')
            ->where('type','admin')
            ->value('content');
        $emailInfo = json_decode($emailSetting,true);
        $config = $emailInfo;
        if(empty($config['host']) || empty($config['username']) || empty($config['password'])){
            return false;
        }
        if (is_array($to)){
            foreach ($to as $v) {
                $mail->addTo($v);
            }
        } else {
            $mail->addTo($to);
        }
        $mail->setFrom($config['username'],$config['nickname']);
        $mail->setSubject($subject);
        $mail->setHTMLBody($content);
        $mailer = new SmtpMailer($config);
        return $mailer->send($mail);
    }
}