<?php
/**
 *系统默认配置文件
 *相对于根目录下的config.php来讲，这个配置文件属于系统内核的默认配置，一般不允许非技术用户手动更改该文件。
 * 包括：
 * 默认控制器名、默认方法名、
 */

define('SOURCE_PATH',ROOT_PATH.'/source');  //项目源码目录
define('INCLUDE_PATH',ROOT_PATH.'/include');  //项目源码目录

define('CONTROLLER_PATH',SOURCE_PATH.'/controller');    //项目控制器类库目录
define('ADMIN_CONTROLLER_PATH',SOURCE_PATH.'/controller/admin');    //项目后台控制器类库目录
define('MODEL_PATH',SOURCE_PATH.'/model');              //项目数据模型类库目录
define('MODEL_MANAGER_PATH',SOURCE_PATH.'/modelmanager');//项目模型管理类库目录

define("LIB_PATH",SYSTEM_PATH.'/lib');    //框架核心类库目录
define("EXT_PATH",SYSTEM_PATH.'/ext');    //框架扩展类库目录

define("FORE_TEMPLATE_PATH",ROOT_PATH.'/views/fore/default/templates');    //前台模板目录
define("ADMIN_TEMPLATE_PATH",ROOT_PATH.'/views/admin/templates');    //后台模板目录



//设置系统配置参数
$GLOBALS['inc'] = array(
    //mvc默认配置
    'default_controller' => 'index',    //默认控制器
	'default_action'     => 'index',    //默认方法

    //路径配置
    'model_path'        =>  ROOT_PATH.'/source/model',
    'controller_path'   =>  ROOT_PATH.'/source/controller',
    'model_path'   =>  ROOT_PATH.'/source/model',
    'modelmanager_path'   =>  ROOT_PATH.'/source/modelmanager',
    'cache_path'        =>  ROOT_PATH.'/data/cache',
    'session_path'        =>  ROOT_PATH.'/data/session',

    //根目录下的incldue目录，kindeditor之类的会引用
    'include_path'        =>  '/'.APP_PATH.'/include',

    'css_path'        =>  '/'.APP_PATH.'/views/fore/default/css',
    'js_path'        =>  '/'.APP_PATH.'/views/fore/default/js',
    'image_path'        => '/'.APP_PATH.'/views/fore/default/images',


);

?>