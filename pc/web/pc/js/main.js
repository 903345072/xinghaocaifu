$(function() {
	$(".recommend-list>.recommend-active-con").eq(0).css("display", "block");
	$(".recommend-list>.recommend-active-con").eq(0).siblings().css("display", "none");
	$(".recommend-btn-list>li>a").on("click", function() {
		proid = $(this).attr("proid");
		srcurl = $(this).attr("framesrc");
		var index = $(this).parent().index();
		$(this).parent().addClass("recommend-active");
		$(this).parent().siblings().removeClass("recommend-active");
		$(this).parent().parent().parent().parent().children("div").eq(1).children().eq(index).css("display", "block");
		$(this).parent().parent().parent().parent().children("div").eq(1).children().eq(index).siblings().css("display", "none");
		$('#framid_' + proid).attr('src', srcurl);
		$('#detail15').attr("href", '/Content/index/jiaoyi_detail/id/' + proid + '.html');
	})
	$(".recommend-btn-list-2>li>a").on("click", function() {
		proid = $(this).attr("proid");
		srcurl = $(this).attr("framesrc");
		var index = $(this).parent().index();
		$(this).parent().addClass("recommend-active-2");
		$(this).parent().siblings().removeClass("recommend-active-2");
		$(this).parent().parent().parent().parent().children("div").eq(1).children().eq(index).css("display", "block");
		$(this).parent().parent().parent().parent().children("div").eq(1).children().eq(index).siblings().css("display", "none");
		$('#framid_' + proid).attr('src', srcurl);
		$('#detail14').attr("href", '/Content/index/jiaoyi_detail/id/' + proid + '.html');
	})
	$(".index_con-title>li>a").on("mouseover", function() {
		var index = $(this).parent().index() + 1;
		$(this).children("div").children("img").attr("src", "/pc/images/index-icon" + index + ".png")
	})
	$(".index_con-title>li>a").on("mouseout", function() {
		var index = $(this).parent().index() + 1;
		$(this).children("div").children("img").attr("src", "/pc/images/index-icon" + index + "-h.png")
	})
	$(".information-body>.information-list").eq(0).css("display", "block");
	$(".information-body>.information-list").eq(0).siblings().css("display", "none");
	$(".information-btn-lsit>li>a").on("click", function() {
		var index = $(this).parent().index();
		$(this).parent().addClass("information-active");
		$(this).parent().siblings().removeClass("information-active");
		$(".information-body>.information-list").eq(index).css("display", "block");
		$(".information-body>.information-list").eq(index).siblings().css("display", "none");
	})
})