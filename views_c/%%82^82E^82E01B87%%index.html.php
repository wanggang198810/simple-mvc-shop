<?php /* Smarty version 2.6.18, created on 2014-04-12 08:04:25
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/admin/templates/article/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'E:\\PHPnow-1.5.6\\htdocs\\ershou2014/views/admin/templates/article/index.html', 92, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title></title>
    <link type="text/css" rel="stylesheet" href="views/admin/css/admin.css">
    <script type="text/javascript" src="include/jsmain.js"></script>
    <script type="text/javascript" src="include/admin.js"></script>
    <!--这是一个弹出对话框的js库，他有自己的css-skin，界面不错，可以直接复用-->
    <script src="include/dialog/lhgdialog.min.js"></script>
    <script src="include/dyform.js"></script>

    <script type="text/javascript">
        $(function(){
            $("#tid option[class='hidden']").remove();
            $("#ztid option[class='hidden']").remove();
            $(".searchauto").change(function(){$("#search").submit();});
        });
    </script>
</head>

<body>
<div class="maintop">当前位置：文章列表</div>
<div id="main" class="main">
    <table width="100%">
        <tbody><tr>
            <td>
                <form id="search" method="get" action="">
                    <input type="hidden" value="a_article" name="c">
                    <input type="hidden" value="lists" name="a">
                    <select class="searchauto" name="isshow">
                        <option value="">审核</option>
                        <option value="1">已审</option>
                        <option value="2">未审</option>
                    </select>
                    <select id="tid" class="searchauto" name="tid">
                        <option value="">所有栏目</option>
                        <option value="1">关于我们</option>
                        <option value="9">&mdash;公司介绍</option>
                        <option value="10">&mdash;公司荣誉</option>

                    </select>

                    <select class="searchauto" name="trait">
                        <option value="">属性</option>      <option value="1">头条</option>
                        <option value="2">推荐</option>
                    </select>
                    <select class="searchauto" name="litpic">
                        <option value="">缩略图不限</option>
                        <option value="1">有</option>
                        <option value="2">无</option>
                    </select>
                    文章标题：<input type="text" value="" style="width:100px;" name="title">
                    <input type="submit" class="btnmini" value="查找" name="search">
                </form></td>
        </tr><tr><td height="5"></td></tr>
        </tbody></table>
    <form method="post" action="?c=a_article&amp;a=alledit" id="formall">
        <input type="hidden" value="" id="go" name="go">
        <table width="100%" class="tablist">
            <tbody><tr class="trbg">
                <td width="40">ID</td>
                <td width="30">选择</td>
                <td width="50">排序</td>
                <td>标题</td>
                <td width="80">状态</td>
                <td width="120">发布时间</td>
                <td width="60">点击</td>
                <td width="120">操作</td>
            </tr>




            <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['articleList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <td><?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['id']; ?>
</td>
                <td><input type="checkbox" value="10" id="id[]" name="id[]"></td>
                <td><input type="text" style="width:30px; text-align:center;padding:2px;" value="0" name="orders[64]" class="int"></td>

                <td class="tdleft">
                    <a target="_blank" href="index.php?c=article&id=<?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['title']; ?>
</a>
                    <span style="color:#C00">图</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="quickeditor none" style="color:#CCC"><a onclick="quickeditor('?c=a_article&amp;a=edit&amp;id=<?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['id']; ?>
')" href="javascript:;" >[快速编辑]</a></span>
                </td>
                <td>
                    <?php if (( $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['isshow'] == 1 )): ?>
                    <span class="audit" onclick="audit('<?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['id']; ?>
',<?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['isshow']; ?>
,this)">已审</span>
                    <?php else: ?>
                    <span class="audit red" onclick="audit('<?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['id']; ?>
',<?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['isshow']; ?>
,this)">未审</span>
                    <?php endif; ?>
                </td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>
</td>
                <td><?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['hits']; ?>
</td>
                <td>
                    <a href="index.php?c=a_article&a=edit&id=<?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['id']; ?>
">修改</a>
                    | <a onclick="del('<?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['id']; ?>
',this)" href="javascript:void(0);">删除</a>
                </td>
            </tr>
            <?php endfor; endif; ?>


            <script>
                //快速预览
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
                        width:620,
                        height:450
                    })
                }
                //删除
                function audit(id,isshow,obj) {
                    var tip
                    if(isshow)
                    {
                        isshow = 0
                        tip = "确定解审?"
                    }
                    else
                    {
                        isshow = 1
                        tip = "确定审核?"
                    }

                    ajaxpost(
                            tip,
                            "index.php?c=a_article&a=audit",
                            {id: id,isshow: isshow},
                            1,
                            function(){
                                //改变
                                if(isshow == 1)
                                {
                                    $(obj).removeClass('red');
                                    $(obj).html('已审')
                                }
                                else
                                {
                                    $(obj).addClass('red');
                                    $(obj).html('未审')
                                }
                            }
                    );
                }
            </script>



            <tr><td colspan="9"><input type="button" onclick="alls('ids[]','allcheck');" class="btnmini" value="全选" id="allcheck">&nbsp;
                <input type="button" onclick="forma(1);" class="btnmini" value="取消审核" name="g1">
                <input type="button" onclick="forma(0);" class="btnmini" value="审核" name="g1">
                &nbsp;<input type="button" onclick="forma(2);" class="btnmini" value="删除" name="g2">
                &nbsp;<input type="button" onclick="forma(9);" class="btnmini" value="提交排序" name="g3">
                &nbsp;<select style="margin:0;" id="ztrait" name="trait">
                    <option value="">更改推荐属性为</option>
                    <option value="1">头条</option>
                    <option value="2">推荐</option>
                    <option value="0">清空推荐属性</option>
                </select>&nbsp;<input type="button" onclick="forma(4);" class="btnmini" value="更改" name="g3">
                &nbsp;<select style="margin:0;" id="ztid" name="tid">
                    <option value="">更改所属栏目为</option>
                    <option value="1">关于我们</option>
                    <option value="9">&mdash;公司介绍</option>
                    <option value="10">&mdash;公司荣誉</option>



                    <option value="3">服务项目</option>
                    <option value="4">服务案例</option>
                    <option value="6">营销网络</option>
                    <option value="7">联系我们</option>
                    <option value="8">公司动态</option>



                </select>&nbsp;<input type="button" onclick="forma(3);" class="btnmini" value="更改" name="g3">
            </td></tr>
            </tbody></table>
        <table width="100%">
            <tbody><tr><td height="35"><ul class="pages"><li><a>共37篇</a></li><li class="c">1</li><li><a href="?c=a_article&amp;page=2">2</a></li><li><a href="?c=a_article&amp;page=3">3</a></li><li><a href="?c=a_article&amp;page=2">下一页</a></li><li><a href="?c=a_article&amp;page=3">尾页</a></li></ul></td></tr>

            </tbody></table>
    </form>
</div>


</body></html>