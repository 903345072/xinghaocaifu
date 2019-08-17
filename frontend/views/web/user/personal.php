
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

		<style type="text/css">
			.nav-list>li {
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



		<script type="text/javascript">
			//<![CDATA[
			(function($) {
				$.fn.countdown = function(options) {
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
						if((m = /^(\d{4})[^\d]+(\d{1,2})[^\d]+(\d{1,2})\s+(\d{2})[^\d]+(\d{1,2})[^\d]+(\d{1,2})$/.exec(str))) {
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
					return this.each(function() {
						var el = this,
							diff = getDiffTime($(el).attr(options.attrName));

						function update() {
							if(diff <= 0) {
								$(el).html(options.end);
								if(options.afterEnd) {
									options.afterEnd();
								}
								return;
							}
							$(el).html(format(diff));
							setTimeout(function() {
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
		<script type="text/javascript">
			function getphone() {
				phone = $('#phone').val();
				if(phone == '') {
					layer.msg('请先输入手机号码！');
					return false;
				}
				return {
					phone: phone,
					codetype: 'setpwd'
				};
			}

			function cutdowns() {
				$('#coderadn').hide();
				$('#cutdown').show();
				$('#cutdown').countdown({
					tmpl: '%{s}</span>秒后重新发送',
					afterEnd: function() {
						$('#cutdown').hide();
						$('#coderadn').show();
					}
				});
			}

			function setcall(obj, datajson) {
				document.location = '/Member/index/my_info.html';
			}
		</script>
		<div class="content">
			<div class="tm-container bg-color">
				<div class="title-gg">
					<ul class="back-herf">
						<li><i><img src="data:image/webp;base64,UklGRsgAAABXRUJQVlA4TLsAAAAvDgAEEN8xNNM9NIzbNnKcPMmbw93rAs+FEAAA0FHQEQRCfCgY6BATYqCioyIoCH4AEIgBsfBiYkKAIACgAgRgIBAFAagQoAJibNuqmo27u7s7REh2/5V9GUqI6P8E8MHM8PB+H0fZsOLF0Gs5kD4bec0BA3VRrUzVMbDTNcBKT8CvdgIt/QN+tB/o6T+w0UcB8lfdAm31NZs81S6QOBt5SwI0opqEzsOWhKf2gVM2gtKXfleIWbve63wWAA==" data-pagespeed-url-hash="1346039489" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/default/new/images/nowdd.png" data-pagespeed-lsc-hash="KoFCUklAK_" data-pagespeed-lsc-expiry="Mon, 09 Apr 2018 08:24:46 GMT"></i><span><a href="http://130161.com/member">首页</a>&gt;</span></li>
						<li>
							<a href="http://130161.com/Member/index/my_info.html">个人中心</a>&gt;</li>
						<li>
							<a href="http://130161.com/Member/index/my_info.html">个人资料</a>&gt;</li>
					</ul>
				</div>
				<div class="cz-body">
					<div class="cz-left">
						<div class="user-tx">
							<div class="tm-text-center user-icon">
								<div><img src="./my_files/x59d3a15758cc0.png.pagespeed.ic.C4kuq286SG.webp" alt="" data-pagespeed-url-hash="4215060136" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></div>
								<p>13572544114</p>
							</div>
							<div class="user-body">
								<p class="mn-number" style="text-align: center"><span style="font-size: 14px;">账户余额(元):￥0.00</span></p>
								<p class="mn-number" style="text-align: center"><span style="font-size: 14px;">可用积分：2100</span></p>
								<p class="user-icon-btn">
									<a href="http://130161.com/Member/index/tixian.html" id="tixian_css">提现</a>
									<a href="http://130161.com/Member/index/chongzhi.html" id="chongzhi_css">充值</a>
								</p>
							</div>
						</div>
						<ul class="cz-left-list">
							<li>
								<a href="<?= url(['user/password']) ?>"  target="frame">任务中心</a>
							</li>
							<li>
								<a href="<?= url(['user/password']) ?>"  target="frame">信息中心</a>
							</li>
							<li class="">
								<a href="<?= url(['user/password']) ?>"  target="frame">我的积分</a>
							</li>
							<li>
								<a href="<?= url(['user/password']) ?>"  target="frame">公告</a>
							</li>
							<li class="">
								<a href="<?= url(['user/password']) ?>"  target="frame">资金明细</a>
							</li>
							<li class="">
								<a href="<?= url(['user/password']) ?>"  target="frame">交易记录</a>
							</li>
							<li class="">
								<a href="<?= url(['ptp']) ?>"  target="frame">推广赚钱</a>
							</li>
							<li class="gr-list-active">
								<a href="<?= url(['user/password']) ?>"  target="frame">修改密码</a>
							</li>
							<li class="">
								<a href="<?= url(['password']) ?>"  target="frame">模拟交易列表</a>
							</li>
							<li class="">
								<a href="<?= url(['password']) ?>"  target="frame">意见反馈</a>
							</li>
						</ul>
					</div>
					<div class="cz-right">
					
						<iframe id="framid" name="frame" src="<?= url(['password']) ?>" class="tabcontent" style="width:100%;height:770px;" frameborder="0" scrolling="auto" marginheight="0" marginwidth="0"></iframe>
					</div>
				</div>
			</div>
		</div>
		<script src="/pc/js/mui.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			mui.init();
		</script>
		
		
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/layer.js"></script>
		<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
		<script type="text/javascript" src="js/uikit.min.js"></script>
		<script type="text/javascript" src="js/accordion.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
		<script type="text/javascript">
//			$(function() {
//				jQuery(".slideBox").slide({
//					mainCell: ".bd ul",
//					effect: "left",
//					duration: 10,
//					autoPlay: true
//				});
//			})
			$(window).load(function(){
				
				var ifrSrc = $("#framid").attr("src");
				//console.log(ifrSrc);
				$(".cz-left-list li").click(function(){
					$(this).addClass('gr-list-active').siblings().removeClass('gr-list-active');
					var liA = $(this).children("a").attr("href");
//					console.log(liA);
					$("#framid").attr("src",liA)
				})
			})
		</script>

