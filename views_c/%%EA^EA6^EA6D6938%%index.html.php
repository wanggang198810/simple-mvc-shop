<?php /* Smarty version 2.6.18, created on 2014-04-12 08:08:41
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/admin/templates/member/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title></title>
    <link type="text/css" rel="stylesheet" href="views/admin/css/admin.css">
    <script type="text/javascript" src="include/jsmain.js"></script>
    <script type="text/javascript" src="include/admin.js"></script>
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




<div class="maintop">当前位置：栏目管理</div>
<div class="main"><div class="oper"><a href="?c=a_member">会员管理</a>
<a href="?c=a_member&a=add">添加会员</a></div>
    <table width="100%" class="tablist">
        <tbody><tr class="trbg">
            <td width="40">ID</td>
            <td>用户名</td>
            <td width="150">操作</td>
        </tr>

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
        <tr>
            <td><?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
</td>
            <td class="tdleft"><a href="?c=a_member&amp;a=edit&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['username']; ?>
</a></td>
            <td><a href="?c=a_member&amp;a=edit&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
">编辑</a>&nbsp;&nbsp;<a href="?c=a_member&amp;a=del&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
">删除</a></td>
        </tr>
        <?php endfor; endif; ?>
        </tbody></table>
</div>

</body></html>