// login
$(function() {
var user_width1 = $("#Logged .user").width();
var user_width2 = user_width1 + 20;
var $show_more = $("#Logged .user").siblings("div.show_more");
if(user_width1 > 60) {$show_more.css("width",user_width2);}else{$show_more.css("width","80px");};
$("#links .li_cz").hover(function() {$(this).addClass("cz_hover");},function() {$(this).removeClass("cz_hover");});
$("#Logged .lbox").hover(function() {$(this).addClass("lbox_hover").css("z-index","3");},function() {$(this).removeClass("lbox_hover").css("z-index","1");});
});

// input & button
$(function(){
$("form .tit").focus(function(){
	if($(this).val() == this.defaultValue){$(this).val("").css("color","#333");}
}).blur(function(){
	if($(this).val() == ""){$(this).val(this.defaultValue).css("color","#999");}
});
$("form .btn").hover(function(){$(this).addClass("btn_hover");},function(){	$(this).removeClass("btn_hover");});
$("a.as").append("<b class='b1'></b><b class='b2'></b>");
$("div.tc_box input.tits").focus(function() {$(this).addClass("tits_focus");}).blur(function() {$(this).removeClass("tits_focus");});
});

// sub
$(function(){
	if($("#sub").length > 0){
		$("#sub .sub_home > a").after("&nbsp;&nbsp;&gt;&nbsp;");
		$("#sub .sub_other > a").after("&nbsp;&nbsp;&gt;&nbsp;");
		if($("#sub .sub_link").length > 0) {$("#sub .sub_here").prepend("&nbsp;&gt;&nbsp;&nbsp;");	}else{$("#sub .sub_here").prepend("&nbsp;");}
		var has_li = $("#sub .sub_link ul li").index();
		if(has_li > 0){
			$("#sub .sub_link > b").append("<i></i>");
			$("#sub .sub_link").hover(function(){
				$(this).addClass("sub_hover");
				$("#sub .sub_link ul").stop(true,true).slideDown(200);
			},function(){
				$(this).removeClass("sub_hover");
				$("#sub .sub_link ul").stop(true,true).slideUp(200);
			});
		}else{$("#sub .sub_link > b").css("padding-right","6px");}
	}
});

// user_pics_show
$(function(){
	if($("#user_pics_show").length > 0){
		var page = 1;
		var i = 1;
		var len = $("#user_pics_show div ul li").length;
		var page_count = Math.ceil(len / i);
		var none_unit_width = $("#user_pics_show div").width();
		var $parent = $("#user_pics_show div ul"); 
		if(len > 1) {$("#user_pics_show").append("<span class='goLeft'></span><span class='goRight'></span>");	}
		$(".goRight").click(function(){ 
			if( !$parent.is(":animated") ){
				if( page == page_count ){
					$parent.animate({ left : 0}, 500);
					page = 1;
				}else{
					$parent.animate({ left : '-='+none_unit_width}, 500);
					page++;
				}
			}
		});
		$(".goLeft").click(function(){
			if( !$parent.is(":animated") ){
				if( page == 1 ){
					$parent.animate({ left : '-='+none_unit_width*(page_count-1)}, 500);
					page = page_count;
				}else{
					$parent.animate({ left : '+='+none_unit_width }, 500);
					page--;
				}
			}
		});
	}
});

// list_slide
$(function(){
	if($("#list_slide").length > 0){
		var page = 1;
		var i = 4;
		var len = $("#list_slide div ul li").length;
		var page_count = Math.ceil(len / i);
		var none_unit_width = $("#list_slide .pics_slide").width();
		var $parent = $("#list_slide .pics_slide ul"); 
		if(len > 4) {$("#list_slide").append("<span class='goLeft'></span><span class='goRight'></span>");	}
		$(".goRight").click(function(){ 
			if( !$parent.is(":animated") ){
				if( page == page_count ){
					$parent.animate({ left : 0}, 500);
					page = 1;
				}else{
					$parent.animate({ left : '-='+none_unit_width}, 500);
					page++;
				}
			}
		});
		$(".goLeft").click(function(){
			if( !$parent.is(":animated") ){
				if( page == 1 ){
					$parent.animate({ left : '-='+none_unit_width*(page_count-1)}, 500);
					page = page_count;
				}else{
					$parent.animate({ left : '+='+none_unit_width }, 500);
					page--;
				}
			}
		});
	}
});

// user_img
$(function() {
var $user_more = $("span.user_img").find("div.user_more");
$user_more.after("<span class='arrow'></span>");
$user_more.parent("span.user_img").bind("hover",function() {
	$(this).children("span.arrow").stop(true,false).toggle();
	$(this).children("div.user_more").stop(true,false).toggle(300);
});
});

// baike & hezuo
$(function() {
	$("#jkbk .jkbk_top h3").after("<i></i>");
	if($("#jbbk").length > 0){
		$("#jbbk .jbbk_top h3").after("<i></i>");
		var $jbbk_p1 = $("#jbbk .jbs_tips .p1");
		var $jbbk_a1 = $("#jbbk .jbs_tips .p1 cite a");
		var $jbbk_p2 = $("#jbbk .jbs_tips .p2");
		var $jbbk_a2 = $("#jbbk .jbs_tips .p2 cite a");
		$jbbk_a1.click(function() {
			$jbbk_p1.hide();
			$jbbk_p2.show();
		});
		$jbbk_a2.click(function() {
			$jbbk_p2.hide();
			$jbbk_p1.show();
		});
	}
	if($("#baike").length > 0){
		$("#baike").prepend("<span class='baike_bg'></span>");
		$("#baike .bk_top h3").after("<i></i>");
		var $baike_li = $("#baike .bk_top ul").find("li");
		$baike_li.click(function() {
			$(this).addClass("selected").siblings().removeClass("selected");
			var baike_li_index =  $baike_li.index(this);
			$("#baike .bk_bot > div").eq(baike_li_index).addClass("show").siblings("div").removeClass("show");
		});
		
		var $baike_div = $("#baike .bk_bot > div");
		var baike_length=$baike_div.length;
		var baike_div_height = new Array();
		
		for(var i=0;i<baike_length;i++) {
			baike_div_height[i] = $baike_div.eq(i).height();
			if(baike_div_height[i] > 182) {
				$baike_div.eq(i).css("height","182px").append('<span class="slide_a"><cite>...</cite><a href="javascript:void(0);" target="_self" index="'+i+'" title="展开">展开</a></span>');
			}else{
				$baike_div.eq(i).css("padding-bottom","20px");
			}
		}
		
		$baike_div.delegate("span.slide_a a","click",function(){
			var index = $(this).attr("index");
			if($baike_div.eq(index).height() <= 182) {
				$baike_div.eq(index).animate({height : baike_div_height[index]} , 300).css("padding-bottom","30px");
				$(this).text("收起").attr("title","收起").css("background-position","42px -213px").siblings("cite").hide();
			}else{
				$baike_div.eq(index).animate({height : "182px"} , 300).css("padding-bottom","12px");
				$(this).text("展开").attr("title","展开").css("background-position","42px -183px").siblings("cite").show();
			}
		});
	}
	if($("#hezuo").length > 0){
		var hezuo_height = $("#hezuo").height();
		if(hezuo_height>=242) {
			$("#hezuo").css("height","242px").append('<span class="slide_b"><cite>...</cite><a href="javascript:void(0);" target="_self" title="展开">展开</a></span>');
		}else{
			$("#hezuo").css("padding-bottom","20px");
		}
		$("#hezuo").delegate("span.slide_b a","click",function(){
			if($("#hezuo").height() <= 242) {
				$("#hezuo").animate({height : hezuo_height} , 300).css("padding-bottom","30px");
				$(this).text("收起").attr("title","收起").css("background-position","42px -213px").siblings("cite").hide();
			}else{
				$("#hezuo").animate({height : "242px"} , 300).css("padding-bottom","12px");
				$(this).text("展开").attr("title","展开").css("background-position","42px -183px").siblings("cite").show();
			}
		});
	}
});

// tiezi
$(function() {
	$("#w_left .user_pics span").hover(function() {$(this).find("i").toggle();})
	$("#w_left .user_pics span i").click(function() {$(this).parent("span.pics").hide([200],[function () {$(this).remove()}]);});
	$("#w_left div.tiwen span.gaikuo").append("<i class='arrow_up'></i>");
	$("#w_left div.tiwen span.lizi").append("<i></i>");
	$("#jinqi_shi").append("<i class='arrow_up'></i>");
	$("#jinqi_fou").append("<i class='arrow_up'></i>");
	$("#w_right div.keys p a").append("<b class='b1'></b><b class='b2'></b>");
	var $keys_box = $("#w_right div.keys");
	var keys_p = $("#w_right div.keys p").height();
	if(keys_p>123) {
		$("#w_right div.keys p").css("height","136px");
		$keys_box.append('<span class="slide_c"><cite></cite><a href="javascript:void(0);" target="_self" title="展开">展开</a></span>');
	}else{
		$("#w_right div.keys p").css("padding-bottom","20px");
	}
	$keys_box.delegate("span.slide_c a","click",function(){
		if($("#w_right div.keys p").height() <= 136) {
			$("#w_right div.keys p").animate({height : keys_p} , 300).css("padding-bottom","16px");
			$(this).text("收起").attr("title","收起").css("background-position","42px -213px").siblings("cite").hide();
		}else{
			$("#w_right div.keys p").animate({height : "136px"} , 300).css("padding-bottom","0");
			$(this).text("展开").attr("title","展开").css("background-position","42px -183px").siblings("cite").show();
		}
	});

	$("#user_help ul li > span").append("<i class='i1'>Q:</i><i class='i2'>A:</i>");

	$("#user_box_btn").click(function() {$("#user_box").stop(true,false).slideToggle(300);return false;});

	var $zhuiwen_a = $("#w_left div.user_tool span.zhuiwen a");
	var $jia_a = $("#w_left div.user_tool span.jia a");
	var $pingjia_a = $("#w_left div.user_tool span.pingjia a[title=不满意]");
	var $pj_hide = $("div.pj_box").find("a.hide");
	
	$zhuiwen_a.click(function() {
		var $user_box = $(this).parent("span.zhuiwen").parent("div.user_tool").siblings("div.user_box");
		var $jia_box = $(this).parent("span.zhuiwen").parent("div.user_tool").siblings("div.jia_box");
		var $pj_box = $(this).parent("span.zhuiwen").parent("div.user_tool").siblings("div.pj_box");
		if($user_box.is(":hidden")) {
			$user_box.fadeIn(300);
			$jia_box.hide();
			$pj_box.hide();
		}else{
			$user_box.hide();
		}
	});
	$jia_a.click(function() {
		var $user_box = $(this).parent("span.jia").parent("div.user_tool").siblings("div.user_box");
		var $jia_box = $(this).parent("span.jia").parent("div.user_tool").siblings("div.jia_box");
		var $pj_box = $(this).parent("span.jia").parent("div.user_tool").siblings("div.pj_box");
		if($jia_box.is(":hidden")) {
			$jia_box.fadeIn(300);
			$user_box.hide();
			$pj_box.hide();
		}else{
			$jia_box.hide();
		}
	});
	
	$pingjia_a.click(function() {
		var $user_box = $(this).parent("span.pingjia").parent("div.user_tool").siblings("div.user_box");
		var $jia_box = $(this).parent("span.pingjia").parent("div.user_tool").siblings("div.jia_box");
		var $pj_box = $(this).parent("span.pingjia").parent("div.user_tool").siblings("div.pj_box");
		if($pj_box.is(":hidden")) {
			$pj_box.fadeIn(300);
			$user_box.hide();
			$jia_box.hide();
		}else{
			$pj_box.hide();
		}
	});
	$pj_hide.click(function() {$(this).parent("div.pj_box").fadeOut(300);});

	// user_tui
	var $user_tui = $("div.tuis > div > div");
	var $user_tui_a = $("div.tuis > div > div a");
	var $user_tui_arrow = $("div.tuis > div > div .arrow");
	var $user_tui_more = $("div.tuis > div > div .user_more");
	$user_tui.bind("mouseover", lifun1 = function(){
		$(this).addClass("li_hover");
	}).bind("mouseout", lifun2 = function(){
		$(this).removeClass("li_hover");
	}).hover(function() {
		$(this).toggleClass("big_index");
	}).click(function(){
		$(this).removeClass("li_hover").addClass("selected").unbind("mouseover", lifun1).unbind("mouseout", lifun2).append("<b class='choose'></b>");
		$(this).siblings().removeClass("selected").bind("mouseover", lifun1).bind("mouseout", lifun2).children("b").remove();
	});
	$user_tui_a.click(function(event) {event.stopPropagation();});
	$user_tui_arrow.click(function(event) {event.stopPropagation();});
	$user_tui_more.click(function(event) {event.stopPropagation();});
	
	var $tixing_form = $("#user_ti > form");
	var $tixing_ok = $("#user_ti > span.tixing_ok a");
	var $tixing_i = $("#user_ti > span.tixing_ok i");
	$tixing_ok.click(function() {
		var _mail = $tixing_i.text();
		$(this).parent("span.tixing_ok").hide();
		$tixing_form.show().find("input[type=text]").val(_mail).focus();
	});
	
	$("#jinqi_shi_show").click(function() {
		if($("#jinqi_fou").is(":hidden")) {
			$(this).toggleClass("as_click");
			$("#jinqi_shi").toggle();
			return false;
		}else{
			$(this).addClass("as_click").siblings("a").removeClass("as_click");
			$("#jinqi_shi").show();
			$("#jinqi_fou").hide();
		}
	});
	$("#jinqi_fou_show").click(function() {
		if($("#jinqi_shi").is(":hidden")) {
			$(this).toggleClass("as_click");
			$("#jinqi_fou").toggle();
		}else{
			$(this).addClass("as_click").siblings("a").removeClass("as_click");
			$("#jinqi_fou").show();
			$("#jinqi_shi").hide();
		}
	});
	$("#jinqi_fou ol li").click(function() {$(this).addClass("li_select").siblings("li").removeClass("li_select");});
	var $jinqi_shi_ol = $("#jinqi_shi div ol");
	var $jinqi_shi_ol_a = $("#jinqi_shi div ol li a");
	$jinqi_shi_ol_a.click(function() {
		var a_text = $(this).text();
		$jinqi_shi_ol.hide().siblings("input.tit").val(a_text).blur();
	});
	
	var $xinxi_label = $("#tw_xinxi li:first label:last");
	var $xinxi_xuan1 = $("#tw_xinxi li:first label:eq(0)");
	var $xinxi_xuan2 = $("#tw_xinxi li:first label:eq(1)");
	$xinxi_label.hide();
	$xinxi_xuan1.click(function() {
		$(this).children("input").attr("checked",true);
		$xinxi_label.hide().children("input").attr("checked",false);
	});
	$xinxi_xuan2.click(function() {
		$(this).children("input").attr("checked",true);
		$xinxi_label.show();
	});	
	
	var $yao = $("#yao_box").siblings("span.yao");
	var $yao_a = $("#yao_box").siblings("span.yao").find("a");
	var $yao_box_hide = $("#yao_box > a.hide");
	$yao_a.click(function() {
		$("#yao_box").show();
		$yao.hide();
	});
	$yao_box_hide.click(function() {
		$yao.show();
		$("#yao_box").hide();
	});
	
	var $user_talk_a1 = $("#w_left div.tbox ul.user_talk li > span > b > a.xiu");
	var $user_talk_qx = $("#w_left div.tbox ul.user_talk li > div .qx");
	$user_talk_a1.click(function() {
		var $user_talk_xiu = $(this).parent("b").parent("span").siblings("div.li_xiu");
		if($user_talk_xiu.is(":hidden")) {
			$user_talk_xiu.show();
		}else{
			$user_talk_xiu.hide();
		}
	});
	var $user_talk_a2 = $("#w_left div.tbox ul.user_talk li > span > b > a.hui");
	$user_talk_a2.click(function() {
		var $user_talk_hui = $(this).parent("b").parent("span").siblings("div.li_hui");
		if($user_talk_hui.is(":hidden")) {
			$user_talk_hui.show();
		}else{
			$user_talk_hui.hide();
		}
	});
	$user_talk_qx.click(function() {$(this).parent("form").parent("div").hide();	});
});

// list
$(function() {
	$("#list_link li a").click(function() {$(this).parent("li").addClass("li_now").siblings("li").removeClass("li_now");});
	$("#list_some ul li > a.hot").append("<i></i>");
	if($("#list_box").length > 0) {
		$("#list_box dl").hover(function() {
			if($(this).not(".dl_hover")) {
				$(this).addClass("dl_hover").mouseleave(function() {
					$(this).removeClass("dl_hover");
				});
			}
		});
		$("#list_box div.list_other").hover(function() {$(this).addClass("dl_hover");},function() {	$(this).removeClass("dl_hover");});
		var dls = $("#list_box dl").index();
		for(i=0;i<dls;i++) {
			var dls_dd = $("#list_box dl").eq(i).find("dd").index();
			if(dls_dd>5) {
				$("#list_box dl").eq(i).find("dd:gt(4)").hide();
				$("#list_box dl").eq(i).find("dt").append("<a href='javascript:void(0);' class='show_dl' target='_self' title='展开'></a>");
			}
		}
		$("#list_box dl dt").delegate("a.show_dl","click",function() {
			var $dls_dds = $(this).parent("dt").parent("dl").find("dd:gt(4)");
			if($dls_dds.is(":hidden")) {
				$(this).addClass("show_dl2").attr("title","收起"); $dls_dds.show();
			}else{
				$(this).removeClass("show_dl2").attr("title","展开"); $dls_dds.hide();
			}
		});
	}
	if($("#list_tag").length > 0) {
		$("#list_tag span.guige").hover(function(){$(this).children("ol").stop(true,true).slideToggle(200);	},function() {	$(this).children("ol").stop(true,true).slideUp(200);});
		$("#list_tag span.guige ol li").bind("click",function(){
			var li_text = $(this).text();
			$(this).parent("ol").siblings("i").text(li_text);
			$(this).parent("ol").siblings("input").attr("value",li_text);
			$("#list_tag span.guige > ol").hide();
		}).hover(function(){$(this).addClass("li_hover");},function(){$(this).removeClass();});
		
		$("#list_tag ul.list_ask li .a_l .p1").append("<i class='i1'>Q</i>");
		$("#list_tag ul.list_ask li .a_l .p2").append("<i class='i2'>A</i>");
	}
	
	$("#pifu_ad_big").find("i").click(function() {
		$(this).parent("#pifu_ad_big").hide();
		cookiesave('Adcloseclick','Adcloseclick','','','');
	});
	
});

// yhk
$(function() {
	$("#menu_zsk").find("li").hover(function() {$(this).addClass("li_hover");},function() {$(this).removeClass("li_hover");});
	$("#bins").find(".a1").append("<i></i>");
	$("#bins").find(".a2").append("<i></i>");
	var $bings_li = $("#bings ul").find("li");
	$bings_li.hover(function() {
		$(this).addClass("selected").siblings().removeClass("selected");
		var bings_li_index =  $bings_li.index(this);
		$("#bings > div").eq(bings_li_index).addClass("show").siblings("div").removeClass("show");
	});
	$("#zs_bt").append("<b></b>")
	$("#zsk_left2 ul").find("li:not(.now)").hover(function() {
		$(this).addClass("li_hover").siblings().removeClass("li_hover");
	},function() {
		$(this).removeClass("li_hover");
	});
	$("#zsk_left2 ul li a").click(function() {
		$(this).parent("li").addClass("now").siblings().removeClass("now");
	});
	$("#list_menu").find("li").append("<i></i>");
	$("#list_menu li:first").css("width","52px");
	$("#list_menu li").find("a").click(function() {
		$(this).parent("li").addClass("now").siblings().removeClass("now");
	})
	$("#daan_more").find("div.d_user:gt(0)").before("<span class='daan_more'></span>");
	$("#jian").find("li:last").css("border","none");
	$("#guan").find("li:last").css("border","none");
});

// right_card
$(function() {
	var howwidth=screen.width;
	if(howwidth<=1024) {
		$("#w_right span.user_img").addClass("user_img2");
		$("#list_tui div.tui_box span.user_img:last").addClass("user_img2");
	}
});

// index
$(function() {
	if($("#navs").length > 0) {
		$("#navs").find("div.nav_box:has('div.nav_more')").hover(function() {
			$(this).addClass("nav_box_hover");
		}).mouseleave(function() {
			$(this).removeClass("nav_box_hover")
		}).find("div.nav_more").append("<span class='no_line'></span>");
	}
	
	if($("#jishi").length > 0) {
		$("#jishi div.tab_menu ul li:gt(4):not(:last)").hide();
		var li_num = 1;
	    $("#jishi div.tab_menu ul li:not(:last)").click(function(){
			$(this).addClass("selected").siblings().removeClass("selected");
            var index1 =  $(this).index();
			$("#jishi div.tab_box > div").eq(index1).show().siblings().hide();
			if(index1 < 5) {
				li_num = 1;
			}else{
				li_num = 2;
			}
		});
		$("#jishi div.tab_menu ul").find("li.more").hover(function() {
			$(this).addClass("more_hover");
			$("#jishi div.tab_menu ul li:not(:last)").show();
		});
		$("#jishi div.tab_menu ul").mouseleave(function() {
			if (li_num == 1) {
				$("#jishi div.tab_menu ul li:lt(4):not(:last)").show();
				$("#jishi div.tab_menu ul li:gt(4):not(:last)").hide();
			}else{
				$("#jishi div.tab_menu ul li:lt(4):not(:last)").hide();
			}
			$(this).find("li.more").removeClass("more_hover");
		});		
	}
	
	if($(".tab_hover").length > 0) {
	    $("div.tab_hover").find("div.tab_menu ul").find("li").hover(function(){
			$(this).addClass("selected").siblings().removeClass("selected");
            var index2 =  $(this).index();
			$(this).parents("div.tab_hover").find("div.tab_box > div").eq(index2).show().siblings().hide();
		});
	}
	
	if($("#rewen").length > 0) {
		$("#rewen p a").append("<b class='b1'></b><b class='b2'></b>");
	}

	if($("#mingyi").length > 0) {
		var page = 1;
		var i = 1;
		var len = $(".mingyi_box .boxs").length;
		var page_count = Math.ceil(len / i) ;
		var none_unit_width = $(".mingyi").width();
		var $parent = $(".mingyi_box");
		$(".goRight").click(function(){ 
			if( !$parent.is(":animated") ){
				if( page == page_count ){
					$parent.animate({ left : 0}, 500);
					page = 1;
				}else{
					$parent.animate({ left : '-='+none_unit_width}, 500);
					page++;
				}
			}
		});
		$(".goLeft").click(function(){
			if( !$parent.is(":animated") ){
				if( page == 1 ){
					$parent.animate({ left : '-='+none_unit_width*(page_count-1)}, 500);
					page = page_count;
				}else{
					$parent.animate({ left : '+='+none_unit_width }, 500);
					page--;
				}
			}
		});
		var scrollTimeA;
		$("#mingyi").hover(function() {
			clearInterval(scrollTimeA);
		},function(){
			scrollTimeA = setInterval(function(){
				$(".goRight").click();
			}, 5000 );
		}).trigger("mouseleave");
	}

	if($("#zxs").length > 0 || $("#wts").length > 0) {
		var $zxs = $("#zxs");
		var scrollTimer;
		$zxs.hover(function(){
			clearInterval(scrollTimer);
		},function(){
			scrollTimer = setInterval(function(){
				scrollNews( $zxs );
			}, 5000 );
		}).trigger("mouseleave");
		
		var $wts = $("#wts");
		var scrollTimer2;
		$wts.hover(function(){
			clearInterval(scrollTimer2);
		},function(){
			scrollTimer2 = setInterval(function(){
				scrollNews( $wts );
			}, 5000 );
		}).trigger("mouseleave");
		
		function scrollNews(obj){
		   var $self = obj.find("ul:first"); 
		   var lineHeight = $self.find("li:first").height();
		   $self.animate({ "marginTop" : lineHeight +"px" }, 600 , function(){
				 $self.css({marginTop:0}).find("li:last").prependTo($self).hide().fadeIn(800); //or appendTo
		   })
		}
	}	

	if($("#home_focus").length > 0) {
		(function(d,D,v){d.fn.responsiveSlides=function(h){var b=d.extend({auto:!0,speed:1E3,timeout:7E3,pager:!1,nav:!1,random:!1,pause:!1,pauseControls:!1,prevText:"Previous",nextText:"Next",maxwidth:"",controls:"",namespace:"rslides",before:function(){},after:function(){}},h);return this.each(function(){v++;var e=d(this),n,p,i,k,l,m=0,f=e.children(),w=f.size(),q=parseFloat(b.speed),x=parseFloat(b.timeout),r=parseFloat(b.maxwidth),c=b.namespace,g=c+v,y=c+"_nav "+g+"_nav",s=c+"_here",j=g+"_on",z=g+"_s",o=d("<ul class='"+c+"_tabs "+g+"_tabs' />"),A={},E={},t=function(a){b.before();f.stop().fadeOut(q,function(){d(this).removeClass(j).css(E)}).eq(a).fadeIn(q,function(){d(this).addClass(j).css(A);b.after();m=a})};b.random&&(f.sort(function(){return Math.round(Math.random())-0.5}),e.empty().append(f));f.each(function(a){this.id=z+a});e.addClass(c+" "+g);h&&h.maxwidth&&e.css("max-width",r);f.hide().eq(0).addClass(j).css(A).show();if(1<f.size()){if(x<q+100)return;if(b.pager){var u=[];f.each(function(a){a=a+1;u=u+("<li><a href='#' class='"+z+a+"'>"+a+"</a></li>")});o.append(u);l=o.find("a");h.controls?d(b.controls).append(o):e.after(o);n=function(a){l.closest("li").removeClass(s).eq(a).addClass(s)}}b.auto&&(p=function(){k=setInterval(function(){var a=m+1<w?m+1:0;b.pager&&n(a);t(a)},x)},p());i=function(){if(b.auto){clearInterval(k);p()}};b.pause&&e.hover(function(){clearInterval(k)},function(){i()});b.pager&&(l.bind("click",function(a){a.preventDefault();b.pauseControls||i();a=l.index(this);if(!(m===a||d("."+j+":animated").length)){n(a);t(a)}}).eq(0).closest("li").addClass(s),b.pauseControls&&l.hover(function(){clearInterval(k)},function(){i()}));if(b.nav){c="<a href='#' class='"+y+" prev'>"+b.prevText+"</a><a href='#' class='"+y+" next'>"+b.nextText+"</a>";h.controls?d(b.controls).append(c):e.after(c);var c=d("."+g+"_nav"),B=d("."+g+"_nav.prev");c.bind("click",function(a){a.preventDefault();if(!d("."+j+":animated").length){var c=f.index(d("."+j)),a=c-1,c=c+1<w?m+1:0;t(d(this)[0]===B[0]?a:c);b.pager&&n(d(this)[0]===B[0]?a:c);b.pauseControls||i()}});b.pauseControls&&c.hover(function(){clearInterval(k)},function(){i()})}}if("undefined"===typeof document.body.style.maxWidth&&h.maxwidth){var C=function(){e.css("width","100%");e.width()>r&&e.css("width",r)};C();d(D).bind("resize",function(){C()})}})}})(jQuery,this,0);
	
		$("#home_focus").responsiveSlides({
			auto: true,
			pager: true,
			speed: 700
		});
	}
});
