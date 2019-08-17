$(".tab_box span").click(function (){
	$(this).addClass('on').siblings().removeClass('on');
	var index=$(this).index();
	$(".tab_list ul").eq(index).show().siblings().hide();
})

$(".tab_box span").click(function (){
	$(this).addClass('on').siblings().removeClass('on');
	var index=$(this).index();
	$(".tab_list ul").eq(index).show().siblings().hide();
})

$(".jine_select span").click(function (){
	$(this).addClass('on').siblings().removeClass();
})


function tab(obj,ele){
	$(obj).click(function (){
		$(this).addClass('on').siblings().removeClass('on');
		var index=$(this).index();
		$(ele).eq(index).show().siblings(ele).hide();
	})
}

tab('.jy_box_top > span','.jy_box_tab_list');
tab('.chicang_tab_box > div', '.chicang_box');

$(".inforcenter .title1").click(function (){
	$(this).parent().siblings().find('.inforc_con').slideUp();
	$(this).siblings('.inforc_con').stop().slideToggle();
})

tab('.r_t-1 span', '.qiehuan1');
tab('.r_t-2 span', '.qiehuan2');