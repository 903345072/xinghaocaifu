
<link href="/pc/css/mui.min.css" rel="stylesheet">
<link rel="stylesheet" href="/pc/css/layer.css" id="layui_layer_skinlayercss" style="">
<script type="text/javascript" src="/pc/js/jquery.min.js"></script>
<script type="text/javascript" src="/pc/js/layer.js"></script>

<script type="text/javascript" src="/pc/js/common.js"></script>
<script src="/pc/js/mui.min.js"></script>



<div class="mui-content">
			<form class="mui-input-group" id="regform">
				<div class="mui-input-row">
					<label>原密码</label><input placeholder="密码" name="oldpassword" type="password">
				</div>
				<div class="mui-input-row">
					<label>新密码</label><input placeholder="密码" name="password" type="password">
				</div>
				<div class="mui-input-row">
					<label>确认新密码</label><input placeholder="再次输入密码" name="repassword" type="password">
				</div>
				<div class="mui-button-row">
					<button class="mui-btn mui-btn-primary ajaxpost_form" ajaxurl="/Member/index/edit_pwd.html" formid="regform" ajax-callback="setcall" type="button">确认</button>
				</div>
			</form>
		</div>


<script type="text/javascript" charset="utf-8">
mui.init();

function setcall(obj, datajson) {
	layer.msg('修改成功！');
}</script>