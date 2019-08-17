var layerindex;
var uploader;

function ajaxpost_form(obj) {
	var formid = obj.attr("formid");
	var ajaxurl = obj.attr("ajaxurl");
	var before_function = obj.attr("before-function");
	if(before_function) {
		returndata = eval(before_function)(obj);
		if(!returndata.status) {
			layer.closeAll('loading');
			layer.msg(returndata.msg, {
				shade: [0.5, '#000000'],
				shadeClose: true
			});
			return false;
		}
	}
	var datajson = $("#" + formid).serialize();
	var ajax_callback = obj.attr("ajax-callback");
	var ajax_callback_error = obj.attr("ajax-error-callback");
	var isframe = obj.attr("isframe");
	$.post(ajaxurl, datajson, function(datajson) {
		layer.closeAll('loading');
		if(datajson.state) {
			if(datajson.msg) {
				layer.msg(datajson.msg, {
					shade: [0.5, '#000000'],
					shadeClose: true
				});
			}
			if(ajax_callback) eval(ajax_callback)(obj, datajson.data);
		} else {
			if(ajax_callback_error) {
				eval(ajax_callback_error)(obj, datajson);
			} else {
				if(datajson.info) {
					var _msg = datajson.info;
					for(var _key in _msg){
                        layer.msg(_msg[_key]['0'], {
                            //shade: [0.5, '#000000'],
                            shadeClose: true
                        });
                        break;
					}
				}
			}
		}
	})
}
$(function() {
	$('body').on("click", ".ajaxpost", function() {
		layer.load(1, {
			shade: [0.6, '#000']
		});
		var obj = $(this);
		var ajaxurl = $(this).attr("ajaxurl");
		var ajaxdata = $(this).attr("ajaxdata");
		var isframe = obj.attr("isframe");
		if(ajaxdata == 'func') {
			var datafun = $(this).attr("datafun");
			var datajson = eval(datafun)(obj);
			layer.closeAll('loading');
			if(datajson == false) {
				return false;
			}
		} else {
			var datajson = eval("(" + ajaxdata + ")");
		}
		var ajax_callback = $(this).attr("ajax-callback");
		var ajax_error_callback = $(this).attr("ajax-error-callback");
		$.post(ajaxurl, datajson, function(datajson) {
			layer.closeAll('loading');
			if(datajson.status == 1) {
				if(datajson.msg) {
					layer.alert(datajson.msg, {
						icon: 1
					});
				}
				if(ajax_callback) eval(ajax_callback)(obj, datajson.data);
			} else if(datajson.status == -1) {
				if(isframe == '1') {
					layer.alert(datajson.msg, function() {
						parent.document.location = '/site/login';
					});
				} else {
					layer.alert(datajson.msg, function() {
						document.location = '/site/login';
					});
				}
			} else {
				if(datajson.msg) {
					if(ajax_error_callback) {
						layer.alert(datajson.msg, {
							icon: 2
						}, function() {
							eval(ajax_error_callback)(obj, datajson.data);
							layer.closeAll();
						});
					} else {
						layer.alert(datajson.msg, {
							icon: 2
						});
					}
				}
			}
		})
		return false;
	})
	$('.page-ajax').each(function() {
		var datajson = $(this).attr("ajax-data");
		datajson = datajson ? eval("(" + datajson + ")") : {};
		var obj = $(this);
		var post_ajax_url = obj.attr('ajax-url');
		var post_ajax_data = obj.attr('ajax-post-data');
		post_ajax_data = post_ajax_data ? eval("(" + post_ajax_data + ")") : {};
		var content_html_id = obj.attr("objid");
		$.post(page_set_url, datajson, function(datajson) {
			if(datajson.status == 1) {
				obj.pagination(datajson.data.totalitem, {
					num_edge_entries: 2,
					num_display_entries: 4,
					callback: function(page_index, jq) {
						$('#' + content_html_id).html('<div style="text-align:center;height:200px;line-height:200px;"><img src="' + load_img + '"></div>');
						post_ajax_data.page = page_index;
						$.post(post_ajax_url, post_ajax_data, function(dataarr) {
							if(dataarr.status == 1) {
								$('#' + content_html_id).html(dataarr.data.content);
							}
						}, 'json')
						return false;
					},
					items_per_page: datajson.data.peritem
				});
			}
		}, 'json');
	});
	$('body').on("click", ".dialog_common", function() {
		var dialogWidth = $(this).attr("dialogWidth");
		var dialogHeight = $(this).attr("dialogHeight");
		var title = $(this).html();
		var dialogurl = $(this).attr("href");
		layer.open({
			type: 2,
			title: title,
			shadeClose: true,
			shade: 0.8,
			area: ['50%', '40%'],
			content: dialogurl,
		});
		return false;
	})
	$('body').on("click", ".dialog_common_form", function() {
		var dialogWidth = $(this).attr("dialogWidth");
		var dialogHeight = $(this).attr("dialogHeight");
		var title = $(this).html();
		var dialogurl = $(this).attr("href");
		var callback = $(this).attr("data-callback");
		layer.open({
			type: 2,
			title: title,
			shadeClose: true,
			shade: 0.8,
			btn: ['确定', '取消'],
			area: ['50%', '40%'],
			content: dialogurl,
			yes: function(index, layero) {
				var iframeWin = window[layero.find('iframe')[0]['name']];
				iframeWin.$('#dosubmit').click();
			}
		});
		return false;
	});
	$("body").on("click", ".ajaxpost_form", function() {
		layer.load(1);
		var obj = $(this);
		var isconfirm = obj.attr("isconfirm");
		var confirmtitle = obj.attr("confirmtitle");
		var confirm_func = obj.attr("confirm-func");
		if(!confirmtitle) {
			confirmtitle = "系统提示";
		}
		if(confirm_func) {
			isconfirm = eval(confirm_func)(obj);
		}
		if(isconfirm) {
			layer.closeAll('loading');
			layer.confirm(isconfirm, {
				btn: ['取消', '确定'],
				title: confirmtitle,
			}, function() {
				layer.closeAll();
			}, function() {
				ajaxpost_form(obj);
			});
		} else {
			ajaxpost_form(obj);
		}
	});

	$("body").on("click", ".upload_picker", function() {
		var formdata = eval("(" + $(this).attr('formdata') + ")");
		uploader.option("formData", formdata);
		var uploadid = $(this).attr('id');
		var up_call = $(this).attr("upload-callback");
		uploader.on('fileQueued', function(file) {
			if(parseInt(formdata.isimg) == 1) {
				uploader.makeThumb(file, function(error, src) {
					if(error) {
						layer.alert('不能预览');
						return;
					}
					if(up_call) {
						eval(up_call)(file, src);
					}
				}, 300, 300);
			} else {
				eval(up_call)(file, src);
			}
		});
		uploader.on('uploadProgress', function(file, percentage) {
			layerindex = layer.load();
		});
		uploader.on('uploadSuccess', function(file) {
			layer.close(layerindex);
			layer.msg('上传成功');
		});
		uploader.on('uploadError', function(file) {
			layer.close(layerindex);
			layer.msg('上传失败');
		});
		uploader.on('uploadComplete', function(file) {
			layer.close(layerindex);
		});
	})
//	$(window).load(function(){
//		$(".tm-bar-tab .mui-tab-item").click(function(){
//		var urls = window.location.href;
//		console.log(urls);
//		$(this).addClass("mui-active").siblings().removeClass("mui-active");
//	})
//	})

});