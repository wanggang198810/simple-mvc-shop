<?php
/*
 * 文章数据模型
 * ?????????????????????????
 * 1.应该怎样合理的include所需的类呢？记得比较框架的时候，有人说：什么需要时候才加载所需的类，比较有效率神马的
 * */


if(!defined('ROOT_PATH'))exit('Access denied!');

require_once(CORE_PATH.'/'.'QModel.php');

class categoryModel extends QModel
{
    public $table = 'category';
    public $pk    = 'id';
    public $fields = array();   //保存数据表的字段名
    public $rowdata = array();   //保存该数据表正在操作的一行数组值

    public $verifier = array(
        'molds' => array(
            'rules' => array(
                'notnull' => FALSE,
            ),
            'messages' => array(
                'notnull' => '请填写模型名',
            ),
        ),
        'name' => array(
            'rules' => array(
                'notnull' => FALSE,
            ),
            'messages' => array(
                'notnull' => '分类名称不能为空',
            ),
        ),

    );
}
?>