<?php /* Smarty version 2.6.18, created on 2014-04-11 23:38:35
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/article/content.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'E:\\PHPnow-1.5.6\\htdocs\\ershou2014/views/fore/default/templates/article/content.html', 39, false),)), $this); ?>
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

    <!--网站面包屑  S-->
    <div class="wrap mt10">

            <div class="box bgf">
                <div id="pagenav">
                    当前位置:&nbsp; <a href="ss">首页</a> &gt; <a href="ss">二手交通工具 &gt;二手自行车低价出售啦</a>
                </div>
            </div>

        <div class="fn-clear"></div>
    </div>
    <!--网站面包屑  E-->


    <!-- 物品简要 + 发布者信息 S-->
    <div class="wrap mt10">
        <div class="main fn-left ">
            <div class="box bgf">
                <div class="boxhead">
                    <h3><?php echo $this->_tpl_vars['article']['title']; ?>
</h3>
                    <span class="time"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>
</span>
                </div>
                <div class="goodsdesc">

                </div>
                <div class="infodetail">
                    <p><?php echo $this->_tpl_vars['article']['detail']; ?>
</p>
                </div>
            </div>

            <div class="box bgf mt10">
                <div class="boxhead" id="othergoods">
                    <span class="time" id="togglebtn">+</span>
                    <h3>其他相关新闻</h3>
                    <span class="time"><a class="time" href="index.php?c=article&a=lists">更多&gt;&gt;</span>

                </div>

                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#togglebtn').click(function(){
                            $(this).html('-');
                            $('.otherlist').slideToggle();
                        });
                    });
                </script>

                <div class="boxlist otherlist">
                    <ul>
                        <li> <span class="line">•</span> <span class="title"><a href="/duxcms2014/index.php/wenzhangerjiliebiaoyanshi/2013/04-12/3.html">10日：三星S4到货5400元 4S售3200元返2300元</a> </span> <span class="time">2013-04-12</span> </li>
                        <li> <span class="line">•</span> <span class="title"><a href="/duxcms2014/index.php/wenzhangerjiliebiaoyanshi/2013/04-12/2.html">手机固话上网卡都将实名 网站泄露信息最高罚3万</a> </span> <span class="time">2013-04-12</span> </li>
                        <li> <span class="line">•</span> <span class="title"><a href="/duxcms2014/index.php/wenzhangerjiliebiaoyanshi/2013/04-12/1.html">20万台小米2S瞬间售罄 电信版4月16日可购</a> </span> <span class="time">2013-04-12</span> </li>
                    </ul>
                </div>

            </div>
        </div>

        <!--发布者信息 S-->
        <div class="sidebar fn-right ">

            <!--发布入口 S-->
            <div class="box bgf">
                <ul id="enterence">
                    <li class="firstone"><a href="alert('请先登录')">我要卖</a></li>
                    <li><a href="alert('请先登录')">我要买</a></li>
                </ul>
            </div>
            <!--发布入口 E-->

            <div class="box bgf mt10">
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
        <!--发布者信息 E-->
        <div class="fn-clear"></div>
    </div>
    <!-- 物品简要 + 发布者信息 E-->

    <!--该会员发布的其他物品 S-->
    <div class="wrap mt10">
        <div class="main fn-left bgf">

        </div>


        <div class="fn-clear"></div>
    </div>
    <!--该会员发布的其他物品 E-->



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