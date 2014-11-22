<?php
/*用户配置文件
 *此配置文件放在根目录下，包含最初的路径设置和一些简单的、可以指导非技术人员进行修改的配置
 * 包括：
 * 数据库基本信息、站点基本信息
 *要求：
 * 1.define的文件路径默认都不带最后的“/”
 * 2.
 */

//路径设置
define("ROOT_PATH",dirname(__FILE__));  //根目录
define("APP_PATH",basename(ROOT_PATH));  //项目名称  如localhost/ershou 结果为 ershou

define("SYSTEM_PATH",ROOT_PATH.'/system');  //框架目录
define("CORE_PATH",SYSTEM_PATH.'/core');    //框架核心类库目录

//$config配置
$GLOBALS['config'] = array(
    //数据库信息
    'db'    =>  array(
        'host'      =>  'localhost',
        'port'      =>  3306,
        'user'      =>  'root',
        'password'  =>  'root',
        'database'  =>  'ershou',
        'prefix'    =>  'qt_',
    ),
    //站点基本信息
    'site'  =>  array(
        'site_path'         =>  'http://localhost/ershou2014/',
        'site_title'        =>  '临沂大学二手信息网站',
        'site_keywords'     =>  '临沂大学二手自行车、二手电动车、二手笔记本、二手考研书籍',
        'site_description'  =>  '临沂大学二手信息网是专门面向临沂大学广大师生的服务性信息网站',
    ),

);


?>