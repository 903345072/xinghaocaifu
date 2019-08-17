

<!DOCTYPE html>	
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
        <title>login</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="stylesheet" href="/css/layer.css" id="layui_layer_skinlayercss" style="">
        <link href="/css/mui.min.css" rel="stylesheet">
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/layer.js"></script>
        
        <script type="text/javascript" src="/js/common.js"></script>
        <script src="/js/mui.min.js"></script>
    </head>
<body>
		<script data-pagespeed-no-defer="">//<![CDATA[
(function() {
	function d(b) {
		var a = window;
		if(a.addEventListener) a.addEventListener("load", b, !1);
		else if(a.attachEvent) a.attachEvent("onload", b);
		else {
			var c = a.onload;
			a.onload = function() {
				b.call(this);
				c && c.call(this)
			}
		}
	}
	var p = Date.now || function() {
		return +new Date
	};
	window.pagespeed = window.pagespeed || {};
	var q = window.pagespeed;

	function r() {
		this.a = !0
	}
	r.prototype.c = function(b) {
		b = parseInt(b.substring(0, b.indexOf(" ")), 10);
		return !isNaN(b) && b <= p()
	};
	r.prototype.hasExpired = r.prototype.c;
	r.prototype.b = function(b) {
		return b.substring(b.indexOf(" ", b.indexOf(" ") + 1) + 1)
	};
	r.prototype.getData = r.prototype.b;
	r.prototype.f = function(b) {
		var a = document.getElementsByTagName("script"),
			a = a[a.length - 1];
		a.parentNode.replaceChild(b, a)
	};
	r.prototype.replaceLastScript = r.prototype.f;
	r.prototype.g = function(b) {
		var a = window.localStorage.getItem("pagespeed_lsc_url:" + b),
			c = document.createElement(a ? "style" : "link");
		a && !this.c(a) ? (c.type = "text/css", c.appendChild(document.createTextNode(this.b(a)))) : (c.rel = "stylesheet", c.href = b, this.a = !0);
		this.f(c)
	};
	r.prototype.inlineCss = r.prototype.g;
	r.prototype.h = function(b, a) {
		var c = window.localStorage.getItem("pagespeed_lsc_url:" + b + " pagespeed_lsc_hash:" + a),
			f = document.createElement("img");
		c && !this.c(c) ? f.src = this.b(c) : (f.src = b, this.a = !0);
		for(var c = 2, k = arguments.length; c < k; ++c) {
			var g = arguments[c].indexOf("=");
			f.setAttribute(arguments[c].substring(0, g), arguments[c].substring(g + 1))
		}
		this.f(f)
	};
	r.prototype.inlineImg = r.prototype.h;

	function t(b, a, c, f) {
		a = document.getElementsByTagName(a);
		for(var k = 0, g = a.length; k < g; ++k) {
			var e = a[k],
				m = e.getAttribute("data-pagespeed-lsc-hash"),
				h = e.getAttribute("data-pagespeed-lsc-url");
			if(m && h) {
				h = "pagespeed_lsc_url:" + h;
				c && (h += " pagespeed_lsc_hash:" + m);
				var l = e.getAttribute("data-pagespeed-lsc-expiry"),
					l = l ? (new Date(l)).getTime() : "",
					e = f(e);
				if(!e) {
					var n = window.localStorage.getItem(h);
					n && (e = b.b(n))
				}
				e && (window.localStorage.setItem(h, l + " " + m + " " + e), b.a = !0)
			}
		}
	}

	function u(b) {
		t(b, "img", !0, function(a) {
			return a.src
		});
		t(b, "style", !1, function(a) {
			return a.firstChild ? a.firstChild.nodeValue : null
		})
	}
	q.i = function() {
		if(window.localStorage) {
			var b = new r;
			q.localStorageCache = b;
			d(function() {
				u(b)
			});
			d(function() {
				if(b.a) {
					for(var a = [], c = [], f = 0, k = p(), g = 0, e = window.localStorage.length; g < e; ++g) {
						var m = window.localStorage.key(g);
						if(!m.indexOf("pagespeed_lsc_url:")) {
							var h = window.localStorage.getItem(m),
								l = h.indexOf(" "),
								n = parseInt(h.substring(0, l), 10);
							if(!isNaN(n))
								if(n <= k) {
									a.push(m);
									continue
								} else if(n < f || !f) f = n;
							c.push(h.substring(l + 1, h.indexOf(" ", l + 1)))
						}
					}
					k = "";
					f && (k = "; expires=" + (new Date(f)).toUTCString());
					document.cookie =
						"_GPSLSC=" + c.join("!") + k;
					g = 0;
					for(e = a.length; g < e; ++g) window.localStorage.removeItem(a[g]);
					b.a = !1
				}
			})
		}
	};
	q.localStorageCacheInit = q.i;
})();
pagespeed.localStorageCacheInit();
//]]></script>

		<script type="text/javascript">//<![CDATA[
(function($) {
	$.cookie = function(key, value, options) {
		if(arguments.length > 1 && (!/Object/.test(Object.prototype.toString.call(value)) || value === null || value === undefined)) {
			options = $.extend({}, options);
			if(value === null || value === undefined) {
				options.expires = -1;
			}
			if(typeof options.expires === 'number') {
				var days = options.expires,
					t = options.expires = new Date();
				t.setDate(t.getDate() + days);
			}
			value = String(value);
			return(document.cookie = [encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value), options.expires ? '; expires=' + options.expires.toUTCString() : '', options.path ? '; path=' + options.path : '', options.domain ? '; domain=' + options.domain : '', options.secure ? '; secure' : ''].join(''));
		}
		options = value || {};
		var decode = options.raw ? function(s) {
			return s;
		} : decodeURIComponent;
		var pairs = document.cookie.split('; ');
		for(var i = 0, pair; pair = pairs[i] && pairs[i].split('='); i++) {
			if(decode(pair[0]) === key) return decode(pair[1] || '');
		}
		return null;
	};
})(jQuery);
//]]></script>

		<script type="text/javascript">ws_login = new WebSocket("ws://101.132.25.81:8282");
ws_login.onopen = function() {
	console.log("链接成功");
	ws_login.send('{"command":"login_check","groupname":"login_check_rongxin_29638"}');
};
ws_login.onmessage = function(e) {
	console.log(e.data);
	var data = eval("(" + e.data + ")");
	dataarr = data.data;
	if(dataarr.type == 'login_check') {
		$.post("/Home/index/public_check_islogin.html", {}, function(datajson) {
			if(!datajson.status) {
				layer.alert("您的账号再别处登录了，您将被强制下线！", function() {
					document.location = '/';
				});
			}
		})
	}
}</script>

	<body class="mui-ios mui-ios-11 mui-ios-11-0">
		<noscript>
		&lt;meta HTTP-EQUIV="refresh" content="0;url='http://192.168.0.10:6001/Member/index/message.html?PageSpeed=noscript'" /&gt;&lt;style&gt;&lt;!--table,div,span,font,p{display:none} --&gt;&lt;/style&gt;&lt;div style="display:block"&gt;Please click &lt;a href="http://192.168.0.10:6001/Member/index/message.html?PageSpeed=noscript"&gt;here&lt;/a&gt; if you are not redirected within a few seconds.&lt;/div&gt;
		</noscript>
		<header class="mui-bar mui-bar-nav" style="background-color: #0a0a0a">
			<a class="mui-icon mui-icon-left-nav mui-pull-left"  href="<?=url(['user/index'])?>"></a>
			<h1 class="mui-title">信息中心</h1>
		</header>
		<div class="mui-content" style="display:none">
			<div class="uk-margin-top"></div>
		</div>
		<div class="mui-content">
			<div class="mui-segmented-control tm-tab uk-margin-bottom">
				<a class="mui-control-item tm-tab-item mui-active" href="#tab-item-1">
					未读
				</a>
				<a class="mui-control-item tm-tab-item" href="#tab-item-2">
					已读
				</a>
			</div>
			<div class="uk-margin-top">
				<div class="mui-control-content mui-active" id="tab-item-1">
					<ul class="mui-table-view mui-in-zero">ddd</ul>
				</div>
				<div class="mui-control-content" id="tab-item-2">
					<ul class="mui-table-view mui-in-zero" id="readlist">ss</ul>
				</div>
			</div>
		</div>
</body>
		<script type="text/javascript" charset="utf-8">
		mui.init();
		mui(".mui-segmented-control").on("click",".mui-control-item",function(){
//				alert(1)
				$(this).addClass("mui-active").siblings().removeClass("mui-active");
            	$(".mui-control-content").eq($(this).index()).addClass("mui-active").siblings().removeClass("mui-active");
           });
			$(function() {
				
				$('.checknew').click(function() {
					$('#readlist').children('li:first').before($(this).parent().clone());
					$(this).parent().remove();
					document.location = $(this).attr("url");
				});
			})
			
</script>
</body>

</html>