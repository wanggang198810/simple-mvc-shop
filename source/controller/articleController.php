<?php
/*
 * 文章前台控制类
 * 功能包括：
 * 1.获取文章列表：可分页、上一页、下一页
 * 2.获取文章详情
 * 3.搜索文章
 * 4.获取文章评论列表
 * 5.
 * */
if(!defined('ROOT_PATH'))exit('Access denied!');


class articleController extends QController
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
        //获取文章id
        $id = $_GET['id'];
        $article = $this->articleObj->getArticleById($id);
        $this->assign('article',$article);
        $this->display('article/content.html');
    }

    //获取文章列表
    public function lists()
    {
        //获取系统通知列表
        $where = " isshow = 1 AND cid = 1 ";
        $articleList = $this->articleObj->getArticleList($where,null,'id,cid,title,addtime,isshow');
        $this->assign('articleList',$articleList);
        $this->display('article/list.html');
    }

}
?>