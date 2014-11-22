<?php
/*
 * 文章数据模型
 * ?????????????????????????
 * 1.应该怎样合理的include所需的类呢？记得比较框架的时候，有人说：什么需要时候才加载所需的类，比较有效率神马的
 * */


if(!defined('ROOT_PATH'))exit('Access denied!');

class memberModel extends QModel
{
    public $table = 'member';
    public $pk    = 'id';
    public $fields = array();   //保存数据表的字段名
    public $rowdata = array();   //保存该数据表正在操作的一行数组值

    public $verifier = array(
        'username' => array(
            'rules' => array(
                'notnull' => FALSE,
            ),
            'messages' => array(
                'notnull' => '用户名不能为空',
            ),
        ),
        'email' => array(
            'rules' => array(
                'notnull' => FALSE,
            ),
            'messages' => array(
                'notnull' => '邮箱不能为空',
            ),
        ),

    );
}
?>