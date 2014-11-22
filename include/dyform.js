// 判断是否为空
function dyfrom_null(value) {
	return !value.replace(/\s+/g,"")=='';
}

// 字符最小长度验证（一个中文字符长度为2）
function dyfrom_min(value, param) {
	 var length = value.length;
	 for ( var i = 0; i < value.length; i++) {
	  if (value.charCodeAt(i) > 127) {length++;}
	 }
	 return length >= param;
}
	
// 字符最大长度验证（一个中文字符长度为2）
function dyfrom_max(value, param) {
	 var length = value.length;
	 if (length==0){return true;} 
	 for ( var i = 0; i < value.length; i++) {
	  if (value.charCodeAt(i) > 127) {length++;}
	 }
	 return length <= param;
}
	
// 不允许包含特殊符号
function dyfrom_string(value) {
	 return /^[\u0391-\uFFE5\w]+$/.test(value);
}
	
// 手机号码验证
function dyfrom_mobile(value) {
	 var length = value.length;
	 return length == 11 && /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/.test(value);
}
	
// 电话号码验证
function dyfrom_phone(value) {
	 var tel = /^(\d{3,4}-?)?\d{7,9}$/g;
	 return tel.test(value);
}
	
// 邮政编码验证
function dyfrom_zipCode(value) {
	 var tel = /^[0-9]{6}$/;
	 return tel.test(value);
}

// 邮箱
function dyfrom_email(value) {
	var email = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
	return value.search(email)==0;
}
	
// 必须以特定字符串开头验证
function dyfrom_begin(value, param) {
	 var begin = new RegExp("^" + param);
	 return begin.test(value);
}
	
// 验证值小数位数不能超过两位
function dyfrom_decimal(value) {
	 var decimal = /^-?\d+(\.\d{1,2})?$/;
	 return decimal.test(value);
}
// 验证货币
function dyfrom_ismoney(value){
	var z = /^\d+$/;
	if(value=='0')return false;
	if(!z.test(value)){
		var re = new RegExp("^[0-9]+[\.][0-9]{0,3}$");
		return re.test(value);
	}
	return true;
} 
function dyfrom_ajax(url,value) {
	$.ajax({
		type: "POST",
		url: url,
		async: false,
		cache: false,
		data: value,
		success: function(msg){
			overs=msg;
		}
	});
	return overs;
}



/******************************************************
 * dux_common.js copy to here 2014-03-30 afternoon
******************************************************/

$.ajaxSetup ({
    cache: false
});

//绑定顶部ajax菜单
function navload() {
    $('.top_nav a').live("click",
        function() {
            url = $(this).attr("href");
            if (url !== '' && url !== '#') {
                $.get(url, function(result){
                    $("#nav").html(result);
                });
            }
            return false;
        });
}


//绑定ajax超链接
function hrftload() {
    $('.load a,.url').live("click",
        function() {
            url = $(this).attr("href");
            len=url.substring(url.length-1,url.length);
            if (len == "" || len == '#') {
                return false;
            }
            ajaxload(url);
            return false;
        });
    $('#nav ul a').live("click",function(){
        $("#nav ul a").removeClass('selected');
        $(this).addClass('selected');
    });
}

function ajaxload(url) {
    main_load(url);
}
//菜单超链接跳转
function menuload(url) {
    window.top.main_load(url);
}

//绑定表格隔行变色
function livetable() {
    $('.table_list tr:even,.form_table tr:odd').addClass('odd');
}


//提交锁屏
function sub_lock() {
    var txt = '正在处理数据，请稍后...';
    //IE6位置
    if (!window.XMLHttpRequest) {
        $("#targetFixed").css("top", $(document).scrollTop() + 2);
    }
    //创建半透明遮罩层
    if (!$("#overLay").size()) {
        $('<div id="overLay"></div>').prependTo($("body"));
        $("#overLay").css({
            width: "100%",
            backgroundColor: "#000",
            opacity: 0.1,
            position: "absolute",
            left: 0,
            top: 0,
            zIndex: 99
        }).height($(document).height());
    }
    $.dialog.tips(txt,3);
}
//锁屏关闭
function sub_lock_close() {
    var txt = '数据处理完毕！';
    $("#overLay").remove();
    $.dialog.tips(txt,1);
}

$(document).ready(function() {
    livetable();
})

/*ajax提交含有确认提示
 * 注意 参数中success 和 failure 是函数名
 */
function ajaxpost(name,url,data,tip,success,failure,cancel){
    $.dialog({
        title: '操作确认',
        content: name,
        lock: true,
        button: [{
            name: '确认操作',
            callback: function() {
                sub_lock();
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    dataType: 'json',
                    success: function(json) {
                        sub_lock_close();
                        if(tip==1){
                            $.dialog.tips(json.message, 3);
                        }
                        // 1 表示函数运行成功
                        if (json.status == 1) {
                            if(typeof success == "function"){
                                success(json.message);//调用成功函数
                            }
                        } else {
                            if(typeof failure == "function"){
                                failure(json.message);////调用函数
                            }
                        }
                    }
                });
            },
            focus: true
        },
            {
                name: '取消',
                callback: function() {
                    if(typeof cancel == "function"){
                        cancel();
                    }
                }
            }]
    });
}

//ajax提交无确认提示
function ajaxpost_w(url,data,tip,success,failure,msg){
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        dataType: 'json',
        success: function(json) {
            if(tip==1){
                $.dialog.tips(json.message, 3);
            }
            if(tip==2&&msg!=''){
                $.dialog.tips(msg, 3);
            }
            if(json != null){
                if (json.status == 1) {
                    if(typeof success == "function"){
                        success(json.message);
                    }
                } else {
                    if(typeof failure == "function"){
                        failure(json.message);
                    }
                }
            }
        }
    });
}

//弹出窗口
function urldialog(title,url){
    $.dialog({
        title:title,
        content: 'url:'+url
    })
}

//标准表单保存
function savelistform(addurl,listurl,data){
    $('#form').mkform(function() {
        sub_lock();
        if(typeof data == "function"){
            data(data);
        }
        setTimeout(function() {
                $('#form').ajaxSubmit({
                    dataType: "json",
                    type: 'post',
                    success: function(json) {
                        sub_lock_close();
                        if (json.status == 0) {
                            $.dialog.tips(json.message, 3);
                        } else {
                            $.dialog({
                                title: '操作成功！',
                                content: json.message+' 3秒后自动返回列表! ',
                                lock: true,
                                button: [{
                                    name: '继续添加',
                                    callback: function() {
                                        window.location.href=addurl
                                    },
                                    focus: true
                                },
                                    {
                                        name: '返回列表',
                                        callback: function() {
                                            window.location.href=listurl
                                        }
                                    }]
                            });
                            setTimeout(function() {
                                window.location.href=listurl
                            }, 3000);

                        }

                    }
                });
            },
            1000);
        return false;
    });
}

//表单直接保存
function saveform(success,failure){
    $('#form').mkform(function(){
        setTimeout(function() {
                $('#form').ajaxSubmit({
                    dataType: "json",
                    success: function(json) {
                        if (json.status == 1) {
                            if(typeof success == "function"){
                                success(json.message);
                            }
                        } else {
                            if(typeof failure == "function"){
                                failure(json.message);
                            }
                        }
                    }
                });
            },
            1000);
        return false;
    });
}

