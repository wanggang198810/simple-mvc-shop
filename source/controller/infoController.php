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


class infoController extends QController
{
    public $infoObj;     //在构造函数中设置

    public function __construct()
    {
        parent::__construct();
        //获取文章模型管理对象
        QApplication::syModelManager('infoModelManager',$this->infoObj);
    }

    //获取单篇文章数据  根据默认设置，url中可以不设置a，则自动为index方法，只需要传递文章编号即可
    public function index()
    {
        //获取信息id
        $id = $_GET['id'];
        $info = $this->infoObj->getInfoById($id);
        $this->assign('info',$info);

        //根据该文章的发布者uid，$info['userid'] 获取器其信息
        //这里要注意的是，不要通过member控制器，因为那里还要判断会员是否登录的，如果单单写一个，所以还是直接member模型管理类吧
        QApplication::syModelManager('memberModelManager',$memberObj);
        $where = array(
            'id' =>$info['userid'],
        );
        $member = $memberObj->findOne('*',$where);
        $this->assign('member',$member);

        //获取该信息所属分类信息
        $category = $this->categoryObj->getCategoryById($info['cid']);
        $this->assign('category',$category);

        //获取该infoid的问询部分
        QApplication::syModelManager('commentModelManager',$commentObj);
        $where = array(
            'infoid' =>$info['id'],
        );
        $comment = $commentObj->findAll($where,null,'*');
        $this->assign('comment',$comment);

        $this->display('info/content.html');
    }

    //获取文章列表
    public function lists()
    {

        /*在此处遇到一个问题，如果 一级分类是5，他的二级分类为8，那么在8之下的物品，以这种找法，不会出现在5之下啊，如何点选分类5的时候
         *如何办？
         *就是说，如何根据5，也能够找到列在8下面的信息？ 总要到category表中去寻找，5的所有级是什么？
         * */

        //当id没有设置的时候，就是获取所有的
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $subCategory = $this->categoryObj->getCategoryList('info',$id);//获取该分类下一级别的分类，

            //将该分类和它的下一级别的分类组成字符串
            $ids = array($id);
            foreach($subCategory as $k=>$v)
            {
                $ids[] = $v['id'];
            }
            $ids = join(',',$ids);
            $where = " infocid in({$ids}) AND isshow = 1 ";   //此处的条件不能用数组的方式了，就直接写了，回头看看thinkphp是怎么做的来着？
        }
        else
        {
            $where = " isshow = 1 ";    //isshow为审核过的
        }

        $info_list = $this->infoObj->getInfoList($where);
//        vd($info_list);
        $this->assign('infoList',$info_list);
        $this->display('info/list.html');
    }

    //信息浏览量，通过js动态获取
    public function hits()
    {
        $id = $_GET['id'];
        $res = $this->infoObj->incrField(array('id'=>$id), 'hits');
        $res=$this->infoObj->findOne('hits',array('id'=>$id),null);
        echo 'document.write("'.$res['hits'].'");';
    }

}
?>