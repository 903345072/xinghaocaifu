$(function() {
    //全局控制用户跳转链接是否登陆
    $(".globalLogin").on("click", function() {
        var url = $(this).data('url'),
            guest = $(this).data('guest');
        if (guest == 1) {
            window.location.href = '/site/login';
        } else {
            window.location.href = url;
        }
    });
});
