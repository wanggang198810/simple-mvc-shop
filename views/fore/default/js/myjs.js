/*
 *这里我要慢慢把常用到的js都写道这里来，以后可以直接封装使用，由于主要放在前台被使用，所以就放在fore前台的js中
 * 会包括：
 * 1.tab切换
 * 2.图片滚动
 * 3.瀑布留
 * 4.弹出窗口
 *
 * ...所有那些在电脑上存储的好玩的
 *
 * ******************需要注意的是**************
 * js这些效果要配合css ，慢慢的，要把js和css放在一起，我觉得可以建立一个html文件，通过 <script> and <style>的方式去做这个库
 */

$(function(){
    $(".tab li").click(function(){
        $(".tab li").removeClass("selected");
        $(this).addClass("selected");
        $(".info .tabdiv").addClass("none");
        $("#info"+$(this).attr("id")).removeClass("none");
    });
});