<?php
/*
 * 文章数据模型
 * ?????????????????????????
 * 1.应该怎样合理的include所需的类呢？记得比较框架的时候，有人说：什么需要时候才加载所需的类，比较有效率神马的
 * */


if(!defined('ROOT_PATH'))exit('Access denied!');


class infoModel extends QModel
{
    public $table = 'info';
    public $pk    = 'id';
    private $fields = array();   //保存数据表的字段名
    private $__data = array(
    );   //保存该数据表正在操作的一行数组值

    public $verifier = array(
        'cid' => array(
            'rules' => array(
                'notnull' => false,
            ),
            'messages' => array(
                'notnull' => '请填写分类名',
            ),
        ),
        'title' => array(
            'rules' => array(
                'notnull' => TRUE,
            ),
            'messages' => array(
                'notnull' => '标题不能为空',
            ),
        ),
        'description' => array(
            'rules' => array(
                'notnull' => TRUE,
            ),
            'messages' => array(
                'notnull' => '简介不能为空',
            ),
        ),
        'currentprice' => array(
            'rules' => array(
                'notnull' => false,
            ),
            'messages' => array(
                'notnull' => '物品现价不能为空',
            ),
        ),
    );

    public function __set($property,$value)
    {
        if(isset($this->__data))
            $this->__data = $value;
    }

    public function __get($property)
    {
        if(isset($this->__data))
            return $this->__data;
        else
            return false;
    }
}
?>