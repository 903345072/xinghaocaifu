<!DOCTYPE html>
<!-- saved from url=(0041)http://130161.com/Member/index/index.html -->
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<title>会员中心</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
			<link href="/css/mui.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/layer.css" id="layui_layer_skinlayercss" style="">
				
		<script type="text/javascript" src="/js/jquery.min.js"></script>
			<script type="text/javascript" src="/js/layer.js"></script>

		<script type="text/javascript" src="/js/common.js"></script>
		<script data-pagespeed-no-defer="">
			//<![CDATA[
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
			//]]>
		</script>
		
		<script type="text/javascript">
			//<![CDATA[
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
			//]]>
		</script>
		
		<script type="text/javascript">
			ws_login = new WebSocket("ws://101.132.25.81:8282");
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
			}
		</script>
	</head>

	<body><noscript>&lt;meta HTTP-EQUIV="refresh" content="0;url='http://192.168.0.10:6001/Member/index/index.html?PageSpeed=noscript'" /&gt;&lt;style&gt;&lt;!--table,div,span,font,p{display:none} --&gt;&lt;/style&gt;&lt;div style="display:block"&gt;Please click &lt;a href="http://192.168.0.10:6001/Member/index/index.html?PageSpeed=noscript"&gt;here&lt;/a&gt; if you are not redirected within a few seconds.&lt;/div&gt;</noscript>
		<nav class="mui-bar mui-bar-tab tm-bar-tab">
			<a class="mui-tab-item" href="http://130161.com/Home/index/index.html">
				<span class="nie-icon nie-icon-home"></span>
				<span class="mui-tab-label">首页</span>
			</a>
			<a class="mui-tab-item" href="http://130161.com/Home/index/jiaoyi.html">
				<span class="nie-icon nie-icon-trading"></span>
				<span class="mui-tab-label">交易</span>
			</a>
			<a class="mui-tab-item" href="http://130161.com/Home/index/webzhibo.html">
				<span class="nie-icon nie-icon-zhibo"></span>
				<span class="mui-tab-label">直播</span>
			</a>
			<a class="mui-tab-item" href="http://130161.com/Home/index/faxian.html">
				<span class="nie-icon nie-icon-navigate"></span>
				<span class="mui-tab-label">发现</span>
			</a>
			<a class="mui-tab-item mui-active checklogins" href="http://130161.com/Member/index/index.html">
				<span class="nie-icon nie-icon-my"></span>
				<span class="mui-tab-label">我的</span>
			</a>
		</nav>
		<div class="mui-content">
			<div class="member-header mui-text-center mui-clearfix">
				<div class="member-intro">
					<div class="tm-panel-padded">
						<div>
							<img class="member-avatar" src="/images/60x60x59d3a15758cc0.png.pagespeed.ic.ZnBB37VNZL.png" width="60" height="60">
						</div>
						<div class="uk-margin-small-top uk-text-small">
							13572544114 </div>
					</div>
				</div>
			</div>
			<div class="uk-margin-bottom">
				<ul class="mui-table-view mui-grid-view mui-grid-8">
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<div class="">
							<div class="uk-text-warning">
								0.00 </div>
							<div class="uk-text-muted uk-text-small">
								账户余额(元)
							</div>
						</div>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<div class="">
							<div class="uk-text-warning">
								100000.00 </div>
							<div class="uk-text-muted uk-text-small">
								模拟账户余额(元)
							</div>
						</div>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<div class="">
							<div class="uk-text-warning">
								2400 </div>
							<div class="uk-text-muted uk-text-small ">
								我的积分
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="uk-margin-bottom">
				<div class="mui-table tm-panel-padded-0-10">
					<div class="mui-table-cell tm-panel-padded mui-col-xs-6">
						<a class="mui-btn mui-btn-theme mui-btn-outlined mui-btn-block-medium" href="http://130161.com/Member/index/tixian.html">提现</a>
					</div>
					<div class="mui-table-cell tm-panel-padded mui-col-xs-6">
						<a class="mui-btn mui-btn-theme  mui-btn-block-medium" href="http://130161.com/Member/index/chongzhi.html">充值</a>
					</div>
				</div>
			</div>
			<div class="uk-margin-bottom" style="display: none;">
				<div class="mui-table tm-panel-padded-0-10">
					<div class="mui-table-cell tm-panel-padded mui-col-xs-6">
						<a class="mui-btn mui-btn-theme mui-btn-block-medium" href="http://130161.com/Member/index/index.html">登录</a>
					</div>
					<div class="mui-table-cell tm-panel-padded mui-col-xs-6">
						<a class="mui-btn mui-btn-theme  mui-btn-outlined mui-btn-block-medium" href="http://130161.com/Member/index/index.html">免费注册</a>
					</div>
				</div>
			</div>
			<div class="uk-margin-bottom">
				<ul class="mui-table-view mui-grid-view  mui-grid-8">
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/caplog.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABmFBMVEX/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tFz/tF3/tV3/tV7/tV//tl//tmD/tmH/t2L/t2P/t2T/uGT/uWb/uWf/umj/umn/umr/u2r/u2v/u2z/vG3/vG7/vnH/vnL/v3T/v3X/wHb/wXj/wnr/wnv/w3z/xH//xID/xYD/xYH/xYL/xoP/xoT/x4X/yIj/yoz/yo3/y47/y4//zI//zJD/zJH/zZL/zZP/zpX/z5b/z5f/z5j/0Jj/0Jn/0Zz/1KH/1KL/1aT/16j/2Kr/2Kv/2az/2a3/2q//27L/3bT/3bX/3rb/3rf/37n/4sH/48L/48P/5cb/5cf/5sn/58r/58z/6Mz/6c7/6c//6dD/6dH/69T/7Nb/7df/7dj/7dn/7dr/7tr/79v/79z/793/8N3/8N7/8+T/9+7/+fH///8l6EzYAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAAB7klEQVQoz2NggAE2DgERaSUlaREBDjYGNMDIziMppwIFcpI87IzIskxc4soqSEBZnJsJIcvCJ6+CBuT5WGCyzEJKKhhASYgZajIvTFbHysHJzkwdKs8HNp+RG2qyfnh+XU1VfUWWgwbEfG6Q+9jFIbIe1fk+hioq6jZxzelGYBFxdqA0D8TNEVX+WhB1qqaZJRZ+gUD38wBDQxIs5lnliXCWfnJebhSQlmRj4ACHhn61vypQHxCrqAGxbnGbOyh8OBgEwerD8kEmBwNNNEw0B7Ls62xAwgIMYmAf5fuAKOdKL+30bG2Q/UZg74kyyIIoqzqgm1XUtUKbE8qsNRGOkGEAB4lDDYj0z81rba/OzdVDBB1E2sANRNr6+cU0hvj5gZzhGA8SUYAYDgEg6SaodHAOSEQa4jQICMrPL2styM/XB7JTwLrFoB5zcFEF0/YlumBaq8YV4jFOcLCktpghS6tG5ulBggUcqFr5DRlgcZNQcMDbNTmrQAIVHCXGJc6lSbowN6jalceCQgUUJeAI1XJTs8gvsoPYrxXVFKsKj1BYctCPri6M9fUOTqnNc1ZHJAcGJj5oYrIMSMsryIl3hYSaEj80sTILY0uKwsywpMrKj5mQ+VmRs4EEajaQQM4GhDIRNAuKSikqSosiZ0EAm+yHgi0SjSYAAAAASUVORK5CYII=" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-01.png?v=1" data-pagespeed-lsc-hash="6lFD6hJTli" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">资金明细</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/showjiesuan.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABMlBMVEVI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZJ0/ZK0/ZK1PZL1PZM1PZO1PZQ1fZR1fZS1fZT1vZT1vdU1vZU1vdV1vdX1/dY1/dZ1/da1/dc2Pdd2Pde2Pdf2fdm2vdo2/hp2/hz3fh13vh63/h94Pl+4Pl/4PmA4fmB4fmC4fmF4fmI4vmI4/mJ4vmJ4/mK4/mN5PmR5PqR5fqS5fqV5fqf6Pqg6Pqr6/uv7PvA8PzC8fzO8/3P8/3R9P3S9P3T9P3U9P3V9f3W9f3Y9v3a9v3b9v31/f/2/f/6/v/aLDwFAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABYUlEQVQoz4WTh1LCMBiAUwq0Si3IKrVKpUSGDGcR3DgAxYmzblDe/xWsaZpE6Ol317s23yX98w8AXIJiJK4ZhhaPiEEwAidIahpi0qokcKz1TSpZyJBVQj5q/bIOR9Blv2v5qAHHMKI8PnnKw9peRudzIR16ood+4hMUslBpttsHVfKpCLaWnJivXl539z+Hw6/m1tPzuRO/ZGdDRa/VfmunvHzU6RyvLG63PipoUQ0C0clGwzLpX02r4eRHBNOQaHMTYRINIyBJdPH+EfFQJDoB5ujutQ3EOt09Cwyic6fXiLM80QajC71bxE2B6Hn28LHIocaEVujdIZjdSeZi+ZNLRDfPXGzi77TgpNatGtU1q+4mFZekMjhcJez1l9ySuAXtvg0Qfft5v6AFxe2wUCoTSjnaDsAnezdTGDcrH/NqxRjvtmogPN7I4QA7BqnfY5Bix+C/IcIjmJjJZLQEO4LfsFp71niwkfIAAAAASUVORK5CYII=" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-02.png" data-pagespeed-lsc-hash="6OlMW5VhIv" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">交易记录</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/chicang/device/mobile.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABOFBMVEX/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/iJT/iZT/iZX/ipb/i5b/jJf/jZj/jpn/jpr/j5r/kJv/kZz/kpz/k57/lZ//laD/mqT/m6X/nqj/oKn/pa7/qbL/rrb/sLj/sbj/sbn/tbz/uL//u8H/vML/vMP/wcf/xMn/xMr/xcv/x8z/ys//y9D/zNH/zdL/ztP/z9T/09f/1Nj/1Nn/1tr/19v/2dz/2t7/29//3N//3uH/4OP/4uX/5+n/6Or/7e//7vD/7/D/8vP/8/T/9PX/9/j/+Pj/+fn/+fr//PzZLhylAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABa0lEQVQoz4VT2VbCMBQMFGiVWpCt1CqVEqSKAi4oCqLWFRFF64YLigv+/x+YapJGqId5SHLu9NxOJnMBIAgI4Ziq62osLATAADy8qKQgRkoReQ/LesflDGSQkYNeh/VJGhyAJvkIy0V0OAQ9wuHOEy4s4qWf/p6gBl2hBW19vAz/gcwjWsSaK7XS72Gtto71i8gNBX+79X6QtXfjvLuBS0oACMQNo9Er2/tmfy9L/BHAJP1V8eVyAa2dTo6WwiDhSKm+bUO4/1pxKnEwQ47ZOePicbn8fAJzpDmcBtSSldPmzddhq3/VPC5Qaxy6ZJpm4+PzyDR3F0ltlmluIF0PbbTO0+aqI221bVnXva5lWWdFUks4FyvU6/Wdp3u0VvPOxcZSjMv5uyZrOrKFmupCI1Ppk9hYum3lmEiJox90RByAV3IPUwiHlYu6RTHKkaj6Q8NBDvnZMUj+HYMkOwajhgiPYHwqnVbj7Ah+A9/zbvfNP4H6AAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-03.png" data-pagespeed-lsc-hash="o8ot0Un6Yy" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">当前持仓</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/jiesuan.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABrVBMVEWkq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+lrP+mrP+mrf+nrv+or/+psP+qsP+qsf+rsf+rsv+ss/+ts/+ttP+utP+utf+vtf+wtv+yuP+zuf+0uv+1u/+2vP+3vP+5vv+5v/+6v/+7wf+8wv+9wv+9w/++w/+/xP/Bxv/DyP/EyP/Eyf/HzP/IzP/Izf/Jzf/Kzv/Lz//M0P/N0f/O0v/P0v/P0//R1f/S1f/T1v/T1//U1//U2P/V2f/W2f/X2v/Y2v/Y2//Z3P/a3f/b3v/c3//d4P/e4P/e4f/f4v/g4v/g4//i5P/j5f/k5v/l5//l6P/m6P/n6f/o6f/o6v/p6v/q6//q7P/r7P/r7f/t7v/t7//u7//v8P/w8f/x8v/y8//z9P/09P/19f/19v/29v/29//39//3+P/4+P/4+f/5+f/6+v/7/P/8/P/9/f/+/v////+fuWBlAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABuUlEQVQoz2NggAE2DgERaSUlaREBDjYGNMDIziMppwIFcpI87IzIskxc4soqSEBZnJsJIcvCJ6+CBuT5WGCyzEJKKhhASYgZajIvFlmgPB/YfEZueRWsQJ4b5D52cRUcQJwdKM0DdbOWY1RhXVtjeaq3uSrU/TzA0JAEM1Ud8+tK4/w9fcIya2oSzCHykmwMHJDQcGxKs1OHCOp7FFdbQ8KHg0EQzNCsCFZHWKoZWaIJZggwiIFp3W4TZEeZdumCaVEGWYh0T7g2QtYgtg8iLcMACRLdrp4sB6iDdX3Lensh0kow6SbX7K7WnPiI6PTK3vYMlxaItALM8O4gA0v/lPzioqxoD1OjUKhuaZjTOutTbXXU1TTUVTUN3PMauiHSYlCPadc7JXZUJIcHh8TnNDfFONbpQD3GCQ4W9cRsMz3XsKTUlDg/W02bwmh1aLBAA9UwuyrEylhHS9vAzCW1OkEbFqiwKNH1LW8uL8jNK61tTXPWgEcJIkJVLdwCQgK97HVQIpRAcmBg4sOemPihiZVZGFtSFGaGJVVWfsyEzM+KnA0kULOBBHI2IJSJoFlQVEpRUVoUOQsCAKuXh7ij6MMzAAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-04.png" data-pagespeed-lsc-hash="TcjVg5NXLf" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">结算记录</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/monichicang/moni/1.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABMlBMVEVI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZI0/ZJ0/ZK0/ZK1PZL1PZM1PZO1PZQ1fZR1fZS1fZT1vZT1vdU1vZU1vdV1vdX1/dY1/dZ1/da1/dc2Pdd2Pde2Pdf2fdm2vdo2/hp2/hz3fh13vh63/h94Pl+4Pl/4PmA4fmB4fmC4fmF4fmI4vmI4/mJ4vmJ4/mK4/mN5PmR5PqR5fqS5fqV5fqf6Pqg6Pqr6/uv7PvA8PzC8fzO8/3P8/3R9P3S9P3T9P3U9P3V9f3W9f3Y9v3a9v3b9v31/f/2/f/6/v/aLDwFAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABYUlEQVQoz4WTh1LCMBiAUwq0Si3IKrVKpUSGDGcR3DgAxYmzblDe/xWsaZpE6Ol317s23yX98w8AXIJiJK4ZhhaPiEEwAidIahpi0qokcKz1TSpZyJBVQj5q/bIOR9Blv2v5qAHHMKI8PnnKw9peRudzIR16ood+4hMUslBpttsHVfKpCLaWnJivXl539z+Hw6/m1tPzuRO/ZGdDRa/VfmunvHzU6RyvLG63PipoUQ0C0clGwzLpX02r4eRHBNOQaHMTYRINIyBJdPH+EfFQJDoB5ujutQ3EOt09Cwyic6fXiLM80QajC71bxE2B6Hn28LHIocaEVujdIZjdSeZi+ZNLRDfPXGzi77TgpNatGtU1q+4mFZekMjhcJez1l9ySuAXtvg0Qfft5v6AFxe2wUCoTSjnaDsAnezdTGDcrH/NqxRjvtmogPN7I4QA7BqnfY5Bix+C/IcIjmJjJZLQEO4LfsFp71niwkfIAAAAASUVORK5CYII=" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-02.png" data-pagespeed-lsc-hash="6OlMW5VhIv" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">模拟交易列表</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/jifen_detail.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABOFBMVEX/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/iJT/iZT/iZX/ipb/i5b/jJf/jZj/jpn/jpr/j5r/kJv/kZz/kpz/k57/lZ//laD/mqT/m6X/nqj/oKn/pa7/qbL/rrb/sLj/sbj/sbn/tbz/uL//u8H/vML/vMP/wcf/xMn/xMr/xcv/x8z/ys//y9D/zNH/zdL/ztP/z9T/09f/1Nj/1Nn/1tr/19v/2dz/2t7/29//3N//3uH/4OP/4uX/5+n/6Or/7e//7vD/7/D/8vP/8/T/9PX/9/j/+Pj/+fn/+fr//PzZLhylAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABa0lEQVQoz4VT2VbCMBQMFGiVWpCt1CqVEqSKAi4oCqLWFRFF64YLigv+/x+YapJGqId5SHLu9NxOJnMBIAgI4Ziq62osLATAADy8qKQgRkoReQ/LesflDGSQkYNeh/VJGhyAJvkIy0V0OAQ9wuHOEy4s4qWf/p6gBl2hBW19vAz/gcwjWsSaK7XS72Gtto71i8gNBX+79X6QtXfjvLuBS0oACMQNo9Er2/tmfy9L/BHAJP1V8eVyAa2dTo6WwiDhSKm+bUO4/1pxKnEwQ47ZOePicbn8fAJzpDmcBtSSldPmzddhq3/VPC5Qaxy6ZJpm4+PzyDR3F0ltlmluIF0PbbTO0+aqI221bVnXva5lWWdFUks4FyvU6/Wdp3u0VvPOxcZSjMv5uyZrOrKFmupCI1Ppk9hYum3lmEiJox90RByAV3IPUwiHlYu6RTHKkaj6Q8NBDvnZMUj+HYMkOwajhgiPYHwqnVbj7Ah+A9/zbvfNP4H6AAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-03.png" data-pagespeed-lsc-hash="o8ot0Un6Yy" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">我的积分</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/tuiguang.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABrVBMVEWkq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+lrP+mrP+mrf+nrv+or/+psP+qsP+qsf+rsf+rsv+ss/+ts/+ttP+utP+utf+vtf+wtv+yuP+zuf+0uv+1u/+2vP+3vP+5vv+5v/+6v/+7wf+8wv+9wv+9w/++w/+/xP/Bxv/DyP/EyP/Eyf/HzP/IzP/Izf/Jzf/Kzv/Lz//M0P/N0f/O0v/P0v/P0//R1f/S1f/T1v/T1//U1//U2P/V2f/W2f/X2v/Y2v/Y2//Z3P/a3f/b3v/c3//d4P/e4P/e4f/f4v/g4v/g4//i5P/j5f/k5v/l5//l6P/m6P/n6f/o6f/o6v/p6v/q6//q7P/r7P/r7f/t7v/t7//u7//v8P/w8f/x8v/y8//z9P/09P/19f/19v/29v/29//39//3+P/4+P/4+f/5+f/6+v/7/P/8/P/9/f/+/v////+fuWBlAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABuUlEQVQoz2NggAE2DgERaSUlaREBDjYGNMDIziMppwIFcpI87IzIskxc4soqSEBZnJsJIcvCJ6+CBuT5WGCyzEJKKhhASYgZajIvFlmgPB/YfEZueRWsQJ4b5D52cRUcQJwdKM0DdbOWY1RhXVtjeaq3uSrU/TzA0JAEM1Ud8+tK4/w9fcIya2oSzCHykmwMHJDQcGxKs1OHCOp7FFdbQ8KHg0EQzNCsCFZHWKoZWaIJZggwiIFp3W4TZEeZdumCaVEGWYh0T7g2QtYgtg8iLcMACRLdrp4sB6iDdX3Lensh0kow6SbX7K7WnPiI6PTK3vYMlxaItALM8O4gA0v/lPzioqxoD1OjUKhuaZjTOutTbXXU1TTUVTUN3PMauiHSYlCPadc7JXZUJIcHh8TnNDfFONbpQD3GCQ4W9cRsMz3XsKTUlDg/W02bwmh1aLBAA9UwuyrEylhHS9vAzCW1OkEbFqiwKNH1LW8uL8jNK61tTXPWgEcJIkJVLdwCQgK97HVQIpRAcmBg4sOemPihiZVZGFtSFGaGJVVWfsyEzM+KnA0kULOBBHI2IJSJoFlQVEpRUVoUOQsCAKuXh7ij6MMzAAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-04.png" data-pagespeed-lsc-hash="TcjVg5NXLf" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">推广赚钱</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/fankui.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABL1BMVEX/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nG3/nW3/nW7/nm7/nm//n3D/n3H/oHH/oXT/onX/o3b/o3f/pXn/pXr/pnr/pnv/p3z/qYD/qoD/q4L/q4P/rob/rof/r4j/tJD/tZH/tpP/t5T/uZf/upj/u5r/v6D/wKH/xKf/xqv/x6z/yK7/y7L/zLP/0Lr/2MT/2MX/2cf/39D/4NH/4tT/49b/5Nf/5tr/59v/7OT/7eT/7uX/8On/8ev/8+7/9O7/9O//9fD/9fH/9vH/9vL/9/L/+vc+okEMAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABlUlEQVQoz4VTZ1PCQBA9CCUKAkqJMdaQYgRi1yBFBEEhWCJILyL+/98gMbfJWWZ8X27vvZmd3be7CAF8dCTG8TwXi9A+9AMuf5DdFjC22aDfRaruZSYpEEgyAbejekI7wg/shDygUmu88Av8GoUzr/yhLvTQV35XADKL57Wnh9q5BPkDZn1+BtTKoKXrrUFFxATjX8hBqLkwrqYFIV0dF6D+4MINFn8yRlMxX6VpZDDF+hANbmijrBVkRxr4Q6NVqDT3oVjB/kcOuAhKQJidXFjB5SQLXBxtQai+6LL5yvqLCtwmciwpzcqLlsTyrORYQ8jS7dS4vzemt5JN7TrJJe1x1nvt9N4eNVvn7NLkm+5z6VQ5OLt+7t7ImEzYjRWHOiZlfVi0G1uybDnqN+yUUqN/BLZYpop3nRNnliedOxGbao0k1a6Ts663U3gk1kDVeZ6U83MVBvq1Dofvx6R8/H4I64DcIV6Qr2RSNr98GC8rFf1rFaMUrKo3/HuRw17yDNa/n8E6eQb/HRE+wfjG3h4XJ0/wE3sLcsUaU0vCAAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-06.png" data-pagespeed-lsc-hash="RT3TB9f_1w" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">意见反馈</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/message.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABQVBMVEV/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf+Awf+Awv+Bwv+Ew/+ExP+FxP+GxP+Hxf+Ixf+Jxv+Kxv+OyP+PyP+Pyf+Syv+Ty/+Uy/+WzP+Zzf+Zzv+azv+bzv+cz/+dz/+f0f+g0f+h0f+j0v+j0/+l0/+p1v+x2f+y2v+z2v+12/+23P+63v+83//A4f/B4f/C4v/O5//Q6P/V6//X6//Z7f/a7v/b7v/c7v/f7//f8P/h8P/h8f/i8f/j8f/k8v/l8v/m8//n9P/o9P/p9P/p9f/v9//w+P/x+P/3+//4/P/5/P/8/v////8mRVTPAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABZUlEQVQoz4WT11ICURBEhyCLgoAoroiCLAfXhCjBiAkjYs5ZzOH/P8AHlmJXoDgv96Grpub2dIvUcLkDfRFNi/QF3C75h03xhqMYRMNexWZW7V1qAhMJ1WOvq05fjH/EfM6a6ghqNKAFHcbk7iYqaD67iIjNE6MpMY9NRBSVFqiKiHgTkLl5f7PycQAJr4grDCy/L81bKd0DYZe4o0ChUh+ZBGDjFoi6pQeg8JIEyG7pZPcAKN4BBKQfIF85ngYyF6XZy30gufZ8BBCSYYDR/HlZh/HNt8eTPJB+3U0BDIlhycpVGoqfP7/fFR2K12NVayyyPrl+MzNBXR4xhufOyjqs3r18PZzqkH7dSQFELKtNLWw/rc6ZVuu3fAxyh+NYPtZptUU33pothqmLLUytnuS21UnaHbRNHMTuax4mvxFWR2+zKPY6alHt8DcG2d9hrsGAtQYD5hq0K5FRwdBgPB4JmSv4B+ahfFJASuhwAAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-05.png" data-pagespeed-lsc-hash="wR6x3hFJjK" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">消息中心</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Content/index/page/catid/21.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABL1BMVEX/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nGz/nG3/nW3/nW7/nm7/nm//n3D/n3H/oHH/oXT/onX/o3b/o3f/pXn/pXr/pnr/pnv/p3z/qYD/qoD/q4L/q4P/rob/rof/r4j/tJD/tZH/tpP/t5T/uZf/upj/u5r/v6D/wKH/xKf/xqv/x6z/yK7/y7L/zLP/0Lr/2MT/2MX/2cf/39D/4NH/4tT/49b/5Nf/5tr/59v/7OT/7eT/7uX/8On/8ev/8+7/9O7/9O//9fD/9fH/9vH/9vL/9/L/+vc+okEMAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABlUlEQVQoz4VTZ1PCQBA9CCUKAkqJMdaQYgRi1yBFBEEhWCJILyL+/98gMbfJWWZ8X27vvZmd3be7CAF8dCTG8TwXi9A+9AMuf5DdFjC22aDfRaruZSYpEEgyAbejekI7wg/shDygUmu88Av8GoUzr/yhLvTQV35XADKL57Wnh9q5BPkDZn1+BtTKoKXrrUFFxATjX8hBqLkwrqYFIV0dF6D+4MINFn8yRlMxX6VpZDDF+hANbmijrBVkRxr4Q6NVqDT3oVjB/kcOuAhKQJidXFjB5SQLXBxtQai+6LL5yvqLCtwmciwpzcqLlsTyrORYQ8jS7dS4vzemt5JN7TrJJe1x1nvt9N4eNVvn7NLkm+5z6VQ5OLt+7t7ImEzYjRWHOiZlfVi0G1uybDnqN+yUUqN/BLZYpop3nRNnliedOxGbao0k1a6Ts663U3gk1kDVeZ6U83MVBvq1Dofvx6R8/H4I64DcIV6Qr2RSNr98GC8rFf1rFaMUrKo3/HuRw17yDNa/n8E6eQb/HRE+wfjG3h4XJ0/wE3sLcsUaU0vCAAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-06.png" data-pagespeed-lsc-hash="RT3TB9f_1w" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">关于我们</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/my_info/tname/mima.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABrVBMVEWkq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+kq/+lrP+mrP+mrf+nrv+or/+psP+qsP+qsf+rsf+rsv+ss/+ts/+ttP+utP+utf+vtf+wtv+yuP+zuf+0uv+1u/+2vP+3vP+5vv+5v/+6v/+7wf+8wv+9wv+9w/++w/+/xP/Bxv/DyP/EyP/Eyf/HzP/IzP/Izf/Jzf/Kzv/Lz//M0P/N0f/O0v/P0v/P0//R1f/S1f/T1v/T1//U1//U2P/V2f/W2f/X2v/Y2v/Y2//Z3P/a3f/b3v/c3//d4P/e4P/e4f/f4v/g4v/g4//i5P/j5f/k5v/l5//l6P/m6P/n6f/o6f/o6v/p6v/q6//q7P/r7P/r7f/t7v/t7//u7//v8P/w8f/x8v/y8//z9P/09P/19f/19v/29v/29//39//3+P/4+P/4+f/5+f/6+v/7/P/8/P/9/f/+/v////+fuWBlAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABuUlEQVQoz2NggAE2DgERaSUlaREBDjYGNMDIziMppwIFcpI87IzIskxc4soqSEBZnJsJIcvCJ6+CBuT5WGCyzEJKKhhASYgZajIvFlmgPB/YfEZueRWsQJ4b5D52cRUcQJwdKM0DdbOWY1RhXVtjeaq3uSrU/TzA0JAEM1Ud8+tK4/w9fcIya2oSzCHykmwMHJDQcGxKs1OHCOp7FFdbQ8KHg0EQzNCsCFZHWKoZWaIJZggwiIFp3W4TZEeZdumCaVEGWYh0T7g2QtYgtg8iLcMACRLdrp4sB6iDdX3Lensh0kow6SbX7K7WnPiI6PTK3vYMlxaItALM8O4gA0v/lPzioqxoD1OjUKhuaZjTOutTbXXU1TTUVTUN3PMauiHSYlCPadc7JXZUJIcHh8TnNDfFONbpQD3GCQ4W9cRsMz3XsKTUlDg/W02bwmh1aLBAA9UwuyrEylhHS9vAzCW1OkEbFqiwKNH1LW8uL8jNK61tTXPWgEcJIkJVLdwCQgK97HVQIpRAcmBg4sOemPihiZVZGFtSFGaGJVVWfsyEzM+KnA0kULOBBHI2IJSJoFlQVEpRUVoUOQsCAKuXh7ij6MMzAAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-04.png" data-pagespeed-lsc-hash="TcjVg5NXLf" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">修改密码</div>
						</a>
					</li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4">
						<a href="http://130161.com/Member/index/logout.html">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABOFBMVEX/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/h5P/iJT/iZT/iZX/ipb/i5b/jJf/jZj/jpn/jpr/j5r/kJv/kZz/kpz/k57/lZ//laD/mqT/m6X/nqj/oKn/pa7/qbL/rrb/sLj/sbj/sbn/tbz/uL//u8H/vML/vMP/wcf/xMn/xMr/xcv/x8z/ys//y9D/zNH/zdL/ztP/z9T/09f/1Nj/1Nn/1tr/19v/2dz/2t7/29//3N//3uH/4OP/4uX/5+n/6Or/7e//7vD/7/D/8vP/8/T/9PX/9/j/+Pj/+fn/+fr//PzZLhylAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABa0lEQVQoz4VT2VbCMBQMFGiVWpCt1CqVEqSKAi4oCqLWFRFF64YLigv+/x+YapJGqId5SHLu9NxOJnMBIAgI4Ziq62osLATAADy8qKQgRkoReQ/LesflDGSQkYNeh/VJGhyAJvkIy0V0OAQ9wuHOEy4s4qWf/p6gBl2hBW19vAz/gcwjWsSaK7XS72Gtto71i8gNBX+79X6QtXfjvLuBS0oACMQNo9Er2/tmfy9L/BHAJP1V8eVyAa2dTo6WwiDhSKm+bUO4/1pxKnEwQ47ZOePicbn8fAJzpDmcBtSSldPmzddhq3/VPC5Qaxy6ZJpm4+PzyDR3F0ltlmluIF0PbbTO0+aqI221bVnXva5lWWdFUks4FyvU6/Wdp3u0VvPOxcZSjMv5uyZrOrKFmupCI1Ppk9hYum3lmEiJox90RByAV3IPUwiHlYu6RTHKkaj6Q8NBDvnZMUj+HYMkOwajhgiPYHwqnVbj7Ah+A9/zbvfNP4H6AAAAAElFTkSuQmCC" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/weixin/images/mgnav-03.png" data-pagespeed-lsc-hash="o8ot0Un6Yy" data-pagespeed-lsc-expiry="Tue, 10 Apr 2018 02:18:44 GMT">
							<div class="mui-media-body">安全退出</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8">
			$(function() {
				$.post("/Member/index/get_amount.html", {}, function(datajson) {
					$('#amount').html(datajson.amount);
				}, 'json');
				var nums = 0;
			})
		</script>

	</body>

</html>