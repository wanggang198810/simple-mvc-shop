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


class messageController extends QController
{
    public $articleObj;     //在构造函数中设置

    public function __construct()
    {
        parent::__construct();
        //获取文章模型管理对象
        QApplication::syModelManager('messageModelManager',$this->messageObj);
    }

    //获取单篇文章数据  根据默认设置，url中可以不设置a，则自动为index方法，只需要传递文章编号即可
    public function index()
    {
        $this->lists();
    }

    //获取文章列表
    public function lists()
    {
        //获取系统通知列表
       $where = " isshow = 1";
       $messageList = $this->messageObj->getMessageList($where,null,'id,title,content,addtime,isshow');

       $this->assign('messageList',$messageList);


        $this->display('message/lists.html');
    }

	public function message_save()
    {
		
		//重新整理数据
        $data = array(
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'isshow' => 1,  //默认发布为1
            'addtime' => time(),
        );

        QApplication::syModelManager('messageModelManager',$messageObj);
        $res = $messageObj->data($data)->insert();
        if($res) QApplication::message('留言成功!','index.php?c=message&a=lists');
        else QApplication::message('留言失败，请检查后重新留言！');
	}
	
}
?>