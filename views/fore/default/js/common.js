//设置网站地址，当然这个其实要在 html中设置才对，写一个大jsscss.html引用过来就ok啦
site_dir = "http://localhost/ershou2014/"

$(document).ready(function() {
    /*导航菜单*/
    $("#nav li").hover(function(){
        $(this).parent().find('.menucur').hide();
        $(this).find('.nav_menu').show();
    },function(){
        $(this).find('.nav_menu').hide();

        $(this).parent().find('.menucur').show();
    });

    /*幻灯片效果*/
    $('.slideshow').smallslider({
            textPosition: 'bottom',
            textAlign: 'left',
            textSwitch: 1
    });
});


/*
* 2014-03-24
* 我应该写出这样一个js，
* 目前我的表单中的input的value是一个提示字段，input后面是出错时候的提示
* 1.当鼠标hover的时候，input中的提示文字 字体变黑 toggle
* 2.当input点击的时候，文字消失，当blur的时候，如果value为空，input后的提示才出现
*
*
* 2013-03-26 以上的规则有点复杂了，我暂时搞不定，精简一些
*
* */
//注册表单验证
$(function(){
    var defaultvalue = '';
//    $(".reg-login-form input").click(function(){ -----> prog_time 2014-04-10 下午修改，使得全局可用
    $("input").click(function(){
        if($(this).val()!= '' && $(this).val() == $(this).attr('default_value'))
        {
            $(this).val('')
        }
    }).blur(function(){

        if($(this).val() == '')
        {
            $(this).parent().siblings('.t').addClass('error')
            $(this).addClass('interror');
        }
        else
        {
            $(this).parent().siblings('.t').removeClass('error')
            $(this).removeClass('interror');
        }
    });

    /*
     $("#submit").click(function(check){
     if($("#username").val() == ''||$("#mobile").val() == ''){
     alert("请选择栏目和输入标题");
     }else{
     $("#submit").css("display","none");
     }
     });

     */

    //checkbox赋值
    $('#rememberme').click(function(){
        if($(this).attr('checked') == 'checked')
        {
            $(this).val('1');
        }
        else
        {
            $(this).val('0');
        }
    });

    //验证码更新
    $('#vercodeimg').click(function(){
        $(this).attr('src',"index.php?c=api&a=getvercode&change="+Math.random());
    });


    $('#close-float').click(login_reg_float_close);

});


//当用户未登录执行操作时，在本窗口弹出登录层
function login_reg_float_open()
{
    //全屏阴影显示
    $('#allscreen').show();
    $('#login-reg-float').fadeIn('slow');
}

//当用户未登录执行操作时，在本窗口弹出登录层
function login_reg_float_close()
{
    //全屏阴影显示
    $('#allscreen').hide();
    $('#login-reg-float').fadeOut('slow');
}


/*
* 做了这个ajax函数，以后只要是判断登录后才能进行的操作，并且需要在本页面直接弹出登录层的，都可以在onclcik中直接调用这个函数，
* 同时传递  $(this) 最好是 a 标签，
* 然后， a 的 href设置为 javascript:void(0) 并且设置 default_href = '真正的 href 值'，一旦判断登录则重置  href值
* 如果没有登录，则在本窗口直接弹出登录层
*/
function ajax_islogin(obj) {
    $.ajax({
        type: "POST",
        url: "index.php?c=member&a=ajax_islogin",
        async: false,
        cache: false,
        success: function(msg){
            if(msg == '1')  //说明会员已经登录
            {
                href = obj.attr('default_href')
                obj.attr('href',href)
                return true;
            }
            else
            {
                login_reg_float_open();
                return false;
            }
        }
    });
}

//ajax钩子
function ajax_set_html(id,url){
    $.ajax({
        url: site_dir+url,type: 'post',
        cache: false,
        data: "time="+Math.random(),
        success: function(html){
            $("#"+id).html(html);
        }
    });
}


