<!DOCTYPE html>
<!-- saved from url=(0056)http://130161.com/Home/index/jiaoyi/moni/1/catid/15.html -->
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<title></title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" href="/css/layer.css" id="layui_layer_skinlayercss" style="">
			
		<!--<link href="/css/mui.min.css" rel="stylesheet">-->
		<!--<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script src="/js/mui.min.js"></script>
		<script type="text/javascript" src="/js/layer.js"></script>
		<script type="text/javascript" src="/js/common.js"></script>-->
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
		<style>
			.tm-bar-segmented-control-outer{
				overflow: inherit;
			}
		</style>
	</head>

	<body class="mui-ios mui-ios-11 mui-ios-11-0"><noscript>&lt;meta HTTP-EQUIV="refresh" content="0;url='http://192.168.0.10:6001/Home/index/jiaoyi/moni/1/catid/15.html?PageSpeed=noscript'" /&gt;&lt;style&gt;&lt;!--table,div,span,font,p{display:none} --&gt;&lt;/style&gt;&lt;div style="display:block"&gt;Please click &lt;a href="http://192.168.0.10:6001/Home/index/jiaoyi/moni/1/catid/15.html?PageSpeed=noscript"&gt;here&lt;/a&gt; if you are not redirected within a few seconds.&lt;/div&gt;</noscript>
		<header class="mui-bar mui-bar-nav">
			<div class="tm-bar-segmented-control-outer">
				<div class="mui-segmented-control mui-segmented-control tm-bar-segmented-control">
					<a class="mui-control-item mui-active" href="">国际期货</a>
					<a class="mui-control-item " href="">国内期货</a>
				</div>
			</div>
			<a class="mui-btn mui-btn-link mui-pull-right" href="">玩法</a>
		</header>
		<div class="mui-content">
			<div class="xqh-block">
				<div class="xqh-card">
					<div class="xqh-card-body">
						<div class="xqh-grid xqh-grid-width-1-3">
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #C2A45F;">
										CL </div>
									<div class="tm-title">
										美原油
									</div>
									<div class="tm-imgtags">
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAUCAMAAABs8jdaAAAAflBMVEUAAAD////80of90IT9zH781Ir+qU/9v23/ki/8zoL9yXv9t2L9w3P82pH/kS3+uGL/mjv804j/jyv9vmv9w3P+sVr8143/jyv9yXv+q1H+n0L/ki/+qE39vmv80Yb9t2L9vmv9w3P9yXv+n0L+pUn+q1H+sVr/ki7/ljT/mjtQRCt9AAAAHnRSTlMAAAILFRwnOU9ee4qTlJagqLe8wMjQ1+Dl5eby9/q3Tp1fAAAAcElEQVQI143GSwKCIBRA0ZsgUpnav0QJ7PNq/xts0qtpZ3QAypVBFfFg9SbGtX4eYywLAOxpmqZqYQCzyzlnW9dAm1JKo9uOjuqilrQPted8VwO3r4H+qnq6l+pw4fnhwQcREZEGwDVHCRsPzH7++Rsx0A8fjaN69QAAAABJRU5ErkJggg==" width="11" height="20">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_CL1805" style="color: red;">63.51</span> <span class="per_price_CL1805" style="color: red;">0.142%</span>
								</div>
								<div class="tm-muted-txt">
									06:00-次日05:00 </div>
							</a>
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #8F97B3;">
										GC </div>
									<div class="tm-title">
										美黄金
									</div>
									<div class="tm-imgtags">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_GC1806" style="color: green;">1336.7</span> <span class="per_price_GC1806" style="color: green;">-0.254%</span>
								</div>
								<div class="tm-muted-txt">
									06:00次日05:00 </div>
							</a>
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #CA7D6D;">
										SI </div>
									<div class="tm-title">
										美白银
									</div>
									<div class="tm-imgtags">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_SI1805" style="color: green;">16.450</span> <span class="per_price_SI1805" style="color: green;">-0.478%</span>
								</div>
								<div class="tm-muted-txt">
									06:00-次日05:00 </div>
							</a>
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #92A8CB;">
										HG </div>
									<div class="tm-title">
										美铜
									</div>
									<div class="tm-imgtags">
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAUCAMAAABs8jdaAAAAflBMVEUAAAD////80of90IT9zH781Ir+qU/9v23/ki/8zoL9yXv9t2L9w3P82pH/kS3+uGL/mjv804j/jyv9vmv9w3P+sVr8143/jyv9yXv+q1H+n0L/ki/+qE39vmv80Yb9t2L9vmv9w3P9yXv+n0L+pUn+q1H+sVr/ki7/ljT/mjtQRCt9AAAAHnRSTlMAAAILFRwnOU9ee4qTlJagqLe8wMjQ1+Dl5eby9/q3Tp1fAAAAcElEQVQI143GSwKCIBRA0ZsgUpnav0QJ7PNq/xts0qtpZ3QAypVBFfFg9SbGtX4eYywLAOxpmqZqYQCzyzlnW9dAm1JKo9uOjuqilrQPted8VwO3r4H+qnq6l+pw4fnhwQcREZEGwDVHCRsPzH7++Rsx0A8fjaN69QAAAABJRU5ErkJggg==" width="11" height="20">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_HG1805" style="color: red;">3.0970</span> <span class="per_price_HG1805" style="color: red;">0.650%</span>
								</div>
								<div class="tm-muted-txt">
									06:00-次日05:00 </div>
							</a>
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #FAE8E8;">
										DAX </div>
									<div class="tm-title">
										德指
									</div>
									<div class="tm-imgtags">
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAUCAMAAABs8jdaAAAAflBMVEUAAAD////80of90IT9zH781Ir+qU/9v23/ki/8zoL9yXv9t2L9w3P82pH/kS3+uGL/mjv804j/jyv9vmv9w3P+sVr8143/jyv9yXv+q1H+n0L/ki/+qE39vmv80Yb9t2L9vmv9w3P9yXv+n0L+pUn+q1H+sVr/ki7/ljT/mjtQRCt9AAAAHnRSTlMAAAILFRwnOU9ee4qTlJagqLe8wMjQ1+Dl5eby9/q3Tp1fAAAAcElEQVQI143GSwKCIBRA0ZsgUpnav0QJ7PNq/xts0qtpZ3QAypVBFfFg9SbGtX4eYywLAOxpmqZqYQCzyzlnW9dAm1JKo9uOjuqilrQPted8VwO3r4H+qnq6l+pw4fnhwQcREZEGwDVHCRsPzH7++Rsx0A8fjaN69QAAAABJRU5ErkJggg==" width="11" height="20">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><span style="font-size:12px;border: 1px solid #CCC;margin-left: 5px;padding: 1px;color:#CCC">休市中</span>
									</span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_DAX1806" style="color: red;">12242.0</span> <span class="per_price_DAX1806" style="color: red;">0.110%</span>
								</div>
								<div class="tm-muted-txt">
									14:00-次日04:00 </div>
							</a>
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #92A8CB;">
										HSI </div>
									<div class="tm-title">
										恒指
									</div>
									<div class="tm-imgtags">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_HSI1804" style="color: red;">30451</span> <span class="per_price_HSI1804" style="color: red;">0.555%</span>
								</div>
								<div class="tm-muted-txt">
									09:15-次日01:00 </div>
							</a>
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #CA7D6D;">
										MHI </div>
									<div class="tm-title">
										小恒指
									</div>
									<div class="tm-imgtags">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_MHI1804" style="color: red;">30451</span> <span class="per_price_MHI1804" style="color: red;">0.555%</span>
								</div>
								<div class="tm-muted-txt">
									09:15-次日01:00 </div>
							</a>
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #C2A45F;">
										CN </div>
									<div class="tm-title">
										富时A50
									</div>
									<div class="tm-imgtags">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_CN1804" style="color: red;">12607.5</span> <span class="per_price_CN1804" style="color: red;">0.739%</span>
								</div>
								<div class="tm-muted-txt">
									09:00-16:30 </div>
							</a>
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #C66EBD;">
										NQ </div>
									<div class="tm-title">
										小纳指
									</div>
									<div class="tm-imgtags">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_NQ1806" style="color: red;">6574.50</span> <span class="per_price_NQ1806" style="color: red;">1.193%</span>
								</div>
								<div class="tm-muted-txt">
									06:00-次日05:00 </div>
							</a>
							<a class="xqh-grid-item" href="http://130161.com/Content/index/show/catid/15/id/36/moni/1.html">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #FAE8E8;">
										BP </div>
									<div class="tm-title">
										英镑
									</div>
									<div class="tm-imgtags">
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAUCAMAAABs8jdaAAAAflBMVEUAAAD////80of90IT9zH781Ir+qU/9v23/ki/8zoL9yXv9t2L9w3P82pH/kS3+uGL/mjv804j/jyv9vmv9w3P+sVr8143/jyv9yXv+q1H+n0L/ki/+qE39vmv80Yb9t2L9vmv9w3P9yXv+n0L+pUn+q1H+sVr/ki7/ljT/mjtQRCt9AAAAHnRSTlMAAAILFRwnOU9ee4qTlJagqLe8wMjQ1+Dl5eby9/q3Tp1fAAAAcElEQVQI143GSwKCIBRA0ZsgUpnav0QJ7PNq/xts0qtpZ3QAypVBFfFg9SbGtX4eYywLAOxpmqZqYQCzyzlnW9dAm1JKo9uOjuqilrQPted8VwO3r4H+qnq6l+pw4fnhwQcREZEGwDVHCRsPzH7++Rsx0A8fjaN69QAAAABJRU5ErkJggg==" width="11" height="20">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_BP1806" style="color: green;">1.4161</span> <span class="per_price_BP1806" style="color: green;">-0.085%</span>
								</div>
								<div class="tm-muted-txt">
									06:00-次日05:00 </div>
							</a>
							<a class="xqh-grid-item" href="http://130161.com/Content/index/show/catid/15/id/35/moni/1.html">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #8F97B3;">
										EC </div>
									<div class="tm-title">
										欧元
									</div>
									<div class="tm-imgtags">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_EC1806" style="color: green;">1.23700</span> <span class="per_price_EC1806" style="color: green;">-0.105%</span>
								</div>
								<div class="tm-muted-txt">
									06:00-次日05:00 </div>
							</a>
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #C2A45F;">
										AD </div>
									<div class="tm-title">
										澳元
									</div>
									<div class="tm-imgtags">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_AD1806" style="color: red;">0.7728</span> <span class="per_price_AD1806" style="color: red;">0.299%</span>
								</div>
								<div class="tm-muted-txt">
									06:00-次日05:00 </div>
							</a>
							<a class="xqh-grid-item" href="">
								<div class="tm-flex-row">
									<div class="xtype-img" style="background-color: #92A8CB;">
										CD </div>
									<div class="tm-title">
										加元
									</div>
									<div class="tm-imgtags">
									</div>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span style="font-size:12px;"><font color="red">交易中</font></span>
								</div>
								<div class="tm-state-txt uk-text-muted">
									<span class="pro_price_CD1806" style="color: red;">0.78925</span> <span class="per_price_CD1806" style="color: red;">0.114%</span>
								</div>
								<div class="tm-muted-txt">
									06:00-次日05:00 </div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" charset="utf-8">
			mui.init();
			$(function() {
				ws = new WebSocket("ws://47.100.130.137:8282");
				ws.onopen = function() {
					console.log("链接成功");
					ws.send('{"command":"binduid","uid":"get_hangqing"}');
				};
				ws.onmessage = function(e) {
					var data = eval("(" + e.data + ")");
					$(data.data).each(function(index, item) {
						if(item.lastprice) {
							$(".pro_price_" + item.prono).html(item.lastprice);
							$(".per_price_" + item.prono).html(item.perprice + '%');
							var price1 = $(".chengjiao_" + item.prono).attr("price1");
							var price0 = $(".chengjiao_" + item.prono).attr("price0");
							var shoushu = parseInt($(".chengjiao_" + item.prono).attr("shoushu"));
							var totalprice = 0;
							var perprice = parseFloat(item.perprice);
							if(perprice < 0) {
								$('.pro_price_' + item.prono).css("color", 'green');
								$('.per_price_' + item.prono).css("color", 'green');
							} else {
								$('.pro_price_' + item.prono).css("color", 'red');
								$('.per_price_' + item.prono).css("color", 'red');
							}
						}
					})
				};
			})
		</script>

	</body>

</html>