<?php /* Smarty version 2.6.18, created on 2014-04-12 10:25:43
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/admin/templates/header.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title></title>
    <link type="text/css" rel="stylesheet" href="views/admin/css/admin.css">

    <script type="text/javascript" src="include/jsmain.js"></script>
    <script type="text/javascript" src="include/adminuser.js"></script>
    <script type="text/javascript" src="include/admin.js"></script>

    <script type="text/javascript">
        function  heightSet(thisFrame){
            if($.browser.mozilla || $.browser.msie){
                bodyHeight =window.frames["a_update"].document.body.scrollHeight;
            }else{
                bodyHeight =thisFrame.contentWindow.document.documentElement.scrollHeight;
            }
            document.getElementById("a_update").height=bodyHeight;

        }
    </script>
</head>

<body>
<div class="hd">
    <div class="top"><span><a target="main" href="?c=a_sys&amp;a=ecache">更新系统缓存</a> | <a target="_blank" href="index.php">前台首页</a><!--?php include_once('include/fun/verification.php');echo verification(2); ?--></span>当前登录：<!--?php echo $_SESSION['auser']['auser']; ?-->&nbsp;&nbsp;<a target="main" href="?c=a_adminuser&amp;a=edituser">[修改资料]</a>&nbsp;&nbsp;<a target="_parent" href="?c=login&amp;a=out">[退出登录]</a></div>
    <div class="mu">
        <div class="logo log"></div>
        <div class="menu">
            <a onclick="JumpFrame('?c=a_index&a=left&l=info','?c=a_info&a=lists');" href="#">分类信息管理</a>
            <a onclick="JumpFrame('?c=a_index&a=left&l=category','?c=a_category&a=lists');" href="#">类目管理</a>
            <a onclick="JumpFrame('?c=a_index&a=left&l=article','?c=a_article&a=lists');" href="#">网站新闻管理</a>
            <a onclick="JumpFrame('?c=a_index&a=left&l=member','?c=a_member&a=lists');" href="#">会员管理</a>
			<a onclick="JumpFrame('?c=a_index&a=left&l=message','?c=a_message&a=lists');" href="#">留言管理</a>
            <a onclick="JumpFrame('?c=a_index&a=left&l=sys','?c=a_sys&a=lists');" href="#">系统设置</a>
        </div>
    </div>
</div>


</body></html>