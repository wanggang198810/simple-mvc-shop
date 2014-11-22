<?php /* Smarty version 2.6.18, created on 2014-04-12 08:24:34
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/member/login.html */ ?>
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

    <!-- 一下三行为kindeditor-->
    <script type="text/javascript" charset="utf-8" src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['include_path']; ?>
/kindeditor/lang/zh_CN.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['include_path']; ?>
/kindeditor/kindeditor-min.js"></script>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "jscss.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <script>
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('textarea[name="goodsdetail"]', {
                //这里做一个配置
                minWidth : 560,
                width : 560,
                height : 300,
                allowFileManager : true,
                items :
                    [
                    'source', '|', 'template','plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
                            'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'clearhtml', 'removeformat', 'quickformat', '|', 'fullscreen','about', '/',
                            'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                            'italic', 'underline', 'lineheight', '|', 'image','multiimage',
                            'flash', 'media', 'table', 'emoticons', 'map',
                             '|',
                    ],
                resizeType : 1,   //2时可以拖动改变宽度和高度，1时只能改变高度，0时不能拖动。
                urlType : '', //改变站内本地URL，可设置”“、”relative”、”absolute”、”domain”。
                // 空为不修改URL，relative为相对路径，absolute为绝对路径，domain为带域名的绝对路径。
                // 数据类型: String  默认值: “”
            });

            K('#imageupload').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
//                        showLocal : false,
                        imageUrl : K('#litpic').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#litpic').val(url);

                            $('#litpicover').show();
                            $('#litpicpre').attr('src',url);

                            editor.hideDialog();
                        }
                    });
                });
            });
        });




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
                                <li><a class="qq_oauth_login" href="javascript:;"></a></li>
                                <li><a class="sina_oauth_login" href="javascript:;"></a></li>
                            </ul>
                        </div>
                    <div class="fn-clear"></div>
                </div>

                <div class="form fn-right form-right">

                    <div class="boxhead">
                        使用校园网帐号登录
                    </div>
                    <div class="login">
                        <form id="loginform" method="post" action="?c=member&amp;a=login_save">


                            <dl>
                                <dt>用户名：</dt>
                                <dd><input type="text" value="" class="int" id="user" name="username"></dd>
                                <dd class="t">用户名不能为空</dd>
                            </dl>
                            <dl>
                                <dt>密&nbsp;&nbsp;&nbsp;码：</dt>
                                <dd><input type="password"  value="" class="int" id="password" name="password"></dd>
                                <dd class="t">密码不能为空</dd>
                            </dl>
                            <dl>
                                <dt>验证码：</dt>
                                <dd><input type="text"  value=""  default_value="验证码不能为空" class="int" id="vercode" name="vercode" style="width: 100px"></dd>
                                <dd><a class="vercode" ><img id='vercodeimg' width="120" height="30" src="index.php?c=api&a=getvercode" /></a></dd>
                                <dd class="t">验证码不能为空</dd>
                            </dl>
                            <dl>
                                <dt>&nbsp;</dt>
                                <dd><label for="rememberme" class="rememberme"><input type="checkbox" value="1" checked="checked" id="rememberme" name="rememberme">记住登录状态</label></dd>
                                <dd><input type="submit" id="submitbtn" class="button_small submitbtn" value="登 录"></dd>
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