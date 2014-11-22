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

class a_articleController extends QController
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



    //文章添加页面
    public function add()
    {
        //获取文章模型的所有分类
        QApplication::syModelManager('categoryModelManager',$categoryObj);
        $articleCategoryList = $categoryObj->getCategoryListForSelect('article');
        $this->assign('articleCategoryList',$articleCategoryList);

        $this->display('article/add.html','admin');
    }

    //文章添加操作
    public function add_save()
    {
        //重新整理数据
//        vd($_POST);
        $data = array(
            'cid' => $_POST['cid'],
            'title' => $_POST['title'],
            'detail' => $_POST['detail'],
            'addtime' => time(),
            'isshow' => 1,
        );

        /**
         * 说明一下，之前呢，我用的是下面这句话，意思是用info的模型管理对象，先设置data，再走add——info步骤，发生了一点问题，就是
         * 当POST过来的数据有数组时候，需要进行序列化或者join之类的处理，我认为这部分处理应该在add_info函数中进行之后，再运行data()
         *        $this->infoObj->data($data)->add_info();
         */
        $res = $this->articleObj->data($data)->insert();
        if($res) QApplication::message('添加文章成功!',"index.php?c=a_article&a=lists");
        else QApplication::message('添加文章失败!!');
    }


    //修改发布信息
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        if($id == '')
        {
            //报错
            QApplication::message('参数错误');
        }

        $article = $this->articleObj->getArticleById($id);
//        vd($article);
        $this->assign('article',$article);

        //获取文章模型的所有分类
        QApplication::syModelManager('categoryModelManager',$categoryObj);
        $articleCategoryList = $categoryObj->getCategoryListForSelect('article');
        $this->assign('articleCategoryList',$articleCategoryList);

        $this->display('article/edit.html','admin');
    }

    //文章修改操作
    public function edit_save()
    {
        //重新整理数据
//        vd($_POST);
        $data = array(
            'cid' => $_POST['cid'],
            'title' => $_POST['title'],
            'detail' => $_POST['detail'],
            'addtime' => time(),
            'isshow' => 1,
        );

        $where = array('id'=>$_POST['id']);
        $res = $this->articleObj->data($data)->update($where);

        if($res) QApplication::message('修改成功!',"index.php?c=a_article&a=lists");
        else QApplication::message('修改失败!');
    }

    //获取信息列表
    public function lists()
    {
        $article_list = $this->articleObj->getArticleList(null,null,'id,cid,title,addtime,isshow,hits');
        $this->assign('articleList',$article_list);

        $this->display('article/index.html','admin');
    }
}
?>