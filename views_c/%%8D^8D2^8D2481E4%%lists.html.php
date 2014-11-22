<?php /* Smarty version 2.6.18, created on 2014-04-12 10:29:08
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/message/lists.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'E:\\PHPnow-1.5.6\\htdocs\\ershou2014/views/fore/default/templates/message/lists.html', 47, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->_tpl_vars['GLOBALS']['config']['site']['site_title']; ?>
 </title>
    <meta name="keywords" content="<?php echo $this->_tpl_vars['GLOBALS']['config']['site']['site_keywords']; ?>
 " />
    <meta name="descriptionription" content="<?php echo $this->_tpl_vars['GLOBALS']['config']['site']['site_descriptionription']; ?>
" />
    <script type="text/javascript">
    </script>
    <link href="<?php echo $this->_tpl_vars['GLOBALS']['inc']['css_path']; ?>
/index.css" type="text/css" rel="stylesheet">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "jscss.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>

<body>
    <!--引入公共头部 S-->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!--引入公共头部 E-->

    <!--网站幻灯 + 通知 S-->
    <div class="wrap mt10">

            <div class="box bgf">
                <div id="pagenav">
                    当前位置:&nbsp; <a href="index.php">首页</a> &gt; <a href="ss">留言列表</a>
                </div>
            </div>

        <div class="fn-clear"></div>
    </div>
    <!--网站幻灯 + 通知 E-->

    <!-- 分类最新信息 S-->
    <div class="wrap mt10">
        <div class="main fn-left bgf">
            <div class="box">
                <div class="boxhead">
                    <h3>留言列表</h3>
                </div>
                <div class="boxlist">
                    <ul>
                        <?php $this->assign('i', '1'); ?>
                        <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['messageList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <li>
                            <span class="num"><?php echo $this->_tpl_vars['i']; ?>
</span>
                            <span class="title"><a href="index.php?c=article&id=<?php echo $this->_tpl_vars['messageList'][$this->_sections['sec1']['index']]['id']; ?>
" title=" "><?php echo $this->_tpl_vars['messageList'][$this->_sections['sec1']['index']]['title']; ?>
</a></span>
							<span class="title" style="margin-left:10px;"><a href="index.php?c=article&id=<?php echo $this->_tpl_vars['messageList'][$this->_sections['sec1']['index']]['id']; ?>
" title=" "><?php echo $this->_tpl_vars['messageList'][$this->_sections['sec1']['index']]['content']; ?>
</a></span>
                            <span class="time"><?php echo ((is_array($_tmp=$this->_tpl_vars['messageList'][$this->_sections['sec1']['index']]['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>
</span>
                        </li>
                        <?php $this->assign('i', $this->_tpl_vars['i']+1); ?>
                        <?php endfor; endif; ?>
                    </ul>
                </div>

                <!-- 分页栏 S -->
                <div class="pages">
                    <ul>
                        <li><a href="">首页</a></li>
                        <li><a href="">第一页</a></li>
                        <li><a href="">第二页</a></li>
                        <li><a href="">尾页</a></li>
                    </ul>
                </div>
               <!-- 分页栏 S -->
			   
			   <div class="box bgf mt5">
                <div class="boxhead">
				<a id="#liuyan">
                    <h3>马上留言</h3>
                </div>
                <div class="form">
                        <div class="info">
                            <form action="?c=message&amp;a=message_save" method="post" id="gform">
								<dl><dt>标题：</dt><dd><input type="text" name="title" id="title" class="int" value="" style="width:300px;"></dd></dl>
								<dl><dt>内容：</dt><dd><textarea name="content" style="width:400px; height:120px;" class="int"></textarea></dd></dl>
                                <dl>
								<dt>&nbsp;</dt>
								<dd>
									<input type="submit" name="submit" id="submit" value="发 布" class="btnbig">
								</dd>
                                </dl>

                            </form>
                        </div>
						
                    <div class="fn-clear"></div>
                </div>
            </div>
            </div>
        </div>

        <!--边栏-->
        <div class="sidebar fn-right" >
            <!--发布入口 S-->
            <div class="box bgf">
                <ul id="enterence">
                    <li class="firstone"><a href='javascript:void(0)' default_href="index.php?c=member&a=publish" onclick="ajax_islogin($(this));">我要卖</a></li>
                    <li><a href="index.php?c=member&a=publish">我要买</a></li>
                </ul>
            </div>
            <!--发布入口 E-->

            <div class="box bgf mt5">
                <div class="boxhead">
                    <h3>网站公告</h3>
                </div>
                <div class="boxlist">
                    <script type="text/javascript">ajax_set_html("webnotice","index.php?c=api&a=getnotice");</script>
                    <ul id="webnotice">
                    </ul>
                </div>
            </div>
        </div>
        <!--END-->
        <div class="fn-clear"></div>

    </div>
    <!-- 分类最新信息 E-->



    <div class="wrap mt10">

        <div class="box bgf">
            这是通栏的，放点广告吧
        </div>

        <div class="fn-clear"></div>
    </div>


    <!--引入公共脚部 S-->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!--引入公共脚部 E-->
</body>
</html>