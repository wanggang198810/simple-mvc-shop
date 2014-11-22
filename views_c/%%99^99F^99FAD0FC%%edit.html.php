<?php /* Smarty version 2.6.18, created on 2014-04-12 08:14:27
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/admin/templates/member/edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'E:\\PHPnow-1.5.6\\htdocs\\ershou2014/views/admin/templates/member/edit.html', 27, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title></title>
        <link type="text/css" rel="stylesheet" href="views/admin/css/admin.css">
        <script type="text/javascript" src="include/jsmain.js"></script>
        <script type="text/javascript" src="include/admin.js"></script>

    </head>

    <body>
    <div class="maintop">当前位置：修改会员</div>
    <div class="main">
        <div class="info">
            <form method="post" action="?c=a_member&amp;a=edit_save">
                <input type="hidden" value="<?php echo $this->_tpl_vars['info']['id']; ?>
" name="id">

                <dl style="border:0;"><dt>用户名称：</dt><dd><?php echo $this->_tpl_vars['info']['username']; ?>
<input type="hidden" value="sas" name="user">    </dd></dl>
                <dl><dt>用户密码：</dt><dd><input type="password" class="int" name="pass" value=""></dd><dd class="t">不修改请留空</dd></dl>
                <dl><dt>邮箱：</dt><dd><input type="text" value="<?php echo $this->_tpl_vars['info']['email']; ?>
" class="int" name="email"></dd><dd class="t">不可留空</dd></dl>
                <dl><dt>手机号：</dt><dd><input type="text" value="<?php echo $this->_tpl_vars['info']['mobile']; ?>
" class="int" name="email"></dd><dd class="t">不可留空</dd></dl>
                <dl><dt>qq：</dt><dd><input type="text" value="<?php echo $this->_tpl_vars['info']['qq']; ?>
" class="int" name="email"></dd><dd class="t">可留空</dd></dl>
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

                <dl><dt>&nbsp;</dt><dd><input type="submit" class="btnbig" value="提 交"></dd></dl>
            </form>
        </div>
    </div>


    </body></html>