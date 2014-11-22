<?php
/*file:index.php
 *fun:站点入口文件
 *author：prog_time
 *time:2014-03-05
 *version:
*/
header("content-type:text/html; charset=utf-8");
@date_default_timezone_set('PRC');

//引入配置文件
require('config.php');
require(SYSTEM_PATH.'/inc.php');
require(SYSTEM_PATH.'/Functions.php');

session_start();
//session_destroy();

//引入网站入口类
require(SYSTEM_PATH."/QApplication.php");
$app = new QApplication();
$app->run();

