<?php /* Smarty version 2.6.18, created on 2014-04-11 16:50:21
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/member/profile_edit.html */ ?>
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

    <!-- 一下三行为kindeditor-->
    <script type="text/javascript" charset="utf-8" src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['include_path']; ?>
/kindeditor/lang/zh_CN.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo $this->_tpl_vars['GLOBALS']['inc']['include_path']; ?>
/kindeditor/kindeditor-min.js"></script>

    <script>
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('textarea[name="description"]', {
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
                    <h3>个人资料修改</h3>
                </div>
                <div class="form">

                        <div class="info">
                            <form id="gform" method="post" action="?c=member&amp;a=profile_eidt_save">
                                <!-- 要hidden用户的id和usernickname-->
                                <div id="infos1" class="tabdiv">
                                    <dl><dt>用户名：</dt><dd><?php echo $this->_tpl_vars['info']['username']; ?>
</dd></dl>
                                    <dl><dt>昵称：</dt><dd><input type="text" style="width:200px;" value="<?php echo $this->_tpl_vars['info']['nickname']; ?>
" class="int" id="nickname" name="nickname"></dd></dl>
                                    <dl class="fileover <?php if (( $this->_tpl_vars['info']['litpic'] == '' )): ?> none <?php endif; ?>" id="litpicover"><dt>&nbsp;</dt><dd><img height="50" id='litpicpre' src="<?php echo $this->_tpl_vars['info']['litpic']; ?>
"></dd></dl>
                                    <dl><dt>头像：</dt>
                                        <dd><input type="text" value="<?php echo $this->_tpl_vars['info']['litpic']; ?>
" class="int" id="litpic" name="litpic" style="width:300px;"></dd>
                                        <dd><input type="button" id="imageupload" class="button_small" value="选择图片上传" /></dd>
                                    </dl>
                                    <dl><dt>邮箱：</dt><dd><input type="text" value="<?php echo $this->_tpl_vars['info']['email']; ?>
" class="int" name="email" style="width:300px;"></dd><dd class="t">找回密码时使用，请正确设置邮箱格式！</dd></dl>
                                    <dl><dt>QQ：</dt><dd><input type="text" value="<?php echo $this->_tpl_vars['info']['qq']; ?>
" class="int" name="qq"></dd><dd class="t">正确设置，将显示在发布页面！</dd></dl>
                                    <dl>
                                        <dt>性别：</dt>
                                        <dd>
                                            <label><input type="radio" <?php if (( $this->_tpl_vars['info']['sex'] == 1 )): ?> checked="checked" <?php endif; ?>  value="1" name="sex">男生</label>
                                            <label><input type="radio" <?php if (( $this->_tpl_vars['info']['sex'] == 0 )): ?> checked="checked" <?php endif; ?> value="0" name="sex">女生</label>
                                        </dd>
                                    </dl>
                                    <dl><dt>年级：</dt>
                                        <dd>
                                            <select id="tid" name="grade">
                                                <option value="0" <?php if (( $this->_tpl_vars['info']['grade'] == 0 )): ?> selected="selected" <?php endif; ?>>选择新旧程度</option>
                                                <option value="1" <?php if (( $this->_tpl_vars['info']['grade'] == 1 )): ?> selected="selected" <?php endif; ?> >大一</option>
                                                <option value="2" <?php if (( $this->_tpl_vars['info']['grade'] == 2 )): ?> selected="selected" <?php endif; ?>>大二</option>
                                                <option value="3" <?php if (( $this->_tpl_vars['info']['grade'] == 3 )): ?> selected="selected" <?php endif; ?>>大三</option>
                                                <option value="3" <?php if (( $this->_tpl_vars['info']['grade'] == 4 )): ?> selected="selected" <?php endif; ?>>大四</option>
                                            </select>
                                        </dd>
                                    </dl>

                                    <dl><dt>个人简介：</dt><dd><textarea class="int" style="width:550px; height:120px;" name="description"><?php echo $this->_tpl_vars['info']['description']; ?>
</textarea></dd></dl>

                                </div>
                                <dl>
                                    <dt>&nbsp;</dt>
                                    <dd>
                                        <input type="submit" class="btnbig" value="提交修改" id="submit" name="submit">
                                    </dd>
                                </dl>

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