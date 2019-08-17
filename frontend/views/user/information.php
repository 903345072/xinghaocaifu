<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<title>资讯</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
			<link rel="stylesheet" href="/css/layer.css" id="layui_layer_skinlayercss" style="">
        <link href="/css/mui.min.css" rel="stylesheet">
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/layer.js"></script>
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
		&lt;meta HTTP-EQUIV="refresh" content="0;url='http://192.168.0.10:6001/Home/index/news.html?PageSpeed=noscript'" /&gt;&lt;style&gt;&lt;!--table,div,span,font,p{display:none} --&gt;&lt;/style&gt;&lt;div style="display:block"&gt;Please click &lt;a href="http://192.168.0.10:6001/Home/index/news.html?PageSpeed=noscript"&gt;here&lt;/a&gt; if you are not redirected within a few seconds.&lt;/div&gt;
		</noscript>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">资讯</h1>
		</header>

		<div class="mui-content">
			<div class="tm-tab tm-tab-blue">
				<a class="tm-tab-item mui-active" href="">
					资讯直播
				</a>
			</div>
			<div class=" ">
				<div class="tm-news-group">
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 15:45:17
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据俄罗斯卫星网：俄罗斯外交部表示，俄外长拉夫罗夫将在4月23日至24日访华期间与中国外长王毅讨论筹备普京访华、朝鲜半岛局势、叙利亚和伊朗核协议问题。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 15:35:52
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【行情】据Bitstamp比特币报价平台显示，比特币突破9000美元关口，刷新近一个月高位。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 15:28:45
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<font color="" class="important-text"><b>北欧联合银行前瞻下周四（26日）欧洲央行利率决议：近期欧元区经济表现不佳 欧洲央行料将按兵不动</b></font>
								<br>
								鉴于3月会议后欧元区经济数据表现不佳，欧洲央行在考虑退出净资产购买项目的举措上不得不持更近谨慎的态度。我行预计，下周四的利率决议会议上，欧洲央行料将按兵不动。改变前瞻性指引意味着欧洲央行离结束净资产购买项目及加息又更近一步，目前来看，欧洲央行还没有做好此类准备。在下周会议上，预计欧洲央行希望能够继续强调耐心、谨慎与坚持的重要性。因此，欧洲央行不会对前瞻性指引作出任何更改，新闻发布会上，欧洲央行行长德拉基的措辞则将相对偏鸽。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 15:08:22
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据俄罗斯卫星网：俄罗斯财长西卢安诺夫在华盛顿会见了外国投资者，讨论了在对俄制裁条件下的相互协作问题。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 14:52:36
						</div>
						<div class="tm-news-item-body">
							<a href="">
								北欧联合银行：在改变前瞻性指引的同时宣布延长购债规模能够弱化欧洲央行政策变动的明显程度，同时为欧洲央行于2019年上半年结束净资产购买项目铺平道路。欧洲央行或最早于6月会议上释放变动货币政策的信号。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 14:47:55
						</div>
						<div class="tm-news-item-body">
							<a href="">
								北欧联合银行：预计欧洲央行将于7月会议上将再度宣布延长净资产购买项目时间6个月，但下调每月购债规模至150亿欧元。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 14:47:41
						</div>
						<div class="tm-news-item-body">
							<a href="">
								北欧联合银行：预计欧洲央行在7月会议前不会改变前瞻性指引，除非通胀数据显著提升。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 14:34:58
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b><font color="" class="important-text">丹斯克银行前瞻下周四（26日）欧洲央行利率决议：欧洲央行料将按兵不动 首次加息时间或将推迟</font></b>
								<br>
								预计下周四欧洲央行利率决议不会有任何政策上的变动。我行认为，欧洲央行最早将于2019年12月进行第一次加息，上调存款利率20个基点。与欧洲央行通胀预期相比，近期通胀数据让人失望。且近期多项经济活动指标录得下滑，欧洲央行或会于6月份的利率决议会议上下调欧元区经济增速预期。综上所述，我行认为，欧洲央行推迟首次加息时间的可能性较高，根据近期经济发展状态来看，欧洲央行目前对欧元区的经济发展预期过于乐观。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 14:15:18
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【资本压注开放马彩 海南多家公司彩票经营范围遭清理】2016年起民资密集在海南设立新公司，或意在布局体育竞技、彩票等项目。但17年10月16日，经营范围发生变更，变更后的内容中找不到彩票、互联网彩票等字样。据知情人士透露，海南省工商行政管理局17年10月13日发布一则紧急通知要求，自通知之日起，辖区内凡名称或经营范围包括“彩票”“互联网彩票”“互联网彩票技术研发”“代理发行足球彩票”“彩票销售代理”等字样的市场主体，3日内到工商部门办理变更登记，删除名称和经营范围中含有上述字样的表述。（中国经营报）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 14:09:29
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据路透：伊朗总统鲁哈尼表示，如果美国撕毁核协议，伊朗原子能组织将准备对美采取“意料之中及意料之外”的应对措施。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 13:59:14
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据新浪财经：新三板转H股出炉！消息人士称，该政策还有利于提升新三板优质公司的质量。A+H的经验模式，AH股存在溢价的情况，在于H股部分还需要承受汇率的风险。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 13:55:21
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>【外媒：中兴将向美国商务部递交更多证据】</b>据《华尔街日报》报道，中兴通讯本周将有机会向对其实施制裁的美国商务部递交更多证据。美国商务部的一名高级官员对外透露称，周五晚上，官方机构已经批准了中兴通讯想要提供更多信息的请求。这名官员称，根据官方规定，中兴通讯并没有提起行政诉讼的权利，但美国官方已同意随后通过非正式程序接受这些证据。这名美国商务部官员同时表示，“我们认为，不采取制裁措施是适当的。”（环球网）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 13:52:00
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据中国证券网：“新三板+H股”正式落地。全国中小企业股份转让系统公司（下称“全国股转公司”）与香港交易及结算所有限公司（下称“港交所”）21日在京签署合作谅解备忘录。根据这份备忘录，双方欢迎对方市场符合条件的挂牌/上市公司在本市场申请挂牌/上市。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 13:35:51
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【报道】证监会副主席方星海在中国金融学会绿色金融专业委员会举办的2018绿金委年会上表示，我们的目的是到2020年年底对所有的上市公司，在信息披露的时候，都强制性的要求披露环境信息。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 13:31:07
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【报道】G20财政部长和中央银行行长会议讨论了贸易争端对全球经济增长的影响，但未就具体的贸易措施展开讨论。G20轮值主席国阿根廷央行行长费德里科·斯图塞内赫尔呼吁，发达经济体和新兴经济体都认识到应更加平等地分享贸易红利，普遍呼吁支持多边主义。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 13:16:04
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【有上游企业给相关生产线员工放假 中兴通讯事件连锁反应】深圳某科技企业的员工对经济观察报称，受中兴通讯事件影响，该公司已有上千名员工休假，复工时间尚不可知。对于人事招聘，先前提交的需求，即使已经被领导批准，现已全部归零，自4月20日起，如需招聘月薪制人员，需经过董事长同意、签字。如果中兴通讯没能挺过今次难关，众多的中小型供应商和企业员工将被波及。除开中兴通讯自身的8万员工、中兴通讯供应商、渠道商受影响外，还有相当一批中兴通讯合营和联营的企业会在覆巢之下。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 13:02:32
						</div>
						<div class="tm-news-item-body">
							<a href="">
								丹斯克银行：我行预计，欧元区4月制造业PMI将下滑至55.5（前值为58.2），4月服务业PMI指数则将下滑至54.3。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 13:02:10
						</div>
						<div class="tm-news-item-body">
							<a href="">
								丹斯克银行：预计下周一公布的欧元区PMI指数将进一步录得下滑。数项调查显示，欧元区经济乐观情绪下降，对贸易战的恐惧及去年欧元的升值已经开始对欧元区经济活动产生影响。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 12:44:42
						</div>
						<div class="tm-news-item-body">
							<a href="">
								外交部回应朝鲜决定停止核导试验：
								<br>
								中方认为，朝方有关决定有助于进一步缓和半岛局势，有助于推动半岛无核化和半岛问题政治解决进程。(央视新闻)
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 12:42:18
						</div>
						<div class="tm-news-item-body">
							<a href="">
								外交部回应朝鲜决定停止核导试验：祝愿朝鲜在发展经济，提高人民生活水平的道路上不断取得成果，支持朝方通过对话协商同有关各方解决各自关切，改善相互关系。(央视新闻)
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 12:40:25
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【四个“跌停” 长信基金、中信保诚基金再度下调中兴通讯估值】长信基金今日公告，自4月20日起，对公司旗下基金持有的股票“中兴通讯”进行估值调整，估值价格为20.54元。而就在3天前即4月18日，长信基金才公告表示自4月17日起，对公司旗下基金持有的中兴通讯进行估值调整，估值价格为25.36元。三天前将中兴通讯估值下调到25.05元的中信保诚基金今日也再度出手，将估值下调至20.04元，较停牌前股价下调了36%，比4个跌停还多。（新浪）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 12:37:30
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【国资委智库：国有资本运营公司不宜追求金融全牌照】国务院国资委研究中心副主任卢永真称，国有资本运营公司不是金融控股公司，不宜追求金融全牌照，应着力发挥在提高效率方面的能力，将国有资本从当前回报率不高、未来成长潜力不大的领域调整到高成长、潜在成长空间大的领域，从而提高国有资本的回报率。（新浪）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 12:17:31
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【国资委研究中心：央企将在三大重要领域加强并购重组】国资委研究中心21日发布的《2018中国国企国资改革发展报告》中提出,未来一年，央企将在重要前瞻战略产业、生态环境保护、共用技术平合等重要行业和领域加强重组并购。在一定时期内，并购重组将成为国企改革发展的中心枢纽，强强联合、拆分重组、混合参股、关停并转、内部重组等多种方式的重组整合案例将持续涌现。（证券时报）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 12:06:00
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【报道】国际货币基金组织(IMF)亚太部主任李昌镛表示，IMF对中国经济前景保持乐观，认为中国将继续缩小与发达经济体的差距，保持相对较高的生产率增速，并继续推进经济结构改革，这些因素将支持中国中期经济前景。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 11:40:54
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【报道】北京市统计局最新数据显示，今年一季度北京商品房销售面积为78.9万平方米，同比下降66%，其中住宅销售面积为54.2万平方米，降59.6%。供给方面，一季度北京商品房新开工面积为154.8万平方米，同比降52.7%。（新华社）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 11:33:59
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美国总统特朗普：一切都在进步！
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 11:32:27
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美国总统特朗普：收到朝鲜最高领导人金正恩发来的消息，消息称朝鲜将停止核试验和发射洲际弹道导弹，此外，朝鲜还将关闭北部的核试验基地，以践行朝鲜停止核试验的承诺。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 11:23:32
						</div>
						<div class="tm-news-item-body">
							<a href="">
								证监会副主席方星海：近年来我国绿色金融呈现良好发展态势，证监会积极推动绿色金融发展。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 10:25:12
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据央视：国家海事局20日发布舟山黄大洋海域实弹演习通告，演习时间为4月24日至25日。期间，演习水域禁止一切无关船舶航行、作业或锚泊。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 10:10:11
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【肖亚庆：国企要加强资源领域国际合作 引入外资参与重组改制】国资委主任肖亚庆表示，目前，我国油气对外依赖度为70%，矿石燃料依赖度超过80%，有色金属多品种更是超过90%，国企要在扩大开放合作中提升国际资源配置能力。国企要进一步加大开放力度，加强与国际上的能源、矿产资源领域合作，引入外资参与重组改制，加快建成面向全球的资源配置和生产格局。（中国证券网）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 09:48:42
						</div>
						<div class="tm-news-item-body">
							<a href="">
								国资委主任肖亚庆：必须加快建成面向全球的资源配置和生产服务系统，不断扩大海外经营规模，提高海外市场份额，优化全球布局结构，打造国际知名品牌，形成国际竞争新优势”。（在第二届中国企业改革发展论坛上发言）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 09:47:36
						</div>
						<div class="tm-news-item-body">
							<a href="">
								国资委主任肖亚庆：要进一步加大开放力度，加强与跨国公司的交流合作，特别是要继续深化在能源、矿产资源等领域的合作，积极引进外资等各类资本参与重组改制。（新浪）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 09:17:07
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本首相安倍晋三：但声明需要转化为切实的去核化行动。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 09:16:08
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本首相安倍晋三：日本对朝鲜的声明表示欢迎，这是进步之举。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 08:31:58
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【公告】中国央行：易纲行长出席二十国集团财长和央行行长会议：
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 08:28:34
						</div>
						<div class="tm-news-item-body">
							<a href="">
								中国央行行长易纲：中国经济继续向好，主要指标优于预期。2018年第一季度GDP增长6.8%，消费增长强劲，企业利润改善。就业形势良好，物价水平稳定，人民币汇率升值。与此同时，经济增长的结构和质量继续改善。当前贸易争端为金融市场和资本流动带来了巨大不确定性。各方应坚持多边主义，维护以规则为基础的多边贸易体系。中国将进一步推动改革，扩大开放，应对未来挑战。（中国央行发布易纲行长出席二十国集团财长和央行行长会议的公告）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 08:25:59
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【专家：未来货币政策还有调整空间 】中国国际经济交流中心副总经济师徐洪才表示，目前商业银行对央行的债务达10.8万亿元，当前7天逆回购货币市场利率约在2.55%，MLF 3个月短期利率在2.6%左右，6个月以上等更长时间的利率在3%以上。但另一方面，有22万亿元资金锁定在中央银行里面，中央银行支付给商业银行的利息是1.62%，这中间至少有将近0.9个百分点的利差。此次央行在优化货币政策结构、优化货币政策工具迈出了一步，将来还有很大的空间。（证券日报）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 08:25:03
						</div>
						<div class="tm-news-item-body">
							<a href="">
								中国央行：2018年4月20日，中国央行行长易纲在美国华盛顿出席国际货币基金组织/世界银行春季例会系列会议期间，会见了美联储主席鲍威尔，就中美经济金融形势、货币政策等议题交换了意见。（中美两国央行新任行长首度会晤）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 07:56:51
						</div>
						<div class="tm-news-item-body">
							<a href="">
								韩国青瓦台：朝鲜的决定将为峰会的成功举行创造相当不错的条件。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 07:55:54
						</div>
						<div class="tm-news-item-body">
							<a href="">
								韩国青瓦台：朝鲜这一决定是在去核化进程上取得的重要进展。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 07:55:03
						</div>
						<div class="tm-news-item-body">
							<a href="">
								韩国青瓦台：韩国对朝鲜停止发射导弹的计划表示欢迎。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 07:50:57
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【九成高净值客户一季度试探性加仓中小创】调查显示，九成高净值客户今年一季度加仓了成长股，但79%的客户观望心态厚重，仅做了小仓位买入，大举调仓买入的客户仅占11%。对于加仓标的，24%的高净值客户加仓科技成长股，18%加仓创业板蓝筹股，15%加仓独角兽相关企业。还有约四成客户加仓周期股、白马股及金融大盘蓝筹股等。（上证报）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 07:38:37
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本财务省高级官员：日本将继续寻求在美国钢铝关税上的永久豁免。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 07:36:26
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本财务省高级官员：麻生太郎和努钦的双边会晤中并未提及美元兑日元的走势。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 07:14:36
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本财务大臣麻生太郎：与美国财长努钦进行双边对话时，向其传达了日本对贸易保护主义的担忧。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 07:13:53
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本财务大臣麻生太郎：朝鲜之前曾作出许多承诺，因此难以单凭几句话就下结论。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 07:01:13
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【金正恩：朝鲜将不再进行核试验及洲际弹道导弹发射】朝中社报道，朝鲜最高领导人金正恩20日宣布，朝鲜将从21日开始不再进行任何核试验和洲际弹道导弹发射，废弃朝鲜北部核试验场。只要朝鲜不受核威胁挑衅，朝鲜绝对不使用核武器，不泄露核武器和核技术，集中全部力量发展经济，并将与周边国家和国际社会积极展开紧密联系和对话。（央视）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 07:00:07
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本央行行长黑田东彦：维持宽松是因通胀仍未达到2%目标。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:59:19
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本央行行长黑田东彦：日本央行将耐心维持大力度的宽松政策。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:58:37
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本财务大臣麻生太郎：同美国财长努钦讨论了外汇问题。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:56:35
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本财务大臣麻生太郎：日美在如何构建贸易对话方面的确存在分歧。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:55:42
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【行情】据Bitfinex、Bitstamp等多家比特报价平台报价显示，比特币突破8900美元关口，日内涨幅逾7%。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:54:59
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>美国总统特朗普：朝鲜已同意停止核试验，这是非常好的消息，期待与金正恩举行峰会。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:47:32
						</div>
						<div class="tm-news-item-body">
							<a href="">
								日本财务大臣麻生太郎：日本经济基本面稳健，正处于良性循环中。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:39:38
						</div>
						<div class="tm-news-item-body">
							<a href="">
								法国经济部长勒梅尔：法国和德国一道正走在欧元区改革的正确道路上。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:38:02
						</div>
						<div class="tm-news-item-body">
							<a href="">
								法国经济部长勒梅尔：法国支持为国际货币基金组织增加资本。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:36:23
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据新华社：据朝中社21日报道，朝鲜决定自4月21日起停止核试验和洲际弹道导弹发射试验。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:36:10
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【行情】据Bitfinex、Bitstamp等多家比特报价平台报价显示，比特币突破8700美元关口，日内涨幅逾5%。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:20:54
						</div>
						<div class="tm-news-item-body">
							<a href="">
								法国经济部长勒梅尔：不能接受美国对法国或整个欧盟施加新的关税，预计美方将提供全面的永久性豁免。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:20:14
						</div>
						<div class="tm-news-item-body">
							<a href="">
								法国经济部长勒梅尔：必须移除欧盟面临的关税威胁，妥善处理好对华贸易问题。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:18:34
						</div>
						<div class="tm-news-item-body">
							<a href="">
								欧洲央行管委维勒鲁瓦：虽然2018年第一季度法国经济增速有所放缓，但未来两到三年内将继续提高或维持坚挺。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:09:55
						</div>
						<div class="tm-news-item-body">
							<a href="">
								法国财长：一些经济体经济过热的风险可能会导致一些泡沫。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:02:13
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据华尔街日报：美国参议院外事关系委员会所有民主党人以及一名共和党人反对蓬佩奥的提名。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 06:00:53
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据华尔街日报：不管委员会投票结果如何，全体参议员可能仍就蓬佩奥的提名进行投票。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:59:30
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据华尔街日报：预计参议院外事关系委员会将在周一就蓬佩奥的任命进行投票。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:58:45
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据华尔街日报：美国候任国务卿蓬佩奥预计不会有足够票数获得参议院外事关系委员会的支持。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:56:33
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据朝中社：朝鲜将从4月21日起停止核试验以及洲际导弹的发射。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:51:47
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据朝中社：朝鲜将与国际社会进行对话以实现和平和经济增长。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:46:24
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据ABC新闻：美国参议院外事关系委员会民主党参议员Chris Coons将反对蓬佩奥担任国务卿。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:42:48
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据韩联社：朝鲜最高领导人金正恩称朝鲜的核试验完成了其使命。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:41:11
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据韩联社：朝鲜领导人称不需要核试验和导弹测试。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:34:29
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【提示】Mira Ricarde前美国国防部高官，过去10年一直在波音公司网络和空间系统以及战略导弹和防御系统部门工作。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:32:10
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据新浪：白宫任命MIRA RICARDEL为副国家安全顾问。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:28:34
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据俄罗斯卫星网：《每日电讯报》引侦查人员报道，英国执法人员确认俄前特工斯克里帕利中毒案主要嫌疑人。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 05:15:41
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【肖尔茨：德国反对贸易主义】德国财长肖尔茨在IMF与世界银行举行的春季会议上表示，在贸易紧张局势不断加剧的情况下，德国坚决反对任何形式的贸易保护主义。他认为，转向内向型政策以及反对自由贸易是所有经济体面临的共同威胁，保护主义会损害贸易以及经济增速。此外，他还表示，在就业增长稳定、消费者和企业信心增强、投资环境改善以及非常宽松的货币政策推动下，欧元区19国经济增长势头强劲。（福克斯新闻）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 04:59:38
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【美国10年期国债收益率创2014年1月份以来盘中新高】本周，随着投资者重新押注通胀，美国国债的销售加速，10年期国债收益率涨至2014年1月份以来新高，并创下2月2日以来最大单周涨幅。今年早些时候，市场对通胀加速上升的担忧推动股市和债券价格双双大幅走低，但抛售压力似乎在3月底逐渐减弱。但是近期油价的上涨刺激了投资者对通胀的押注，使得固定支付债券承压——当通胀上涨时，固定支付债券的价值会降低。（华尔街日报）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 04:46:55
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据CNBC：据悉美国司法部盯上全部四家大型无线运营商。&#8203;&#8203;&#8203;
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 04:30:41
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【联想控股尝鲜H股全流通 A+H上市公司有望长期受益】联想控股有望成为建设银行后，第二家全流通的H股上市公司。业内人士认为，尽管在短期内，H股全流通的实施将使内资股存在一定程度上的减持压力，但从长期来看，H股全流通将解决内资股股东与H股同股同权却不同利的问题，将明显改善公司治理和增强管理层激励。（21财经）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 04:05:00
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【股市收盘】
								<br>
								标普500指数4月20日（周五）收盘下跌22.99点，跌幅0.85%，报2670.14点；
								<br>
								纳斯达克指数4月20日（周五）收盘下跌91.90点，跌幅1.27%，报7146.13点；
								<br>
								道琼斯指数4月20日（周五）收盘下跌202.00点，跌幅0.82%，报24462.94点。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 04:04:44
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【行情】道指本周上涨0.4%，标普500上涨0.5%，纳指上涨0.6%。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:58:52
						</div>
						<div class="tm-news-item-body">
							<a href="">
								特朗普竞选团队：诉讼是完全没有价值的，将在适当的时候被驳回。
								<br>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:58:26
						</div>
						<div class="tm-news-item-body">
							<a href="">
								特朗普竞选团队：民主党对所谓特朗普竞选团队与俄罗斯勾结的起诉是无聊的。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:56:12
						</div>
						<div class="tm-news-item-body">
							<a href="">
								特朗普政府高级官员：与欧盟国家就美国对伊朗核协议担忧的讨论还未完成。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:54:05
						</div>
						<div class="tm-news-item-body">
							<a href="">
								特朗普政府高级官员：双方还将讨论近期对叙利亚的联合打击以及伊朗在中东地区的恶性影响。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:53:05
						</div>
						<div class="tm-news-item-body">
							<a href="">
								特朗普政府高级官员：总统特朗普将在下周与法国总统马克龙讨论伊朗核协议问题。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:51:41
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>CFTC：投机者所持欧元净多头头寸增至历史新高。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:49:41
						</div>
						<div class="tm-news-item-body">
							<a href="">
								北京市副市长殷勇：中美应该推动服务贸易以实现贸易平衡；人民币汇率不是解决美中贸易失衡的办法。（新浪）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:48:24
						</div>
						<div class="tm-news-item-body">
							<a href="">
								CFTC：投机者所持美元净空头头寸增至2011年8月份以来新高。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:43:21
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【报道】尽管在美国宣布制裁俄铝后，铝价已经连续攀升。但美国咨询公司HarborIntelligence认为铝价仍有上涨空间，铝产业从未经历过对供应有如此影响力的事件，不认为市场当前完全消化了制裁对铝供应的影响。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:27:53
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【行情】美国10年期国债收益率涨至2.955%，创2014年1月份以来盘中新高。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 03:11:41
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【报道】智利铜业协会预计2018年智利铜产量将较2017年涨4.3%至576万吨。政府预计由于亚洲国家经济增长，将带动中国对铜的需求。预计中国的铜需求在2018年将达到1210万吨，2019年将达到1240万吨。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:53:06
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【法国拒绝卷入贸易战：徒劳无益】法新社报道，法国经济部长勒梅尔当地时间20日表示，法国希望获得美国铁铝关税的永久豁免权，并且拒绝卷入美国发起的贸易战。“我们并不满足于铁铝关税的临时豁免”，勒梅尔在世界银行和国际货币基金组织春季会议期间说。他还表示不会加入贸易战，“这是徒劳无益的。”（微天下） &#8203;&#8203;&#8203;
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:38:43
						</div>
						<div class="tm-news-item-body">
							<a href="">
								瑞银：油价走高可能影响美国消费者行为和通胀预期。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:32:30
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【行情】上期能源原油期货夜盘收盘，主力合约SC1809收报439.5元，日内跌幅0.09%，成交量52160手。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:31:00
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【交易所收盘】
								<br>
								上海黄金交易所黄金T+D 4月21日（周六）晚盘收盘下跌0.35%报272.00元/克；
								<br>
								上海黄金交易所白银T+D 4月21日（周六）晚盘收盘下跌0.13%报3721.00元/千克。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:29:11
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【报道】苹果跌逾4%，接近两个月来最差单日表现。分析认为，苹果股价走低的原因是此前摩根士丹利警告称接下来几个月苹果销售可能放缓，并且苹果在中国的市场份额可能减少。此前台积电关于手机销售走软的预测，也被解读为对iPhone需求不佳的担忧。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:27:20
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储卡什卡利：市场回调并不会影响美联储政策方向。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:25:10
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储卡什卡利：2018年美国经济增速可能达3%。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:24:14
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储卡什卡利：美联储认为并无迹象表明危机来临。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:21:12
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储卡什卡利：通胀和薪资增速在缓慢走高，而没有加速走高。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:20:41
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储卡什卡利：收益率曲线趋平表明我们接近中性利率。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:19:56
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储卡什卡利：对国债收益率没有走高觉得很意外。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:19:23
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>美联储卡什卡利：对收益率曲线趋平表示担忧。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:05:56
						</div>
						<div class="tm-news-item-body">
							<a href="">
								金融博客零对冲：鉴于油市基本面已经多年没有这么好，油价的上涨并不令人意外。通胀也如此，因为二者之间有密切的关系。预计美国通胀率将在接下来几个季度朝着3%的方向发展，核心CPI则将升向2.5%的方向。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 02:02:32
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【央行降准银行理财收益率或小幅下降 P2P平台收益率触底影响不大】融360理财分析师刘银平认为，从短期来看，降准对股市、债市是利好。此外，近期市场流动性相对宽松，再加上受降准的影响，市场利率将小幅下滑，货币基金、银行理财、保险理财之类的固收理财产品收益率也有可能小幅下降。刘银平预计，P2P市场受此次降准的影响较小，今年P2P平台的平均收益率大致会回落至9%附近，之后再继续下跌的空间不大。（证券日报）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:50:29
						</div>
						<div class="tm-news-item-body">
							<a href="">
								巴西央行：2018年巴西经济增速预期在2.5%-3%是合理的。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:47:27
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>俄罗斯财政部：不考虑以国家名义购买铝。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:46:38
						</div>
						<div class="tm-news-item-body">
							<a href="">
								俄罗斯财政部：受制裁的企业表示大约需要1000亿卢布的援助。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:45:57
						</div>
						<div class="tm-news-item-body">
							<a href="">
								俄罗斯财政部：并没有考虑将俄铝国有化。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:45:36
						</div>
						<div class="tm-news-item-body">
							<a href="">
								俄罗斯财政部：俄罗斯将成立部门，以协调和帮助受制裁的企业。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:04:30
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【行情】美国至4月20日当周石油钻井总数创2015年3月以来新高。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:40:39
						</div>
						<div class="tm-news-item-body">
							<a href="">
								阿根廷财长：与美国的贸易谈话有积极进展。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:33:49
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据路透：截止4月17日当周，ICE气油投机性净多头持仓增加6765手至212246手。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:32:57
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据路透：截止4月17日当周，ICE布伦特原油投机性净多头持仓增加12572手至619882手。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:28:10
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【提示】美联储理事布雷纳德在CNBC的采访结束。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:27:47
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：在鲍威尔领导下的美联储有高度连续性。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:25:52
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：观察到市场出现了一些不稳定。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:24:41
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：大宗商品价格的走高反映了全球需求。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:24:17
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>美联储理事布雷纳德：目前看到经济增速稍显疲软。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:23:40
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：经济前景与渐进加息保持一致。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:23:19
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：前景预期是经济继续保持稳健发展态势。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:21:55
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：资产价格在一定程度上得到提升。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:21:27
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：更广泛的报复性贸易环境可能影响全球信心，但“这不是我们今天所处的状况”。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:21:17
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：就业市场正朝着充分就业发展。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:20:27
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：贸易谈判目前是经济前景的一个不确定性。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:20:21
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：通胀正在朝与预期一致的方向发展。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:19:47
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：通胀朝目标发展是很有鼓舞性的。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:19:44
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：贸易争端的扩展可能会损害经济前景。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:18:24
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：希望能够确保不平等不会继续发展。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:18:02
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：美国就业市场持续收紧。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:17:50
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>美联储理事布雷纳德：可能即将面临一些风险，需要保持警惕。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:17:06
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储理事布雷纳德：全球经济增长较为同步。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:12:04
						</div>
						<div class="tm-news-item-body">
							<a href="">
								墨西哥经济部长瓜哈尔多：北美自由贸易协定（NAFTA）必须是全面的，而非仅覆盖一些产业。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:08:10
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据德国商报：欧洲央行要求德意志银行就短暂向外汇出350亿美元的错误进行说明。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:06:48
						</div>
						<div class="tm-news-item-body">
							<a href="">
								墨西哥经济部长瓜哈尔多：各国部长将于下周二再次会面，就北美自由贸易协定（NAFTA）进行谈话。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:05:44
						</div>
						<div class="tm-news-item-body">
							<a href="">
								墨西哥经济部长瓜哈尔多：北美自由贸易协定（NAFTA）谈判员致力于达成好的协议。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:05:36
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>【行情】钻井数据公布后，美、布两油暂时波动不大。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:05:00
						</div>
						<div class="tm-news-item-body">
							<a href="">
								加拿大外交部长弗里兰：各国部长将于下周再次会面。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							美国至4月20日当周石油钻井总数(口)
						</div>
						<div class="tm-news-item-body">
							<a href="">
								815
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							美国至4月20日当周天然气钻井总数(口)
						</div>
						<div class="tm-news-item-body">
							<a href="">
								192
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:03:29
						</div>
						<div class="tm-news-item-body">
							<a href="">
								加拿大外长弗里兰：北美自由贸易协定（NAFTA）谈判员需要花费时间来达成好的协议。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 01:03:20
						</div>
						<div class="tm-news-item-body">
							<a href="">
								加拿大外交部长弗里兰：北美自由贸易协定国家进行了卓有成效的会谈。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							美国至4月20日当周总钻井总数(口)
						</div>
						<div class="tm-news-item-body">
							<a href="">
								1008
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:53:55
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据中证网：市场人士分析，H股全流通类似A股股权分置改革，将对活跃港股市场起到积极作用。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:50:00
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【数据提示】美国至4月20日当周石油钻井总数将在十分钟后公布。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:49:13
						</div>
						<div class="tm-news-item-body">
							<a href="">
								法国外长：俄罗斯阻碍了国际禁止化学武器组织（OPCW）调查小组进入杜马镇的行动。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:46:35
						</div>
						<div class="tm-news-item-body">
							<a href="">
								阿根廷财长：贸易争端是全球经济增长三大主要担忧之一。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:46:00
						</div>
						<div class="tm-news-item-body">
							<a href="">
								阿根廷财长：在G20的一些讨论中涉及了对贸易争端的担忧。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:43:58
						</div>
						<div class="tm-news-item-body">
							<a href="">
								意大利力量党领袖贝卢斯科尼：不希望也不可能与五星运动党组阁。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:43:06
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据路透援引消息人士：欧洲央行政策正常化路径并未受近期数据走软影响，仍将于今年结束量宽。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:42:09
						</div>
						<div class="tm-news-item-body">
							<a href="">
								阿根廷央行行长施图尔辛格：制定政策时只关注国内会对全球经济增长造成风险。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:35:00
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【事件提示】20国集团(G20)财长将在十分钟后在IMF及世界银行春季会议场边进行交流后召开记者会。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:27:16
						</div>
						<div class="tm-news-item-body">
							<a href="">
								英联邦领导人声明：领导人同意查尔斯王子担任下任英联邦元首。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:17:54
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>【全国首个自贸港或落地三亚】</b>海南省一位参与政府决策的知情人士表示，围绕“自由贸易港”建设方案的调研最近密集展开，并将在不久后给出重磅的落地政策。尽管海口基础设施优越，但第一个落地的自贸港应是三亚。但出于谨慎起见，该人士强调了可能存在的变化，其补充了“很可能”三字来形容政府未来的决定。（经济观察报）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:17:22
						</div>
						<div class="tm-news-item-body">
							<a href="">
								据外媒：美国财长努钦与加拿大和墨西哥财长讨论了北美自由贸易协定（NAFTA）和贸易问题。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:16:16
						</div>
						<div class="tm-news-item-body">
							<a href="">
								欧佩克秘书长巴尔金都：在欧佩克与欧佩克成员中并没有设定任何油价目标。（回应美国总统特朗普此前推文）
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:15:51
						</div>
						<div class="tm-news-item-body">
							<a href="">
								IMF：G24敦促至少要维持IMF当前的借贷能力。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:15:20
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>欧佩克秘书长巴尔金都：我们目标仍是在可持续的基础上保持稳定性。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:14:21
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【提示】G24（24国集团）是亚、非、拉发展中国家为在国际货币制度改革中协调立场、增强团结而结成的国际性组织。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:13:54
						</div>
						<div class="tm-news-item-body">
							<a href="">
								IMF：G24呼吁建立强健的金融安全网。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:12:33
						</div>
						<div class="tm-news-item-body">
							<a href="">
								IMF：近期的贸易限制是一个主要的担忧。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:10:45
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：货币的供应是央行和政府的职能范围。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:09:01
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：认为虚拟货币可以替代美元的观点是不合理的。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-21 00:08:09
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>【行情】美股扩大跌幅，道指跌近200点，纳斯达克指数跌逾1%。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:51:12
						</div>
						<div class="tm-news-item-body">
							<a href="">
								俄罗斯外长拉夫罗夫：与联合国一致认为，叙利亚问题不存在军事解决方案。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:50:00
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【事件提示】中国央行行长易纲将在十分钟后参加在美国华盛顿举办的论坛的闭门午餐会。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:45:10
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：联邦债务规模和赤字扩大会推动收益率曲线更陡峭。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:44:31
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：随着美联储缩表，预计长期国债收益率将上升，并不担心收益率曲线平直。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:41:47
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：预计新常态下美联储资产负债表将为3万亿美元左右。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:40:30
						</div>
						<div class="tm-news-item-body">
							<a href="">
								【股市收盘】
								<br>
								德国DAX指数4月20日（周五）收盘下跌23.97点，跌幅0.19%，报12543.45点；
								<br>
								英国富时100指数4月20日（周五）收盘上涨39.12点，涨幅0.53%，报7368.04点；
								<br>
								法国CAC40指数4月20日（周五）收盘上涨21.19点，涨幅0.39%，报5412.83点；
								<br>
								西班牙IBEX35指数4月20日（周五）收盘上涨18.00点，涨幅0.18%，报9886.00点；
								<br>
								意大利富时指数4月20日（周五）收盘上涨38.46点，涨幅0.16%，报23830.50点。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:38:11
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>美联储威廉姆斯：在劳工市场和薪资增速强劲、通胀稳定的背景下，预计美联储持续加息。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:36:24
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：美联储的决定将取决于美国经济表现、通胀和全球大环境。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:35:47
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：在经济强劲的背景下，美联储将在未来几年持续渐进加息。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:35:18
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：税改可以使得未来数年的经济增速提高0.5%。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:34:14
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：全球经济增速强劲提振了美国出口需求，减少了通缩压力。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:33:25
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：全球经济增速、美国财政刺激政策转移了对美联储政策风险管理方面的担忧。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:31:33
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：财政刺激政策是短期较大的利好因素，长期而言不多。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:27:21
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：中性利率似乎比以往更低。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:26:57
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储威廉姆斯：中性利率当前略微低于3%。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:24:53
						</div>
						<div class="tm-news-item-body">
							<a href="">
								联合国驻叙利亚大使：联合国正在敦促国际禁止化学武器组织（OPCW）在叙利亚杜马做好本职工作。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:24:10
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美国纽约联储GDPNowcast模型：美国2018年第二季度GDP增速预期为3.03%，此前为2.87%。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:23:55
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美国纽约联储GDPNowcast模型：美国2018年第一季度GDP增速预期为2.91%，此前为2.79%。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:23:15
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储埃文斯：随着更多债务发行，收益率曲线愈加陡峭。
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:22:39
						</div>
						<div class="tm-news-item-body">
							<a href="">
								<b>美联储埃文斯：通胀上升快于预期，这是经济强劲的信号，可以容纳更多次加息。</b>
							</a>
						</div>
					</div>
					<div class="tm-news-item">
						<div class="tm-news-item-dot"></div>
						<div class="tm-news-item-line"></div>
						<div class="tm-news-item-time">
							2018-04-20 23:22:32
						</div>
						<div class="tm-news-item-body">
							<a href="">
								美联储埃文斯：预计更大的赤字将造成收益率曲线趋陡。
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8">mui.init();</script>
		<div class="mui-content">
			<div></div>
		</div>
		<script type="text/javascript"></script>

	</body>
</html>