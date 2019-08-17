<?php use common\helpers\Html; ?>
<?php $this->beginPage() ?>
	<!-- saved from url=(0044)http://130161.com/Member/index/register.html -->
	<html class="uk-notouch">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<title><?= Html::encode($this->title) ?></title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="renderer" content="webkit|ie-comp|ie-stand">

		<link rel="stylesheet" href="/pc/css/public.css">

		<link rel="stylesheet" href="/pc/css/amazeui.min.css">
		<link rel="stylesheet" href="/pc/css/org.css">
		<link rel="stylesheet" href="/pc/css/commonstyle.css">


		<script type="text/javascript" src="/pc/js/jquery-1.11.0.min.js"></script>
		<!--		<script type="text/javascript" src="/pc/js/jquery-1.9.1.min.js"></script>-->

		<script type="text/javascript" src="/pc/js/main.js"></script>
		<script type="text/javascript" src="/pc/js/layer.js"></script>
		<script type="text/javascript" src="/pc/js/jquery.SuperSlide.2.1.1.js"></script>
		<script type="text/javascript" src="/pc/js/uikit.min.js"></script>
		<script type="text/javascript" src="/pc/js/accordion.js"></script>
		<script type="text/javascript" src="/pc/js/common.js"></script>

		<script type="text/javascript" src="/pc/js/amazeui.min.js"></script>
		<script type="text/javascript" src="/js/echarts-all-3-order.js"></script>
		<style>
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
	</head>
	<body style="">
	<nav class="nav">
		<div class="tm-container tm-clerfix" style="max-width: 1300px">
			<a href="#" style="float:left;padding-top:10px;padding-right:20px;">
				<img src="/pc/images/xlogo.png.pagespeed.ic.TH2LuYELsi.webp" style="max-height: 50px;">
			</a>
			<ul class="tm-clerfix nav-list">
				<li class="class1">
					<a href="<?= url(['site/login']) ?>" ..="">
						首页
					</a>
				</li>
				<li class="class2">
					<a href="<?= url(['order/quotation']) ?>" ..="">
						实盘交易
					</a>
				</li>
				<li class="class3">
					<a href="<?= url(['order/deal']) ?>" ..="">
						模拟交易
					</a>
				</li>
				<li class="class4">
					<a href="<?= url(['user/latestNews']) ?>" ..="">
						最新资讯
					</a>
				</li>
				<li class="class5">
					<a href="<?= url(['user/userannounce']) ?>" ..="">
						系统公告
					</a>
				</li>
				<li class="class6">
					<a href="<?= url(['line/index']) ?>">
						期货直播吧
					</a>
				</li>
				<li class="class7">
					<a href="<?= url(['line/company']) ?>" ..="">
						公司资质
					</a>
				</li>
				<li class="class8">
					<a href="<?= url(['user/usercharge']) ?>" ..="">
						个人中心
					</a>
				</li>
				<li class="class9">
					<a href="<?= url(['user/newGui']) ?>" ..="">
						新手指引
					</a>
				</li>
			</ul>
			<div class="nav-right tm-float-right" style="font-size:12px;">

				<?php if (user()->isGuest) : ?>
					<span>
						<i>
							<img src="/pc/images/login.png" alt="">
						</i>
						<a href="<?= url(['site/login']) ?>">
							登录
						</a>
					</span>
					<span>
						<i>
							<img src="/pc/images/m.png" alt="">
						</i>
						<a href="<?= url(['site/register']) ?>">
							注册
						</a>
					</span>
				<?php else: ?>
					<span>
						<a>欢迎您</a>
							<a href="<?= url(['user/loginsucc']) ?>">
								<?= u()->nickname ?>
							</a>

                        <a href="<?= url(['site/logout']) ?>">退出登录</a>
					</span>
				<?php endif ?>

				<a href="https://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=913426&configID=55606&jid=8160997921&s=" class="contact-service" style="color:#FFF;width:auto" target="_blank">
					<i style="background-image:url(/pc/images/xcontact_nor.png.pagespeed.ic._3vgsT0TkS.webp)"></i><span style="padding:0">联系客服</span>
				</a>
			</div>
		</div>
	</nav>
	<script>
		$(function(){
			var title  = '<?= Html::encode($this->title) ?>';
			if(title == '登录' || title == '注册' || title == '登录成功'){
				$('.class1').addClass('tm-nav-active');
			}
			if(title == '实盘交易' || title == '交易界面'){
				$('.class2').addClass('tm-nav-active');
			}
			if(title == '模拟交易' || title == '模拟交易界面'){
				$('.class3').addClass('tm-nav-active');
			}
			if(title == '最新资讯'){
				$('.class4').addClass('tm-nav-active');
			}
			if(title == '公告'){
				$('.class5').addClass('tm-nav-active');
			}
			if(title == '直播'){
				$('.class6').addClass('tm-nav-active');
			}
			if(title == '公司资质'){
				$('.class7').addClass('tm-nav-active');
			}
			if(title == '提现' || title == '充值' || title == '推广赚钱' || title == '信息中心' || title == '修改密码' || title == '我的积分' || title == '交易记录' || title == '模拟交易列表'){
				$('.class8').addClass('tm-nav-active');
			}
			if(title == '新手指引'){
				$('.class9').addClass('tm-nav-active');
			}
		})
	</script>
	<?php $this->beginBody() ?>
	<?= $content ?>
	<?php $this->endBody() ?>
	<div class="content">
		<div class="tm-container">
			<h1 class="tm-text-right" style="display: none;">
				<a href="https://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=913426&configID=55606&jid=8160997921&s=" class="contact-service" target="_blank" style="background-image:url(https://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=913426&configID=55606&jid=8160997921&s=1)">
					<i style="background:url(/pc/images/xcontact_nor.png.pagespeed.ic._3vgsT0TkS.webp)"></i><span>联系客服</span>
				</a></h1>
			<div class="tm-text-center app-download">
				<div class="mask-hover">
					<img src="/pc/images/x8.jpg" alt="">
					<div class="wx-mask">
						<i style="background:url(/pc/images/xios_hover.png.pagespeed.ic.sASANWQPxB.webp)"></i>
					</div>
				</div>
				<div class="mask-hover">
					<img src="/pc/images/x8.jpg" alt="">
					<div class="wx-mask">
						<i style="background:url(/pc/images/xandroid_hover.png.pagespeed.ic.U53WuJtfwM.webp)"></i>
					</div>
				</div>
			</div>
			<p class="tm-text-center tm-padding-40-0 app-download_info">
				扫一扫下载APP,随时随地做交易！
			</p>
		</div>
	</div>

	<footer class="footer" style="background:url(/pc/images/xfooter-bg.jpg.pagespeed.ic.dGQIT_D08e.webp)">
		<div class="tm-container">
			<div class="footer-list" style="padding:20px 0">
				<ul class="tm-clerfix">
					<li>
						<a href="#" class="footer-logo">
							<img src="/pc/images/xlogo.png.pagespeed.ic.TH2LuYELsi.webp" style="max-height: 50px">
						</a>
					</li>
					<li style="line-height: 25px;">
						联系方式
						<br>
						公司名称：香港星浩财富投资理财有限公司
						<br>
						地址：香港湾仔轩尼诗道253-261号依时商业大厦21楼2103室
						<br>
						电话：+85290654555
						<br>
						邮箱：hkrxqh@126.com
						<br>
						申请代理QQ：15923599
						<br>
						在线客服QQ：3397655168
						<br>
					</li>
					<li>
						<h4>快速导航</h4>
						<ul class="add-href">
							<li>
								<span>
									<a href="<?= url(['user/newGui']) ?>">
										新手指引
									</a>
								</span>
								<span>
									<a href="<?= url(['user/loginsucc']) ?>">
										推广赚钱
									</a>
								</span>
								<span>
									<a href="<?= url(['line/index']) ?>">
										直　播间
									</a>
								</span>
							</li>
							<li>
								<span>
									<a href="<?= url(['user/latestNews']) ?>">
										最新资讯
									</a>
								</span>
								<span>
									<a href="<?= url(['line/company']) ?>">
										公司资质
									</a>
								</span>
								<span>
									<a href="<?= url(['user/usernews']) ?>">
										信息中心
									</a>
								</span>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="tm-text-center copyRight">
				Copyright©HONG KONG RONGXIN FUTURES INVESTMENT CO.,
				<br>
				LIMITE. All Rights Reserved. 香港星浩财富期貨投資理財有限公司
				<br>
				Company address：Room 2103A, 21/f., Easey Commercial Building, 253-261 Hennessy Road, Wan chai, Hong Kong
				<br>
				<br>
			</div>
		</div>
	</footer>
	</body>


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

	</html>
<?php $this->endPage() ?>