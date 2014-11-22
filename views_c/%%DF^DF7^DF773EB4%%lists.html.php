<?php /* Smarty version 2.6.18, created on 2014-04-12 07:55:33
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/admin/templates/category/lists.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title></title>

    <link type="text/css" rel="stylesheet" href="views/admin/css/admin.css">
    <script type="text/javascript" src="include/jsmain.js"></script>
    <script type="text/javascript" src="include/admin.js"></script>
    <!--这是一个弹出对话框的js库，他有自己的css-skin，界面不错，可以直接复用-->
    <script src="include/dialog/lhgdialog.min.js"></script>
    <script src="include/dyform.js"></script>

    <script type="text/javascript">
        function closec(tid){
            if ($.browser.msie) {
                if($("."+tid).css('display')=='inline'){
                    $("."+tid).css('display','none');
                    $("#"+tid).attr('class', 'classico1');
                }else{
                    $("."+tid).css('display','inline');
                    $("#"+tid).attr('class', 'classico2');
                }
            }else{
                if($("."+tid).css('display')=='table-row'){
                    $("."+tid).css('display','none');
                    $("#"+tid).attr('class', 'classico1');
                }else{
                    $("."+tid).css('display','table-row');
                    $("#"+tid).attr('class', 'classico2');
                }
            }
        }
    </script>
</head>

<body>



<div class="maintop">当前位置：类目管理</div>
<div class="main">
    <div class="oper">
        <a href="?c=a_category&a=lists&m=info">二手类目管理</a>
        <a href="?c=a_category&a=lists&m=job">兼职类目管理</a>
        <a href="?c=a_category&a=lists&m=article">文章类目管理</a>
        <a href="?c=a_category&a=add">添加类目</a>
    </div>


    <table width="100%" class="tablist">
    <tbody><tr class="trbg">
        <td width="30">ID</td>
        <td width="30">排序</td>
        <td>类目名称</td>
        <td width="110">是否显示</td>
        <td width="110">所属频道</td>
        <td width="100">快捷</td>
        <td width="210">类目操作</td>
    </tr>
    <form id="formall" action="?c=a_classtypes&amp;a=alledit" method="post"></form>
    <input type="hidden" name="go" id="go" value="">

    <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['lists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec1']['show'] = true;
$this->_sections['sec1']['max'] = $this->_sections['sec1']['loop'];
$this->_sections['sec1']['step'] = 1;
$this->_sections['sec1']['start'] = $this->_sections['sec1']['step'] > 0 ? 0 : $this->_sections['sec1']['loop']-1;
if ($this->_sections['sec1']['show']) {
    $this->_sections['sec1']['total'] = $this->_sections['sec1']['loop'];
    if ($this->_sections['sec1']['total'] == 0)
        $this->_sections['sec1']['show'] = false;
} else
    $this->_sections['sec1']['total'] = 0;
if ($this->_sections['sec1']['show']):

            for ($this->_sections['sec1']['index'] = $this->_sections['sec1']['start'], $this->_sections['sec1']['iteration'] = 1;
                 $this->_sections['sec1']['iteration'] <= $this->_sections['sec1']['total'];
                 $this->_sections['sec1']['index'] += $this->_sections['sec1']['step'], $this->_sections['sec1']['iteration']++):
$this->_sections['sec1']['rownum'] = $this->_sections['sec1']['iteration'];
$this->_sections['sec1']['index_prev'] = $this->_sections['sec1']['index'] - $this->_sections['sec1']['step'];
$this->_sections['sec1']['index_next'] = $this->_sections['sec1']['index'] + $this->_sections['sec1']['step'];
$this->_sections['sec1']['first']      = ($this->_sections['sec1']['iteration'] == 1);
$this->_sections['sec1']['last']       = ($this->_sections['sec1']['iteration'] == $this->_sections['sec1']['total']);
?>
    <tr class="classp">
        <td><?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
</td>
        <td><input type="text" class="int" name="orders[1]" value="0" style="width:30px; text-align:center; padding:2px;"></td>
        <td class="tdleft"><span class=" <?php if (( $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['sub'] != '' )): ?> classico1 <?php else: ?> classico2 <?php endif; ?>" id="c1" onclick="closec(&quot;c<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
&quot;)"></span>
            <a href="?c=a_category&amp;a=edit&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['name']; ?>
</a>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="quickeditor none" style="color:#CCC"><a onclick="quickeditor('?c=a_category&amp;a=edit&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
')" href="javascript:;" >[快速编辑]</a></span>
        </td>
        <td>显示</td>
        <td>文章</td>
        <td><a href="?c=a_classtypes&amp;a=add&amp;tid=1">添加下级类目</a></td>
        <td>
            <a href="?c=a_fields&amp;molds=article&amp;tid=1">字段管理</a>&nbsp;&nbsp;
            <a href="?c=a_category&amp;a=edit&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
">编辑</a>&nbsp;&nbsp;
            <a onclick="del('<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
',this)" href="javascript:void(0);">删除</a>
        </td>
    </tr>
        <?php unset($this->_sections['sec2']);
$this->_sections['sec2']['name'] = 'sec2';
$this->_sections['sec2']['loop'] = is_array($_loop=$this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['sub']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec2']['show'] = true;
$this->_sections['sec2']['max'] = $this->_sections['sec2']['loop'];
$this->_sections['sec2']['step'] = 1;
$this->_sections['sec2']['start'] = $this->_sections['sec2']['step'] > 0 ? 0 : $this->_sections['sec2']['loop']-1;
if ($this->_sections['sec2']['show']) {
    $this->_sections['sec2']['total'] = $this->_sections['sec2']['loop'];
    if ($this->_sections['sec2']['total'] == 0)
        $this->_sections['sec2']['show'] = false;
} else
    $this->_sections['sec2']['total'] = 0;
if ($this->_sections['sec2']['show']):

            for ($this->_sections['sec2']['index'] = $this->_sections['sec2']['start'], $this->_sections['sec2']['iteration'] = 1;
                 $this->_sections['sec2']['iteration'] <= $this->_sections['sec2']['total'];
                 $this->_sections['sec2']['index'] += $this->_sections['sec2']['step'], $this->_sections['sec2']['iteration']++):
$this->_sections['sec2']['rownum'] = $this->_sections['sec2']['iteration'];
$this->_sections['sec2']['index_prev'] = $this->_sections['sec2']['index'] - $this->_sections['sec2']['step'];
$this->_sections['sec2']['index_next'] = $this->_sections['sec2']['index'] + $this->_sections['sec2']['step'];
$this->_sections['sec2']['first']      = ($this->_sections['sec2']['iteration'] == 1);
$this->_sections['sec2']['last']       = ($this->_sections['sec2']['iteration'] == $this->_sections['sec2']['total']);
?>
        <tr class="c<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
" style="display:none;">

            <td><?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['sub'][$this->_sections['sec2']['index']]['id']; ?>
</td>
            <td><input type="text" class="int" name="orders[1]" value="0" style="width:30px; text-align:center; padding:2px;"></td>
            <td class="tdleft">
                <a href="?c=a_category&amp;a=edit&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['sub'][$this->_sections['sec2']['index']]['name']; ?>
</a>
                <span class="quickeditor none" style="color:#CCC"><a onclick="quickeditor('?c=a_category&amp;a=edit&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['sub'][$this->_sections['sec2']['index']]['id']; ?>
')" href="javascript:;" >[快速编辑]</a></span>
            </td>
            <td>显示</td>
            <td>文章</td>
            <td><a href="?c=a_classtypes&amp;a=add&amp;tid=1">添加下级栏目</a></td>
            <td>
                <a href="javascript:void(0);" onclick="urldialog('ssss','?c=a_category&amp;a=edit&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['sub'][$this->_sections['sec2']['index']]['id']; ?>
')">字段管理</a>&nbsp;&nbsp;
                <a href="?c=a_category&amp;a=edit&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['sub'][$this->_sections['sec2']['index']]['id']; ?>
">编辑</a>&nbsp;&nbsp;
                <a onclick="del('<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['sub'][$this->_sections['sec2']['index']]['id']; ?>
',this)" href="javascript:void(0);">删除</a>
            </td>
        </tr>
        <?php endfor; endif; ?>
    <?php endfor; endif; ?>

    <script>
        //快速编辑
        $('tr').hover(
                function () {
                    $(this).find('.quickeditor').show();
                },
                function () {
                    $(this).find('.quickeditor').hide();
                }
        );
        function quickeditor(url){
            $.dialog({
                title:'快速编辑',
                content: 'url:'+url,
                width:500,
                height:300
            })
        }
        //删除
        function del(cid,obj) {
            var obj;
            ajaxpost(
                    '确认要删除本内容吗?删除无法恢复！',
                    "index.php?c=a_category&a=del",
                    {id: cid},
                    1,
                    //以下函数传的是 success函数，参见ajaxpost
                    function(){
                        $(obj).parent().parent().remove();
                    }
            );
        }
    </script>

    <tr><td colspan="6" class="tdleft">
        &nbsp;<input type="button" name="g3" value="提交排序" class="btnmini" onclick="forma(1);">
    </td></tr></tbody></table>

</div>


</body></html>