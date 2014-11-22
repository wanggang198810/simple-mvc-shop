document.write("<div class=\"asks\"><div class=\"ask_box\" id=\"ask_box\" style=\"display: block;\"><span class=\"ab_bt\"><strong>向卖家提问</strong><a href=\"javascript:void(0);\" target=\"_self\" onclick=\"closeDiv()\" title=\"关闭\"></a></span><div class=\"ab_con\"><form action=\"http://ask.39.net/addtopic.aspx\" method=\"post\" id=\"form_1\" name=\"form_1\" onsubmit=\"return ReplySubmit(this.form);\" target=\"_blank\"><p>您是第6位留言者</p><textarea name=\"content\" id=\"Content\" style=\"color: #999;\" cols=\"\" rows=\"\" onfocus=\"if(this.value=='请详细描述您的疑问，有助卖家快速帮您解答！'){this.value='';}this.style.color='Black'\" class=\"tit\">请详细描述您的疑问，有助卖家快速帮您解答！</textarea><input type=\"submit\" class=\"btn\" value=\" \" title=\"提交\" onmouseover=\"this.className='btn btn_hover'\" onmouseout=\"this.className='btn'\" /></form></div></div><div id=\"ask_box_mini\" class=\"ask_box_mini\" style=\"display: none;\"><a href=\"javascript:void(0);\" target=\"_self\" onclick=\"showDiv()\" title=\"我要提问\">我要提问</a></div></div>");

if (getcookie("tangchuang") == '' || getcookie("tangchuang") == null) {
    showDiv();
}
else {
    closeDiv();
}
function ReplySubmit() {
	if(document.form_1.content.value == '请详细描述您的疑问，有助卖家快速帮您解答！' || document.form_1.content.value == '')
	{
		document.form_1.content.style="border:1px solid red";
		return false;
	}
    var infoid = window.parent.document.getElementById('infoid').value;
    var userid = window.parent.document.getElementById('userid').value;

    if (infoid > 0 && infoid != ''&& userid > 0 && userid != '') {
        document.form_1.action = 'index.php?c=member&a=addAsk&infoid=' + infoid + '&userid='+userid;
    }
    return true;
}
//cookie
function getCookie(name) {
    return unescape(document.cookie.replace(new RegExp(".*(?:^|; )" + name + "=([^;]*).*|.*"), "$1"));
}
function getcookie(name) {
    var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
    if (arr != null) {
        return unescape(arr[2]);
    } else {
        return "";
    }
}
function setCookie(name, value, expires, path, domain, secure) {
    var expires = new Date();
    expires.setTime(expires.getTime() + 24 * 60 * 60 * 1000);
    var domain = ".39.net"
    var s = name + "=" + escape(value) +
	((expires) ? "; expires=" + expires.toGMTString() : "") +
	((path) ? "; path=" + path : "") +
	((domain) ? "; domain=" + domain : "") +
	((secure) ? "; secure" : "");
    document.cookie = s;
}
function setcookie(name, value) {
    var Days = 1;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 12 * 60 * 60 * 1000);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
function delcookie(name) {
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval = getCookie(name);
    if (cval != null) document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
}
//关闭,最小化,最大化
function showDiv() {
    document.getElementById('ask_box').style.display = 'block';
    document.getElementById('ask_box_mini').style.display = 'none';
    setcookie("tangchuang", "");
    setcookie("divStatus", "");
}
function closeDiv() {
    document.getElementById('ask_box').style.display = 'none';
    document.getElementById('ask_box_mini').style.display = 'block';
    setcookie("tangchuang", "yes");
    setCookie("divStatus", 1);
}