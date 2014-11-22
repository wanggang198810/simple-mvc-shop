<?php /* Smarty version 2.6.18, created on 2014-04-12 08:24:36
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/member/reg.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
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

	<script>
		var itime;
		var s = 60;
		function getMobileVerCode()
		{
			
			$('#mobile-vercode').fadeIn(2000);
			//取消该按钮的onclick操作
			$('#getmobilecode').attr('onclick','');
			$('#getmobilecode').html("重获取等待60秒");
			
			//设置60s
			itime = setInterval(times,1000);
		}

		function times()
		{
			s--;
			$('#getmobilecode').html("重获取等待"+s+"秒");
			if ( s <= 0 )
			{
				 s = 60;
				 clearInterval(itime);
				 //开启该按钮的onclick操作
				 $('#getmobilecode').html("重新获取");
				 $('#getmobilecode').attr('onclick','getMobileVerCode()');
				 
			}
		}
		 


	</script>
</head>

<body>
    <!--引入公共头部 S-->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!--引入公共头部 E-->

    <!-- 注册表单 S-->
    <div class="wrap mt10">
        <div class=" bgf">
            <div class="box reg-login-form">

                <div class="form fn-left ">
                        <div class="boxhead">
                            推荐使用
                        </div>
                        <div class="oauth">
                            <ul>
                                <li><a class="qq_oauth_reg" href="javascript:;"></a></li>
                                <li><a class="sina_oauth_reg" href="javascript:;"></a></li>
                            </ul>
                        </div>
                    <div class="fn-clear"></div>
                </div>

                <div class="form fn-right form-right">

                    <div class="boxhead">
                        注册校园二手网帐号
                    </div>
                    <div class="login">
                        <form id="loginform" method="post" action="?c=member&amp;a=reg_save">


                            <dl>
                                <dt>用户名：</dt>
                                <dd ><input type="text" value="建议使用常用邮箱注册" default_value="建议使用常用邮箱注册" class="int" id="username" name="username"></dd>
                                <dd idd="sss" class="t">用户名不能为空</dd>
                            </dl>
                            <dl>
                                <dt>手机号：</dt>
                                <dd><input type="text" value="" default_value="手机号不能为空" class="int" id="mobile" name="mobile"></dd>
                                <dd><a id="getmobilecode" class="button_small" onclick="getMobileVerCode(this);">获取验证码</a></dd>
                            </dl>
							<dl id='mobile-vercode' class='none'>
                                <dt> &nbsp;</dt>
                                <dd><input type="text"  value="" default_value="手机验证码不能为空" class="int" name="mobile-vercode"></dd>
                                <dd class="t">输入手机验证码</dd>
                            </dl>
                            <dl>
                                <dt>验证码：</dt>
                                <dd><input type="text"  value=""  default_value="验证码不能为空" class="int" id="vercode" name="vercode" style="width: 100px"></dd>
                                <dd><a class="vercode" ><img width="120" height="30" align="absmiddle" src="index.php?c=api&a=getvercode" /></a></dd>
                                <dd class="t">验证码不能为空</dd>
                            </dl>
                            <dl>
                                <dt>密&nbsp;&nbsp;&nbsp;码：</dt>
                                <dd><input type="password"  value="" default_value="密码不能为空" class="int" id="password" name="password"></dd>
                                <dd class="t">密码不能为空</dd>
                            </dl>
                            <dl>
                                <dt>&nbsp;</dt>
                                <dd></dd>
                                <dd><input type="submit" id="submit" class="button_small submitbtn" value="提交注册" style="width: 243px;"></dd>
                            </dl>
                        </form>
                    </div>
                </div>
                <div class="fn-clear"></div>
            </div>
        </div>

        <div class="fn-clear"></div>
    </div>
    <!-- 注册表单 E-->


    <div class="wrap mt10">

        <div class="box bgf">
            1.当我开通手机验证码的时候，就不许要在验证码表单中调用图片生成了，手机生成的验证码，也要写进session的统一个字段vercode中，
            这样程序就不用修改了<br>
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