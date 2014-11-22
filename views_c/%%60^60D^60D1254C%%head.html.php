<?php /* Smarty version 2.6.18, created on 2014-04-12 10:14:40
         compiled from head.html */ ?>
<!-- 全屏阴影 S-->
<div id="allscreen" class="none"></div>
<!-- 全屏阴影 E-->

<div id="head">
    <div class="wrap">
        <!--LOGO-->
        <div class="fn-left" id="logo">
            <h1><a href="">校园二手信息网站</a></h1>
        </div>
        <!--END-->
        <!--搜索-->
        <div class="fn-right" id="search">
            <form method="get" action="">
        <span class="select">
        <select name="model">
            <option value="0">标题</option>
            <option value="1">标题和描述</option>
            <option value="2">全文</option>
        </select>
        </span>
                <input type="text" id="keyword" name="keyword">
                <button type="submit">搜索</button>
            </form>
        </div>
        <!--END-->
        <div class="fn-clear"></div>
    </div>
    <!--导航条-->
    <div id="nav">
        <div class="wrap">
            <ul>
                <li class="current">
                    <div class="title"><a href="index.php">网站首页</a></div>
                </li>
                <li>
                    <div class="title"><a href="index.php?c=info&a=lists">出售信息</a></div>
              <ul class="nav_menu" style="display: none;">
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
                        <li><a target="_self" href="index.php?c=info&a=lists&id=<?php echo $this->_tpl_vars['categoryList'][$this->_sections['sec1']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['categoryList'][$this->_sections['sec1']['index']]['name']; ?>
</a></li>
                        <li class="line">|</li>
                        <?php endfor; endif; ?>
                    </ul>
                </li>
                <li>
                    <div class="title"><a href="index.php?c=info&a=lists">求购信息</a></div>
                    <ul class="nav_menu" style="display: none;">
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
                        <li><a target="_self" href="index.php?c=info&a=lists&id=<?php echo $this->_tpl_vars['categoryList'][$this->_sections['sec1']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['categoryList'][$this->_sections['sec1']['index']]['name']; ?>
</a></li>
                        <li class="line">|</li>
                        <?php endfor; endif; ?>
                    </ul>
                </li>
                <li>
                    <div class="title"><a href="index.php?c=article&a=lists">网站新闻</a></div>
                </li>
                <li>
                    <div class="title"><a href="index.php?c=message&a=lists">留言板</a></div>
                </li>

				<script type="text/javascript">ajax_set_html("reglogin","index.php?c=member&a=ajax_reglogin");</script>
                <li class="member" >
					<div class="title" id='reglogin'>
						
					</div>
                </li>
            </ul>
            <div class="fn-clear"></div>
        </div>
    </div>
    <div class="fn-clear"></div>
    <div id="navmenu"> </div>
</div>

<div class="fn-clear"></div>