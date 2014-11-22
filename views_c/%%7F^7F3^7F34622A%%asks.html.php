<?php /* Smarty version 2.6.18, created on 2014-04-11 17:04:56
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cershou2014/views/fore/default/templates/member/asks.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'E:\\PHPnow-1.5.6\\htdocs\\ershou2014/views/fore/default/templates/member/asks.html', 63, false),)), $this); ?>
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
                    <h3>【问询管理】</h3>
                </div>
                <div class="form">

                        <div class="info">

                                <div id="infos1" class="tabdiv">
                                    <div class="page_main">


                                        <div class="page_table table_list">
                                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tbody>
                                                <tr class="odd">
                                                    <th width="6%">选择</th>
                                                    <th width="4%">ID</th>
                                                    <th width="36%">内容</th>
                                                    <th width="18%">更新时间</th>
                                                    <th width="26%">操作</th>
                                                </tr>

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
                                                <tr>
                                                    <td><input type="checkbox" value="10" id="id[]" name="id[]"></td>
                                                    <td><?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['id']; ?>
</td>
                                                    <td> <?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['content']; ?>
 </td>
                                                    <td> <?php echo ((is_array($_tmp=$this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>
 </td>

                                                    <td>
                                                        | <a href="index.php?c=member&a=infoedit&id=<?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['id']; ?>
">修改</a>
                                                        | <a onclick="del('<?php echo $this->_tpl_vars['infoList'][$this->_sections['sec1']['index']]['id']; ?>
',this)" href="javascript:void(0);">删除</a></td>
                                                </tr>
                                                <?php endfor; endif; ?>

                                                </tbody></table>
                                        </div>
                                    </div>
                                    <div class="page_tool">
                                        <div class="function">
                                            <input type="button" value="全选" class="button_small" onclick="javascript:selectall('id[]');">
                                            <input type="button" value="发布" class="button_small" onclick="javascript:audit(1);">
                                            <input type="button" value="草稿" class="button_small" onclick="javascript:audit(2);">
                                            <input type="button" value="删除" class="button_small" onclick="javascript:audit(3);">
                                            <input type="button" value="移动" class="button_small" onclick="javascript:$('#mobile').toggle();">

                                              <span style="display:none" id="mobile">
                                                        <select id="cid" name="cid">
                                                            <option value="">======选择栏目======</option>
                                                            <option disabled="disabled" style="background-color:#ccc" value="1">
                                                                单页面演示              </option>
                                                            <option disabled="disabled" style="background-color:#ccc" value="6">
                                                                &nbsp;&nbsp;├二级单页演示1              </option>
                                                            <option disabled="disabled" style="background-color:#ccc" value="7">
                                                                &nbsp;&nbsp;└二级单页演示2              </option>
                                                            <option disabled="disabled" style="background-color:#ccc" value="2">
                                                                文章首页演示              </option>
                                                            <option value="3">
                                                                &nbsp;&nbsp;├文章列表演示              </option>
                                                            <option value="4">
                                                                &nbsp;&nbsp;└图片列表演示              </option>
                                                            <option value="5">
                                                                扩展模型演示              </option>
                                                        </select>
                                                        <input type="button" value="确认" class="button_small" onclick="javascript:audit(4);">
                                              </span>
                                        </div>
                                        <div class="page"></div>
                                        <script>
                                            function quickeditor(url){
                                                $.dialog({
                                                    title:'快速编辑',
                                                    content: 'url:'+url,
                                                    width:300,
                                                    height:200
                                                })
                                            }
                                            //选择
                                            function selectall(name){
                                                $("[name='"+name+"']").each(function(){//反选
                                                    if($(this).attr("checked")){
                                                        $(this).removeAttr("checked");
                                                    }else{
                                                        $(this).attr("checked",'true');
                                                    }
                                                })
                                            }
                                            //批量操作
                                            function audit(status){
                                                var str="";
                                                $("[name='id[]']").each(function(){//反选
                                                    if($(this).attr("checked")){
                                                        str+=$(this).val()+",";
                                                    }
                                                })

                                                ajaxpost(
                                                        '您确认要继续进行操作吗？操作将无法撤销！',
                                                        "/duxcms2014/admin/index.php/content/batch",
                                                        {status: status, id:str, cid:$('#cid').val()},
                                                        1,
                                                        function(){
                                                            window.location.reload();
                                                        }
                                                );
                                            }
                                            //栏目形象图
                                            $(".class_pic").powerFloat({
                                                targetMode: "ajax"
                                            });
                                            //删除
                                            function del(id,obj) {
                                                ajaxpost(
                                                        '确认要删除本内容吗?删除无法恢复！',
                                                        "index.php?c=member&a=infodel",
                                                        {id: id},
                                                        1,
                                                        function(){
                                                            $(obj).parent().parent().remove();
                                                        }
                                                );
                                            }


                                            //申请推荐为 ajaxpost
                                            function apply_trait(id,obj) {
                                                if($(obj).html() == "申请推荐")
                                                {
                                                    tip = "确定申请推荐位?"
                                                    trait = 1
                                                }
                                                else
                                                {
                                                    tip = "确定取消推荐申请?"
                                                    trait = ''
                                                }
                                                ajaxpost(
                                                        tip,
                                                        "index.php?c=member&a=apply_trait",
                                                        {id: id,trait: trait},
                                                        1,
                                                        function(){
                                                            //改变
                                                            if($(obj).html() == "申请推荐")
                                                            {
                                                                $(obj).addClass('green');
                                                                $(obj).html('推荐申请中')
                                                            }
                                                            else
                                                            {
                                                                $(obj).removeClass('green');
                                                                $(obj).html('申请推荐')
                                                            }
                                                        }
                                                );
                                            }
                                        </script>
                                    </div>
                                    <div class="fn_clear"></div>
                                </div>
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