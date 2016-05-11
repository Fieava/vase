function load_sub_nav(element, url, callback_data) {
	// 加载子导航
	var sub_nav = $("#sub_nav");
	sub_nav.html('<div id="sub_nav_container"><div id="sub_nav_info"><i class="fa fa-refresh fa-spin fa-5x"></i><span>Loading...</span></div></div>');

	if (element) {
		$(element).siblings().each(function (index, ele) {
			$(ele).removeClass('nav_item_now');
		});
		$(element).addClass('nav_item_now');
	}

	sub_nav.load(url, function (response, status) {
		if (status == "error") {
			if (response == "Unauthorized.") {
				sub_nav.html('<div id="sub_nav_container"><div id="sub_nav_error"><i class="fa fa-ban fa-5x"></i><span>Unauthorized</span></div></div>');
			} else if (response == "Forbidden.") {
				sub_nav.load('sub_nav/forbidden');
			} else {
				sub_nav.load('sub_nav/load_error');
			}
		} else if (status == "success") {
			deal_ajax_post_success_response(callback_data);
		}
	});
}

function load_content(element, url, callback_data) {
	// 加载内容
	var content = $('#content');
	content.html('<div id="content_container"><div id="content_info"><i class="fa fa-refresh fa-spin fa-5x"></i><span>Loading...</span></div></div>');

	if (element) {
		$('.list_now').each(function (index, ele) {
			$(ele).removeClass('list_now');
		});
		$(element).addClass('list_now');
	}

	content.load(url, function (response, status) {
		if (status == "error") {
			if (response == "Unauthorized.") {
				content.html('<div id="content_container"><div id="content_error"><i class="fa fa-ban fa-5x"></i><span>Unauthorized</span></div></div>');
			} else if (response == "Forbidden.") {
				content.load('content/forbidden');
			} else {
				content.load('content/load_error');
			}
		} else if (status == "success") {
			$('#content_container').height($(window).height() - $('footer').outerHeight());
			deal_ajax_post_success_response(callback_data);
		}
	});
}

function show_sub_nav_models(models_data) {
	//var icons = ['fa-cogs', 'fa-square', 'fa-circle', 'fa-play', 'fa-angle-right'];
	var icons = ['fa-cogs', 'fa-cogs', '', '', ''];
	generate_sub_nav_models_list_html(models_data, 0, false, 0, icons);
}

function generate_sub_nav_models_list_html(models_data, id, sub_item, level, icons) {
	//console.log('ID/SUB: ' + id + '/' + sub_item);
	$(models_data).each(function (index, value) {
		if (sub_item) {
			var list_root = $('#model_sub_list_' + id);
		} else {
			var list_root = $("#sub_nav_list");
		}
		list_root.append('<li style="padding-left:' + (15 + level * 10) + 'px" onclick="load_content(this, \'models/' + value.id + '/task\')"><i class="fa ' + icons[level % icons.length] + '"></i> ' + value.name + '</li><ul id="model_sub_list_' + value.id + '" class="sub_nav_list"></ul>');
		if (typeof(value.sub_models) == 'object') {
			generate_sub_nav_models_list_html(value.sub_models, value.id, true, level + 1, icons);
		}
	});
}

function show_input_box() {
	$('.line_content').hide();
	$('.line_input').css('display', 'inline-block');
	$('#content_top_cancel_edit').show();
	$('#content_top_submit').show();
	$('#content_top_edit').hide();
}

function hide_input_box() {
	$('.line_input').hide();
	$('.line_content').css('display', 'inline-block');
	$('.content_validate_info').hide();
	$('#content_top_edit').show();
	$('#content_top_submit').hide();
	$('#content_top_cancel_edit').hide();
}

function submit_input() {
	$('form').submit();
}

function init_input_box(page) {
	switch (page) {
		case 'content.project.project':
			// set JQuery UI controls
			$('#status').selectmenu({width: 192});
			$('#start_at').datetimepicker({dateFormat: 'yy-mm-dd', timeFormat: "HH:mm:ss"});
			$('#end_at').datetimepicker({dateFormat: 'yy-mm-dd', timeFormat: "HH:mm:ss"});
			$('#version').mask("9.9");
			$('#project_time_can_be_exceed').selectmenu({width: 192});
			// set form validation
			$('#content_project').validate({
				rules: {
					name: "required",
					development_name: "required",
					start_at: "datetime",
					end_at: "datetime"
				},
				messages: {
					name: {required: "Project <strong>Name</strong> cannot be null"},
					development_name: {required: "Project <strong>Development Name</strong> cannot be null"},
					start_at: {datetime: "<strong>Start At</strong> can only be a date with a time"},
					end_at: {datetime: "<strong>End At</strong> can only be a date with a time"}
				},
				errorContainer: ".content_validate_info",
				errorLabelContainer: ".content_validate_info",
				wrapper: "li",
				submitHandler: function (form) {
					post_url = $('#content_project').attr('action');
					$.post(post_url, $(form).serialize(), function (data) {
						deal_ajax_post_success_response(data);
					}).fail(function (data) {
						try {
							deal_ajax_post_error_response(data);
						} catch (e) {
							deal_ajax_error(data, e.message);
						}
					});
				}
			});
			$('.line_input').hide();
			$('.content_validate_info').hide();
			break;
		case 'content.project.add_form':
			// set JQuery UI controls
			$('#status').selectmenu({width: 192});
			$('#start_at').datetimepicker({dateFormat: 'yy-mm-dd', timeFormat: "HH:mm:ss"});
			$('#end_at').datetimepicker({dateFormat: 'yy-mm-dd', timeFormat: "HH:mm:ss"});
			$('#version').mask("9.9");
			$('#project_time_can_be_exceed').selectmenu({width: 192});
			// set form validation
			$('#content_project').validate({
				rules: {
					name: "required",
					development_name: "required",
					start_at: "datetime",
					end_at: "datetime"
				},
				messages: {
					name: {required: "Project <strong>Name</strong> cannot be null"},
					development_name: {required: "Project <strong>Development Name</strong> cannot be null"},
					start_at: {datetime: "<strong>Start At</strong> can only be a date with a time"},
					end_at: {datetime: "<strong>End At</strong> can only be a date with a time"}
				},
				errorContainer: ".content_validate_info",
				errorLabelContainer: ".content_validate_info",
				wrapper: "li",
				submitHandler: function (form) {
					post_url = $('#content_project').attr('action');
					$.post(post_url, $(form).serialize(), function (data) {
						deal_ajax_post_success_response(data);
					}).fail(function (data) {
						try {
							deal_ajax_post_error_response(data);
						} catch (e) {
							deal_ajax_error(data, e.message);
						}
					});
				}
			});
			break;
		default:
	}
}

function deal_ajax_post_error_response(data) {
	// 处理 AJAX 提交错误
	var response = JSON.parse(data.responseText);
	var dialog_ul = '<ul class="error_dialog_ul">';
	$.each(response, function (index, value) {
		dialog_ul += '<li>' + value + '</li>';
	});
	dialog_ul += '</ul>';

	$('#ajax_error_response_dialog_box').html(dialog_ul).dialog({
		appendTo: '#content_container',
		resizable: false,
		modal: true,
		buttons: {
			"Ok": function () {
				$(this).dialog("close");
			}
		}
	});

}

function deal_ajax_error(data, msg) {
	// 显示 AJAX 错误
	console.log(data);
	if (data.responseText == "Unauthorized.") {
		$('#ajax_error_dialog_box').html('<i class="fa fa-ban"></i> <span>Unauthorized</span>').dialog({
			appendTo: '#content_container',
			resizable: false,
			modal: true,
			buttons: {
				"Ok": function () {
					$(this).dialog("close");
				}
			}
		});
	} else if (data.responseText == "Forbidden.") {
		$('#ajax_error_dialog_box').html('<i class="fa fa-ban"></i> <span>Forbidden</span>').dialog({
			appendTo: '#content_container',
			resizable: false,
			modal: true,
			buttons: {
				"Ok": function () {
					$(this).dialog("close");
				}
			}
		});
	} else {
		$('#ajax_error_dialog_box').html(msg + '<br/><br/><strong>Please contact a technician, report the message shown above and the action you trying to do.</strong>').dialog({
			appendTo: '#content_container',
			resizable: false,
			modal: true,
			buttons: {
				"Ok": function () {
					$(this).dialog("close");
				}
			}
		});
	}
}

function deal_ajax_post_success_response(data) {
	// 处理 AJAX 成功提交后的返回数据
	//console.log(data);
	if (!data) {
		return;
	}
	if (data.code == 0) {
		if (data.action.length > 0) {
			switch (data.action[0].action) {
				case 'load_content':
					container = data.action[0].container;
					nav_item = data.action[0].nav_item;
					url = data.action[0].url;
					data.action = delete_object_from_object(data.action, 0);
					deal_ajax_response_load_content(container, nav_item, url, data);
					return;
				default :
					deal_ajax_error('Wrong response data');
					break;
			}
		}
	} else {

	}
}

function deal_ajax_response_load_content(container, nav_item, url, callback_data) {
	// 处理 AJAX 成功后加载页面的回调
	switch (container) {
		case 'content':
			load_content(nav_item, url, callback_data);
			break;
		case 'sub_nav':
			load_sub_nav(nav_item, url, callback_data);
			break;
		default :
			deal_ajax_error('Wrong response data');
			break;
	}
}

function delete_item() {
	// 删除表单所示项目
	delete_url = $('form').attr('delete');
	if (!delete_url) {
		deal_ajax_error('Can\'t delete this, No action URL given.');
	}
	$.post(delete_url, {'_token': $('#csrf_token').val()}, function (data) {
		deal_ajax_post_success_response(data);
	}).fail(function (data) {
		try {
			deal_ajax_post_error_response(data);
		} catch (e) {
			deal_ajax_error(data, e.message);
		}
	});
}

function delete_object_from_object(object, delete_item) {
	// 从无 Key 对象中删除一个元素
	if (!object) {
		return false;
	}
	if (object.length == 0) {
		return object;
	}
	for (i = 0; i < object.length; i++) {
		if (i == delete_item) {
			if (object[i + 1]) {
				object[i] = object[i + 1];
			}
		}
		if (i > delete_item) {
			if (object[i + 1]) {
				object[i] = object[i + 1];
			}
		}
	}
	delete object[object.length - 1];
	object.length--;

	return object;
}