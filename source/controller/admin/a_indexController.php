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

class a_indexController extends QController
{

    public $articleObj;     //在构造函数中设置

    public function __construct()
    {
        parent::__construct();
        //获取文章模型管理对象
        QApplication::syModelManager('articleModelManager',$this->articleObj);
    }

    //获取单篇文章数据  根据默认设置，url中可以不设置a，则自动为index方法，只需要传递文章编号即可
    public function index()
    {
        $this->display('index.html','admin');
    }

    public function header()
    {
        $this->display('header.html','admin');
    }

    public function left()
    {
        $leftname = '';
        $leftmenu = '';
        //根据接收的不同的l参数，switch不同的left menu
        $l = isset($_GET['l']) ? $_GET['l'] : '';
        switch($l)
        {
            case "info":
                $leftname='分类信息管理';
                $leftmenu.='<a href="?c=a_info&a=lists&m=info" target="main">二手信息管理</a>';
                $leftmenu.='<a href="?c=a_info&a=lists&m=job" target="main">兼职信息管理</a>';
                $leftmenu.='<a href="?c=a_info&a=apply_trait_lists" target="main">申请推荐位信息管理</a>';
                break;
            case "article":
                $leftname='新闻文章管理';
                $leftmenu.='<a href="?c=a_article&a=lists" target="main">系统文章管理</a>';
                $leftmenu.='<a href="?c=a_article&a=add" target="main">系统文章添加</a>';
                break;
            case "category":
                $leftname='类目管理';
                $leftmenu.='<a href="?c=a_category&a=lists&m=info" target="main">二手类目管理</a>';
                $leftmenu.='<a href="?c=a_category&a=lists&m=job" target="main">兼职类目管理</a>';
                $leftmenu.='<a href="?c=a_category&a=lists&m=article" target="main">文章类目管理</a>';
                $leftmenu.='<a href="?c=a_category&a=add" target="main">类目添加</a>';
                break;
            case "member":
                $leftname='会员管理';
                $leftmenu.='<a href="?c=a_member&a=lists" target="main">会员列表</a>';
                $leftmenu.='<a href="?c=a_member&a=add" target="main">会员添加</a>';
                break;
            case "sys":
                $leftname='系统管理';
                $leftmenu.='<a href="?c=a_sys" target="main">基本设置</a>';
                $leftmenu.='<a href="?c=a_admin" target="main">管理员管理</a>';
                break;
            default:
                $leftname='物品信息管理';
                $leftmenu.='<a href="?c=a_goods&a=lists" target="main">物品信息管理</a>';
                $leftmenu.='<a href="?c=a_goods&a=add" target="main">物品信息添加</a>';
                break;

        }
        $this->assign('leftname',$leftname);
        $this->assign('leftmenu',$leftmenu);
        $this->display('left.html','admin');
    }

    public function bottom()
    {
        $this->display('bottom.html','admin');
    }

    public function main()
    {
        $this->a='main';
        $this->display('main.html','admin');
    }




}
?>