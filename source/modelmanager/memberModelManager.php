<?php
/*
 * 文章模型管理类
 *文章模型类对象只是一种ORM的方便使用的临时性类，借助他进行程序数据和数据库数据的同步和完整性检测
 * */

if(!defined('ROOT_PATH'))exit('Access denied!');


/*
 * doyou中好像没有继承的使用，我建立的syClass来自动实例化类，但是导入的话只能这样写啦
 * 其实我很想写个import函数来整合  require 函数，
 * 只是我应该将它写在哪里呢？???????????????????????????
 * */


class memberModelManager extends QModelManager
{

    public $article_model;
    //利用已经实例化的父类
    function __construct()
    {
        parent::__construct('memberModel');//之前我没有加上这句，父类并没有执行构造

    }

    //根据文章编号获取单篇文章数据
    function getMemberById($id)
    {
        //获取数据库对象
        $res = $this->findByPk('*',$id);
        return $res;
    }

    //获取文章列表
    public function getMemberList()
    {
        $res = $this->findAll();
        return $res;
    }

}
?>