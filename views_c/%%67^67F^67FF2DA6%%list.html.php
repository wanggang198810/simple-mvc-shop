<?php /* Smarty version 2.6.18, created on 2014-04-11 23:40:44
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/info/list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'E:\\PHPnow-1.5.6\\htdocs\\ershou2014/views/fore/default/templates/info/list.html', 82, false),)), $this); ?>
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
                    当前位置:&nbsp; <a href="ss">首页</a> &gt; <a href="ss">二手物品列表页</a>
                </div>
            </div>

        <div class="fn-clear"></div>
    </div>
    <!--网站幻灯 + 通知 E-->


    <!-- 搜索区域 + 发布入口 S-->
    <div class="wrap mt10">
        <div class="main fn-left bgf">
            <div class="box">
                <div class="boxhead">
                    <h3>分类搜索</h3>
                    <ul class="category">
                        <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['categoryList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <li><a href="index.php?c=info&a=lists&id=<?php echo $this->_tpl_vars['categoryList'][$this->_sections['sec1']['index']]['id']; ?>
" target="_self"><?php echo $this->_tpl_vars['categoryList'][$this->_sections['sec1']['index']]['name']; ?>
</a></li>
                        <?php endfor; endif; ?>
                    </ul>
                </div>

            </div>
        </div>

        <!--发布入口 S-->
        <div class="sidebar fn-right bgf">
            <div class="box">
                <ul id="enterence">
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
            <div class="box" id="container">
                <div class="boxhead">
                    <h3>分类最新信息</h3>
                    
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




            </div>

            <div class="box getmore mt10" id="getmore">

                <div class="box bgf">
                    <span id="youload">[二手自行车信息还有<span id='leavesum' class="red"> 26 </span>条] 是否继续加载</span> <span id="autoload">[开启自动加载]</span>
                </div>

                <div class="fn-clear"></div>
            </div>


            <script type="text/javascript">

                $('#youload').click(function(){
                    for(i=0;i<3;i++)
                    {
                        $('#container').append($("#test").html());
                    }
                    $('.test').show('slow');
                });

                $(window).scroll(function(){
                    // 当滚动到最底部以上20像素时， 加载新内容
                    if ($(document).height() - $(this).scrollTop() - $(this).height()<20){
                        $('#container').append($("#test").html());
                    }
                });
            </script>
        </div>

        <div id="test" class="none">
            <div class="boxpic none test">
                <div class="pic"><a title="" target="_blank" href="/2/8.html"><img height="90" width="110" alt=" " src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['image_path']; ?>
/example.jpg"></a></div>
                <div class="info">
                    <div class="title">
                        <a title="" target="_blank" href="/3/04-12/8.html">老外街头救晕倒中国小伙 奇...</a>
                        <span class="time">2013-04-12</span>
                    </div>
                    <p>巴基斯坦留学生哈马德讲述救人经过。记者杨涛摄原标题：小伙子晕倒引来路人围观有的拍照有的拍视...</p>
                    <ul>
                        <li><a href="">二手自行车</a></li>
                        <li><a href="">八成新</a></li>
                    </ul>
                    <ul class="more none">
                        <li><a href="">浏览人数(6)</a></li>
                        <li><a href="">查看详情</a></li>
                    </ul>
                </div>
            </div>
        </div>



        <!--边栏-->
        <div class="sidebar fn-right bgf" >
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