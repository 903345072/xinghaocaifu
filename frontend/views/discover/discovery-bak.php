<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>发现</title>
    <link rel="stylesheet" href="/css/amazeui.min.css">
    <link rel="stylesheet" href="/css/commonstyle.css">
    <style>
        body{background-color: #f5f5f5}
    </style>
</head>
<body>

<div class="am-padding-sm bg-red">
    <p class="am-text-center col-white">发现</p>
</div>

<div>
    <div class="am-slider am-slider-default am-margin-0" data-am-flexslider id="my-slider">
        <ul class="am-slides">
            <li><img src="http://s.amazeui.org/media/i/demos/bing-1.jpg" /></li>
            <li><img src="http://s.amazeui.org/media/i/demos/bing-2.jpg" /></li>
        </ul>
    </div>
</div>

<div class="am-padding-top-xs">
    <div class="am-g am-padding-horizontal-sm bg-white">

        <a href="<?= url(['user/gener']) ?>">
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-vertical-xs br-1">
                <div class="am-g">
                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-horizontal-xs am-padding-top-xs">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAMAAAApB0NrAAABHVBMVEX/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/UlL/VFT/VVX/V1f/WFj/WVn/XFz/Xl7/X1//YWH/YmL/ZGT/ZWX/Zmb/amr/a2v/cnL/c3P/dHT/dnb/eHj/e3v/g4P/hIT/ior/jY3/j4//kJD/mZn/nZ3/oKD/pKT/paX/qqr/rq7/t7f/xcX/x8f/y8v/09P/1tb/19f/2tr/3d3/39//4OD/4eH/4uL/4+P/5OT/5eX/7u7/8PD/8vL/9fX/9vb/9/f/+fn//f3////dLoIBAAAAI3RSTlMAAQgJDQ4cLS9CREV7fISFhoi4ubzJzN7g4ePm6erw8vb8/iKfvpoAAAGUSURBVDjLjVRpe8FAEN44ghD30bpr46ZEL1TVVVotPRzVIv//Z3SDyISg74fNzvtM5tg5ENqC0pisTl80FvU5rSYNhfZB0TY/luG30XtaOksYKxFmdUojBg/eh8cATFHmIFZD0LxVopgwVkeYkZSMIXwIIeMmXC8+DK9+5cmCj4EVvdFSMFyRT26uSb7ISSHRxIxd+iPRXTY218aym5BoO4W0ga3ZwmhUWF3yX5+XWzagRQzwXV88iS64zqIGWAY5gJR6nt2Rz+13LwVYB3LDJG6mLymc6E2vIOlGZ1Dk2vMHfD9vc5A8R1FZyLUeW7P36+GMfHMyHUUxWeAH/f7rz8fvW78/4GU6Bu1wSTEnoRMnj8hBOyCebL1SqTSFJjnrWRgPyKs0Hg6HE2FCznEJ5gXeJ57PZDJVoUrOfBy+D7NT57JQ3mHMsF7qOqRect3XqAk1JUHqLvfPGmk+rWxpWuxD9nQfIv3pfv7XXBybLzCEp+f0X/MuDiJ7am+s9o9dsX/stOqW0phsLl/kIuJz2RR77A9uXpGTwt5e9AAAAABJRU5ErkJggg==" class="wid100">
                    </div>
                    <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 am-padding-0">
                        <p class="am-text-sm">推广赚钱</p>
                        <p class="am-text-xs text-999 am-ellipsis">动动手指分享即可赚钱</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="<?= url(['user/usermessage']) ?>">
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-vertical-xs">
                <div class="am-g">
                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-horizontal-xs am-padding-top-xs">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAMAAAApB0NrAAABzlBMVEX/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugD/ugH/ugL/uwL/uwP/uwT/vAb/vAf/vAn/vQn/vQr/vQv/vg3/vg7/vg//vhD/vxH/vxL/vxP/vxT/wBX/wBf/wBj/wRr/wRv/whz/wyD/wyH/wyL/xCX/xSn/xSr/xiz/xi3/xzD/xzH/yDX/yTb/yTf/zEL/zEP/zUT/zkr/zkv/z07/0FD/0FH/0VT/0VX/0Vf/0lj/0ln/0lr/013/1F//1WL/1WP/1WX/1mf/1mj/12z/2G7/2XH/2XL/2XP/2XT/23n/23r/3YD/3YL/3oP/3oT/3of/4Iv/4ZD/4pP/4pT/4pX/4pb/45b/45f/45j/5aD/5qH/5qL/56b/56f/56j/6Kn/6Kv/6Kz/6az/6rD/7bz/7b3/7r//7sD/78T/8Mb/8Mf/8cv/8s//8tH/89L/89P/89T/9NX/9Nb/9Nj/9dj/9dn/9dr/9dv/9t3/9t7/9+D/9+L/+ej//PJgkbWHAAAAI3RSTlMAAQgJDQ4cLS9CREV7fISFhoi4ubzJzN7g4ePm6erw8vb8/iKfvpoAAAH8SURBVDjLY2CAA0YmTj4hcQUlBXEhPk4mRgZMwMjGL6WMAFL8bBiqWHjklFGBHC8LqiHsosqYQJQdyShGbhllbECGG66IkUtOGTuQ44Ip4pBVxgVkOaDOFUOIaZpY2ViZaCIExFjBNvHA+KrWsfXd02dM766PtVaFCfKCbGODOUY/YUJ7mo+TnZNPWvuEBH2Yk9iAxghAORaVveG6ULZuWG+lBZQtwMjALA1hGtY02SM51r6pxhDCkmZm4IK6JbnbFsVHtj0pUDdxMQhCGJYTQ9C8HTLREsIQZBCBMIL69YCkYxwUAF2m1x8EkRJhkIAwsitAZGBDIwRUmSsrV2RDpCQZFCCM4jyMMM4vgtAKDEoQRkYdiPTIzAICf4hQbQaEVoKZ4zfVFEh6l5aXl5dFgkWMpvjBzIG6x6w7Hs2qmC4zmHug/lKJmuKKosR5UrQKzF/Q8FHWLujwRFLi1l6sowwLHy6YqEHOlFRrWNwlTs41hElww+NLWVkrsKUVGLR2XhElE9uCtWDCwPiCxzsQuE9x0Ajo7W4u9DVGCALjHZF+lFXS+0KrpyVZ6KkgJ2k2UDrkhXHV8mZ25rmoowYBOB0ysMLTs56VMZoKaHomKl/gy19ImZBwPiUqv4MyIi+hcgNc/giglD8CbFhLKSZOfmFxeUV5cWF+lHIMAM8isMVZQmCoAAAAAElFTkSuQmCC" class="wid100">
                    </div>
                    <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 am-padding-0">
                        <p class="am-text-sm">信息中心</p>
                        <p class="am-text-xs text-999 am-ellipsis">快来查看新消息</p>
                    </div>
                </div>
            </div>
        </a>

    </div>

    <div class="am-g am-padding-horizontal-sm bt-1 bg-white">

        <a href="<?= url(['user/usertask']) ?>">
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-vertical-xs br-1">
                <div class="am-g">
                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-horizontal-xs am-padding-top-xs">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAMAAAApB0NrAAABzlBMVEUuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcuwdcvwdcwwdcwwtcxwtgzw9g0w9g1w9g2w9g3xNk4xNk5xNk6xNk6xdk8xdo9xdo/xtpAxtpCx9tEyNtFyNtGyNxIydxJydxLyt1Myt1Nyt1Oyt1Qy91SzN5UzN5Wzd9Xzd9Yzd9azt9bzuBdz+Bez+Bfz+Bf0OBg0OFh0OFj0eFk0eFp0+Js0+Nu1ONv1ONx1eRz1eR21uV41+V51+V52OZ62OZ72OZ82OaB2eeI3OiJ3OiN3emQ3uqR3uqW4Oub4eyf4+2g4+2i5O2j4+2j4+6j5O2k5O6l5O6s5u+t5u+w5/Cw6PCy6PCz6fC06fC06fG56vG66/K+7PLB7PPB7fPF7vTH7vTH7/TJ7/XL8PXN8PbQ8fbS8vbY8/ja9Pjb9Pjc9fjd9fnh9vnj9/rk9/rl9/rm+Prn+Pro+Pro+Pvp+Pvq+fvr+fvt+vvt+vzu+vzv+vzx+/zz+/31/P36/f77/v5ybHESAAAAI3RSTlMAAQgJDQ4cLS9CREV7fISFhoi4ubzJzN7g4ePm6erw8vb8/iKfvpoAAAHgSURBVDjLY2CAA0YmTj4hcQUlBXEhPk4mRgZMwMjGL6WMAFL8bBiqWHjklFGBHC8LqiHsosqYQJQdyShGbhllbECGG66IkUtOGTuQ44Ip4pBVxgVkOaDOFUOIGZhbAIGpOlxAjBVsEw9CiXX9VBCYEI9QxAuyjQ3uGC374hpnByCI6Qw2UYE5iQ1ojABMiVnh5JmRYJZO0/SWUJhRAowMzNJQtm5ZbVR7gDEYVOUm9PlDxaWZGbhgxgR02WbMaG8Gg2kTrFOrdaASXAyCMDXpJcouQTAQqOveYwaVEGQQgakpyEQJGdtJllCWCIMEXE0aQoF6hI3NZJgaSQYFLGpUwnv9EGoUGJSwqPHpiFVHqFFCMUfNCMyya8zSUkY2B9k9jnV+wOA1riwzVFZGdo8Ikhr9lI4wde2cBitlZDUiiPABuUczrjshqc1NGUWNICKc87NBng7pnBQMjk67iTA13Ij4Si4Hyal4R0Ei07fDFB5f8Hj36vdACmbNolJNeLzD049Gdlu0owMUeOZ1OCHSDwMjL1SrXmLrlKlQ0F/hqoKUDhlYYelZ1QicmsEpWgslPROVL/DlL6RMSDifEpXfQRmRl1C5AS5/BFDKHwE2rKUUEye/sLi8ory4MD9KOQYA6S63enBPoXEAAAAASUVORK5CYII=" class="wid100">
                    </div>
                    <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 am-padding-0">
                        <p class="am-text-sm">任务中心</p>
                        <p class="am-text-xs text-999 am-ellipsis">完成任务丰富生活</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="<?= url(['discover/index']) ?>">
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-vertical-xs">
                <div class="am-g">
                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-horizontal-xs am-padding-top-xs">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAMAAAApB0NrAAABzlBMVEXvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmFLvmVPvmVTvmlXvmlbvm1fwm1fwnFjwnFnwnVrwnVvwnlzwnl3wn13wn17wn1/woGDwoWHxomLxo2Txo2XxpGbxpWfxpWjxpmnxpmrxp2rxp2vxqGzxqG3yqnHyrHPyrHTyrXXyrnbyrnfzr3jzsHrzsXzzsn7zs37zs3/zs4D0tYP0toT0toX0t4b0t4f0uIj0uYn0uYr0uov1u431vpL1v5P1wpj1wpn2wpn2xJz2xZ72xp/2yKL2yKP3yaT3yaX3yqX3y6f3y6j3zKr3zq34z6740bL40rP40rT41Lf41bj52L352sH528P63MT63sj638n64Mv64c364s774s/749D75NL75dP75tb759f76Nj86dr86tv86tz869387N/87eH87uL87uP87+T97+T97+X98OX98Ob98Of98ef98uj98un98+r98+v99Oz99O399e7+9e7+9u/+9/H++PP++fT++fX++/j++/n//fsAaMyWAAAAH3RSTlMAAQgJCg4hLUZHgYKIiby9zc7g4ePl6uvt7vH29/3+IjfgywAAAf9JREFUOMtjYEAAJg4ePiFpOWkhPh4OJgZsgI1HRFYeBmRFeNgwVLByS8ijAgluVlQl7ALymECAHUkFI4eYPDYgxsEIV8MpJY8dSHHCLRKTxwXEodaxIrtF38Xbw0IByU0Qh3PBBZQCy6ZP6Z00oy1OHy7GDQ4XuKfNSyZnuOhr2bUkNXb7w8ySBIUTL0yJbXuxJYg2bVXWSJoSDlPEy8DALAplGzTkqIMZCoVW8vIhU3yg4qLMDBywCMis1YK6qsAWSCZ36kKjhYOBB6rEaqo7mHbOqqlSA9KazVFQGR4GPigroUoJRKl0xNpDXBLdAJXhYxCGssqSIHR+GFTAZroJhCHMIA0V6g+A0PZ1GhCGzgRXCEOGQQ6qZpon0KJgP0WFCmeIgEaXF4QhBzenL0bPOK+8NdWx3gHDHLh7pnX3pKkaZldEK0L8mYJwD9xflVoqSHGr29AE8xc/Uvi4ISeKkPKmaHj4wMM5qwYczoreuS29DU3ddUjhjBZfipnVodZGZsaRU3xh8cWCEu9FFvJOtSDtGolTIpDinYFNEp5+Sienx5Rr61hFNqClHwZuRDoMKp8+s2/ijPZ4tHSIkZ7dsKRnBnZxgvmCqPzFwMiJI59yMhLK74Ls6OWGJJoKSfRyAxROvKJI5Y8oLxvWUoqFg4dfGFiOCfPzcLAgiQMATuymn9xc3VUAAAAASUVORK5CYII=" class="wid100">
                    </div>
                    <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 am-padding-0">
                        <p class="am-text-sm">最新资讯</p>
                        <p class="am-text-xs text-999 am-ellipsis">针对国内投资者开发的首款掌上期货交易软件</p>
                    </div>
                </div>
            </div>
        </a>

    </div>
</div>

<div class="am-padding-top-sm">
    <p class="am-padding-sm bg-white">公告</p>
</div>

<div>
    <div class="am-panel-group" id="accordion">
        <?php foreach ($article as $k): ?>
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd">
                    <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-<?= $k->id?>'}"><!--这里的id-->
                        <?= $k->title?>
                    </h4>
                </div>
                <div id="do-not-say-<?= $k->id?>" class="am-panel-collapse am-collapse"><!--这里的id-->
                    <div class="am-panel-bd">
                        <?= $k->content?>
                        <?= $k->publish_time?><span style="float: right" class="shouqi">收起</span>
                    </div>
                </div>
            </div>
        <?php endforeach ?>


<!--        <div class="am-panel am-panel-default">-->
<!--            <div class="am-panel-hd">-->
<!--                <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-2'}">-->
<!--                    标题2222-->
<!--                </h4>-->
<!--            </div>-->
<!--            <div id="do-not-say-2" class="am-panel-collapse am-collapse">-->
<!--                <div class="am-panel-bd">-->
<!--                    内容11111（自定义html）-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="am-panel am-panel-default">-->
<!--            <div class="am-panel-hd">-->
<!--                <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-3'}">-->
<!--                    标题3333-->
<!--                </h4>-->
<!--            </div>-->
<!--            <div id="do-not-say-3" class="am-panel-collapse am-collapse">-->
<!--                <div class="am-panel-bd">-->
<!--                    内容11111（自定义html）-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
<div style="height:30px;"></div>
<?= $this->render('../layouts/_footer') ?>
<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/js/amazeui.min.js"></script>
<script>
    !function () {
        $('#my-slider').flexslider({directionNav:false});
    }()
</script>
<script>
    $(function(){
        $('.am-collapse').eq(0).addClass('am-in');
        $('.shouqi').click(function(){
            $(this).parent().parent().removeClass('am-in');
        })
    })
</script>
</body>
</html>