<?php /* Smarty version 2.6.18, created on 2014-04-11 23:02:07
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/admin/templates/article/edit.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>

    <link href="views/admin/css/admin.css" rel="stylesheet" type="text/css">
    <script src="include/jsmain.js" type="text/javascript"></script>
    <script src="include/admin.js" type="text/javascript"></script>

    <!-- 一下三行为kindeditor-->
    <script src="include/kindeditor/lang/zh_CN.js" charset="utf-8" type="text/javascript"></script>
    <script src="include/kindeditor/kindeditor-min.js" charset="utf-8" type="text/javascript"></script>
    <link href="include/kindeditor/themes/default/default.css" rel="stylesheet">
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

        });
    </script>
    </head>
<body>
<div class="maintop">当前位置：文章修改内容</div>
<div class="main">
    <ul class="switchs"><li class="" id="s1">基本内容</li></ul>
    <div class="info">

            <div class="info">
                    <form action="?c=a_article&amp;a=edit_save" method="post" id="gform">
                    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['article']['id']; ?>
">
                    <div class="tabdiv" id="infos1">

                        <dl style="border:0;"><dt>选择类别：</dt>
                            <dd>
                                <select name="cid">
                                    <optionvalue="">选择所属类别</option>
                                    <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['articleCategoryList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <option value="<?php echo $this->_tpl_vars['articleCategoryList'][$this->_sections['sec1']['index']]['id']; ?>
" <?php if (( $this->_tpl_vars['article']['cid'] == $this->_tpl_vars['articleCategoryList'][$this->_sections['sec1']['index']]['id'] )): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['articleCategoryList'][$this->_sections['sec1']['index']]['fullname']; ?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                            </dd>
                        </dl>
                        <dl><dt>标题：</dt><dd><input type="text" name="title" id="title" class="int" value="<?php echo $this->_tpl_vars['article']['title']; ?>
" style="width:300px;"></dd></dl>
                        <dl><dt>内容：</dt>
                            <dd>
                                <!-- 此处做学习只用，怎么把功能调取出来
                                    <a onclick="editor.insertHtml('[doyo|page]');" href="javascript:;">插入分页符</a>
                                -->
                                <textarea class="int" style="width:550px; height:200px;visibility: hidden;" id='detail' name="detail"><?php echo $this->_tpl_vars['article']['detail']; ?>
</textarea>
                            </dd>
                        </dl>

                    </div>



                    <dl>
                        <dt>&nbsp;</dt>
                        <dd>
                            <input type="submit" name="submit" id="submit" value="发 布" class="btnbig">
                            <input type="submit" id="" value="存草稿" class="btnbig otherbtn">
                        </dd>
                    </dl>

                </form>
            </div>
            <div class="fn-clear"></div>
        </div>
    </div>
</div>



</body></html>