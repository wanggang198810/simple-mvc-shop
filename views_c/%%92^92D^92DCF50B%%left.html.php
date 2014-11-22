<?php /* Smarty version 2.6.18, created on 2014-04-11 23:01:54
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/admin/templates/left.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title></title>
    <link type="text/css" rel="stylesheet" href="views/admin/css/admin.css">
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

<body style="overflow-x:hidden;" class="leftbody">

<div class="lefttop"><?php echo $this->_tpl_vars['leftname']; ?>
</div>
<div class="leftmenu">
    <?php echo $this->_tpl_vars['leftmenu']; ?>

</div>





</body></html>