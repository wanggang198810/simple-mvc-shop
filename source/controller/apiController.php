<?php
/*
 * 有些方法，不需要权限控制的，比如说验证码的生成，这个我实在不知到放在那个类里去获获取，干脆先放到这里好了
 *
 * 不过也有问题，这个可以完全不需要走一趟mvc的，看看吧，之后再回来优化*/

if(!defined('ROOT_PATH'))exit('Access denied!');


class apiController extends QController
{
    public function index()
    {
    }

    public function getvercode()
    {
        require_once(LIB_PATH . '/Image.php');
        $imageObj = new Image();
        $imageObj->buildImageVerify(120,30,4,null,'vercode');
    }

    public function getsession()
    {
        vd($_SESSION);
    }

    public function nownow()
    {
        $time = time();
        echo date("Y-h-d h:i:s",$time);
    }

    public function time()
    {
        echo time();
    }

    public function getnotice()
    {
        //获取系统通知列表
        QApplication::syModelManager('articleModelManager',$articleObj);
        $where = " isshow = 1 AND cid = 1 ";
        $articleList = $articleObj->getArticleList($where,null,'id,cid,title,addtime,isshow',5);
        $this->assign('articleList',$articleList);
        $this->display('notice.html');
    }
}



?>