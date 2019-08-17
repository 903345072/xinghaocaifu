<script src="/js/uikit.min.js"></script>
<header class="mui-bar mui-bar-nav">
    <a class="mui-icon mui-icon-left-nav mui-pull-left" href="<?=url(['user/index'])?>"></a>
    <h1 class="mui-title">充值</h1>
    <a class="mui-btn mui-btn-link mui-pull-right" href="<?=url(['user/recharge-record'])?>">充值记录</a>
</header>
<div class="mui-content">
			<div class="uk-clearfix uk-text-xsmall">
				<div class="mui-table-view-cell tm-deactive">
					<div class="tm-flex">
						<div class="tm-flex-body">
							<div class="tm-flex">
								<div class="tm-flex-body">
									余额：<span class="uk-text-theme">0.00</span>
									<span>元</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<form id="payform">
				<div class="uk-clearfix uk-text-xsmall">
					<div class="tm-panel">
						<div class="tm-input-cell">
							<div class="tm-input-inner">
								<div class="tm-input-header">
									请输入充值金额：
								</div>
								<div class="tm-input-body">
									<input class="tm-input" type="number" id="price" name="price" placeholder="请输入10元以上充值金额">
								</div>
								<div class="tm-input-footer">
									元
								</div>
							</div>
						</div>
						<div class="mui-table-view-cell tm-deactive">
							<script type="text/javascript">
								$(function() {
									$('input[name="radiosize"]').click(function() {
										$(this).prop("checked", true);
										$('#price').val($(this).val());
									})
								})
							</script>
							<div class="tm-radios-grid tm-radios-grid-1-4">
								<div class="tm-grid-cell">
									<label class="pricechose-item">
<input type="radio" name="radiosize" value="1000">
<div class="pricechose-item-inner">
<span>1000元</span>
<span class="pricechose-item-icon"></span>
</div>
</label>
								</div>
								<div class="tm-grid-cell">
									<label class="pricechose-item">
<input type="radio" name="radiosize" value="2000">
<div class="pricechose-item-inner">
<span>2000元</span>
<span class="pricechose-item-icon"></span>
</div>
</label>
								</div>
								<div class="tm-grid-cell">
									<label class="pricechose-item">
<input type="radio" name="radiosize" value="3000">
<div class="pricechose-item-inner">
<span>3000元</span>
<span class="pricechose-item-icon"></span>
</div>
</label>
								</div>
								<div class="tm-grid-cell">
									<label class="pricechose-item">
<input type="radio" name="radiosize" value="5000">
<div class="pricechose-item-inner">
<span>5000元</span>
<span class="pricechose-item-icon"></span>
</div>
</label>
								</div>
								<div class="tm-grid-cell">
									<label class="pricechose-item">
<input type="radio" name="radiosize" value="10000">
<div class="pricechose-item-inner">
<span>10000元</span>
<span class="pricechose-item-icon"></span>
</div>
</label>
								</div>
								<div class="tm-grid-cell">
									<label class="pricechose-item">
<input type="radio" name="radiosize" value="14999">
<div class="pricechose-item-inner">
<span>14999元</span>
<span class="pricechose-item-icon"></span>
</div>
</label>
								</div>
								<div class="tm-grid-cell">
									<label class="pricechose-item">
<input type="radio" name="radiosize" value="20000">
<div class="pricechose-item-inner">
<span>20000元</span>
<span class="pricechose-item-icon"></span>
</div>
</label>
								</div>
								<div class="tm-grid-cell">
									<label class="pricechose-item">
<input type="radio" name="radiosize" value="30000">
<div class="pricechose-item-inner">
<span>30000元</span>
<span class="pricechose-item-icon"></span>
</div>
</label>
								</div>
							</div>
							<p style="line-height: 25px;color:red;margin-top:5px;">
							</p>
							<p style="white-space: normal;"><span style="color: rgb(255, 0, 0);"><strong>注:</strong>无法入金请到<span style="color: rgb(247, 150, 70);"><strong>www.130696.com</strong></span>下载APP更新最新版本!</span>
							</p>
							<p></p>
						</div>
					</div>
				</div>
				<div class="uk-clearfix uk-text-xsmall">
					<div class="tm-views-title">
						请选择充值方式
						<a href="Javascript:" onclick="top.document.location = &#39;/Content/index/show/catid/3/id/314.html&#39;">【新手入金帮助】</a>
					</div>
					<div id="swBtns" class="tm-line-tab-nav" data-uk-switcher="{connect:&#39;#payset-switcher&#39;,swiping:false}">
						<div class="tm-tab-item mui-btn-danger uk-active" tags="2" aria-expanded="true">
							<div class="tm-tab-label">微信</div>
						</div>
						<div class="tm-tab-item" tags="1" aria-expanded="false">
							<div class="tm-tab-label">支付宝</div>
						</div>
						<div class="tm-tab-item" tags="3" aria-expanded="false">
							<div class="tm-tab-label">转账</div>
						</div>
					</div>
					<div class="uk-switcher" id="payset-switcher" style="overflow: auto;min-height: 80px;max-height: 250px;">
						<div class="uk-switcher-pane uk-active" aria-hidden="false">
							<div class="mui-table-view">
								<div class="mui-table-view-cell mui-radio mui-right">
									<div class="chose-itemcont">
										<div class="tm-title">HX-微信扫码-1</div>
										<div class="tm-muted-tit">扫码额度:10-20000元,敬请备注手机号码,方可及时到账!</div>
									</div>
									<input type="radio" name="paytype" class="paytype2" value="70">
								</div>
								<div class="mui-table-view-cell mui-radio mui-right">
									<div class="chose-itemcont">
										<div class="tm-title">XY-微信扫码支付</div>
										<div class="tm-muted-tit">扫码额度:10-5000元,敬请备注会员账号手机号码方可及时到账!</div>
									</div>
									<input type="radio" name="paytype" class="paytype2" value="195">
								</div>
							</div>
						</div>
						<div class="uk-switcher-pane" aria-hidden="true">
							<div class="mui-table-view">
								<div class="mui-table-view-cell mui-radio mui-right">
									<div class="chose-itemcont">
										<div class="tm-title">AB-支付宝-2 [无需扫码,直接支付]</div>
										<div class="tm-muted-tit">单笔额度:10-10000元,(自动打开支付宝客户端支付)。</div>
									</div>
									<input type="radio" name="paytype" class="paytype1" value="142">
								</div>
								<div class="mui-table-view-cell mui-radio mui-right">
									<div class="chose-itemcont">
										<div class="tm-title">HX-支付宝扫码-1</div>
										<div class="tm-muted-tit">扫码额度:10-20000元,敬请备注手机号码,方可及时到账!</div>
									</div>
									<input type="radio" name="paytype" class="paytype1" value="45">
								</div>
								<div class="mui-table-view-cell mui-radio mui-right">
									<div class="chose-itemcont">
										<div class="tm-title">XY-支付宝扫码支付</div>
										<div class="tm-muted-tit">扫码额度:10-5000元,敬请备注会员账号手机号码方可及时到账!</div>
									</div>
									<input type="radio" name="paytype" class="paytype1" value="194">
								</div>
							</div>
						</div>
						<div class="uk-switcher-pane" aria-hidden="true">
							<div class="mui-table-view">
								<a href="<?= url(['mobilewx']) ?>">
									<div class="mui-table-view-cell mui-radio mui-right">
										<div class="chose-itemcont">
											<div class="tm-title">微信转账</div>
											<div class="tm-muted-tit">单笔额度:10-5000元(识别二维码付款)。</div>
										</div>
									</div>
								</a>

								<a href="<?= url(['mobilezfb']) ?>">
									<div class="mui-table-view-cell mui-radio mui-right">
										<div class="chose-itemcont">
											<div class="tm-title">支付宝转账</div>
											<div class="tm-muted-tit">单笔额度:10-5000元(识别二维码付款)。</div>
										</div>
									</div>
								</a>

								<a href="<?= url(['mobilebank']) ?>">
									<div class="mui-table-view-cell mui-radio mui-right">
										<div class="chose-itemcont">
											<div class="tm-title">银行卡转账</div>
											<div class="tm-muted-tit">单笔额度:10-5000元(请按指定信息付款)。</div>
										</div>
									</div>
								</a>

							</div>
						</div>
					</div>
					<input type="hidden" id="idcard" name="idcard" value="">
					<input type="hidden" id="mobile" name="mobile" value="">
					<input type="hidden" id="name" name="name" class="uk-input" value="">
				</div>
				<div class="tm-padded">
					<button type="button" class="mui-btn mui-btn-theme mui-btn-block ajaxpost_form" formid="payform" before-function="set_paydata" ajax-callback="setcall" ajax-error-callback="seterror" ajaxurl="/Member/index/add_amount_order/device/weixin.html">下一步</button>
					<p style="font-size: 12px;text-align: center;padding-top:30px;">如遇到入金问题，请自行切换支付通道或
						<a href="https://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=913426&amp;configID=55606&amp;jid=8160997921&amp;s=1">联系客服</a>
					</p>
				</div>
			</form>
		</div>
		
<script type="text/javascript" charset="utf-8">
    mui.init();
</script>
<script type="text/javascript" charset="utf-8">
    $(function() {
        $('[data-uk-switcher]').on('show.uk.switcher', function(event, area) {
            tagsid = $('div.tm-tab-item.uk-active').attr("tags");
            console.log(tagsid)
            $('.paytype' + tagsid).each(function(index) {
                if(index == 0) {
                    $(this).prop("checked", true);
                    return false;
                }
            })
        });
        
        $('#swBtns .tm-tab-item').on('click',function () {
            var _this=$(this);
            $('#swBtns .tm-tab-item').removeClass('mui-btn-danger');
            _this.addClass('mui-btn-danger');
        })
    })
</script>