new function (){
       var _self = this;
       _self.width = 720;//设置默认最大宽度
       _self.fontSize = 100;//默认字体大小
       _self.widthProportion = function(){var p = (document.body&&document.body.clientWidth||document.getElementsByTagName("html")[0].offsetWidth)/_self.width;return p>1?1:p<0.32?0.32:p;};
       _self.changePage = function(){
           document.getElementsByTagName("html")[0].setAttribute("style","font-size:"+_self.widthProportion()*_self.fontSize+"px !important");
       }
       _self.changePage(); 
       window.addEventListener('resize',function(){_self.changePage();},false);
    };
    
$('.c1').click(function(){
	$(this).prev('input').val('');
})
$('.c2').click(function(){
	if($(this).hasClass('a')){
		$(this).removeClass('a');
		$(this).prev('input').attr('type','password');
	}else{
		$(this).addClass('a');
		$(this).prev('input').attr('type','text');
	}
})
$('.sl div').click(function(){
	var n = $(this).index();
	$(this).addClass('on').siblings().removeClass('on');
	$('.main_content .fadein').eq(n).show().siblings().hide();
})
$('.fadein_header ul li').click(function(){
	var n = $(this).index();
	$(this).addClass('on').siblings().removeClass('on');
	$('.gp .gp_list').eq(n).show().siblings().hide();
})
$('.hua div span').click(function(){
	if($(this).hasClass('x')){
		$(this).removeClass('x');
		$(this).removeClass('ff');
	}else{
		$(this).addClass('x');
		$(this).addClass('ff');
	}
})
$('.pro_list ul li .jd span').click(function(){
	$(this).addClass('on').siblings().removeClass('on');
})
$('.ready').click(function(){
	if($(this).children('span').hasClass('on')){
		$(this).children('span').removeClass('on')
	}else{
		$(this).children('span').addClass('on')
	}
})
$('.nav_fade div').click(function(){
	var n = $(this).index();
	$(this).addClass('on').siblings().removeClass('on');
})
$('.list_pay ul li').click(function(){
	$(this).addClass('on').siblings().removeClass('on');
})
$('.slideup ul li').click(function(){
	$(this).next('.slidedown').slideDown();
})
$('.slidedown div').click(function(){
	$(this).parents('.slidedown').slideUp();
})
$('.top_bar ul li').click(function(){
	var n = $(this).index();
	$(this).addClass('on').siblings().removeClass('on');
	$('.fade_in .list_fadein').eq(n).show().siblings().hide();
})
