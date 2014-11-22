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

require_once(CORE_PATH.'/'.'QModelManager.php');

class categoryModelManager extends QModelManager
{

    public $cat;

    //利用已经实例化的父类
    function __construct()
    {

        parent::__construct('categoryModel');//之前我没有加上这句，父类并没有执行构造

        /* 在我的lib中有一个Category.php是外部引入的，挺好的实现无线分类的，我可以直接拿来用
         * 是不是以后前台和后台只要使用category的都要来到这里操作? 是的！那我就在这里引入好了!!*/
        require_once(LIB_PATH.'/'.'Category.php');
        if(!class_exists('Category'))
        {
            QApplication::error('类：Category定义不存在');
            //目前写到这里了，可是目前不好传递当前的文件按名和行数，之后再解决吧**********？？？？？？？？？？？2014-03-23
        }

        /*__FILE__.__LINE__.
         * 写到这里的时候，我想，其实很多工作在ModelManager层去做，Controller中做的大部分还是高层的商业逻辑，
         * 之前只是考虑到ModelManger会和数据库打交道，而且也是借用父类来实现基本的数据库操作
         * 但是我忽略类，在这个层次中不只有数据库啊，还是日志处理，报错处理，异常处理，有时还需要从cache做数据存取，我该如何做呢?
         * 1.log类毕竟只需要一个对象就可以了，使用单例模式，我需要做页面上的报错呢,写个error类？
         * error和exception有什么区别吗？说实话，我讨厌‘异常’ 这个词，我的框架中就叫错误吧，写个Error类，继承php默认的Exception
         * 或者以后自己写个自己的Exception类
         *
         * 2.log   error ???  在error中，主要是我在程序中随时写入报错信息，是否需要写入log，要不就在error的方法中设置参数得了
         * 那么error叫做QError是core哦
         * OK，do t！
         *
         *
         * */

        //ok，实例化Category类，写到这里的时候又很想去静态化，可是静态和全局的东西可能不安全吧。？？？？？？
        //实例化之前，根据这个类的文档，先做一个字段映射
//        $field = array('cat_id','pid','name','name');
        $field = array('id','pid','name','fullname');
        $this->cat = new Category($field);

    }


    public function getCategoryById($id)
    {
        //获取数据库对象
        $res = $this->findByPk('*',$id);    //只需要获取什么fields,和 主键的值就行了啊，就一条记录，用不到排序
        return $res;
    }

    //这里可以获取用户下拉列表select中
    public function getCategoryListForSelect($mold,$pid=null)
    {
        $where = array(
            'molds'=>$mold,
        );

        //组装where条件
        if(null !== $pid) //注意 $pid 可能为0，一级栏目
        {
            $tmpArr = array('pid' => $pid);
            $where = array_merge($tmpArr,$where);
        }
        else
        {
            $pid = 0;
        }

        $data = $this->findAll($where,null,'id,pid,name,molds');
        $res = $this->cat->getTree($data,0);
//        vd($res);
        return $res;
        //return array('id','pid','name','fullname');
    }



/*prog_time 补注: 其实我可以以后来获取sub，利用ajax实现类似 phpwind发帖子选栏目的操作，其实我下面自己写的方法也许还是有用的，
 *不过，暂时先不弄了
 */


    /*这是一个马甲方法，因为原来的函数在返回数组的时候，下标并不从0开始，所以我在控制器中进行了hack，
     *多次调用就比较麻烦了，所以我把这个hack写在这里，并把原来的方法名末尾加上了 "_q" :表示有问题的方法
     * 因为原来的方法，牵扯到递归，所以，我不方便把这个hack写在里面，就跳出来，获取最终结果，然后hack
    */
    public function getCategoryList($mold,$pid=null)
    {
        $categoryList = $this->getCategoryList_q($mold,$pid);
        $newcategoryList = array();
        foreach($categoryList as $k=>$v)
        {
            $newcategoryList[] = $v;
        }
        return $newcategoryList;

    }

    //获取类目列表
    public function getCategoryList_q($mold,$pid=null)
    {
        $where = array(
            'molds'=>$mold,
        );

        //组装where条件
        if(null !== $pid) //注意 $pid 可能为0，一级栏目
        {
            $tmpArr = array('pid' => $pid);
            $where = array_merge($tmpArr,$where);
        }
        $res = $this->findAll($where,null,'id,pid,name,molds');

        //如果没有pid，则在此对 $res 进行加层次处理
        if(null === $pid) //注意 $pid 可能为0，一级栏目
        {
            //循环每一个分类，检查有没有以它的id为pid的其他分类，如果有，将子类的结果数组，array_merge到总数组的该父分类的sub键下
            //形成一个具有结构化的数组


            foreach ($res as $k => $v)
            {
                $res2 = array();
                $res2 = array_merge($res,$res2); //此处是为了给下面的函数传值，发现数组传的也是地址，所以我用array_merge()复制一份$res
                $res=$this->getSubCategory($res2,$mold,$v['id']);
            }

        }
        return $res;
    }


    //说明一下，我这里的做法，
    private function getSubCategory($res,$mold,$pid)
    {
        $new = $this->getCategoryList_q($mold,$pid);

        foreach($res as $k => $v)
        {
            if($v['id'] == $pid)
            {
                $res[$k] = array_merge($res[$k],array('sub'=>$new));
            }
        }

        //如果分类中某个分类有sub，就循环sub中的id，将sub中的分类从res一级中删除，不然的话，如果有12个分类，其中6个一级
        //6个二级，那么现在额 tmpRes仍然是一级数组12，所以要删除
        if($new)    //加此处判断是因为，有时候没有取得数据库记录，就返回false了
        {
            foreach($new as $k => $v)
            {
                $id = $v['id'];

                //循环大数组，找到分类的id为$id的，进行删除
               foreach($res as $k1 => $v1)
               {
                   if($v1['id'] == $id)
                       unset($res[$k1]);
               }
            }
        }
        return $res;
    }

}