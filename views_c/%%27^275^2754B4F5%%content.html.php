<?php /* Smarty version 2.6.18, created on 2014-04-11 23:37:40
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/info/content.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'E:\\PHPnow-1.5.6\\htdocs\\ershou2014/views/fore/default/templates/info/content.html', 45, false),)), $this); ?>
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
                    当前位置:&nbsp; <a href="index.php">首页</a> &gt; <a href="index.php?c=info&a=lists&id=<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo $this->_tpl_vars['category']['name']; ?>
</a> &gt;<?php echo $this->_tpl_vars['info']['title']; ?>

                </div>
            </div>

        <div class="fn-clear"></div>
    </div>
    <!--网站面包屑  E-->


    <!-- 物品简要 + 发布者信息 S-->
    <div class="wrap mt10">
        <div class="main fn-left ">
		
		<?php if (( $this->_tpl_vars['info']['trait'] != '' )): ?>
			<!-- 推荐图标 S-->
			<span id='trait'></span>
			<!-- 推荐图标 S-->
		<?php endif; ?>
            <div class="box bgf">
                <div class="boxhead">
                    <h3>【<?php echo $this->_tpl_vars['category']['name']; ?>
】<?php echo $this->_tpl_vars['info']['title']; ?>
</h3>
                    <span class="time"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['updatetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>
</span>
                </div>
                <div class="goodsdesc">
                    <dl>
                        简介：<dd id="description"><?php echo $this->_tpl_vars['info']['description']; ?>
</dd>
                        标签：<dd>
                                <ul>
                                    <li><a href=""><?php echo $this->_tpl_vars['category']['name']; ?>
</a></li>
                                    <li><a href=""><?php echo $this->_tpl_vars['info']['newdegree']; ?>
成新</a></li>
                                    <li><a href="">二手价:<?php echo $this->_tpl_vars['info']['currentprice']; ?>
元</a></li>
                                </ul>
                                <ul class="more">
                                    <li>浏览人数(<script type="text/javascript" src="index.php?c=info&amp;a=hits&amp;id=<?php echo $this->_tpl_vars['info']['id']; ?>
"></script>)</li>
                                    <li>问询人数(4)</li>
                                </ul>
                            </dd>
                    </dl>
                </div>
            </div>
            <div class="fn-clear"></div>
			
			<!-- 物品详情 S-->
			<div class="box bgf mt10" id="container">
				<div class="boxhead">
					<h3>物品详情</h3>
				</div>
				<div class="infodetail">
					<div class="pic">
						<p><?php echo $this->_tpl_vars['info']['detail']; ?>
</p>
					</div>

				</div>
			</div>
			<div class="fn-clear"></div>
			<!-- 物品详情 E-->
	
            <!--该会员发布的其他物品 S-->
            <div class="box bgf mt10">
                <div class="boxhead" id="othergoods">
                    <span class="time" id="togglebtn">+</span>
                    <h3>该会员发布的其他物品</h3>
                    <span class="time">有需要，一起买，或许会便宜哦～</span>

                </div>
                <div class="boxpic">
                    <div class="pic"><a href="/2/8.html" target="_blank" title=""><img height="90" width="110" src="/ershou2014/views/fore/default/images/example.jpg" alt="老外街头救晕倒中国小伙 奇怪他人只拍照不施救"></a></div>
                    <div class="info">
                        <div class="title">
                            <a href="/3/04-12/8.html" target="_blank" title="">老外街头救晕倒中国小伙 奇...</a>
                            <span class="time">2013-04-12</span>
                        </div>
                        <p>巴基斯坦留学生哈马德讲述救人经过。记者杨涛摄原标题：小伙子晕倒引来路人围观有的拍照有的拍视...</p>
                        <ul>
                            <li><a href="">二手自行车</a></li>
                            <li><a href="">八成新</a></li>
                        </ul>
                        <ul class="more none" style="display: none;">
                            <li><a href="">浏览人数(6)</a></li>
                            <li><a href="">查看详情</a></li>
                        </ul>
                    </div>
                </div>

                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.boxpic').hover(function(){
                            $(this).find('.more').toggle();
                        });
                        $('#togglebtn').click(function(){
                            $(this).html('-');
                            $('.boxpic').slideToggle();
                        });
                    });
                </script>

                <div class="boxlist">
                    <ul>
                        <li> <span class="line">•</span> <span class="title"><a href="/duxcms2014/index.php/wenzhangerjiliebiaoyanshi/2013/04-12/3.html">10日：三星S4到货5400元 4S售3200元返2300元</a> </span> <span class="time">2013-04-12</span> </li>
                        <li> <span class="line">•</span> <span class="title"><a href="/duxcms2014/index.php/wenzhangerjiliebiaoyanshi/2013/04-12/2.html">手机固话上网卡都将实名 网站泄露信息最高罚3万</a> </span> <span class="time">2013-04-12</span> </li>
                        <li> <span class="line">•</span> <span class="title"><a href="/duxcms2014/index.php/wenzhangerjiliebiaoyanshi/2013/04-12/1.html">20万台小米2S瞬间售罄 电信版4月16日可购</a> </span> <span class="time">2013-04-12</span> </li>
                    </ul>
                </div>
                <!--该会员发布的其他物品 E-->
            </div>
            <div class="fn-clear"></div>
        </div>

        <div class="sidebar fn-right">
            <!--发布者信息 S-->
            <div class="box bgf">
                <!--
                <div class="boxhead">
                    <h3>发布者信息</h3>
                </div>
                -->
                <div class="publicman">
                    <div class="head">
                        <div class="avater fn-left">
                            <img height="40" width="40" alt="" src="<?php echo $this->_tpl_vars['member']['litpic']; ?>
">
                        </div>
                        <div class="username fn-left">
                            <a title="<?php echo $this->_tpl_vars['member']['username']; ?>
"><?php if (( $this->_tpl_vars['member']['nickname'] == '' )): ?><?php echo $this->_tpl_vars['member']['username']; ?>
<?php else: ?><?php echo $this->_tpl_vars['member']['nickname']; ?>
<?php endif; ?></a>
                            <br>注册时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>

                        </div>
                        <div class="fn-clear"></div>
                    </div>
                    <div class="info">
                        <ul>
                            <li><span class="key">上次登录日期</span><span class="value">:&nbsp;2014-03-16</span></span></li>
                            <li><span class="key">发布物品总数</span><span class="value">:&nbsp;<?php echo $this->_tpl_vars['member']['tradingcapcity']; ?>
</span><span class="tips"><a href="" target="_parent">查看所有</a></span></li>
                            <li><span class="key">信用度</span><span class="value">:&nbsp;6</span><span class="tips"><a href="" target="_blank">计算规则</a></span></li>
                            <li><span class="key">联系电话</span><span class="value">:&nbsp;<?php if (( $this->_tpl_vars['member']['mobile'] != '' )): ?><?php echo $this->_tpl_vars['member']['mobile']; ?>
<?php else: ?>该会员未填写<?php endif; ?></span></span></li>
                            <li><span class="key">QQ</span><span class="value">:&nbsp;<?php if (( $this->_tpl_vars['member']['qq'] != '' )): ?><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $this->_tpl_vars['member']['qq']; ?>
&amp;site=qq&amp;menu=yes" target="_blank">
                                <img border="0" title="点这里给我发消息" alt="点这里给我发消息" src="http://wpa.qq.com/pa?p=2:<?php echo $this->_tpl_vars['member']['qq']; ?>
:41">
                            </a><?php else: ?>该会员未填写<?php endif; ?></span></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fn-clear"></div>
            <!--发布者信息 E-->
            <!--发布入口 S-->
            <div class="box bgf mt10">
                <ul id="enterence">
                    <li class="firstone"><a href="alert('请先登录')">我要卖</a></li>
                    <li><a href="alert('请先登录')">我要买</a></li>
                </ul>
            </div>
            <!--发布入口 E-->

            <!--问询Q&A S-->
            <div class="box bgf mt10">
                <div class="boxhead">
                    <h3>问询Q&A</h3>
                </div>
                <div class="commentlist">
                    <ul>
					
					<?php unset($this->_sections['sec2']);
$this->_sections['sec2']['name'] = 'sec2';
$this->_sections['sec2']['loop'] = is_array($_loop=$this->_tpl_vars['comment']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <li>
						<!-- 每个循环判断是不是问询者，只要该条信息的touid是member.id -->
						<?php if (( $this->_tpl_vars['comment'][$this->_sections['sec2']['index']]['touid'] != 0 && $this->_tpl_vars['comment'][$this->_sections['sec2']['index']]['touid'] == $this->_tpl_vars['member']['id'] )): ?>
                            <div class="question">
                                <a><img src="/ershou2014/views/fore/default/images/slide3.jpg" width="30" height="30"></a>
                                <span><?php echo $this->_tpl_vars['comment'][$this->_sections['sec2']['index']]['content']; ?>
</span>
                            </div>
							<div class="fn-clear"></div>
						<?php endif; ?>
						
						<!-- 每个循环判断是不是回答者，只要该条信息的fromuid是member.id-->
                        <?php if (( $this->_tpl_vars['comment'][$this->_sections['sec2']['index']]['fromuid'] != 0 && $this->_tpl_vars['comment'][$this->_sections['sec2']['index']]['fromuid'] == $this->_tpl_vars['member']['id'] )): ?>   
                            <div class="answer">
                                <a><img src="/ershou2014/views/fore/default/images/example.jpg" width="30" height="30"></a>
                                <span><?php echo $this->_tpl_vars['comment'][$this->_sections['sec2']['index']]['content']; ?>
</span>
                            </div>
							<div class="fn-clear"></div>
						<?php endif; ?>
                        </li>
					<?php endfor; endif; ?>
                    </ul>
                </div>
                <div class="fn-clear"></div>
            </div>
            <!--问询Q&A E-->
        </div>
        <div class="fn-clear"></div>
    </div>
    <!-- 物品简要 + 发布者信息 E-->


    


    <!-- 问询框js引入 S-->
    <!-- 设置 该文章的infoid 和 发布者 userid 便于ask表单重新生成form的action，post出去-->
    <div class="none">
        <input id="infoid" type="hidden" value="<?php echo $this->_tpl_vars['info']['id']; ?>
" name="infoid">
        <input id="userid" type="hidden" value="<?php echo $this->_tpl_vars['member']['id']; ?>
" name="userid">
    </div>
    <script src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['js_path']; ?>
/Ask_box.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['js_path']; ?>
/ask_tools.js" charset="UTF-8"></script>
    <link href="<?php echo $this->_tpl_vars['GLOBALS']['inc']['css_path']; ?>
/ask.css" type="text/css" rel="stylesheet">
    <!-- 问询框js引入 E-->


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