<?php /* Smarty version 2.6.18, created on 2014-04-12 07:52:54
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/admin/templates/category/add.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title></title>

    <link type="text/css" rel="stylesheet" href="views/admin/css/admin.css">
    <script type="text/javascript" src="include/jsmain.js"></script>
    <script type="text/javascript" src="include/admin.js"></script>

    <!-- 暂时屏蔽，届时参考 prog_time2014-03-30
        <script type="text/javascript">
            $(function(){
                $("#moldst").empty();
                $("#moldst").append($("#mid").attr("value")+'/');
                $("#mid").change(function(){
                    $("#moldst").empty();
                    $("#moldst").append($("#mid").attr("value")+'/');
                    if($("#mid").attr("value")=='message'&amp;&amp;$("#msubmit").attr("value")==0){
                        $("#msubmit").val(1);
                    }
                    if($("#mid").attr("value")=='product'){
                        $("#units").removeClass("none");
                    }else{
                        $("#units").addClass("none");
                    }
                });
            });
    </script>
    -->

<body>
<div class="maintop">当前位置：类目添加</div>
<div class="main">
    <div class="info">
        <form method="post" action="?c=a_category&amp;a=add_save">
            <div id="infos1" class="">
                <dl style="border:0;"><dt>信息模型：</dt>
                    <dd>
                        <select id="mid" name="molds">
                            <option value="job">兼职信息</option>
                            <option value="info">二手物品</option>
                            <option value="article">系统文章</option>
                        </select><span></span>
                    </dd>
                </dl>
                <dl style="border:0;"><dt>上级栏目：</dt><dd>
                    <select name="pid">
                        <option selected="selected" value="0">作为顶级栏目</option>
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
                        <option value="<?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['lists'][$this->_sections['sec1']['index']]['fullname']; ?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                </dd></dl>
                <dl><dt>栏目名称：</dt><dd><input type="text" value="" class="int" name="name"></dd>
                    <!--
                    <dd>排序：</dd><dd><input type="text" value="0" style="width:30px;" class="int" name="orders"></dd>
                    <dd class="t">越大越靠前</dd>
                    -->
                </dl>

                <!--
                <dl><dt>栏目简介：</dt><dd><textarea style="width:300px; height:50px;" class="int" name="description"></textarea></dd><dd class="t">显示于页面 meta description</dd></dl>
                -->

                <dl><dt>是否菜单显示：</dt>
                    <dd>
                        <label><input type="radio" checked="checked" value="1" name="isshow">是</label>
                        <label><input type="radio" value="0" name="isshow">否</label>
                    </dd>
                    <dd class="t">是否在菜单显示，主要用于页头菜单调用</dd>
                </dl>
            </div>


            <dl><dt>&nbsp;</dt><dd><input type="submit" class="btnbig" value="提 交"></dd></dl>
        </form>
    </div>
</div>


</body></html>