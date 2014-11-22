<?php
/*应用入口类
 *从index.php入口直接实例化并运行run()启动应用
 *目标：
 * 1.
 * ';引入相应的类
 * 2.解析url，获取处理类和方法
 */

//canphp中cpAPP类： 应用控制类(完成网址解析、单一入口控制、静态页面缓存功能) 2014-03-22
if(!defined('ROOT_PATH'))exit('Access denied!');
require(CORE_PATH.'/QController.php');
require(CORE_PATH.'/QModel.php');
require(CORE_PATH.'/QDb.php');
require(CORE_PATH.'/QModelManager.php');
require(CORE_PATH.'/QError.php');




//这个类在这里要承担什么作用呢？
class QApplication
{
    public static $E;

    public function __construct()
    {
        //实例化error对象
        self::$E = QError::getInstance();

    }

    public static function error($error,$is_save_in_log = true)
    {
        self::$E->error($error,$is_save_in_log);
    }

    public static function message($message,$gourl=false)
    {
        self::$E->message($message,$gourl);
    }

    public function run()
    {
        //实例化控制器
        $controller = new QController();
        $controller->parseUrl();            // 解析url
        $controller->getController();   //获取contrller文件,检测类是否定义存在
        $controller->go();
    }
    
    //根据类名和目录，加载类，并实例化
    public static function syClass($classname,$dir = NULL,&$tmpObj)
    {
        if(null != $dir)
        {
            require_once($dir.'/'.$classname.'.php');   //????如果写成require会报错，比如smarty显示引入重复，static的原因？
        }
        else
        {
            require_once(CORE_PATH.'/'.$classname.'.php');
        }

        if(class_exists($classname) || interface_exists($classname))
        {
            $tmpObj = new $classname;

//            return $tmpObj;
        }
        else
            return false;
    }


    /*不许要数据模型类的任意数据表实例化数据模型对象
     *实际上是实例化数据模型基类QModel，只需要完成最基本的CRUD，建议直接使用此方法
     *
     */
    public static function syDB()
    {
        self::syClass('QModel',CORE_PATH);
    }

    //实例化前台控制器对象
    public static function syController($classname,&$tmpObj)
    {
        self::syClass($classname,CONTROLLER_PATH);
    }

    //实例化后台控制器对象
    public static function syAdminController($classname,&$tmpObj)
    {
        self::syClass($classname,ADMIN_CONTROLLER_PATH,$tmpObj);
    }

    //实例化数据模型类对象
    public static function syModel($classname,&$tmpObj)
    {
        self::syClass($classname,MODEL_PATH,$tmpObj);
    }

    //实例化数据模型管理类对象
    public static function syModelManager($classname,&$tmpObj)
    {
        self::syClass($classname,MODEL_MANAGER_PATH,$tmpObj);
    }


}



?>