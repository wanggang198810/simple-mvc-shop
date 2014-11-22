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

class infoModelManager extends QModelManager
{

    //利用已经实例化的父类
    function __construct()
    {
        parent::__construct('infoModel');//之前我没有加上这句，父类并没有执行构造

    }

    /*
     *发布物品
     *这里我有一个想法：函数最好不要加参数，但是这条原则应该保证的是控制器中的方法，因为他们要被url解析调用，而内部的这些方法，
     * 他们大部分是被控制器调用，可以加参数咯
     */
    public function add_info($data)
    {
        /*
         * 这里是模型管理类，前台controller调用此处，需要给我什么？给我要添加的数据吧，还需要告诉我是什么表吗？不需要
         * 因为这里是goods的模型管理，一定知道是goods表，所以给我数据就行了
         * 怎么给呢？是从参数直接穿过来吗？还是先 通过模型类的setDate()之类的函数，设置好了，当然set的时候顺便就拿着模型vertifier
         * 进行验证了，只要顺利set然后，才会到这里来add，我直接拿着匹配好的数据库rowdata去QDb中做个insert的query就ok了。
         *
         * QDb的query需要什么，QDb只需要sql语句。
         * 所以我在这个模型管理类中，要组装一个insert类型的sql，然后教给QDb去处理。wait！！教给QDb去处理，不过要提示一下，
         * 原本不是我这种随便什么模型的管理器都能和QDb打交道的，只是因为我继承类QModelManager我的大Boss，我才有这个面子。
         * 所以在组装insert的sql语句的时候，我可能还会用到Boss的东西。
         */

        //1.接受到post过来的data，进行处理部分字段的处理

        //直接insert

        $res = $this->data($data)->insert();
        return $res;
    }

    public function update_info($data,$where)
    {
        /*
         * 这里是模型管理类，前台controller调用此处，需要给我什么？给我要添加的数据吧，还需要告诉我是什么表吗？不需要
         * 因为这里是goods的模型管理，一定知道是goods表，所以给我数据就行了
         * 怎么给呢？是从参数直接穿过来吗？还是先 通过模型类的setDate()之类的函数，设置好了，当然set的时候顺便就拿着模型vertifier
         * 进行验证了，只要顺利set然后，才会到这里来add，我直接拿着匹配好的数据库rowdata去QDb中做个insert的query就ok了。
         *
         * QDb的query需要什么，QDb只需要sql语句。
         * 所以我在这个模型管理类中，要组装一个insert类型的sql，然后教给QDb去处理。wait！！教给QDb去处理，不过要提示一下，
         * 原本不是我这种随便什么模型的管理器都能和QDb打交道的，只是因为我继承类QModelManager我的大Boss，我才有这个面子。
         * 所以在组装insert的sql语句的时候，我可能还会用到Boss的东西。
         */

        //1.接受到post过来的data，进行处理部分字段的处理

        //直接insert

        $res = $this->data($data)->update($where);
        return $res;
    }

    //根据文章编号获取单篇文章数据
    function getInfoById($id)
    {
        //获取数据库对象
        $res = $this->findByPk('*',$id);    //只需要获取什么fields,和 主键的值就行了啊，就一条记录，用不到排序
        return $res;
    }

    /*********************************************************
     * 有个小思考，像下面这种直接函数再次调用的，该怎么组织参数默认值的问题，
    *********************************************************/
    //获取文章列表
    public function getInfoList($where = '',$sort="",$field="",$limit = null)
    {
        if($sort == null) $sort="updatetime DESC,addtime DESC";
        if($field == null) $field="id,cid,title,description,addtime,litpic,isshow";
        $res = $this->findAll($where,$sort,$field,$limit);
        return $res;
    }

}
?>