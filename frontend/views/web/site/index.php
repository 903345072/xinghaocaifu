
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
							<form method="post" action="http://130161.com/Home/index/index.html" id="loginform">
								<h1 style="padding:15px 0">星浩财富登录</h1>
								<div class="login-input_box">
									<div>
										<i>
										<img src="/pc/images/user.webp" alt="">
										</i>
										<input type="text" placeholder="手机号码" name="username" autocomplete="off">
									</div>
									<div>
										<i>
										<img src="/pc/images/password.webp" alt="">
										</i>
										<input type="password" placeholder="登录密码" name="password" autocomplete="off">
									</div>
								</div>
								<p class="tm-clerfix" style="padding:8px 0">
									<a class="tm-float-right" href="http://130161.com/Member/index/searchpwd.html" style="margin:5px 0">
										忘记密码
									</a>
								</p>
								<div class="login-btn_box">
									<button class="login-btn ajaxpost_form" type="button" formid="loginform" ajaxurl="/Member/index/login.html" ajax-callback="loginset">
									登录
									</button>
									<a href="http://130161.com/Member/index/register.html" class="register-href">
										注册
									</a>
								</div>
							</form>
							<script type="text/javascript">function loginset(obj, datajson) {
	layer.alert("登录成功", function() {
		document.location = '/Home/index/index.html';
	})
}</script>
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
		<div class="content">
			<div class="tm-container index-row1">
				<h1 class="tm-text-right scroll-parent">
				<div class="text-scroll">
					<span class="tm-font-red" style="padding-bottom: 2px">最新公告：</span>
					<span class="text-scroll-box">
					<div class="text-scroll-con" style="left: -502px;">
						<span>
						<a href="http://130161.com/Home/index/faxian.html">
							欢迎贵宾莅临星浩财富：&nbsp; &nbsp;&nbsp;尊敬的贵宾：您好！今晚20:30将公布美国非农数据，届时行情走势波动会较为剧烈，为降低用户持仓风险，美原油/美黄金/美白银履约保证金于20:00-21:00期间将会提高(去除前两档)。非农数据公布时行情波动剧烈，利润空间较大，技术面分析影响较小，行情受非农数据影响较大，预测正确盈利可观，因此本月非农数据不容错过。&nbsp; 兵马未动，粮草先行。&nbsp;『喜讯-入金赠金』：为感谢广大用户长期以来对星浩财富的支持和信赖：凡是采用公司入款【银行转账、支付宝转银行卡、微信转银行卡】入金的贵宾，即可尊享该笔入金1%的返利。注（赠送的返利金系统自动存入用户积分中-积分可抵用交易手续费）。
						</a></span>
						<span>
						<a href="http://130161.com/Home/index/faxian.html">
							欢迎贵宾莅临星浩财富：&nbsp; &nbsp;&nbsp;尊敬的贵宾：您好！今晚22:30美国能源信息署将发布当周EIA原油库存数据，届时行情走势波动会较为剧烈，为降低用户持仓风险，美原油履约保证金于21:30-23:00期间将会提高(去除前两档)。EIA数据公布时行情波动剧烈，利润空间较大，技术面分析影响较小，行情受库存信息影响较大，预测正确盈利可观，兵马未动，粮草先行。因此本周EIA大数据不容错过。&nbsp; &nbsp;『喜讯-入金赠金』：为感谢广大用户长期以来对星浩财富的支持和信赖：凡是采用公司入款【银行转账、支付宝转银行卡、微信转银行卡】入金的贵宾，即可尊享该笔入金1%的返利。注（赠送的返利金系统自动存入用户积分中-积分可抵用交易手续费）。部分用户反馈转入个人账号？无需担忧。转入的都是我司第三方个人账户，资金更安全，优惠更丰富。（主要解决大额入金限额的问题）。如有疑问请您联系我司7*24小时在线客服、我们将竭诚为您服务，祝您投资顺利、盈利多多！
						</a></span>
					</div> </span>
				</div>
				<a href="https://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=913426&amp;configID=55606&amp;jid=8160997921&amp;s=1" target="_blank" class="contact-service" style="background:url(/pc/images/lxkf-bg.jpg);background-size:100%">
					<i style="background-image:url(/pc/images/xcontact_nor.png.pagespeed.ic._3vgsT0TkS.webp)"></i>
					<span>联系客服</span>
				</a></h1>
				<ul class="tm-clerfix index_con-title">
					<li>
						<a href="http://130161.com/Home/index/jiaoyi/moni/1.html">
							<div class="index_con-img_con">
								<img src="/pc/images/index-icon1-h.png">
							</div>
							<div class="index_con-info">
								<h3>模拟操盘</h3>
								<p>
									模拟交易所实盘交易，降低操作风险
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="http://130161.com/Member/index/tuiguang.html">
							<div class="index_con-img_con">
								<img src="/pc/images/index-icon2-h.png">
								
							</div>
							<div class="index_con-info">
								<h3>推广赚钱</h3>
								<p>
									独乐乐不如众乐乐，发送链接给朋友一起赚钱
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="http://130161.com/Content/index/page/catid/23.html">
							<div class="index_con-img_con">
								<img src="/pc/images/index-icon3-h.png">
							</div>
							<div class="index_con-info">
								<h3>风险提示</h3>
								<p>
									入市需谨慎，投资有风 险
								</p>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="tm-container index-row2">
				<div class="row-title tm-text-center">
					<h3 class="tm-text-uppercase">期货推荐/<span>recommendation</span></h3>
					<h4><span>100%交易所实盘交易</span></h4>
				</div>
				<h1 class="tm-text-right tm-margin-10">
				<a href="http://130161.com/Content/index/jiaoyi_detail/id/8.html" id="detail15">
					细则说明»
				</a></h1>
				<div class="recommend-con uk-grid-match" data-uk-grid-match="{target:&#39;.tm-match-height&#39;}">
					<div class="recommend-left tm-match-height" style="height: 400px; background:url(/pc/images/xtj-bg.jpg);background-size:100% 100%; min-height: 400px;">
						<div class="center-v-a">
							<h1>国际
							<br>
							期货</h1>
							<p>
								火爆产品
								<br>
								获利丰盛
							</p>
						</div>
					</div>
					<div class="recommend-right tm-match-height" style="min-height: 400px;">
						<div class="recommend-header">
							<ul class="recommend-btn-list">
								<li class="recommend-active">
									<a href="javascript:" proid="8" framesrc="/Content/index/qihuo_kline/prono/CL1805/id/8/catid/15/device/weixin.html">
										美原油
									</a>
								</li>
								<li>
									<a href="javascript:" proid="9" framesrc="/Content/index/qihuo_kline/prono/GC1806/id/9/catid/15/device/weixin.html">
										美黄金
									</a>
								</li>
								<li>
									<a href="javascript:" proid="11" framesrc="/Content/index/qihuo_kline/prono/SI1805/id/11/catid/15/device/weixin.html">
										美白银
									</a>
								</li>
								<li>
									<a href="javascript:" proid="25" framesrc="/Content/index/qihuo_kline/prono/HG1805/id/25/catid/15/device/weixin.html">
										美铜
									</a>
								</li>
								<li>
									<a href="javascript:" proid="12" framesrc="/Content/index/qihuo_kline/prono/DAX1806/id/12/catid/15/device/weixin.html">
										德指
									</a>
								</li>
								<li>
									<a href="javascript:" proid="10" framesrc="/Content/index/qihuo_kline/prono/HSI1804/id/10/catid/15/device/weixin.html">
										恒指
									</a>
								</li>
								<li>
									<a href="javascript:" proid="16" framesrc="/Content/index/qihuo_kline/prono/MHI1804/id/16/catid/15/device/weixin.html">
										小恒指
									</a>
								</li>
								<li>
									<a href="javascript:" proid="17" framesrc="/Content/index/qihuo_kline/prono/CN1804/id/17/catid/15/device/weixin.html">
										富时A50
									</a>
								</li>
								<li>
									<a href="javascript:" proid="33" framesrc="/Content/index/qihuo_kline/prono/NQ1806/id/33/catid/15/device/weixin.html">
										小纳指
									</a>
								</li>
								<li>
									<a href="javascript:" proid="36" framesrc="/Content/index/qihuo_kline/prono/BP1806/id/36/catid/15/device/weixin.html">
										英镑
									</a>
								</li>
								<li>
									<a href="javascript:" proid="35" framesrc="/Content/index/qihuo_kline/prono/EC1806/id/35/catid/15/device/weixin.html">
										欧元
									</a>
								</li>
								<li>
									<a href="javascript:" proid="34" framesrc="/Content/index/qihuo_kline/prono/AD1806/id/34/catid/15/device/weixin.html">
										澳元
									</a>
								</li>
								<li>
									<a href="javascript:" proid="32" framesrc="/Content/index/qihuo_kline/prono/CD1806/id/32/catid/15/device/weixin.html">
										加元
									</a>
								</li>
							</ul>
						</div>
						<div class="recommend-list">
							<div class="recommend-active-con" style="display: block;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_8" src="style/weixin.html" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_CL1805">
											</i><span id="pro_price_CL1805">62.22</span><em id="per_price_CL1805">0.257</em>
											<font id="zhangdie_CL1805">0.16%</font>
										</li>
										<li class="recommend-state-info">
											<span>美原油/CL1805<em>（06:00-次日05:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="http://130161.com/Content/index/show/id/8/catid/15.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_9" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource.html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_GC1806">
											</i><span id="pro_price_GC1806">1332.6</span><em id="per_price_GC1806">-0.263</em>
											<font id="zhangdie_GC1806">-3.5%</font>
										</li>
										<li class="recommend-state-info">
											<span>美黄金/GC1806<em>（06:00次日05:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="http://130161.com/Content/index/show/id/9/catid/15.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_11" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(1).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_SI1805">
											</i><span id="pro_price_SI1805">16.360</span><em id="per_price_SI1805">-0.012</em>
											<font id="zhangdie_SI1805">-0.002%</font>
										</li>
										<li class="recommend-state-info">
											<span>美白银/SI1805<em>（06:00-次日05:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_25" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(2).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_HG1805">
											</i><span id="pro_price_HG1805">3.0690</span><em id="per_price_HG1805">0.342</em>
											<font id="zhangdie_HG1805">0.0105%</font>
										</li>
										<li class="recommend-state-info">
											<span>美铜/HG1805<em>（06:00-次日05:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_12" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(3).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_DAX1806">
											</i><span id="pro_price_DAX1806">12359.5</span><em id="per_price_DAX1806">1.060</em>
											<font id="zhangdie_DAX1806">131.0%</font>
										</li>
										<li class="recommend-state-info">
											<span>德指/DAX1806<em>（14:00-次日04:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="http://130161.com/Content/index/show/id/12/catid/15.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_10" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(4).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_HSI1804">
											</i><span id="pro_price_HSI1804">30262</span><em id="per_price_HSI1804">1.404</em>
											<font id="zhangdie_HSI1804">425%</font>
										</li>
										<li class="recommend-state-info">
											<span>恒指/HSI1804<em>（09:15-次日01:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_16" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(5).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_MHI1804">
											</i><span id="pro_price_MHI1804">30260</span><em id="per_price_MHI1804">1.398</em>
											<font id="zhangdie_MHI1804">423%</font>
										</li>
										<li class="recommend-state-info">
											<span>小恒指/MHI1804<em>（09:15-次日01:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_17" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(6).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_CN1804">
											</i><span id="pro_price_CN1804">12500.0</span><em id="per_price_CN1804">-0.360</em>
											<font id="zhangdie_CN1804">-45.0%</font>
										</li>
										<li class="recommend-state-info">
											<span>富时A50/CN1804<em>（09:00-16:30)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="http://130161.com/Content/index/show/id/17/catid/15.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_33" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(7).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_NQ1806">
											</i><span id="pro_price_NQ1806">6510.25</span><em id="per_price_NQ1806">0.853</em>
											<font id="zhangdie_NQ1806">55.50%</font>
										</li>
										<li class="recommend-state-info">
											<span>小纳指/NQ1806<em>（06:00-次日05:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="http://130161.com/Content/index/show/id/33/catid/15.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_36" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(8).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_BP1806">
											</i><span id="pro_price_BP1806">1.4145</span><em id="per_price_BP1806">0.134</em>
											<font id="zhangdie_BP1806">0.0019%</font>
										</li>
										<li class="recommend-state-info">
											<span>英镑/BP1806<em>（06:00-次日05:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="http://130161.com/Content/index/show/id/36/catid/15.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_35" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(9).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_EC1806">
											</i><span id="pro_price_EC1806">1.23350</span><em id="per_price_EC1806">-0.109</em>
											<font id="zhangdie_EC1806">-0.00135%</font>
										</li>
										<li class="recommend-state-info">
											<span>欧元/EC1806<em>（06:00-次日05:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="http://130161.com/Content/index/show/id/35/catid/15.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_34" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(10).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_AD1806">
											</i><span id="pro_price_AD1806">0.7671</span><em id="per_price_AD1806">0.013</em>
											<font id="zhangdie_AD1806">0.0001%</font>
										</li>
										<li class="recommend-state-info">
											<span>澳元/AD1806<em>（06:00-次日05:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="http://130161.com/Content/index/show/id/34/catid/15.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display: none;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_32" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(11).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_CD1806">
											</i><span id="pro_price_CD1806">0.78315</span><em id="per_price_CD1806">-0.051</em>
											<font id="zhangdie_CD1806">-0.00040%</font>
										</li>
										<li class="recommend-state-info">
											<span>加元/CD1806<em>（06:00-次日05:00)</em></span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:">
												交易中
											</a>
											<a href="http://130161.com/Content/index/show/id/32/catid/15.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tm-container index-row2 tm-padding-40-0 index-row2-1" style="">
				<h1 class="tm-text-right tm-margin-10">
				<a href="http://130161.com/Content/index/jiaoyi_detail/id/7.html" id="detail14">
					细则说明»
				</a></h1>
				<div class="recommend-con uk-grid-match" data-uk-grid-match="{target:&#39;.tm-match-height&#39;}">
					<div class="recommend-left tm-match-height" style="height: 400px; min-height: 400px;background:url(/pc/images/xtj-bg-2.jpg);background-size: 100% 100%;">
						<div class="center-v-a">
							<h1>国内
							<br>
							期货</h1>
							<p>
								火爆产品
								<br>
								获利丰盛
							</p>
						</div>
					</div>
					<div class="recommend-right tm-match-height" style="min-height: 400px;">
						<div class="recommend-header">
							<ul class="recommend-btn-list-2">
								<li class="recommend-active-2">
									<a href="javascript:" proid="7" framesrc="/Content/index/qihuo_kline/prono/AU1806/id/7/catid/14/device/weixin.html">
										沪黄金
									</a>
								</li>
								<li>
									<a href="javascript:" proid="13" framesrc="/Content/index/qihuo_kline/prono/AG1806/id/13/catid/14/device/weixin.html">
										沪白银
									</a>
								</li>
								<li>
									<a href="javascript:" proid="5" framesrc="/Content/index/qihuo_kline/prono/CU1806/id/5/catid/14/device/weixin.html">
										沪铜
									</a>
								</li>
								<li>
									<a href="javascript:" proid="23" framesrc="/Content/index/qihuo_kline/prono/NI1809/id/23/catid/14/device/weixin.html">
										沪镍
									</a>
								</li>
								<li>
									<a href="javascript:" proid="6" framesrc="/Content/index/qihuo_kline/prono/BU1806/id/6/catid/14/device/weixin.html">
										沥青
									</a>
								</li>
								<li>
									<a href="javascript:" proid="18" framesrc="/Content/index/qihuo_kline/prono/RU1809/id/18/catid/14/device/weixin.html">
										天然橡胶
									</a>
								</li>
								<li>
									<a href="javascript:" proid="26" framesrc="/Content/index/qihuo_kline/prono/RB1810/id/26/catid/14/device/weixin.html">
										螺纹钢
									</a>
								</li>
								<li>
									<a href="javascript:" proid="27" framesrc="/Content/index/qihuo_kline/prono/P1809/id/27/catid/14/device/weixin.html">
										棕榈油
									</a>
								</li>
								<li>
									<a href="javascript:" proid="28" framesrc="/Content/index/qihuo_kline/prono/SR809/id/28/catid/14/device/weixin.html">
										白糖
									</a>
								</li>
								<li>
									<a href="javascript:" proid="29" framesrc="/Content/index/qihuo_kline/prono/M1809/id/29/catid/14/device/weixin.html">
										豆粕
									</a>
								</li>
								<li>
									<a href="javascript:" proid="30" framesrc="/Content/index/qihuo_kline/prono/Y1809/id/30/catid/14/device/weixin.html">
										豆油
									</a>
								</li>
								<li>
									<a href="javascript:" proid="31" framesrc="/Content/index/qihuo_kline/prono/PP1805/id/31/catid/14/device/weixin.html">
										PP聚丙烯
									</a>
								</li>
							</ul>
						</div>
						<div class="recommend-list">
							<div class="recommend-active-con" style="display: block;">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_7" src="style/weixin(1).html" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_AU1806">
											</i><span id="pro_price_AU1806">272.55</span><em id="per_price_AU1806">-0.10</em>
											<font id="zhangdie_AU1806">-0.037%</font>
										</li>
										<li class="recommend-state-info">
											<span>沪黄金/AU1806 （09:00-次日02:30）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/7/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_13" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(12).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_AG1806">
											</i><span id="pro_price_AG1806">3636.0</span><em id="per_price_AG1806">3.0</em>
											<font id="zhangdie_AG1806">0.083%</font>
										</li>
										<li class="recommend-state-info">
											<span>沪白银/AG1806 （09:00-次日02:30）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/13/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_5" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(13).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_CU1806">
											</i><span id="pro_price_CU1806">50750</span><em id="per_price_CU1806">240</em>
											<font id="zhangdie_CU1806">0.473%</font>
										</li>
										<li class="recommend-state-info">
											<span>沪铜/CU1806 （09:00-次日01:00）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/5/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_23" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(14).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_NI1809">
											</i><span id="pro_price_NI1809">100020</span><em id="per_price_NI1809">-850</em>
											<font id="zhangdie_NI1809">-0.850%</font>
										</li>
										<li class="recommend-state-info">
											<span>沪镍/NI1809 （09::00-次日01:00）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/23/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_6" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(15).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_BU1806">
											</i><span id="pro_price_BU1806">2746</span><em id="per_price_BU1806">-40</em>
											<font id="zhangdie_BU1806">-1.457%</font>
										</li>
										<li class="recommend-state-info">
											<span>沥青/BU1806 （09:00-23:00）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/6/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_18" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(16).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_RU1809">
											</i><span id="pro_price_RU1809">11450</span><em id="per_price_RU1809">60</em>
											<font id="zhangdie_RU1809">0.524%</font>
										</li>
										<li class="recommend-state-info">
											<span>天然橡胶/RU1809 （09:00-23:00）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/18/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_26" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(17).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_RB1810">
											</i><span id="pro_price_RB1810">3408</span><em id="per_price_RB1810">65</em>
											<font id="zhangdie_RB1810">1.907%</font>
										</li>
										<li class="recommend-state-info">
											<span>螺纹钢/RB1810 （09:00-23:00）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/26/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_27" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(18).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_P1809">
											</i><span id="pro_price_P1809">5170</span><em id="per_price_P1809">42</em>
											<font id="zhangdie_P1809">0.812%</font>
										</li>
										<li class="recommend-state-info">
											<span>棕榈油/P1809 （09:00-23:30）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/27/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_28" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(19).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_SR809">
											</i><span id="pro_price_SR809">5551</span><em id="per_price_SR809">14</em>
											<font id="zhangdie_SR809">0.252%</font>
										</li>
										<li class="recommend-state-info">
											<span>白糖/SR809 （09:00-23:30）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/28/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_29" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(20).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_M1809">
											</i><span id="pro_price_M1809">3327</span><em id="per_price_M1809">134</em>
											<font id="zhangdie_M1809">4.028%</font>
										</li>
										<li class="recommend-state-info">
											<span>豆粕/M1809 （09:00-23:30）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/29/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_30" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(21).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_Y1809">
											</i><span id="pro_price_Y1809">5976</span><em id="per_price_Y1809">40</em>
											<font id="zhangdie_Y1809">0.669%</font>
										</li>
										<li class="recommend-state-info">
											<span>豆油/Y1809 （09:00-23:30）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/30/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="recommend-active-con" style="display:none">
								<div class="recommend-body" style="padding:0 5px;height:260px;">
									<iframe class="tabcontent" id="framid_31" src="Javascript:" style="width:100%;height:260px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="style/saved_resource(22).html"></iframe>
								</div>
								<div class="recommend-footer">
									<ul class="recommend-footer-con">
										<li class="recommend-state down-box">
											<i>
											<img src="/pc/images/xdown-down.png.pagespeed.ic.bsB_OO7Lvm.webp" id="zhangdie_img_PP1805">
											</i><span id="pro_price_PP1805">8948</span><em id="per_price_PP1805">159</em>
											<font id="zhangdie_PP1805">1.777%</font>
										</li>
										<li class="recommend-state-info">
											<span>PP聚丙烯/PP1805 （09:00-15:00）</span>
										</li>
										<li class="recommend-state-btn">
											<a href="Javascript:" style="background:#999">
												<font color="#eee" style="font-size:12px;">休市中</font>
											</a>
											<a href="http://130161.com/Content/index/show/id/31/catid/14.html">
												我要交易
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">$(function() {
	ws = new WebSocket("ws://hk.shandonghuanhai.com");
	ws.onopen = function() {
		console.log("链接成功");
		ws.send('{"command":"binduid","uid":"get_hangqing"}');
	};
	ws.onmessage = function(e) {
		var data = eval("(" + e.data + ")");
		$(data.data).each(function(index, item) {
			if(item.lastprice) {
				$("#pro_price_" + item.prono).html(item.lastprice);
				$("#per_price_" + item.prono).html(item.perprice + '%');
				$("#zhangdie_" + item.prono).html(item.zhangdie);
				var perprice = parseFloat(item.perprice);
				if(perprice < 0) {
					$('#pro_price_' + item.prono).css("color", 'green');
					$('#per_price_' + item.prono).css("color", 'green');
					$('#zhangdie_' + item.prono).css("color", 'green');
					$('#zhangdie_img_' + item.prono).attr("src", '/pc/images/down-down.png');
				} else {
					$('#pro_price_' + item.prono).css("color", 'red');
					$('#per_price_' + item.prono).css("color", 'red');
					$('#zhangdie_' + item.prono).css("color", 'red');
					$('#zhangdie_img_' + item.prono).attr("src", '/pc/images/up-up.png');
				}
			}
		})
	};
})</script>
			<div class="tm-container ys-list-row">
				<div class="row-title tm-text-center">
					<h3 class="tm-text-uppercase">我们的优势/<span>advantage</span></h3>
					<h4><span>安全稳定性高</span></h4>
				</div>
				<div class="advantage-list-all">
					<ul>
						<li>
							<div>
								<img src="/pc/images/xys-list-1.png.pagespeed.ic.Amb9Bmvq0b.webp" alt="">
							</div>
							<p>
								极速存取
							</p>
						</li>
						<li>
							<div>
								<img src="/pc/images/xys-list-2.png.pagespeed.ic.eAYelg-xqT.webp" alt="">
							</div>
							<p>
								权威认证
							</p>
						</li>
						<li>
							<div>
								<img src="/pc/images/xys-list-3.png.pagespeed.ic.Wlw1YQ5-eF.webp" alt="">
							</div>
							<p>
								贴心服务
							</p>
						</li>
						<li>
							<div>
								<img src="/pc/images/xys-list-4.png.pagespeed.ic.KrhXu7-cXm.webp" alt="">
							</div>
							<p>
								超低成本
							</p>
						</li>
						<li>
							<div>
								<img src="/pc/images/xys-list-5.png.pagespeed.ic.tR_8_41QqJ.webp" alt="">
							</div>
							<p>
								贴心安全
							</p>
						</li>
						<li>
							<div>
								<img src="/pc/images/xys-list-6.png.pagespeed.ic.lCJz_iDFOO.webp" alt="">
							</div>
							<p>
								终身奖赏
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="tm-container">
				<div class="information-con">
					<div class="new-messag">
						<h1 class="tm-text-uppercase"><em>发现/</em><span>discovery</span></h1>
						<div class="newMessag-listBox">
							<ul>
								<li>
									<a href="http://130161.com/Member/index/tuiguang.html">
										<div class="newMessag-listBox-con">
											<div class="newMessag-list-img">
												<img src="/pc/images/xnewmassge-1.png.pagespeed.ic.l2eX4PzBYK.webp">
											</div>
											<div class="newMessag-list-text">
												<h2>推广赚钱</h2>
												<p>
													独乐乐不如众乐乐
												</p>
											</div>
										</div>
										<div class="newMessag-mask">
											<img src="/pc/images/xmessge-mask-icon1.png.pagespeed.ic.K1xd3Y3Qkt.webp" alt="">
										</div>
									</a>
								</li>
								<li>
									<a href="http://130161.com/Member/index/renwu.html">
										<div class="newMessag-listBox-con">
											<div class="newMessag-list-img">
												<img src="/pc/images/xnewmassge-1.png.pagespeed.ic.l2eX4PzBYK.webp">
											</div>
											<div class="newMessag-list-text">
												<h2>任务中心</h2>
												<p>
													完成任务丰富生活
												</p>
											</div>
										</div>
										<div class="newMessag-mask">
											<img src="/pc/images/xmessge-mask-icon2.png.pagespeed.ic.ACqM3TW_dL.webp" alt="">
										</div>
									</a>
								</li>
								<li>
									<a href="http://130161.com/Home/index/zixun.html">
										<div class="newMessag-listBox-con">
											<div class="newMessag-list-img">
												<img src="/pc/images/xnewmassge-1.png.pagespeed.ic.l2eX4PzBYK.webp">
											</div>
											<div class="newMessag-list-text">
												<h2>国际期货直播间</h2>
												<p>
													针对国内投资者开发的首家期货类直播平台...
												</p>
											</div>
										</div>
										<div class="newMessag-mask">
											<img src="/pc/images/xmessge-mask-icon3.png.pagespeed.ic.MHyVRCaUst.webp" alt="">
										</div>
									</a>
								</li>
								<li>
									<a href="http://130161.com/Member/index/information.html">
										<div class="newMessag-listBox-con">
											<div class="newMessag-list-img">
												<img src="/pc/images/xnewmassge-1.png.pagespeed.ic.l2eX4PzBYK.webp">
											</div>
											<div class="newMessag-list-text">
												<h2>信息中心</h2>
												<p>
													快来查看新消息
												</p>
											</div>
										</div>
										<div class="newMessag-mask">
											<img src="/pc/images/xmessge-mask-icon4.png.pagespeed.ic.MI-Q_kXpmu.webp" alt="">
										</div>
									</a>
								</li>
								<li>
									<a href="http://130161.com/Member/index/jifen_detail.html">
										<div class="newMessag-listBox-con">
											<div class="newMessag-list-img">
												<img src="/pc/images/xnewmassge-1.png.pagespeed.ic.l2eX4PzBYK.webp">
											</div>
											<div class="newMessag-list-text">
												<h2>积分商城</h2>
												<p>
													使用积分兑换商品index_con-title
												</p>
											</div>
										</div>
										<div class="newMessag-mask">
											<img src="/pc/images/xmessge-mask-icon5.png.pagespeed.ic.kiG1nmPFrQ.webp" alt="">
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="information">
						<h1 class="tm-text-uppercase"><em>资讯/</em><span>information</span></h1>
						<div class="information-header">
							<a href="http://130161.com/Home/index/zixun.html">
								更多»
							</a>
							<ul class="information-btn-lsit">
								<li class="information-active">
									<a href="javasctipt://">
										资讯直播
									</a>
								</li>
							</ul>
						</div>
						<div class="information-body">
							<div class="information-list" style="display: block;">
								<iframe src="<?= url(['InformationList']) ?>" frameborder="0" scrolling="auto" style="width:100%; height: 464px;" id="framid"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		$(function() {
			scrolltext();
		})
		var n = 0;
		var scrolltext = function() {
			n--;
			var scrollwidth = $(".text-scroll-con>span").width() + 200;
			if(n < -scrollwidth) {
				n = 0;
			}
			$(".text-scroll-con").css("left", n + "px")
			setTimeout("scrolltext()", 30);
		}
		</script>
		
		
		
		<script type="text/javascript" src="/pc/js/main.js"></script>
		<script type="text/javascript" src="/pc/js/layer.js"></script>
		<script type="text/javascript" src="/pc/js/jquery.SuperSlide.2.1.1.js"></script>
		<script type="text/javascript" src="/pc/js/uikit.min.js"></script>
		<script type="text/javascript" src="/pc/js/accordion.js"></script>
		<script type="text/javascript" src="/pc/js/common.js"></script>
		<script type="text/javascript">
			$(function() {
				jQuery(".slideBox").slide({
					mainCell: ".bd ul",
					effect: "left",
					duration: 10,
					autoPlay: true
				});
			})
	</script>

	</body>

</html>