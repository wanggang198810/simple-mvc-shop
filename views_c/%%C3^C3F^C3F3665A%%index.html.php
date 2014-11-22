<?php /* Smarty version 2.6.18, created on 2014-04-12 09:50:59
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/member/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'E:\\PHPnow-1.5.6\\htdocs\\ershou2014/views/fore/default/templates/member/index.html', 51, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->_tpl_vars['GLOBALS']['config']['site']['site_title']; ?>
 </title>
    <meta name="keywords" content="<?php echo $this->_tpl_vars['GLOBALS']['config']['site']['site_keywords']; ?>
 " />
    <meta name="description" content="<?php echo $this->_tpl_vars['GLOBALS']['config']['site']['site_description']; ?>
" />

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
                    当前位置:&nbsp; <a href="ss">首页</a> &gt; <a href="ss">二手交通工具 &gt;二手自行车低价出售啦</a>
                </div>
            </div>

        <div class="fn-clear"></div>
    </div>
    <!--网站幻灯 + 通知 E-->


    <!-- 物品发布表单 S-->
    <div class="wrap mt10">
        <div class="main fn-right bgf">
            <div class="box">
                <div class="boxhead">
                    <h3>【会员中心主页】</h3>
                </div>
                <div class="form ">
                    <div class="info ">
                        <form method="post" action="?c=a_member&amp;a=edit_save">
                            <input type="hidden" value="<?php echo $this->_tpl_vars['info']['id']; ?>
" name="id">

                            <dl style="border:0;"><dt>用户名称：</dt><dd><?php echo $this->_tpl_vars['info']['username']; ?>
  </dd></dl>
                            <dl><dt>邮箱：</dt><dd><?php echo $this->_tpl_vars['info']['email']; ?>
</dd></dl>
                            <dl><dt>手机号：</dt><dd><?php echo $this->_tpl_vars['info']['mobile']; ?>
</dd></dl>
                            <dl><dt>qq：</dt><dd><?php echo $this->_tpl_vars['info']['qq']; ?>
</dd></dl>
                            <dl><dt>会员分组：</dt><dd><select name="gid">
                                <option selected="selected" value="2">1级&mdash;普通会员</option>
                            </select></dd></dl>
                            <dl>其他详情</dl>
                            <dl><dt>注册时间：</dt><dd><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>
</dd><dd></dd></dl>
                            <dl><dt>发布信息次数：</dt><dd><?php echo $this->_tpl_vars['info']['tradingcapcity']; ?>
</dd><dd>物品信息：6</dd><dd>分类信息：26</dd></dl>
                            <dl><dt>交易量：</dt><dd><?php echo $this->_tpl_vars['info']['tradingcapcity']; ?>
</dd><dd>成功：6</dd><dd>失败：6</dd><dd>正在交易：6</dd></dl>
                            <dl><dt>信用度：</dt><dd><?php echo $this->_tpl_vars['info']['credit']; ?>
</dd><dd><a href="">计算规则</a></dd></dl>
                            <dl><dt>积分：</dt><dd><?php echo $this->_tpl_vars['info']['email']; ?>
</dd><dd></dd></dl>
                        </form>
                    </div>
                    <div class="fn-clear"></div>
                </div>
            </div>
        </div>

        <!--发布者信息 S-->
        <div class="sidebar fn-left bgf">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'member/member_menu.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
        <!--发布者信息 E-->
        <div class="fn-clear"></div>
    </div>
    <!-- 物品发布表单 E-->


    <div class="wrap mt10">

        <div class="box bgf">

            1.这是通栏的，放点广告吧,<br>
            2.提醒王刚在 main上部的标题+简介部分的区块左上角加 封口图标，或者标题第一行的中中上部加带缺口圆形图标，表明：卖完了<br>
            3.把【我要买和我要卖】做一个随页面滚动的边栏或者不动，这样就全局 发布入口了，如果登录类，也做侧边，随时进入后台和接受消息
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