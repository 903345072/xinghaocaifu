<!DOCTYPE html>
<!-- saved from url=(0044)http://130161.com/Member/index/register.html -->
<html class="uk-notouch">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>注册</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">

    <link rel="stylesheet" href="/pc/css/public.css">
    <script type="text/javascript" src="/pc/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/pc/js/main.js"></script>
    <script type="text/javascript" src="/pc/js/layer.js"></script>
    <script type="text/javascript" src="/pc/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/pc/js/uikit.min.js"></script>
    <script type="text/javascript" src="/pc/js/accordion.js"></script>
    <script type="text/javascript" src="/pc/js/common.js"></script>
    <script data-pagespeed-no-defer="">
        //<![CDATA[
        (function () {
            function d(b) {
                var a = window;
                if (a.addEventListener) a.addEventListener("load", b, !1);
                else if (a.attachEvent) a.attachEvent("onload", b);
                else {
                    var c = a.onload;
                    a.onload = function () {
                        b.call(this);
                        c && c.call(this)
                    }
                }
            }

            var p = Date.now || function () {
                return +new Date
            };
            window.pagespeed = window.pagespeed || {};
            var q = window.pagespeed;

            function r() {
                this.a = !0
            }

            r.prototype.c = function (b) {
                b = parseInt(b.substring(0, b.indexOf(" ")), 10);
                return !isNaN(b) && b <= p()
            };
            r.prototype.hasExpired = r.prototype.c;
            r.prototype.b = function (b) {
                return b.substring(b.indexOf(" ", b.indexOf(" ") + 1) + 1)
            };
            r.prototype.getData = r.prototype.b;
            r.prototype.f = function (b) {
                var a = document.getElementsByTagName("script"),
                    a = a[a.length - 1];
                a.parentNode.replaceChild(b, a)
            };
            r.prototype.replaceLastScript = r.prototype.f;
            r.prototype.g = function (b) {
                var a = window.localStorage.getItem("pagespeed_lsc_url:" + b),
                    c = document.createElement(a ? "style" : "link");
                a && !this.c(a) ? (c.type = "text/css", c.appendChild(document.createTextNode(this.b(a)))) : (c.rel = "stylesheet", c.href = b, this.a = !0);
                this.f(c)
            };
            r.prototype.inlineCss = r.prototype.g;
            r.prototype.h = function (b, a) {
                var c = window.localStorage.getItem("pagespeed_lsc_url:" + b + " pagespeed_lsc_hash:" + a),
                    f = document.createElement("img");
                c && !this.c(c) ? f.src = this.b(c) : (f.src = b, this.a = !0);
                for (var c = 2, k = arguments.length; c < k; ++c) {
                    var g = arguments[c].indexOf("=");
                    f.setAttribute(arguments[c].substring(0, g), arguments[c].substring(g + 1))
                }
                this.f(f)
            };
            r.prototype.inlineImg = r.prototype.h;

            function t(b, a, c, f) {
                a = document.getElementsByTagName(a);
                for (var k = 0, g = a.length; k < g; ++k) {
                    var e = a[k],
                        m = e.getAttribute("data-pagespeed-lsc-hash"),
                        h = e.getAttribute("data-pagespeed-lsc-url");
                    if (m && h) {
                        h = "pagespeed_lsc_url:" + h;
                        c && (h += " pagespeed_lsc_hash:" + m);
                        var l = e.getAttribute("data-pagespeed-lsc-expiry"),
                            l = l ? (new Date(l)).getTime() : "",
                            e = f(e);
                        if (!e) {
                            var n = window.localStorage.getItem(h);
                            n && (e = b.b(n))
                        }
                        e && (window.localStorage.setItem(h, l + " " + m + " " + e), b.a = !0)
                    }
                }
            }

            function u(b) {
                t(b, "img", !0, function (a) {
                    return a.src
                });
                t(b, "style", !1, function (a) {
                    return a.firstChild ? a.firstChild.nodeValue : null
                })
            }

            q.i = function () {
                if (window.localStorage) {
                    var b = new r;
                    q.localStorageCache = b;
                    d(function () {
                        u(b)
                    });
                    d(function () {
                        if (b.a) {
                            for (var a = [], c = [], f = 0, k = p(), g = 0, e = window.localStorage.length; g < e; ++g) {
                                var m = window.localStorage.key(g);
                                if (!m.indexOf("pagespeed_lsc_url:")) {
                                    var h = window.localStorage.getItem(m),
                                        l = h.indexOf(" "),
                                        n = parseInt(h.substring(0, l), 10);
                                    if (!isNaN(n))
                                        if (n <= k) {
                                            a.push(m);
                                            continue
                                        } else if (n < f || !f) f = n;
                                    c.push(h.substring(l + 1, h.indexOf(" ", l + 1)))
                                }
                            }
                            k = "";
                            f && (k = "; expires=" + (new Date(f)).toUTCString());
                            document.cookie =
                                "_GPSLSC=" + c.join("!") + k;
                            g = 0;
                            for (e = a.length; g < e; ++g) window.localStorage.removeItem(a[g]);
                            b.a = !1
                        }
                    })
                }
            };
            q.localStorageCacheInit = q.i;
        })();
        pagespeed.localStorageCacheInit();
        //]]>
    </script>

    <style type="text/css">
        .nav-list > li {
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
        }
    </style>
    <link rel="stylesheet" href="css/layer.css" id="layui_layer_skinlayercss" style="">

    <noscript>&lt;meta HTTP-EQUIV="refresh"
        content="0;url='http://192.168.0.10:6001/Member/index/register.html?PageSpeed=noscript'" /&gt;&lt;style&gt;&lt;!--table,div,span,font,p{display:none}
        --&gt;&lt;/style&gt;&lt;div style="display:block"&gt;Please click &lt;a
        href="http://192.168.0.10:6001/Member/index/register.html?PageSpeed=noscript"&gt;here&lt;/a&gt; if you are not
        redirected within a few seconds.&lt;/div&gt;
    </noscript>

    <script type="text/javascript">
        //<![CDATA[
        (function ($) {
            $.fn.countdown = function (options) {
                var defaults = {
                    attrName: 'data-diff',
                    tmpl: '<span class="hour">%{h}</span>小时<span class="minute">%{m}</span>分钟<span class="second">%{s}</span>秒',
                    end: '已结束',
                    afterEnd: null
                };
                options = $.extend(defaults, options);

                function trimZero(str) {
                    return parseInt(str.replace(/^0/g, ''));
                }

                function getDiffTime(str) {
                    var m;
                    if ((m = /^(\d{4})[^\d]+(\d{1,2})[^\d]+(\d{1,2})\s+(\d{2})[^\d]+(\d{1,2})[^\d]+(\d{1,2})$/.exec(str))) {
                        var year = trimZero(m[1]),
                            month = trimZero(m[2]) - 1,
                            day = trimZero(m[3]),
                            hour = trimZero(m[4]),
                            minute = trimZero(m[5]),
                            second = trimZero(m[6]);
                        return Math.floor((new Date(year, month, day, hour, minute, second).getTime() - new Date().getTime()) / 1000);
                    }
                    return parseInt(str);
                }

                function format(diff) {
                    var tmpl = options.tmpl,
                        day, hour, minute, second;
                    day = /%\{d\}/.test(tmpl) ? Math.floor(diff / 86400) : 0;
                    hour = Math.floor((diff - day * 86400) / 3600);
                    minute = Math.floor((diff - day * 86400 - hour * 3600) / 60);
                    second = diff - day * 86400 - hour * 3600 - minute * 60;
                    tmpl = tmpl.replace(/%\{d\}/ig, day).replace(/%\{h\}/ig, hour).replace(/%\{m\}/ig, minute).replace(/%\{s\}/ig, second);
                    return tmpl;
                }

                return this.each(function () {
                    var el = this,
                        diff = getDiffTime($(el).attr(options.attrName));

                    function update() {
                        if (diff <= 0) {
                            $(el).html(options.end);
                            if (options.afterEnd) {
                                options.afterEnd();
                            }
                            return;
                        }
                        $(el).html(format(diff));
                        setTimeout(function () {
                            diff--;
                            update();
                        }, 1000);
                    }

                    update();
                });
            };
        })(jQuery);
        //]]>
    </script>
    <div class="banner tm-banner-bg" style="background: url(/pc/images/59cb6103dc147.gif);height:490px;">
        <div class="tm-container">
            <div class="tm-box-sizing banner-right-box">
<!--                <form action="--><?//= url(["web/register"]) ?><!--" id="regform">-->
                <?php $form = self::beginForm(['showLabel' => false,'id' => 'regform']) ?>
                    <h1 class="register-title">星浩财富注册</h1>
                    <div class="register-input_box" style="padding:0 5px;">
                        <div>
                            <i><img src="data:image/webp;base64,UklGRtoAAABXRUJQVlA4TM4AAAAvFUAFEB9CkG1TqPu7PZOY7qFR0LaRm/vk1g8IXwesDYAIABAACSAS4gAMhEgUwCAzAMSDaBQGH2AjIRIgAAAQIJFIiCmA8G0wREA4jG3bdM5HbNu27aT/qnLfuUEDEf2fAPyj1Tjtj8u0atTyAbFDRVGc4D3w8nLdrIBOjutnpHaBq7UE9xHknG3dAvyzJpS+zrU3u1Sh98Sj0GeHp93uPM5xgcUoCQCJwTJEhO8lGAu3iGlVBplfG/JT0IOyNE1zqbn0tDk8pTWUG+nvAQ=="
                                    alt=""
                                    data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/default/new/images/admin-icon.png"
                                    data-pagespeed-lsc-hash="5cSpB2HO5I"
                                    data-pagespeed-lsc-expiry="Mon, 09 Apr 2018 09:01:44 GMT"
                                ></i>
                         <input type="text" name="User[mobile]" placeholder="手机号码" autocomplete="off" id = "user-mobile">
                        </div>
                        <div>
                            <i><img src="data:image/webp;base64,UklGRr4AAABXRUJQVlA4TLEAAAAvFUAFEJcxNNM9NArbtm1zld2920A4SEhIEDIMQTAKQIYBhIgFUDEAJhKMj40CYwEA0NBgAAEIAAgZAICKjmtw2EaSIs3BMx08HzNj/tktSpfAbET/JwC2eA6avIwfIm5nA+I1+/Adhh2Qem5x/V9It2Ku9MjQaq7CZGDB4XiL7zEXz2XM9xsvzowB+ZXAO1Ey9q3qlARjvEyGBPz1X5DxXFEKnkBgojEnRlgVvGXE2DwA"
                                    alt=""
                                    data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/default/new/images/pass-icon.png"
                                    data-pagespeed-lsc-hash="KDPtl3Xoml"
                                    data-pagespeed-lsc-expiry="Mon, 09 Apr 2018 09:01:44 GMT"></i>
                            <input type="password" name="User[password]" placeholder="设置登录密码" autocomplete="off">
                        </div>
                        <div>
                            <i><img src="data:image/webp;base64,UklGRr4AAABXRUJQVlA4TLEAAAAvFUAFEJcxNNM9NArbtm1zld2920A4SEhIEDIMQTAKQIYBhIgFUDEAJhKMj40CYwEA0NBgAAEIAAgZAICKjmtw2EaSIs3BMx08HzNj/tktSpfAbET/JwC2eA6avIwfIm5nA+I1+/Adhh2Qem5x/V9It2Ku9MjQaq7CZGDB4XiL7zEXz2XM9xsvzowB+ZXAO1Ey9q3qlARjvEyGBPz1X5DxXFEKnkBgojEnRlgVvGXE2DwA"
                                    alt=""
                                    data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/default/new/images/pass-icon.png"
                                    data-pagespeed-lsc-hash="KDPtl3Xoml"
                                    data-pagespeed-lsc-expiry="Mon, 09 Apr 2018 09:01:44 GMT"></i>
                            <input type="password" name="User[cfmPassword]" placeholder="确认登录密码" autocomplete="off">
                        </div>
                        <div>
                            <i><img src="data:image/webp;base64,UklGRr4AAABXRUJQVlA4TLEAAAAvFUAFEJcxNNM9NArbtm1zld2920A4SEhIEDIMQTAKQIYBhIgFUDEAJhKMj40CYwEA0NBgAAEIAAgZAICKjmtw2EaSIs3BMx08HzNj/tktSpfAbET/JwC2eA6avIwfIm5nA+I1+/Adhh2Qem5x/V9It2Ku9MjQaq7CZGDB4XiL7zEXz2XM9xsvzowB+ZXAO1Ey9q3qlARjvEyGBPz1X5DxXFEKnkBgojEnRlgVvGXE2DwA"
                                    alt=""
                                    data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/default/new/images/pass-icon.png"
                                    data-pagespeed-lsc-hash="KDPtl3Xoml"
                                    data-pagespeed-lsc-expiry="Mon, 09 Apr 2018 09:01:44 GMT"></i>
                            <input type="text" name="User[nickname]" placeholder="请输入姓名" autocomplete="off">
                        </div>
                        <div>
                            <p style="color:red;padding:5px 0;font-size: 12px">*请填写真实银行卡名字，以免导致无法出金。</p>
                        </div>
                        <div>
                            <i><img src="data:image/webp;base64,UklGRr4AAABXRUJQVlA4TLEAAAAvFUAFEJcxNNM9NArbtm1zld2920A4SEhIEDIMQTAKQIYBhIgFUDEAJhKMj40CYwEA0NBgAAEIAAgZAICKjmtw2EaSIs3BMx08HzNj/tktSpfAbET/JwC2eA6avIwfIm5nA+I1+/Adhh2Qem5x/V9It2Ku9MjQaq7CZGDB4XiL7zEXz2XM9xsvzowB+ZXAO1Ey9q3qlARjvEyGBPz1X5DxXFEKnkBgojEnRlgVvGXE2DwA"
                                    alt=""
                                    data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/default/new/images/pass-icon.png"
                                    data-pagespeed-lsc-hash="KDPtl3Xoml"
                                    data-pagespeed-lsc-expiry="Mon, 09 Apr 2018 09:01:44 GMT"></i>
                            <input type="text" placeholder="推荐码(可不填写)" name="User[pid]" value="" autocomplete="off">
                        </div>
                        <div class="yz-box">
                            <i><img src="data:image/webp;base64,UklGRr4AAABXRUJQVlA4TLEAAAAvFUAFEJcxNNM9NArbtm1zld2920A4SEhIEDIMQTAKQIYBhIgFUDEAJhKMj40CYwEA0NBgAAEIAAgZAICKjmtw2EaSIs3BMx08HzNj/tktSpfAbET/JwC2eA6avIwfIm5nA+I1+/Adhh2Qem5x/V9It2Ku9MjQaq7CZGDB4XiL7zEXz2XM9xsvzowB+ZXAO1Ey9q3qlARjvEyGBPz1X5DxXFEKnkBgojEnRlgVvGXE2DwA"
                                    alt=""
                                    data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/default/new/images/pass-icon.png"
                                    data-pagespeed-lsc-hash="KDPtl3Xoml"
                                    data-pagespeed-lsc-expiry="Mon, 09 Apr 2018 09:01:44 GMT"></i>
                            <input type="text" placeholder="验证码" name="User[verifyCode]" autocomplete="off">
                            <div class="mui-table-cell uk-text-middle uk-width-em-8 mui-text-right" style="float: right">
                                <input type="button" class="code fr" value="获取验证码" style="float: left;margin-right:22px"  id="verifyCodeBtn" data-action="<?= url(['pc/verifyCode']) ?>">
                            </div>

<!--                            <img id="code_img" style="vertical-align:middle;"-->
<!--                                 onclick="document.getElementById(&#39;code_img&#39;).src=&#39;/Api/index/checkcode/width/90/height/32/fontsize/12.html?time=&#39;+Math.random();void(0);"-->
<!--                                 src="./register_files/12.html"-->
<!--                                 data-pagespeed-lsc-url="http://192.168.0.10:6001/Api/index/checkcode/width/90/height/32/fontsize/12.html">-->
                        </div>
                    </div>
                    <div class="config-input">
                        <input type="checkbox" checked=""><span>已阅读并同意<a class="" href="Javascript:"
                                                                         onclick="showxieyi();">《星浩财富使用协议》</a></span>
                    </div>
                    <div class="login-btn_box">
                        <button type="button" class="login-btn ajaxpost_form registerSubmit"
                                ajax-error-callback="refresh_code"
                                formid="regform" ajax-callback="regset">注册
                        </button>
                        <a href="http://130161.com/Member/index/login.html" class="register-href">登录</a>
                    </div>
                    <a href="http://130161.com/Member/index/login.html" class="goto-login">已有账号，马上登陆</a>
<!--                </form>-->
                <?php self::endForm() ?>
            </div>
        </div>
    </div>
    <div id="xieyicontent" style="display: none">
        <p>《星浩财富用户服务协议》</p>
        <p>
            星浩财富用户服务协议（以下简称“本协议”）是平台运营方：香港星浩财富投资理财有限公司（以下简称“本公司”）与星浩财富用户（以下简称“用户”）就所提供服务的相关事项订立的有效合约。本协议由协议正文以及本公司通过星浩财富平台已经发布的或将来可能发布的各类规则和文件的各项规定组成，如星浩财富发布的规则和文件与协议正文有冲突，以公布生效日期或签署日期在后的规则或文件为准执行。用户通过网络页面点击确认接受本协议，即表示用户与本公司已达成合意并同意接受本协议项下的全部约定内容。</p>
        <p>在接受本协议之前，用户务必仔细阅读本协议的全部内容。如果用户不同意本协议的任意内容，或者无法准确理解该条款的含义，请不要进行后续操作。</p>
        <p>一、定义</p>
        <p>本协议中，除非上下文另有解释，下列词语具有如下含义：</p>
        <p>
            1、星浩财富：由香港星浩财富投资理财有限公司运营，面向星浩财富注册用户提供包括但不限于上期所、郑商所、大商所、借贷双方信息撮合（账户额出借方和资金需求方）交易指令通讯、交易风控管理、借贷双方盈亏结算、交易清结算、资金安全托管（由支付机构提供）等服务的线上中介服务平台。</p>
        <p>2、支付机构：指星浩财富委托的为星浩财富用户提供资金划转、查询、结算等支付服务的非金融支付机构。本协议项下提供上述服务的机构为宝付支付有限公司（以下简称“宝付”）。</p>
        <p>3、星浩财富账户：指面向期货金融互联网交易平台用户提供第三方交易资金结算服务的专项账户或用户资金的托管期货账户。</p>
        <p>4、用户：指通过星浩财富投资平台注册并完成实名认证、银行卡绑定开户的用户，作为投资人（账户出借人）的交易合作方，负责向投资人提供交易策略的自然人。</p>
        <p>5、投资人：指通过星浩财富注册成为投资人的用户，作为用户（资金需求方）的交易合作方，负责按用户交易策略并利用自有资金和账户进行交易的自然人或法人。</p>
        <p>二、星浩财富服务</p>
        <p>星浩财富为用户提供以下服务：</p>
        <p>1、交易合作撮合服务</p>
        <p>星浩财富作为用户和投资人的中间方，对用户的交易策略和投资人的交易需求进行匹配，撮合双方建立一对一的交易合作关系。</p>
        <p>2、交易指令通讯服务</p>
        <p>
            星浩财富为用户和投资人交易合作过程中提供向对方发送／接收交易指令通讯服务，交易指令包括：买入指令和卖出指令。星浩财富交易指令通讯速度从用户发出交易指令被星浩财富确认时点至投资人接收到交易指令时点，两时点时间间隔原则不超过30秒。</p>
        <p>3、交易风控管理服务</p>
        <p>为最大程度确保用户与投资人交易合作正常进行，保障双方利益，星浩财富将根据用户交易策略和历史业绩，调整用户参与交易合作的额度。</p>
        <p>4、交易清结算服务</p>
        <p>星浩财富根据用户和投资人签署的《交易合作协议》相关约定，为双方提供交易清结算服务。</p>
        <p>5、资金托管服务</p>
        <p>
            用户与投资人交易合作过程发生的交易综合费、履约保证金、盈利分配和亏损赔付所涉及的资金存取、冻结、解冻和支付都将由星浩财富处理。双方应保证星浩财富账户状态正常，并确保账户中有足额的资金以便正常划转。因一方账户状态异常导致交易无法实现的，所有损失由本方自行承担。</p>
        <p>6、用户交易合作协议生成与保管</p>
        <p>星浩财富为用户和投资人生成交易合作协议供双方查询、存档。星浩财富会对用户和投资人在星浩财富发生的交易信息及生成的协议保存三年。</p>
        <p>7、服务费及收费标准</p>
        <p>星浩财富向用户和投资人收取一定的费用，具体收费事项及资费标准由星浩财富另行与用户约定或者通过星浩财富进行展示。</p>
        <p>三、声明与承诺</p>
        <p>1、用户除需要遵守本协议约定外，还应遵守履行本协议有关的附件。</p>
        <p>2、用户保证除协议另有约定外，对于其交易合作达成后不得变更、撤销或撤回。</p>
        <p>3、用户保证不会利用星浩财富进行非法期货交易、资金非法转移、套现及洗钱等违法犯罪活动；</p>
        <p>
            4、用户保证其所参与交易合作的资金来源合法，是该资金的合法所有人，完全有权使用该资金进行交易；如第三人对资金归属、合法性问题发生争议，由用户负责解决，与星浩财富无关，并保证及时赔偿交易合作方因此所遭受的一切损失。</p>
        <p>5、用户变更账户信息、通讯地址、电话等相关重要信息，须及时书面或其他星浩财富同意的方式通知星浩财富；因用户未及时通知而导致其自身在本协议项下各项权益受到损失的，由用户自行承担全部责任。</p>
        <p>6、用户同意星浩财富有权限制用户参与交易合作的品种和额度。</p>
        <p>7、用户知晓且同意星浩财富享有用户合作交易信息的所有权和使用权。</p>
        <p>
            8、用户知晓且同意星浩财富仅向用户提供交易信息与服务，星浩财富既不是用户与投资人之间交易合作关系的当事人，也不是该合作关系中用户与投资人的保证人或连带责任人；星浩财富根据本协议约定向用户和投资人提供的所有服务仅供用户和投资人决定是否进行交易合作时予以参考，无论用户和投资人形成的交易合作关系是否存在第三方担保，在任何情况下均不应视为星浩财富及其关联方对用户的交易策略能力及相关交易协议的履行做出了任何明示或默示的担保，亦不应视为星浩财富及其关联方对投资人的本金和收益做出了明示或默示的担保或保证。用户和投资人应自行判断相关信息的真实性、准确性、及时性，自主决定是否进行交易合作，并承担由此而导致的一切损失或责任。</p>
        <p>9、用户在交易合作过程产生的相关税费，由用户自行向其主管税务机关申报、缴纳，星浩财富不负责相关事宜处理。</p>
        <p>四、风险提示</p>
        <p>用户知晓并同意，通过星浩财富进行交易合作可能面临如下风险，且除以下揭示的风险外还有其他的外部风险，均需要用户自行承担，星浩财富不承担任何责任：</p>
        <p>1、政策监管风险：因宏观政策、监管导向、行业政策、地区发展政策等因素引起的无法实现交易合作的风险。</p>
        <p>2、违约风险：因交易合作方没有按时履约引起损失的风险。</p>
        <p>
            3、因不可抗力因素导致的风险，不可抗力因素包括但不限于以下情形：星浩财富系统停机维护；星浩财富所依赖的通讯设备出现故障不能进行数据传输；因台风、地震、海啸、洪水、停电、战争、恐怖袭击等不可抗力之因素，造成星浩财富系统障碍不能执行业务的；由于黑客攻击、电信部门技术调整或故障、网站升级、其他第三方的问题等原因而造成的服务中断或者延迟。</p>
        <p>五、通知</p>
        <p>
            除本协议另有约定外，本协议履行过程中的通知应以中文书面形式写成。星浩财富向用户发出的书面通知方式包括但不限于邮寄纸质通知、网站公告、电子邮件、站内信、手机短信和传真等方式。如以邮寄方式发出书面通知的，则在星浩财富按照用户在注册星浩财富时留存的通讯地址交邮后的第三个自然日即视为送达。如以网站公告、电子邮件、手机短信和传真等电子方式发出书面通知的，则在通知发送成功即视为送达。</p>
        <p>六、协议的变更、解除</p>
        <p>
            星浩财富有权随时单方面修改本协议中与用户之间相关的权利义务，并根据本协议约定的方式通知用户，若用户不同意修改本协议，则应当立即停止使用星浩财富服务；否则，视为同意并接受修改后的协议。修订的协议一经通知，立即生效。</p>
        <p>七、协议终止</p>
        <p>若出现任何一种以下情况，星浩财富有权单方面解除本协议且不视为星浩财富违约：</p>
        <p>1、用户自行注销星浩财富账户；</p>
        <p>2、用户冒用他人名义、盗用他人账户使用星浩财富服务的；</p>
        <p>3、用户为非法目的使用星浩财富服务的；</p>
        <p>4、用户从事任何可能侵害星浩财富系统、资料的行为；</p>
        <p>5、用户从事任何损害星浩财富名誉的行为；</p>
        <p>6、用户违反任何法律法规、本协议约定的；</p>
        <p>7、用户故意利用星浩财富系统漏洞进行非正常交易合作的；</p>
        <p>8、监管机构认为星浩财富提供的服务不再符合相关监管规定的；</p>
        <p>因上述第1—7款原因导致本协议终止的，所导致的全部责任由用户自行承担。</p>
        <p>八、争议的解决</p>
        <p>本协议的订立、效力、解释、履行及争议的解决均适用中华人民共和国法律。在协议履行期间，凡由本协议引起的或与本协议有关的一切争议、纠纷，当事人应首先协商解决。</p>
        <p>九、其他</p>
        <p>1、本协议标题仅为查阅方便而设置，不应构成对本协议的任何解释，不对标题之下的内容及范围作任何限定。</p>
        <p>2、本协议的附件及各项补充、修订或变更，为本协议不可分割的组成部分，与本协议正文具有同等法律效力。</p>
        <p>3、用户通过网络页面点击确认后本协议即生效。</p>
        <p>4、用户在审阅完毕本协议文本时，已阅读并自愿做出以下承诺：“本用户已经阅读本协议所有条款，充分了解并清楚知晓相应的权利义务，并愿意承担相关风险。”</p>
        <p><br></p>
    </div>
    <script type="text/javascript">
        function regset(obj, datajson) {
            document.location = "/Member/index/index.html";
        }

        function refresh_code(obj, datajson) {
            if (datajson.msg) {
                layer.alert(datajson.msg, {
                    title: '错误提示'
                });
            }
            $('#code_img').attr("src", "/Api/index/checkcode/width/90/height/22/fontsize/12.html?time=" + Math.random());
        }

        function showxieyi() {
            layer.open({
                type: 1,
                title: '《星浩财富期货使用协议》',
                shadeClose: true,
                shade: 0.8,
                area: ["80%", '90%'],
                offset: '20px',
                btn: ['我已阅读并同意《风险告知书》'],
                yes: function (index) {
                    layer.close(index);
                },
                content: "<div style='padding:10px;line-height: 25px;font-size: 14px;'>" + $('#xieyicontent').html() + "</div>",
            });
        }

        // 验证码
        $("#verifyCodeBtn").click(function () {
            var mobile = $('#user-mobile').val();
            var url = $(this).data('action');
            // alert(url);return;
            if (mobile.length != 11) {
                layer.msg('您输入的不是一个手机号！');
                return false;
            }
            $.post(url, {mobile: mobile}, function(msg) {
                layer.msg(msg.info);
            }, 'json');
        });

        $(function () {
            $(".registerSubmit").click(function () {
                $("#registerForm").ajaxSubmit($.config('ajaxSubmit', {
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
    <script type="text/javascript">
        $(function () {
            jQuery(".slideBox").slide({
                mainCell: ".bd ul",
                effect: "left",
                duration: 10,
                autoPlay: true
            });
        })
    </script>
