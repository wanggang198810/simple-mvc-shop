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

class a_infoController extends QController
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

//        $aid = $_REQUEST['aid'];

//        $article = $this->infoObj->getArticleById($aid);
//        $this->display('index.html','admin');
//        vd($article);
        $this->display('index.html','admin');

        /*要继续进去下去的有：
         * 1.获取传递的id
         * 2.在这个控制器里，要获取文章模型管理类的实例化对象，根据文章模型管理对象获取该文章信息，放入文章模型的保存属性中
         * 3.讲该属性assign到模板变量中
        */
    }

    //获取信息列表
    public function lists()
    {
        //从物品信息表中获取 userid为 本登录用户id的列表
        $info_list = $this->infoObj->getInfoList(null,null,'id,cid,title,description,litpic,isshow,addtime,trait,hits');
//        vd($info_list);
        $this->assign('infoList',$info_list);

        $this->display('info/index.html','admin');
    }

    //获取申请推荐位置信息列表
    public function apply_trait_lists()
    {
        //从物品信息表中获取 userid为 本登录用户id的列表
        $where = array(
            'trait' => '1',
        );
        $info_list = $this->infoObj->getInfoList($where,null,'id,cid,title,description,litpic,isshow,addtime,trait,hits');
//        vd($info_list);
        $this->assign('infoList',$info_list);

        $this->display('info/index.html','admin');
    }

    //审核 就是设置 信息 的isshow为1
    public function audit()
    {
        //获取信息id,采用ajaxpost过来吧
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        if($id == '')
        {
            //报错
            $this->msg('参数不正确！',2);
        }

        $data = array(
            'isshow' => $_POST['isshow'],
        );
        $where = array('id'=>$id);
        $res = $this->infoObj->data($data)->update($where);
        if($res)
        {
            $this->msg('修改成功！',1);
        }
        else
        {
            $this->msg('修改失败！',2);
        }

    }

    public function infoview()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        if($id == '')
        {
            //报错
            QApplication::message('参数错误');
        }

        QApplication::syModelManager('infoModelManager',$infoObj);
        $info = $infoObj->getInfoById($id);
        $this->assign('info',$info);
        //vd($info);

        //获取物品模型的所有分类
        QApplication::syModelManager('categoryModelManager',$categoryObj);
        $categoryAllList = $categoryObj->getCategoryListForSelect('info');
        $this->assign('categoryAllList',$categoryAllList);
//        vd($categoryAllList);


        $this->display('info/view.html','admin');
    }
}
?>