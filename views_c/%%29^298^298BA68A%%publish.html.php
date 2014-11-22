<?php /* Smarty version 2.6.18, created on 2014-04-11 16:50:19
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/member/publish.html */ ?>
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
            editor = K.create('textarea[name="detail"]', {
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
                    <h3>【选择类别】【发布商品】【等待审核】</h3>
                </div>
                <div class="form">

                    <div class="tab" id="tab">
                        <li id="s1" class="selected">发布二手物品</li>
                        <li id="s2" class="">发布求购信息</li>
                    </div>

                        <div class="info">
                            <form id="gform" method="post" action="?c=member&amp;a=publish_save">
                                <!-- 要hidden用户的id和usernickname-->

                                <div id="infos1" class="tabdiv">

                                    <dl style="border:0;"><dt>选择类别：</dt>
                                        <dd>
                                            <select id="tid" name="cid">
                                                <option value="">选择所属类别</option>
                                                <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['categoryAllList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                <option value="<?php echo $this->_tpl_vars['categoryAllList'][$this->_sections['sec1']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['categoryAllList'][$this->_sections['sec1']['index']]['fullname']; ?>
</option>
                                                <?php endfor; endif; ?>
                                            </select>
                                        </dd>
                                    </dl>
                                    <dl><dt>标题：</dt><dd><input type="text" style="width:300px;" value="" class="int" id="title" name="title"></dd></dl>

                                    <span id="fieldsinfo">
                                        <dl><dt>现出手价：</dt><dd><input type="text" value="" class="int" name="currentprice"></dd><dd class="t">请输入数字，如 18.5</dd></dl>
                                        <dl><dt>新旧程度：</dt>
                                            <dd>
                                                <select id="tid" name="newdegree">
                                                    <option value="0">选择新旧程度</option>
                                                    <option value="9">九成新</option>
                                                    <option value="8">八成新</option>
                                                    <option value="7">七成新</option>
                                                    <option value="6">六成新</option>
                                                    <option value="5">五成新</option>
                                                    <option value="4">四成新</option>
                                                    <option value="3">三成新</option>
                                                    <option value="2">二成新</option>
                                                </select>
                                            </dd>
                                        </dl>
                                    </span>



                                    <dl class="fileover none" id="litpicover"><dt>&nbsp;</dt><dd><img height="50" id='litpicpre' src=""></dd></dl>
                                    <dl><dt>缩略图：</dt>
                                        <dd><input type="text" value="" class="int" id="litpic" name="litpic"></dd>
                                        <dd><input type="button" id="imageupload" class="button_small" value="选择图片上传" /></dd>
                                    </dl>

                                    <dl><dt>简介：</dt><dd><textarea class="int" style="width:550px; height:120px;" name="description"></textarea></dd></dl>

                                    <dl><dt>内容：</dt>
                                        <dd>
                                            <!-- 此处做学习只用，怎么把功能调取出来
                                                <a onclick="editor.insertHtml('[doyo|page]');" href="javascript:;">插入分页符</a>
                                            -->
                                            <textarea class="int" style="width:550px; height:200px;visibility: hidden;" id='detail' name="detail"></textarea>
                                        </dd>
                                    </dl>

                                    <!--
                                    <dl>
                                        <dt>申请推荐：</dt>
                                        <dd>
                                            <label><input type="checkbox" value="1" name="trait[]">首页头条 </label>
                                            <label><input type="checkbox" value="2" name="trait[]">首页滚动 </label>
                                        </dd>
                                    </dl>

                                    <dl><dt>发布：</dt><dd><label><input type="radio" checked="checked" value="1" name="isshow">已审</label> <label><input type="radio" value="0" name="isshow">未审</label> </dd></dl>
                                    -->
                                </div>

                                <!--
                                <div class="none tabdiv" id="infos2">
                                    <dl style="border:0;"><dt>标题颜色：</dt><dd><select onchange="select" name="style1">
                                        <option value="">默认</option>
                                        <option style="color:#CC0000;" value="color:#CC0000;">红色</option>
                                        <option style="color:#0000FF;" value="color:#0000FF;">蓝色</option>
                                        <option style="color:#009900;" value="color:#009900;">绿色</option>
                                        <option style="color:#996600;" value="color:#996600;">咖啡色</option>
                                        <option style="color:#8142BF;" value="color:#8142BF;">紫色</option>
                                        <option style="color:#FF6600;" value="color:#FF6600;">橘黄色</option>
                                    </select></dd>
                                        <dd><strong>标题样式：</strong></dd><dd><select onchange="select" name="style2">
                                            <option value="">默认</option>
                                            <option value="font-weight:bold;">加粗</option>
                                            <option value="text-decoration:underline;">下划线</option>
                                        </select></dd></dl>
                                    <dl><dt>所属专题：</dt><dd><select id="sid" name="sid">
                                        <option>选择所属专题</option>
                                        <option value="1">专题演示</option>
                                    </select></dd></dl>
                                    <dl><dt>排序：</dt><dd><input type="text" value="0" style="width:30px;" class="int" name="orders"></dd><dd class="t">越大越靠前</dd></dl>
                                    <dl><dt>关键词：</dt><dd><input type="text" value="" class="int" name="keywords"></dd><dd class="t">请使用英文逗号“,”分割</dd></dl>
                                    <dl><dt>更新时间：</dt><dd><input type="text" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" value="2014-03-15 20:35" class="int" name="addtime"></dd></dl>
                                    <dl><dt>点击次数：</dt><dd><input type="text" value="0" class="int" name="hits"></dd></dl>
                                    <dl><dt>访问权限：</dt><dd><select name="mrank">
                                        <option value="0">全部开放</option>
                                        <option value="1">游客</option>
                                        <option value="2">普通会员</option>
                                    </select></dd><dd class="t">选择后，只有大于等于此权限用户才可访问</dd></dl>
                                    <dl><dt>消耗现金：</dt><dd><input type="text" value="0.00" style="width:60px;" class="int" name="mgold"> 元</dd><dd class="t">设置后，只有注册用户可访问本内容，并扣除相应现金</dd></dl>
                                    <dl><dt>外部链接：</dt><dd><input type="text" value="" class="int" name="gourl"></dd><dd class="t">填写后，访问本内容时直接跳转自此地址</dd></dl>
                                    <dl><dt>文件名：</dt><dd><input type="text" value="" class="int" name="htmlfile"></dd><dd class="t">生成静态及伪静态使用，格式如about，不要加后缀</dd></dl>
                                </div>
                                -->

                                <dl>
                                    <dt>&nbsp;</dt>
                                    <dd>
                                        <input type="submit" class="btnbig" value="发 布" id="submit" name="submit">
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