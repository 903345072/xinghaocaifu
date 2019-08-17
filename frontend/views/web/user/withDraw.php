<link href="/css/mui.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/layer.css" id="layui_layer_skinlayercss" style="">

<script type="text/javascript" src="/js/jquery.min.js"></script>

<script type="text/javascript" src="/js/layer.js"></script>
<script src="/js/mui.min.js "></script>

<script type="text/javascript" src="/js/common.js"></script>

<div class="mui-ios mui-ios-11 mui-ios-11-0">
	<noscript>
	&lt;meta HTTP-EQUIV="refresh" content="0;url='http://192.168.0.10:6001/Member/index/tixian.html?PageSpeed=noscript'" /&gt;&lt;style&gt;&lt;!--table,div,span,font,p{display:none} --&gt;&lt;/style&gt;&lt;div style="display:block"&gt;Please click &lt;a href="http://192.168.0.10:6001/Member/index/tixian.html?PageSpeed=noscript"&gt;here&lt;/a&gt; if you are not redirected within a few seconds.&lt;/div&gt;
	</noscript>

	<div class="mui-content">
		<div class="mui-input-card">
			<div class="mui-table-view">
				<div class="mui-table-view-cell">
					<div class="uk-text-medium">
						余额：<b class="uk-text-xlarge uk-text-theme">0.00</b> 元
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">function set_paydata(obj) {
	return {
		status: 1
	};
}

function setcall(obj, datajson) {
	document.location = "/Member/index/tixian_log/device/weixin.html";
}

function seterror(obj, datajson) {
	layer.msg(datajson.msg);
}</script>

		<form id="payform">
			<input type="hidden" name="info[type]" value="0">
			<div class="mui-input-card">
				<div class="mui-table-view mui-in-input-card">
					<div class="mui-table-view-cell mui-media">
						<div class="mui-table">
							<div class="mui-table-cell uk-text-middle uk-width-em-6">
								提现金额
							</div>
							<div class="mui-media-body uk-input-blank">
								<input type="text" name="info[price]" id="price" class="uk-input" placeholder="提现金额，最低100元 ">
							</div>
						</div>
					</div>
					<div class="mui-table-view-cell mui-media">
						<div class="mui-table">
							<div class="mui-table-cell uk-text-middle uk-width-em-6">
								持卡人姓名
							</div>
							<div class="mui-media-body uk-input-blank">
								<input type="text" name="info[name_show]" id="name_show" value="丁国星" class="uk-input" placeholder="持卡人姓名" "=" ">
								<input type="hidden" name="info[name] " id="name " value="丁国星 ">
								</div>
								</div>
								</div>
								<div class="mui-table-view-cell mui-media ">
								<div class="mui-table">
								<div class="mui-table-cell uk-text-middle uk-width-em-6 ">
								银行卡
								</div>
								<div class="mui-media-body uk-input-blank uk-input-blank-select ">
								<select class="uk-input" name="bankid" id="bankid " onchange="getBankInfo(this.value) ">
								<option value="0 " selected=" ">添加新卡</option>
								</select>
								</div>
								</div>
								</div>
								<div class="mui-table-view-cell mui-media bankinfo ">
								<div class="mui-table ">
								<div class="mui-table-cell uk-text-middle uk-width-em-6 ">
								银行开户行
								</div>
								<div class="mui-media-body uk-input-blank ">
								<select class="uk-input " name="info[bankname] " id="bankname " style="color:red ">
								<option value=" ">请选择银行开户行</option>
								<option value="工商银行 ">工商银行</option>
								<option value="农业银行 ">农业银行</option>
								<option value="建设银行 ">建设银行</option>
								<option value="招商银行 ">招商银行</option>
								<option value="中国银行 ">中国银行</option>
								<option value="民生银行 ">民生银行</option>
								<option value="浦发银行 ">浦发银行</option>
								<option value="平安银行 ">平安银行</option>
								<option value="交通银行 ">交通银行</option>
								<option value="邮储银行 ">邮储银行</option>
								<option value="中信银行 ">中信银行</option>
								<option value="兴业银行 ">兴业银行</option>
								<option value="光大银行 ">光大银行</option>
								<option value="上海银行 ">上海银行</option>
								</select>
								</div>
								</div>
								</div>
								<div class="mui-table-view-cell mui-media bankinfo ">
								<div class="mui-table">
								<div class="mui-table-cell uk-text-middle uk-width-em-6 ">
								网点支行
								</div>
								<div class="mui-media-body uk-input-blank ">
								<input type="text" name="info[idcard_show] " id="idcard_show " value=" " class="uk-input " placeholder="网点支行 ">
								<input type="hidden" name="info[idcard] " id="idcard " value=" ">
								</div>
								</div>
								</div>
								<div class="mui-table-view-cell mui-media bankinfo ">
								<div class="mui-table">
								<div class="mui-table-cell uk-text-middle uk-width-em-6 ">
								提现卡号
								</div>
								<div class="mui-media-body uk-input-blank ">
								<input type="text" name="info[bankno_show] " id="bankno_show " value=" " class="uk-input " placeholder="提现卡号 ">
								<input type="hidden" name="info[bankno] " id="bankno " value=" ">
								</div>
								</div>
								</div>
								<div class="mui-table-view-cell mui-media">
								<div class="mui-table">
								<div class="mui-table-cell uk-text-middle uk-width-em-6 ">
								手机号
								</div>
								<div class="mui-media-body uk-input-blank">
								<input type="text" name="info[mobile_show]" id="mobile_show" value=" " class="uk-input " placeholder="手机号 ">
								<input type="hidden" name="info[mobile]" id="mobile" value=" ">
							</div>
						</div>
					</div>
					<div class="mui-table-view-cell mui-media ">
						<div class="mui-table">
							<div class="mui-table-cell uk-text-middle uk-width-em-6 ">
								登录密码
							</div>
							<div class="mui-media-body uk-input-blank ">
								<input type="password" name="paypwd" id="paypwd" class="uk-input" placeholder="请输入登录密码 ">
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<div class="mui-content-padded uk-margin-xmedium-top ">
			<button type="button" class="mui-btn mui-btn-warning mui-btn-block ajaxpost_form " formid="payform " ajax-error-callback="seterror " before-function="set_paydata " ajax-callback="setcall " ajaxurl="/Member/index/tixian.html ">
			提交申请
			</button>
		</div>
	</div>

	<script type="text/javascript ">
function getBankInfo(bankid){bankid=parseInt(bankid);if(!bankid){$('.bankinfo').show();$('#bankname').val('');$('#bankno').val('');$('#bankno_show').val('');$('#idcard').val('');$('#idcard_show').val('');}else{$('.bankinfo').hide();$.post("/Member/index/get_bank_info.html ",{bankid:bankid},function(datajson){$('#bankname').val(datajson.openbank);$('#bankno').val(datajson.bankno);$('#bankno_show').val(datajson.bankno_show);$('#idcard').val(datajson.cardno);$('#idcard_show').val(datajson.cardno_show);},'json');}}$(function(){getBankInfo(0)})
mui.init();
	</script>
