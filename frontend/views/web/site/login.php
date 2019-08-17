
<style type="text/css">.nav-list>li {
        float: left;
        line-height: 70px;
        width: auto;
        padding: 0 5px
    }

    .layui-layer-btn .layui-layer-btn0 {
        border-color: #dedede;
        background-color: #dedede;
        color: #000
    }

    .layui-layer-btn .layui-layer-btn1 {
        border-color: #4898d5;
        background-color: #4898d5;
        color: #fff
    }

    .nav-right span {
        margin: 0 5px
    }</style>




<style type="text/css">.banner {
        position: relative
    }

    .banner .tm-float-box {
        position: absolute;
        width: 1200px;
        left: 0;
        right: 0;
        top: 0;
        z-index: 666
    }

    .banner .tm-float-box .tm-container {
        padding-top: 10px;
        padding-bottom: 0
    }

    .slideBox {
        width: 100%;
        height: auto;
        overflow: hidden;
        position: relative;
        z-index: 555
    }

    .slideBox .hd {
        height: 20px;
        overflow: hidden;
        position: absolute;
        right: 50%;
        bottom: 40px;
        z-index: 1;
        margin-right: -52px;
        font-size: 0
    }

    .slideBox .hd ul {
        overflow: hidden;
        zoom: 1;
        float: left
    }

    .slideBox .hd ul li {
        float: left;
        margin-right: 15px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        text-align: center;
        border: 2px solid #fff;
        cursor: pointer
    }

    .slideBox .hd ul li.on {
        background: #fff
    }

    .slideBox .bd {
        position: relative;
        z-index: 0
    }

    .slideBox .bd li {
        zoom: 1;
        vertical-align: middle
    }

    .slideBox .bd img {
        width: 100%;
        height: 100%;
        display: block
    }

    .slideBox .prev,
    .slideBox .next {
        position: absolute;
        left: 8%;
        top: 50%;
        margin-top: -25px;
        display: block;
        width: 32px;
        height: 40px;
        background-repeat: no-repeat
    }

    .slideBox .next {
        left: auto;
        right: 8%
    }

    .slideBox .prev:hover,
    .slideBox .next:hover {
        filter: alpha(opacity=100);
        opacity: 1
    }

    .slideBox .prevStop {
        display: none
    }

    .slideBox .nextStop {
        display: none
    }

    .slideBox.slideBox-small {
        height: auto
    }

    .index-banner-list>li {
        margin: 5px 0
    }

    .index-banner-list>li a {
        line-height: 25px;
        height: 25px;
        display: block;
        color: #000;
        border-radius: 20px;
        border: 1px solid #dd3434;
        font-size: 14px
    }

    .index-banner-list>li a.paya {
        color: red
    }

    .index-banner-list>li a.paya:hover {
        color: #fff
    }</style>
<div class="banner">
    <div id="slideBox" class="slideBox">
        <div class="hd">
            <ul>
                <li class=""></li>
                <li class="on"></li>
                <li class=""></li>
                <li class=""></li>
            </ul>
        </div>
        <div class="bd">
            <div class="tempWrap" style="overflow:hidden; position:relative; width:1903px">
                <ul style="width: 7612px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -1903px;">
                    <li style="float: left; width: 1903px;">
                        <a href="http://130161.com/Home/index/index.html" target="_blank">
                            <img src="/pc/images/59e382ecc9c40.png" style="max-height: 500px;">
                        </a>
                    </li>
                    <li style="float: left; width: 1903px;">
                        <a href="http://130161.com/Home/index/index.html" target="_blank">
                            <img src="/pc/images/5a4b9d0698886.jpg" style="max-height: 500px;">
                        </a>
                    </li>
                    <li style="float: left; width: 1903px;">
                        <a href="http://130161.com/Home/index/index.html" target="_blank">
                            <img src="/pc/images/59e37e02ceee3.png" style="max-height: 500px;">
                        </a>
                    </li>
                    <li style="float: left; width: 1903px;">
                        <a href="http://130161.com/Home/index/index.html" target="_blank">
                            <img src="/pc/images/59e3998ba137f.png" style="max-height: 500px;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <a class="prev" style="background-image:url(http://html.xdf33dd.360www.net/default/new/images/prev.png)" href="javascript://"></a>
        <a class="next" style="background-image:url(http://html.xdf33dd.360www.net/default/new/images/next.png)" href="javascript://"></a>
    </div>
    <div class="tm-float-box">
        <div class="tm-container">
            <div class="tm-box-sizing banner-right-box" style="margin-top:20px;">
                <ul class="index-banner-list" style="padding-top:10px;">
                    <!--							<form method="post" action="--><?//= url('web/login') ?><!--" id="loginform">-->
                    <?php $form = self::beginForm(['showLabel' => false,'id' => 'loginform']) ?>
                    <h1 style="padding:15px 0">星浩财富登录</h1>
                    <div class="login-input_box">
                        <div>
                            <i>
                                <img src="/pc/images/user.webp" alt="">
                            </i>
                            <input type="text" placeholder="手机号码" name="User[username]" autocomplete="off">
                        </div>
                        <div>
                            <i>
                                <img src="/pc/images/password.webp" alt="">
                            </i>
                            <input type="password" placeholder="登录密码" name="User[password]" autocomplete="off">
                        </div>
                    </div>
                    <p class="tm-clerfix" style="padding:8px 0">
                        <a class="tm-float-right" href="<?= url('web/forget') ?>" style="margin:5px 0">
                            忘记密码
                        </a>
                    </p>
                    <div class="login-btn_box">
                        <button class="login-btn ajaxpost_form loginSubmit ajaxpost_form" formid="loginform" type="button">
                            登录
                        </button>
                        <a href="<?= url('web/register') ?>" class="register-href">
                            注册
                        </a>
                    </div>
                    <?php self::endForm() ?>
                    <!--							</form>-->
                    <script type="text/javascript">
                        //function loginset(obj, datajson) {
                        //    layer.alert("登录成功", function() {
                        //        document.location = "<?//= url('web/loginsucc') ?>//";
                        //    })
                        //}

                        $(function () {
                            $(".loginSubmit").click(function () {
                                $("#loginForm").ajaxSubmit($.config('ajaxSubmit', {
                                    success: function (msg) {
                                        if (!msg.state) {
                                            return $.alert(msg.info);
                                        } else {
                                            window.location.href = msg.info;
                                        }
                                    }
                                }));
                                return false;
                            });
                        });

                    </script>
                </ul>
            </div>
        </div>
    </div>
</div>
<style type="text/css">.scroll-parent {
        position: relative
    }

    .text-scroll {
        position: absolute;
        margin-top: 25px
    }

    .text-scroll span {
        display: inline-block;
        vertical-align: middle
    }

    .text-scroll>span {
        margin-right: 10px
    }

    .text-scroll-box {
        overflow: hidden;
        width: 900px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        height: 25px
    }

    .text-scroll-con {
        white-space: nowrap;
        position: absolute;
        left: 0;
        top: 0
    }

    .text-scroll-con span~span {
        margin-left: 200px
    }

    .tm-font-red {
        color: red
    }

    .recommend-header {
        box-sizing: border-box;
        border: 1px solid #dd3434;
        overflow: hidden
    }

    .recommend-header>ul {
        font-size: 0;
        margin-left: -1px;
        margin-right: -1px;
        overflow: hidden
    }

    .recommend-header>ul>li {
        float: left;
        width: 10%;
        height: 35px;
        line-height: 35px;
        position: relative;
        border: 1px solid #ddd;
        box-sizing: border-box;
        border-top: 0
    }

    .recommend-header>ul>li+li {
        border-left: 0
    }

    .recommend-header>ul>li>a {
        text-align: center;
        display: block;
        font-size: 15px
    }</style>