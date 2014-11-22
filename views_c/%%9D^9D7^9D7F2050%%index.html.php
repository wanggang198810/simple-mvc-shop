<?php /* Smarty version 2.6.18, created on 2014-04-12 10:26:55
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'E:\\PHPnow-1.5.6\\htdocs\\ershou2014/views/fore/default/templates/index.html', 151, false),array('modifier', 'truncate', 'E:\\PHPnow-1.5.6\\htdocs\\ershou2014/views/fore/default/templates/index.html', 188, false),)), $this); ?>
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
        <div class="main fn-left bgf">
            <div class="box">
                <!-- prog_time: 其中是一个幻灯片，我希望这个幻灯片如果直接拿出去的话，不会影响到他的样式和动作
                所以，下面应该有一个div class为slideshow,在css中也要从slideshow开始进行样式处理，在这个box中，
                只是保证了幻灯所在的位置而已，而且box是通用的，没有设置高度的，所以幻灯一定要有高度的保证
                -->
                <!--幻灯片 S-->
                <div class="slideshow">
                    <ul>
                        <li>
                            <a href="" title="庆祝临沂大学城二手信息网站的成立!" target="_blank"><img src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['image_path']; ?>
/slide.jpg" width="715" height="220" alt="庆祝临沂大学城二手信息网站的成立!" /></a>
                        </li>
                        <li>
                            <a href="" title="111" target="_blank"><img src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['image_path']; ?>
/slide3.jpg" width="715" height="220" alt="快往这里来淘宝 " /></a>
                        </li>
                        <li>
                            <a href="" title="111" target="_blank"><img src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['image_path']; ?>
/slide2.jpg" width="715" height="220" alt="来看看使用网站须知哦" /></a>
                        </li>
                        <li>
                            <a href="" title="111" target="_blank"><img src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['image_path']; ?>
/slide4.jpg" width="715" height="220" alt="目前高校地摊一景" /></a>
                        </li>

                    </ul>

                </div>
                <!--幻灯片 E-->
                <div class="fn-clear"></div>
            </div>
        </div>

        <!--边栏-->
        <div class="sidebar fn-right bgf">
            <div class="box">
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
    <!--网站幻灯 + 通知 E-->


    <!-- 热门推荐 左右滚动图 S-->
    <div class="wrap mt10 bgf">
        <div class="box">
            <div class="boxhead">
                <h3>热门推荐</h3>
            </div>
            <div class="piclist">
                <ul>
                    <span class="prenextbtn fn-left"><img height="34" width="18" src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['image_path']; ?>
/left-qian.png"></span>
                    <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['infoTraitList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <div class="pic"> <a title="<?php echo $this->_tpl_vars['infoTraitList'][$this->_sections['sec1']['index']]['title']; ?>
" target="_blank" href="index.php?c=info&id=<?php echo $this->_tpl_vars['infoTraitList'][$this->_sections['sec1']['index']]['id']; ?>
"><img height="120" width="130" alt=" <?php echo $this->_tpl_vars['infoTraitList'][$this->_sections['sec1']['index']]['title']; ?>
" src="<?php echo $this->_tpl_vars['infoTraitList'][$this->_sections['sec1']['index']]['litpic']; ?>
"></a> </div>
                        <div class="title"> <a title="<?php echo $this->_tpl_vars['infoTraitList'][$this->_sections['sec1']['index']]['title']; ?>
" target="_blank" href="index.php?c=info&id=<?php echo $this->_tpl_vars['infoTraitList'][$this->_sections['sec1']['index']]['id']; ?>
"> <?php echo $this->_tpl_vars['infoTraitList'][$this->_sections['sec1']['index']]['title']; ?>
</a></div>
                    </li>
                    <?php endfor; endif; ?>
                    <span class="prenextbtn fn-right"><img height="34" width="18" src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['image_path']; ?>
/right-qian.png"></span>
                </ul>
                <div class="fn-clear"></div>
            </div>
        </div>
        <div class="fn-clear"></div>
    </div>
    <!-- 热门推荐 左右滚动图 E-->


    <!-- 搜索区域 + 发布入口 S-->
    <div class="wrap mt10">
        <div class="main fn-left bgf">
            <div class="box">
                <div class="boxhead">
                    <h3>分类搜索</h3>
                    <ul class="category">
                        <li>书籍资料</li>
                        <li>电子数码</li>
                        <li>交通工具</li>
                        <li>文体乐器</li>
                        <li>服饰箱包</li>
                        <li>小家电</li>
                    </ul>
                </div>

            </div>
        </div>

        <!--发布入口 S-->
        <div class="sidebar fn-right bgf">
            <div class="box">
                <ul id="enterence">
                    <!-- alert('请先登录') -->
                    <li class="firstone"><a href='javascript:void(0)' default_href="index.php?c=member&a=publish" onclick="ajax_islogin($(this));">我要卖</a></li>
                    <li><a href="index.php?c=member&a=publish">我要买</a></li>
                </ul>
            </div>
        </div>
        <!--发布入口 E-->
        <div class="fn-clear"></div>
    </div>
    <!-- 搜索区域 + 发布入口 E-->

    <!-- 分类最新信息 S-->
    <div class="wrap mt10">
        <div class="main fn-left bgf">
            <div class="box">
                <div class="boxhead">
                    <h3>分类最新信息</h3>
					<span><a class="time" href="index.php?c=info&a=lists">更多&gt;&gt;</a></span>
                    <ul class="category">
                        
                    </ul>
                </div>

                <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['infoList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <div class="boxpic">
                    <div class="pic">
                        <a title="" target="_blank" href="index.php?c=info&id=<?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['id']; ?>
">
                            <img height="90" width="110" alt="<?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['title']; ?>
" src="<?php if (( $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['litpic'] == '' )): ?> <?php echo $this->_tpl_vars['GLOBALS']['inc']['image_path']; ?>
/none.jpg <?php else: ?> <?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['litpic']; ?>
 <?php endif; ?>">
                        </a>
                    </div>
                    <div class="info">
                        <div class="title">
                            <a title="" target="_blank" href="index.php?c=info&id=<?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['title']; ?>
</a>
                            <span class="time"><?php echo ((is_array($_tmp=$this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>
 </span>
                        </div>
                        <p><?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['description']; ?>
</p>
                        <ul>
                            <li><a href="">二手自行车</a></li>
                            <li><a href="">八成新</a></li>
                        </ul>
                        <ul class="more none">
                            <li><a href="">浏览人数(6)</a></li>
                            <li><a href="index.php?c=info&id=<?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['id']; ?>
">查看详情</a></li>
                        </ul>
                    </div>
                </div>
                <?php endfor; endif; ?>

                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.boxpic').hover(function(){
                            $(this).find('.more').toggle();
                        });
                    });
                </script>

            </div>
        </div>

        <!--成功交易 S-->
        <div class="sidebar fn-right bgf">
            <div class="box">
                <div class="boxhead">
                    <h3>成功交易</h3>
                </div>
                <div class="boxlist">
                    <ul>
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
                        <li>
                            <span class="num"><?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['id']; ?>
</span>
                            <span class="title"><a href="04-12/16.html" title=" "><?php echo ((is_array($_tmp=$this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14, '..') : smarty_modifier_truncate($_tmp, 14, '..')); ?>
</a></span>
                        </li>
                        <?php endfor; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--成功交易 E-->
       
		
		<!--最新留言 S-->
        <div class="sidebar fn-right bgf mt10">
            <div class="box">
                <div class="boxhead">
                    <h3>最新留言--> 记得滚动哦</h3>
                </div>
                <div id="colee" class="boxlist" style="height:200px;overflow:hidden;">
                    <ul id="colee1">
					
						<li>
                            <span class="num">0</span>
                            <span class="title"><a href="04-12/16.html" title=" ">测试测试测试</a></span>
                        </li>
						<li>
                            <span class="num">0</span>
                            <span class="title"><a href="04-12/16.html" title=" ">测试测试测试</a></span>
                        </li>
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
                        <li>
                            <span class="num"><?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['id']; ?>
</span>
                            <span class="title"><a href="04-12/16.html" title=" "><?php echo $this->_tpl_vars['articleList'][$this->_sections['sec1']['index']]['title']; ?>
</a></span>
                        </li>
                        <?php endfor; endif; ?>
						
                    </ul>
					
					<ul id="colee2">
                    </ul>
                </div>
				<!--向上滚动代码结束 S-->
				<script>
				var speed=120;
				var colee2=document.getElementById("colee2");
				var colee1=document.getElementById("colee1");
				var colee=document.getElementById("colee");
				colee2.innerHTML=colee1.innerHTML; //克隆colee1为colee2
				function Marquee1(){
				//当滚动至colee1与colee2交界时
				if(colee2.offsetTop-colee.scrollTop<=0){
				 colee.scrollTop-=colee1.offsetHeight; //colee跳到最顶端
				 }else{
				 colee.scrollTop++
				}
				}
				var MyMar1=setInterval(Marquee1,speed)//设置定时器
				//鼠标移上时清除定时器达到滚动停止的目的
				colee.onmouseover=function() {clearInterval(MyMar1)}
				//鼠标移开时重设定时器
				colee.onmouseout=function(){MyMar1=setInterval(Marquee1,speed)}
				</script>
				<!--向上滚动代码结束 E-->
				
				
				<div id="getmore" class=" getmore">
					<div class="box">
						<a href="index.php?c=message&a=lists" target="_blank">我也要留言</a>
					</div>
					<div class="fn-clear"></div>
				</div>
			
			
            </div>
        </div>
        <!--最新留言 E-->
        <div class="fn-clear"></div>

    </div>
    <!-- 分类最新信息 E-->


    <!--引入公共脚部 S-->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!--引入公共脚部 E-->
</body>
</html>