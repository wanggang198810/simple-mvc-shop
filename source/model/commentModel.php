<?php
/*
 * 文章数据模型
 * ?????????????????????????
 * 1.应该怎样合理的include所需的类呢？记得比较框架的时候，有人说：什么需要时候才加载所需的类，比较有效率神马的
 * */


if(!defined('ROOT_PATH'))exit('Access denied!');


class commentModel extends QModel
{
    public $table = 'comment';
    public $pk    = 'id';
    private $fields = array();   //保存数据表的字段名
    private $__data = array(
    );   //保存该数据表正在操作的一行数组值

    public $verifier = array(
        
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