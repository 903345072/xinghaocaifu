
		<header class="mui-bar mui-bar-nav">
			<a class="mui-icon mui-icon-left-nav mui-pull-left" onclick="window.history.go(-1)"></a>
			<h1 class="mui-title">极速下单设置</h1>
		</header>
		<style>body {
	background: #101419
}

.mui-content {
	background-color: transparent
}

.tm-trading-total~.mui-content {
	padding-bottom: 130px
}</style>
		<style type="text/css">.cs-badge-group {
	font-size: 0
}

.cs-badge {
	margin: 0 1px;
	border-radius: 2px;
	font-size: 12px;
	display: inline-block;
	padding: 0 10px;
	background-color: #000
}

.cs-badge.mui-active {
	background-color: #dd3434
}

.cs-badge.uk-width-1-1 {
	width: 100%
}

.mui-text-mini {
	font-size: 12px
}

.this-modal-wrap {
	border-radius: 5px;
	width: 90%
}

.this-modal {
	width: 100%;
	display: none
}

.this-modal-header {
	font-size: 12px;
	color: #888;
	text-align: center;
	padding: 5px 10px;
	background-color: #fcfcfc;
	border-radius: 5px 5px 0 0
}

.this-modal-body {
	padding: 10px
}

.this-modal-footer .mui-btn {
	width: 100%;
	border-radius: 0 0 5px 5px;
	min-height: 34px;
	line-height: 32px
}

.chose-gird {
	margin: 0;
	padding: 0;
	list-style: none
}

.chose-gird>li {
	width: 50%;
	float: left;
	padding: 5px
}

.chose-item {
	display: block;
	color: #333;
	font-size: 13px;
	text-align: center;
	border-radius: 2px;
	padding: 2px 0
}

.chose-item.mui-active {
	background-color: #dd3434;
	color: #fff
}</style>
		<script type="text/javascript">
var moni = 0;
var apps = {};
var prono = "CL1806";
var mrate = parseFloat(7.20000);
var mtype = parseInt(2);
var zhiyingbs = parseFloat(5);</script>
		<script type="text/javascript">function setcall(obj, datajson) {
	layer.alert("提交成功", function() {
		document.location = '/Content/index/show/catid/15/id/8/moni/0.html';
	})
}</script>
		<div class="tm-trading-total">
			<div class="tm-panel-padded uk-text-small uk-text-muted" style="background-color: #101419;">
				<div>
					说明：
				</div>
				<div>
					1、一旦开启，点击即买
				</div>
				<div>
					2、关闭以后才可以重新设置，开启生效
				</div>
			</div>
			<div class="mui-table buttom-buttons">
				<div class="mui-table-cell mui-col-xs-8">
					<div class="tm-panel-padded-0-10 uk-text-muted">
						<span class="">合计：<em class="uk-text-warning"><font id="totalprice">1968</font>元</em></span>
					</div>
				</div>
				<a class="mui-btn mui-btn-theme mui-table-cell mui-col-xs-4 ajaxpost_form" formid="orderform" before-function="set_form_data" ajax-callback="setcall" ajaxurl="/Member/index/orderset.html" href="Javascript:">
					确定开启
				</a>
			</div>
		</div>
		<script type="text/javascript">function set_form_data(obj) {
	$('#F_baozhengjin').val($('#baozhengjin').html());
	$('#F_jiaoyi').val($('#jiaoyifei').html());
	return {
		status: 1
	};
}</script>
		<div class="mui-content">
			<div class="">
				<form id="orderform">
					<input type="hidden" name="info[moni]" value="0">
					<input type="hidden" name="info[prono]" value="CL1806">
					<input type="hidden" name="info[baozhengjin]" value="" id="F_baozhengjin">
					<input type="hidden" name="info[jiaoyi_price]" value="" id="F_jiaoyi">
					<ul class="mui-table-view mui-in-zero mui-table-view-inverted ">
						<li class="mui-table-view-cell mui-media">
							<span class="mui-pull-right">持仓至04:58自动平仓</span>
							<div class="mui-media-body mui-ellipsis">
								<span class="uk-text-muted">美原油（CL1806）</span>
							</div>
						</li>
						<li class="mui-table-view-cell mui-media">
							<div class="mui-table">
								<div class="mui-table-cell mui-col-xs-3">
									<div class="mui-ellipsis">
										<span class="uk-text-muted">购买手数</span>
									</div>
								</div>
								<div class="mui-table-cell mui-col-xs-9 mui-text-right">
									<div class="cs-badge-group">
										<div class="cs-badge gnums_show mui-active" nums="1">
											1手
										</div>
										<div class="cs-badge gnums_show " nums="2">
											2手
										</div>
										<div class="cs-badge gnums_show " nums="3">
											3手
										</div>
										<div class="cs-badge gnums_show " nums="5">
											5手
										</div>
										<div class="cs-badge gnums_show " nums="8">
											8手
										</div>
										<div class="cs-badge gnums_show " nums="10">
											10手
										</div>
									</div>
								</div>
								<script type="text/javascript">var zhisun = "200,400,600,1000,1600,2000";
var zhisun_arr = zhisun.split(",");
var zhiying = 5;
var zhiying_arr = new Array();
var rateico = '$';
var bzj_zf = parseFloat(50);
var zhiying = 5;
var baozhengjin = 200;
var jiaoyifei = 168;
var default_zhisun = 200;
var default_zhiying = 1000;

function set_zhisun() {
	nums = parseInt($('#goodsnums').val());
	zhisun = parseFloat($('#stoploss').val());
	baozhengjin_s = zhisun + bzj_zf * nums;
	$('#baozhengjin').html((baozhengjin_s * mrate).toFixed(2));
	if(mtype != 7) {
		$('#baozhengjin_rate').html(baozhengjin_s.toFixed(2));
	}
	set_totalprice();
}

function set_goods_nums(gnums) {
	var nums = gnums ? gnums : $("#goodsnums").val();
	var options = '';
	var arractive = '';
	for(var i in zhisun_arr) {
		zhisun_price = parseFloat(zhisun_arr[i]) * nums;
		arractive = i == 0 ? 'mui-active' : '';
		zhisun_rmb = zhisun_price * mrate;
		options += '<li><a class="chose-item zhisun_show ' + arractive + '" nums="' + zhisun_price + '" href="Javascript:">-' + zhisun_rmb.toFixed(2) + '(' + rateico + zhisun_price + ')</a></li>';
	}
	$('#zhisun_modal').html(options);
	nowzhisun = parseFloat(zhisun_arr[0]) * nums;
	nowzhisun_rmb = nowzhisun * mrate;
	$('#stoploss').val(nowzhisun);
	$('#zshtml').html('-' + nowzhisun_rmb.toFixed(2) + '(' + rateico + nowzhisun + ')');
	set_zhisun();
	zhisun = parseFloat(zhisun_arr[0]);
	options = '';
	var arractive = '';
	nowzhiying = nowzhisun * zhiyingbs;
	nowzhiying_rmb = nowzhiying * mrate;
	$('#zhiying').val(nowzhiying);
	$('#zyhtml').html(nowzhiying_rmb.toFixed(2) + '(' + rateico + nowzhiying + ')');
	baozhengjin_s = zhisun + bzj_zf * nums;
	if(mtype != 7) {
		$('#jiaoyifei_rate').html((jiaoyifei * nums / mrate).toFixed(2));
		$('#baozhengjin_rate').html(baozhengjin_s.toFixed(2));
	}
	$('#jiaoyifei').html(jiaoyifei * nums);
	$('#baozhengjin').html(baozhengjin_s.toFixed(2));
	setTimeout(function() {
		set_zhisun();
		set_totalprice();
	}, 100);
}
$(function() {
	$('.gnums_show').click(function() {
		$('.gnums_show').removeClass("mui-active");
		newnums = $(this).attr('nums');
		$('#goodsnums').val(newnums)
		set_goods_nums(newnums);
		$(this).addClass("mui-active");
	})
});</script>
								<div class="mui-table-cell mui-col-xs-4" style="display: none;">
									<div class="uk-input-blank uk-input-blank-select uk-input-blank-inverted uk-input-blank-select-small">
										<input type="hidden" name="info[nums]" id="goodsnums" value="1">
									</div>
								</div>
							</div>
						</li>
						<li class="mui-table-view-cell mui-media">
							<div class="mui-table">
								<div class="mui-table-cell mui-col-xs-8">
									<div class="mui-ellipsis">
										<span class="uk-text-muted">触发止损金额（美元）</span>
									</div>
								</div>
								<div class="mui-table-cell mui-col-xs-4">
									<div class="cs-badge-group mui-text-right" style="padding-right: 6px;">
										<div id="zs-price" class="cs-badge mui-active uk-width-1-1">
											<font id="zshtml">-1440.00($200)</font>
										</div>
									</div>
									<div class="uk-input-blank uk-input-blank-select uk-input-blank-inverted uk-input-blank-select-small" style="display: none;">
										<input type="hidden" name="info[zhisun]" id="stoploss" value="200">
									</div>
								</div>
							</div>
						</li>
						<li class="mui-table-view-cell mui-media">
							<div class="mui-table">
								<div class="mui-table-cell mui-col-xs-8">
									<div class="mui-ellipsis">
										<span class="uk-text-muted">触发止盈金额（美元）</span>
									</div>
								</div>
								<div class="mui-table-cell mui-col-xs-5">
									<div class="cs-badge-group mui-text-right" style="padding-right: 6px;">
										<div class="cs-badge mui-active uk-width-1-1">
											<font id="zyhtml">7200.00($1000)</font>
										</div>
									</div>
									<div class="uk-input-blank uk-input-blank-select uk-input-blank-inverted uk-input-blank-select-small">
										<input type="hidden" name="info[zhiying]" id="zhiying" value="1000">
									</div>
								</div>
							</div>
						</li>
					</ul>
					<ul class="mui-table-view mui-in-zero  mui-table-view-inverted-2">
						<li class="mui-table-view-cell  mui-media">
							<span class="mui-pull-right">1美元=7.20000人民币</span>
							<div class="mui-media-body mui-ellipsis">
								<span class="uk-text-muted">汇率&gt;美元兑人民币</span>
							</div>
						</li>
						<li class="mui-table-view-cell  mui-media">
							<span class="mui-pull-right">￥<em id="jiaoyifei">168.00</em>($<em id="jiaoyifei_rate">23.33</em>)</span>
							<div class="mui-media-body mui-ellipsis">
								<span class="uk-text-muted">交易综合费（元）</span>
							</div>
						</li>
						<li class="mui-table-view-cell  mui-media">
							<span class="mui-pull-right">￥<em id="baozhengjin">1800.00</em>($<em id="baozhengjin_rate">250</em>)</span>
							<div class="mui-media-body mui-ellipsis">
								<span class="uk-text-muted">冻结保证金（元）</span>
							</div>
						</li>
					</ul>
					<input type="hidden" name="info[prono]" value="CL1806">
				</form>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8">mui.init();

function set_totalprice() {
	nums = parseInt($('#goodsnums').val());
	jiaoyi_price = parseFloat($('#jiaoyifei').html());
	bzj_price = parseFloat($('#baozhengjin').html());
	totalprice = jiaoyi_price + bzj_price;
	$('#totalprice').html(totalprice);
}
$(function() {
	set_totalprice();
	$('#zhisun_modal').on("click", ".zhisun_show", function() {
		$(".zhisun_show").removeClass("mui-active");
		var nums = $(this).attr("nums");
		$('#zshtml').html($(this).html());
		$('#stoploss').val(nums);
		$(this).addClass("mui-active");
		set_zhisun();
		rate = parseFloat($(this).attr("rate"));
		moneyico = $(this).attr("moneyico");
		zhiyingprice = parseFloat(nums) * zhiying;
		$('#zyhtml').html((zhiyingprice * rate).toFixed(2) + "(" + moneyico + zhiyingprice + ")");
		$('#zhiying').val(parseFloat(nums) * zhiying);
	})
})</script>
		<div class="this-modal" id="modal-1">
			<div class="this-modal-header">
				请选择<font color="#000"><strong>触发</strong></font>止损金额
			</div>
			<div class="this-modal-body">
				<ul class="chose-gird mui-clearfix" id="zhisun_modal">
					<li>
						<a class="chose-item zhisun_show mui-active" nums="200" rate="7.20000" moneyico="$" href="Javascript:">
							1440.00($200)
						</a>
					</li>
					<li>
						<a class="chose-item zhisun_show " nums="400" rate="7.20000" moneyico="$" href="Javascript:">
							2880.00($400)
						</a>
					</li>
					<li>
						<a class="chose-item zhisun_show " nums="600" rate="7.20000" moneyico="$" href="Javascript:">
							4320.00($600)
						</a>
					</li>
					<li>
						<a class="chose-item zhisun_show " nums="1000" rate="7.20000" moneyico="$" href="Javascript:">
							7200.00($1000)
						</a>
					</li>
					<li>
						<a class="chose-item zhisun_show " nums="1600" rate="7.20000" moneyico="$" href="Javascript:">
							11520.00($1600)
						</a>
					</li>
					<li>
						<a class="chose-item zhisun_show " nums="2000" rate="7.20000" moneyico="$" href="Javascript:">
							14400.00($2000)
						</a>
					</li>
				</ul>
			</div>
			<div class="this-modal-footer">
				<a class="mui-btn mui-btn-theme" href="Javascript:" onclick="layer.closeAll();">
					确定
				</a>
			</div>
		</div>
		<div class="this-modal" id="modal-2">
			<div class="this-modal-header">
				请选择触发止盈金额
			</div>
			<div class="this-modal-body">
				<ul class="chose-gird mui-clearfix" id="zhiying_modal">
					<li>
						<a class="chose-item zhiying_show mui-active" nums="5" href="Javascript:">
							36.00($5)
						</a>
					</li>
				</ul>
			</div>
			<div class="this-modal-footer">
				<a class="mui-btn mui-btn-theme" href="Javascript:" onclick="layer.closeAll();">
					确定
				</a>
			</div>
		</div>
		<script>$('#zs-price').on('click', function() {
	layer.open({
		type: 1,
		title: false,
		closeBtn: 0,
		shadeClose: true,
		skin: 'this-modal-wrap',
		content: $('#modal-1')
	});
});
$('#zy-price').on('click', function() {
	layer.open({
		type: 1,
		title: false,
		closeBtn: 0,
		shadeClose: true,
		skin: 'this-modal-wrap',
		content: $('#modal-2')
	});
});</script>