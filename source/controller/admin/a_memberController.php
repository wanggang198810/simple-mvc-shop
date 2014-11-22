<?php
/*
 * 这是后台文章管理类
 * 功能：
 * 1.文章列表
 * 2.文章添加
 * 3.文章修改
 * 4.文章删除、
 * */


if(!defined('ROOT_PATH')) exit('Access Denied!');

class a_memberController extends QController
{

    public $obj;     //在构造函数中设置

    public function __construct()
    {
        parent::__construct();
        //获取文章模型管理对象
        QApplication::syModelManager('memberModelManager',$this->memberObj);
    }

    //获取单篇文章数据  根据默认设置，url中可以不设置a，则自动为index方法，只需要传递文章编号即可
    public function index()
    {

//        $aid = $_REQUEST['aid'];

//        $article = $this->articleObj->getArticleById($aid);
//        $this->display('index.html','admin');
//        vd($article);
        $this->display('index.html','admin');

        /*要继续进去下去的有：
         * 1.获取传递的id
         * 2.在这个控制器里，要获取文章模型管理类的实例化对象，根据文章模型管理对象获取该文章信息，放入文章模型的保存属性中
         * 3.讲该属性assign到模板变量中
        */
    }

    //获取会员列表
    public function lists()
    {
        //now is 2013-03-26 15:00,I think I should use simple "mObj" name just like this  instead of "memberObj"s
        $lists = $this->memberObj->getMemberList();
        $this->assign('lists',$lists);
        $this->display('member/index.html','admin');
        //   vd($article_list);
    }

    //修改会员信息页面
    public function edit()
    {
        /*获取会员id传值
         *在这里我就先不进行什么安全行检测了，届时写一个安全参数类，类似与doyou中的syArgs,和iwebshop中的Filter::Act()
         * */

        $id = $_GET['id'];

        //根据id获取该会员信息
        $info = $this->memberObj->getMemberById($id);
       // vd($info);
        $this->assign('info',$info);
        $this->display('member/edit.html','admin');
    }
	
	//修改会员信息
    public function edit_save()
    {
        echo "sorry，暂时实现";
		exit;
    }

}
?>