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

class a_categoryController extends QController
{

    public $categoryObj;     //在构造函数中设置

    public function __construct()
    {
        parent::__construct();
        //获取文章模型管理对象
        QApplication::syModelManager('categoryModelManager',$this->categoryObj);
    }

    //获取单篇文章数据  根据默认设置，url中可以不设置a，则自动为index方法，只需要传递文章编号即可
    public function index()
    {
        $this->lists();
    }

    //类目列表
    public function lists()
    {
        //获取模型名
        $mold = isset($_GET['m']) ? $_GET['m'] : 'info';
        $category_list = $this->categoryObj->getCategoryList($mold);
//        vd($category_list);
        $this->assign('lists',$category_list);
        $this->display('category/lists.html','admin');
    }

    //类目添加
    public function add()
    {
        //获取当前类目列表
        $categoryList = $this->categoryObj->getCategoryListForSelect('info',null);
        $this->assign('lists',$categoryList);
//        vd($category);

        $this->display('category/add.html','admin');
    }

    //类目添加保存
    public function add_save()
    {
        //重新整理数据
//        vd($_POST);
        $data = array(
            'molds' => $_POST['molds'],
            'pid' => $_POST['pid'],
            'name' => $_POST['name'],
            'isshow' => $_POST['isshow'],
        );

        /**
         * 说明一下，之前呢，我用的是下面这句话，意思是用info的模型管理对象，先设置data，再走add——info步骤，发生了一点问题，就是
         * 当POST过来的数据有数组时候，需要进行序列化或者join之类的处理，我认为这部分处理应该在add_info函数中进行之后，再运行data()
         *        $this->infoObj->data($data)->add_info();
         */
        $res = $this->categoryObj->data($data)->insert();
        if($res) QApplication::message('添加类目成功!',"index.php?c=a_category&a=lists");
        else QApplication::message('添加类目失败!!');

    }

    //类目修改
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        if($id == '')
        {
            //报错
            QApplication::message('参数错误');
        }

        $category = $this->categoryObj->getCategoryById($id);
        $this->assign('category',$category);

        $categoryList = $this->categoryObj->getCategoryListForSelect('info',null);
        $this->assign('lists',$categoryList);

        $this->display('category/edit.html','admin');
    }

    //类目修改保存
    public function edit_save()
    {
        //重新整理数据
//        vd($_POST);
        $data = array(
            'molds' => $_POST['molds'],
            'pid' => $_POST['pid'],
            'name' => $_POST['name'],
            'isshow' => $_POST['isshow'],
        );

        /**
         * 说明一下，之前呢，我用的是下面这句话，意思是用info的模型管理对象，先设置data，再走add——info步骤，发生了一点问题，就是
         * 当POST过来的数据有数组时候，需要进行序列化或者join之类的处理，我认为这部分处理应该在add_info函数中进行之后，再运行data()
         *        $this->infoObj->data($data)->add_info();
         */
        $where = array('id'=>$_POST['id']);
        $res = $this->categoryObj->data($data)->update($where);
//
//        if($res) QApplication::message('修改类目成功!',"index.php?c=a_category&a=lists");
//        else QApplication::message('修改类目失败!!');

        if($res)
        {
            $this->msg('修改成功！',1);
        }
        else
        {
            $this->msg('修改失败！',2);
        }
    }

    //类目删除
    public function del()
    {

        //获取id参数，是从ajaxpost而来的
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        if($id == '')
        {
            //报错
            $this->msg('参数不正确！'.$id,2);
        }

        $where = array('id'=>$id);
        $res = $this->categoryObj->delete($where);
        if($res)
        {
            $this->msg('删除成功！',1);
        }
        else
        {
            $this->msg('删除失败！',2);
        }
    }
}
?>