<!DOCTYPE html>
<!-- saved from url=(0044)http://130161.com/Member/index/tuiguang.html -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<title></title>
		<meta name="description" content="">
		<meta name="keywords" content="">
			<link href="/css/mui.min.css" rel="stylesheet">
		<script type="text/javascript" src="/js/jquery.min.js"></script>
			
			<script type="text/javascript" src="/js/layer.js"></script>
		<link rel="stylesheet" href="/css/layer.css" id="layui_layer_skinlayercss" style="">

		<script src="/js/mui.min.js"></script>
		<script type="text/javascript" src="/js/common.js"></script>
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
	</head>
	<body class="mui-ios mui-ios-11 mui-ios-11-0">
		<noscript>
		&lt;meta HTTP-EQUIV="refresh" content="0;url='http://192.168.0.10:6001/Member/index/tuiguang.html?PageSpeed=noscript'" /&gt;&lt;style&gt;&lt;!--table,div,span,font,p{display:none} --&gt;&lt;/style&gt;&lt;div style="display:block"&gt;Please click &lt;a href="http://192.168.0.10:6001/Member/index/tuiguang.html?PageSpeed=noscript"&gt;here&lt;/a&gt; if you are not redirected within a few seconds.&lt;/div&gt;
		</noscript>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">推广赚钱</h1>
			<a class="mui-btn mui-btn-link mui-pull-right" href="http://130161.com/Content/index/page/catid/20.html">
				规则
			</a>
		</header>
		<div class="mui-content">
			<div class="uk-margin-top uk-margin">
				<div class="mui-table-view">
					<div class="mui-table mui-text-center">
						<div class="mui-table-cell mui-col-xs-4 uk-text-middle">
							<div class="mui-table-view-cell">
								<div class="uk-text-theme">
									0.00
								</div>
								<div class="uk-margin-mini-top">
									<span class="uk-text-top">佣金</span>
									<a class="mui-btn mui-btn-theme mui-btn-outlined mui-btn-small" href="http://130161.com/Member/index/tixian/type/1.html">
										提现
									</a>
								</div>
							</div>
						</div>
						<div class="mui-table-cell mui-col-xs-4 uk-text-middle">
							<div class="mui-table-view-cell">
								<div class="uk-text-theme">
									5%
								</div>
								<div class="uk-margin-mini-top">
									佣金比例
								</div>
							</div>
						</div>
						<div class="mui-table-cell mui-col-xs-4 uk-text-middle">
							<div class="mui-table-view-cell">
								<div class="uk-text-theme">
									0
								</div>
								<div class="uk-margin-mini-top">
									我的邀请
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="uk-margin">
				<ul class="mui-table-view mui-table-view-chevron mui-in-zero">
					<li class="mui-table-view-cell  mui-media">
						<div class="mui-table">
							<div class="mui-table-cell uk-text-middle">
								<div class="mui-ellipsis">
									我的邀请码：<span id="fuzhi">60251</span>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="uk-margin">
				<ul class="mui-table-view mui-table-view-chevron mui-in-zero">
					<li class="mui-table-view-cell mui-media">
						<a href="">
							<div class="mui-table">
								<div class="mui-table-cell uk-text-middle uk-width-em-2">
									<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAABiVBMVEXdNDTumpr////dNDTumprdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTumprdNDTdNDTumprdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTumprdNDTdNDTdNDTumprumprdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDTdNDS9moRiAAAAgnRSTlMAAAABAQIDBAcKCwwNDg8QERUWGRwmJywvMTM4OTs9QkRERUdISktOUFZXWFlaX2FiaGpucnR1dnd4eHl6e3x9fn+AgYOGkpWWmp2epKWoqqyur7GytLW3ubq7vL6/wcLEx8jJzM7P0NHU2Nna3t/g4+Tm5+jq7/Dz9fb3+Pn6+/z+70WqrgAAASRJREFUGNNtkdk3glEcRc/nZkxCJMqYmUxl+kKFSDLPmZqUpCRDqavc31/ugbWU1X7cD/vhHFSUAQCY3nmVzIlM7HC5HQAkAH1hopTX4971vRNFRhgkwC7eHFoAAJjOkaTjeglj5FHjj5rZnFeB8AlDCUbRDz6Jf8St+DyrLHUDwgpOB5oipVrLkwwepIyrpxYA0Di4laaXhAw+ZPQRfSX8vlCKiBJLqoAM7q9Dq3knGH9+vN026ximSAanaFdRs22PhIwPyz3dLRrUANN0rwRF1n4zh4CrynSZJ+LpAlEhMN+szfZilNaroeycsCyYx/VKsOHXawWwKh6mm36LLTMhOm+QABgjJKL7mxvu0yeiqIlBAgBmcF4kOWViR7aOn5HL3fENAtVGsGa1qUIAAAAASUVORK5CYII=" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/images/nie-icon-coins.png" data-pagespeed-lsc-hash="HFWmLe1fN4" data-pagespeed-lsc-expiry="Thu, 19 Apr 2018 06:40:29 GMT">
								</div>
								<div class="mui-table-cell uk-text-middle">
									<div class="mui-ellipsis uk-text-theme">
										如何赚钱
									</div>
								</div>
							</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media">
						<div class="mui-table">
							<div class="mui-table-cell uk-text-middle uk-width-em-2">
								<div class="mui-badge mui-badge-danger">
									1
								</div>
							</div>
							<div class="mui-table-cell uk-text-middle">
								<div class="mui-ellipsis ">
									发送推广链接给朋友
								</div>
							</div>
						</div>
					</li>
					<li class="mui-table-view-cell mui-media">
						<div class="mui-table">
							<div class="mui-table-cell uk-text-middle uk-width-em-2">
								<div class="mui-badge mui-badge-danger">
									2
								</div>
							</div>
							<div class="mui-table-cell uk-text-middle">
								<div class="mui-ellipsis ">
									点击链接注册成为您邀请的用户
								</div>
							</div>
						</div>
					</li>
					<li class="mui-table-view-cell mui-media">
						<div class="mui-table">
							<div class="mui-table-cell uk-text-middle uk-width-em-2">
								<div class="mui-badge mui-badge-danger">
									3
								</div>
							</div>
							<div class="mui-table-cell uk-text-middle">
								<div class="mui-ellipsis ">
									您的邀请用户开始交易
								</div>
							</div>
						</div>
					</li>
					<li class="mui-table-view-cell mui-media">
						<div class="mui-table">
							<div class="mui-table-cell uk-text-middle uk-width-em-2">
								<div class="mui-badge mui-badge-danger">
									4
								</div>
							</div>
							<div class="mui-table-cell uk-text-middle">
								<div class="mui-ellipsis ">
									开启赚钱模式
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div style="display:none">
				<div class="mui-h6 mui-text-center uk-margin-mini-bottom">
					立即用以下方式邀请好友
				</div>
				<ul class="mui-table-view mui-grid-view mui-grid-8 mui-grid-view-transparent">
					<li class="mui-table-view-cell mui-media mui-col-xs-3">
						<a href="http://coco3g-app/share?type=weixin&amp;url=http://www.njs18.com&amp;title=&amp;content=&amp;thumb=http://wap.app.njs168.com/Statics/weixin/images/tm-logo.png">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAMAAAANxBKoAAAB/lBMVEVRwzJSwzNSxDNSxDRTxDRTxDVUxDZVxDZVxDdVxTdWxDdWxThZxjxaxjxaxj1bxz5cxz5dx0BgyERhyERiyEZiyUViyUZkyUlkykhlyUllykpmykpoy05py05py09ty1NtzVNvzFZwzFdwzlZxzlhyzVlyzVpyzlhyzllyz1lzz1pzz1t0z1x1zl140F+A02mB1GqC1GyD1G2H1nKI1nOJ1HSJ1HWJ1nOJ1nSK13WL13aM1HiM13eN1XqN2HmP2XuR2X2S2n+Y24Wa3Iic3Yqd2Y2d2oyd2o2e2o2f3o6g3o+g3pCg34+h35Gi35Kj4JOk4JOk4JSl4JWm4Jam4Jeq4pqr4pys3p6s3p+s4p6u46Cv5KGw5KKx5KOy5KS15qe35qq5562656686LG947O+47S/6bPA6bXB6rXC6rfE5bvE67nF5bzF5b3G5b3H7L7I5r/I5sDL7cLM7sPN7sTU6c7V6s/V8c7W8c7Y8tHZ69TZ8tLa69Xa69ba7Nba8tPb69bb69fb7Nbc89Xd7Nne9Njh9dzi9dzj9d3j9d7j9t7k9t/l9uDm9uLn9+Po9+Pp9+Tq+Obs+Ons+ejs+ent8ezu+evv+ezv+uzw+u3y8vLy++/y+/Dz+/H0+/L3/PX3/Pb4/ff5/fj6/fn8/vv8/vz9/v3+//3+//7///8JaFAHAAACT0lEQVRIx6WV6VvTQBDGpwql0Ba14lEVUZR64oWtRwRPWrxF1OKFiiJe9TYKWlCMJ3gb0VFRoSrvf+mHNtlNej++n2Z3f0kmz87MS2yT2q4EproneKoCSrtqPyTLSgv7SZY/omWlH4VKyK6S0MOMtN7iokxytejpdG8NZVNNr52OeSm7vDEr3VVGuVTWJdM3yim3yq8LeqCS8qlywKD1WsqvWj1FR6gQNSfpuKsg2hVnJuaQtFV9uGcEiVfdDaXpeIiZWBPXPenMH6Q0tCq9CDQmKevZQxAab0vDI0xsVp3nJSzaaaf9TKq56ABwu/oQgNHVC74AiXl2/A5FjXDyLwA7aAWANw7qAXDeTkdJMcL1APDz7CAA3L0MDN66YKcVqjPCVjnn0WNbTt17/ri7yS3TdeQzwjYJfr3xfir6sFaifWQ+vFXAnzf/EIsDgnaTwwhn/jWB7d/krDZIb/eY0UXj+OlpAK2z3gHHp78APrrEu6tMetpwij4yAuDE8mGgc/FbAGtE3vXiM0u/Jum91jvFfgOop0a5ApM/t9tGHzTOG8VdEtEc4H0C2DNmpRvEXaoSvevZOod70cq51yzwJ7eoE5Ym35JUqS9MyHSTVIMZu3KbBB81d8PW3hHa9N2AT1p7x9KXpqbs6x/D7yc3xzvMrWDOnp/oLSVa1mlOt2TPc3Mx84T1+cXMKu4rYA72iRl71ZkHdsaKmN/Oc1ZvuJLLGzyX/st3mPVIFk+L6Bn9Mh7M4JfBBwV78YywlsO5mVmNKgFfBVX4Ako0zef/AQgA6a+6DlTnAAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/images/sns-icon-weixin.png" data-pagespeed-lsc-hash="SXxSwAXeyu" data-pagespeed-lsc-expiry="Thu, 19 Apr 2018 06:40:29 GMT">
							<div class="mui-h6 uk-margin-mini-top">
								微信
							</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-3">
						<a href="http://coco3g-app/share?type=pengyou&amp;url=http://www.njs18.com&amp;title=&amp;content=&amp;thumb=http://wap.app.njs168.com/Statics/weixin/images/tm-logo.png">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAMAAAANxBKoAAABxVBMVEVyzydyzyhzzyhz0Cl00Cl00Cp00Ct10Ct10Cx20Cx20C120C520S530S530S950TF50TJ+0jp/0zyA0z2B0z+C00CD1UGE1UKE1UOG1kaH1keI1kqI10mJ10qJ10uK1k2K10uK10yL2E2L2E6M11GM2E6M2E+N11GN2FCO11SP2VOP2VSQ2VOQ2VSQ2VWR2VaR2laS2leV21yV212W212W216W3F+e3G6f3G2f3G6f3muf3myg322h3HGi3XOu4Iau4Ieu5ISv4Iev5ISv5IWx5Ye05ou05oy15o225o+35pC355G555O745q76Je86Ji86Jm86Zm96Jm96Zm96Zq+6Zu+6Zy/6Zy/6Z2/6Z7A6Z7A6p7B6p/B6qDC6qLF66bG7KjH7KnI56/I57DI7KvJ7azJ7a3K7a3K7a7L7a/O6LjO6LnO6brQ6bza7Mzb7M3e7dLf7dTg7dTg7dXh7tfh7tjh9dHi7tjj9tTk9tXk9tbl9tfm9tjm99nn99rn99vo99vo99zp+N3p+N7u8ezy8vHy8vLy++vy++zz++z0++70++/1/O/2/PH2/PL3/PL3/PP4/fT5/fX5/fb+//3+//7////upQmZAAAChElEQVRIx6WV/VsSQRDHNxG5sBIKM7Eye4G0sDcrKpGLMiXDlzoIsiIzKSNDBHqzsBfAgiignL+3u+P25Q6Qh6fvT7MzH47d2ZkdlFMrG/O57ObOtq69dpcvltVEkWqV4rsRq24+1ZBOXNYjrfRXEnXpjIdD9cR5MrX0ah9qpL5VLR01ocYyRdX0Ioe2E7fI0itGtL2MK5ROmFAzmdYwnelHzdWfUWiPOsOjkXRpq/Jl+dwOld9TpePsCQ3XTwSgKuHB1G72pHGZdjIu6wfI2/wKHYFvx5iYU6LftlPHmaJI5W0CpqE0QoPtKZHm6fpgQcYKtjlMQ/koDfM5lKVVZ0wrO/55cgbT8HUXrcgsitHfTgAQfBrTMEGB18hHFzMLWE+83LRC/xig5/IhF7FP3VF0QF56ZyMyLFwjhAvZif1C2cZdZb1fpL8P+OE5IY4jM7E3qvBD4ojA5hHxqtLEYUadxC7L8PxO4ljYPHxf9JRo0lAbsf9KcGjISxy3DgUl1xZzn13E+i1GgkPFMK2vkPxvFebb+4j9CSBwugiUnq8e5DOz70FiL4Hf8Qsg3IPTr+RomRCDaIzYVwWHtJnw3JS87MHpdxBijLlL3bAEQ1iA2T2Tjx5jTSLmLpk6GQeFhnuX/pCaucnWCVOD3DqmQbiI8TcdJG7JqurbWsQ0+BW80EvDbrEbUkzvOPKYhsCIhBeHmd5Javuy9x2mIXihAutWbV+qe77jxm2FhtD5ca625zXvCTq79LEM5ffPRvX13pMW36rcWivvYC73ytAENkRbeL8NT1uZDS//a+6ImeEbzDQ+U3dexp26GlbnjDecxUm3RcVa3MltJjee80ZkNNeb8/8Alx60fuLd3YwAAAAASUVORK5CYII=" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/images/sns-icon-pyq.png" data-pagespeed-lsc-hash="RfA9kxcoD_" data-pagespeed-lsc-expiry="Thu, 19 Apr 2018 06:40:29 GMT">
							<div class="mui-h6 uk-margin-mini-top">
								微信朋友圈
							</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-3">
						<a href="http://coco3g-app/share?type=qq&amp;url=http://www.njs18.com&amp;title=&amp;content=&amp;thumb=http://wap.app.njs168.com/Statics/weixin/images/tm-logo.png">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAMAAAANxBKoAAABaFBMVEUjueQkuuQluuQmuuQnuuQnuuUouuQou+Upu+Uqu+UrvOUsvOUtvOUuvOUvveY1v+Y3vuY3v+U3v+c4v+Y4wOc5v+Y5wOc8wOZGxOhHw+dKxOdKxulLxulNxedNxulOxedOx+lQx+pRxuhSyOpWyepcy+tezOtfzOtfzOxizexjzexpz+1rzeluzulu0e1v0e1xz+pz0u500+541O551O9/1u+A1++C1/CE1OuF1OuF1euF2PCG2fCJ2vGL2vGM2vGM2/GO2/GT3fKV3fKY2eyY2uya3/Oj4vSl4vSu4O6v4O615/a34u636Pa44u654++74++84++86ve+6vfL7/nM6PDN6PDN7/nO8PnP8PnR6fDR8PnT6vDU6vDV6vDV8frX6/DX8vrf9fvn+Pzo+Pzq+f3s8PLs+f3t+f3w+v3x8vLy8vLy+/3z+/71/P72/P73/f75/f75/f/7/v/8/v/9/v/+///////aN+35AAAB40lEQVRIx6WV+VcSURTHryMKpGOjFiRJ5FrWYFZqjEuC+4qWokaOjS2YIGqpvH9fBvXwvndYzhy/v8Cd7+e8efPeXSiHyu4uRCPt/ga1MxJd2M0ylyCyJoIkK2hYVelDvZG4GvXDinTG8FIleY2Mk053UTV1pTmdVKm61CTSq81US82rMv3FR7Xl2yrTpkr1pJr3dCZE9RXK3NEGd56NJqbetLCHxi1tsnPu3xe28nOP8NzNEq0j/Ola3OkoAIZu05YCz96Lso5gdcUq0rjrx6cSLebYzimLWZeQYZGHTw1mKYW7/g60GAIzRfNInyE9BeY8RZG+QjoBZpTCEHdfI70Gbpg0iGcQFv/A1cgP8UdG/8ZMpAaIFxldeIuf1SoHgwVGi+M2WPupTP8QDk3Cvnul6IUTFnuS30sjUjRWgc5L/gjcZVxcnCO7Iy7hLuU8efVrYAPp59PfIE9YDvbA1X8lloO8Kmcl+O8TsGK8drzLsPbPPl47UJfj93f4//b3D69LqPmXJzZztextWiq9ZFvqbqazn7QNx2feddj/Ah8Sn18rjn7isle564O53KanDuxJuujfnhU3s2H9QXPH5Uyzj0ZXHKyiH1SfxTE2i2NWjcldnPOp4pzXfOTTinM+xef8DcUbYVmIswb6AAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/images/sns-icon-qq.png" data-pagespeed-lsc-hash="OX90a2ZgGu" data-pagespeed-lsc-expiry="Thu, 19 Apr 2018 06:40:29 GMT">
							<div class="mui-h6 uk-margin-mini-top">
								QQ好友
							</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-3">
						<a href="http://coco3g-app/share?type=sms&amp;url=http://www.njs18.com&amp;title=&amp;content=&amp;thumb=http://wap.app.njs168.com/Statics/weixin/images/tm-logo.png">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAMAAAANxBKoAAABPlBMVEUSzlMTzlQUzlQUz1QUz1UVz1UXz1YXz1cYz1cYz1gZz1gZ0Fgd0Fse0Fse0Fwh0V4j0V8l0mEm0mEn0WIp0mQq0mQt0mYt02Yv1Ggy1Wo51W881XE91XE/13Q/2HRA1nRE13ZR24BV3IRb3Yhe3opf24pf3otg24pg3otj241m3I5m3I9o4JJp4JJp4JNu4ZZv4ZZv4Zdw4Zdz4pl245x345174J58355835984J585KB95KGF5qeG5qiQ462R462l7b6o576p576q7sGy6MWz6MW06Ma36cjB8tLD89TE89TI69XJ7NXJ9NjO7NnP7dnR7drR7dvS7dvS7dzU7d3U9uDV7d3V7t3V7t7X9+LZ9+Td+Obi+ero+u7r8e3w/PTx8vLy8vLz/ff2/fj2/fn5/vv6/vv9//3+//7///+RV6r/AAABzUlEQVRIx52V51bCQBCFRwWiKChgbwERIfaCFFFQVFBEMTZUMII97/8CYjs7s9kE8P7i7nyHsyc7MxfqVLViRpF9zk7XoKxkijWuCsSVkyOANZIsm9KXYTvwsocvhLSWkEAkKaEZ6dI4mGm8xNM5N5jLnaN0VgIrSVlM57vBWt15RqtuaCa3+kdrk9Bck9ovHYdWFP+hVaklWlK/6TB/PhrZ2tmKjPLH4S/6lj53b/Ra/9F1tJc2QblBJ8lRoKozVQOklqxDjXRd9F3Heo+SjqxBEfslndcyLp9AGrmxZwP9MobqaVCQ29eN2kd1BWRm+l8F9Fs/A2TwMRPURQoywAdOZlJCOsUAJ3Qwsy2kt/FX6WM/14T0Ov7vIWamhfQ0vrefmY6KAK6gq/phHt1qRUCvovoCeUtbwQAXbOQtSZ947jn43kP7hPag95TAx16uB7n+PkLsw0YXqcUa01DGszP3jT0+fTzd7c5yS8Z+w8/l2ubizNSAeIxD/5j59vZJXZtoZ1e1twcb29vRBHbk2tjfjj2aDYdWl3Ed8LlzZpE7Z4JMi5tkWlwT5qUashlYW+jcNIuvYjSLh2NXFsn9lfPpRs73QI9PVtKGnP8EGWM2mnxZ6iUAAAAASUVORK5CYII=" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/images/sns-icon-sms.png" data-pagespeed-lsc-hash="AlsvvaBJ_A" data-pagespeed-lsc-expiry="Thu, 19 Apr 2018 06:40:29 GMT">
							<div class="mui-h6 uk-margin-mini-top">
								短信
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8">mui.init();</script>

	</body>
</html>