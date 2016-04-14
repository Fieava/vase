function load_sub_nav(element, url) {
	var sub_nav = $("#sub_nav");
	sub_nav.html('<div id="sub_nav_container"><div id="sub_nav_info"><i class="fa fa-refresh fa-spin fa-5x"></i><span>Loading...</span></div></div>');

	if (element) {
		$(element).siblings().each(function (index, ele) {
			$(ele).removeClass('nav_item_now');
		});
		$(element).addClass('nav_item_now');
	}

	sub_nav.load(url, function (response, status, xhr) {
		if (status == "error") {
			if (response == "Unauthorized.") {
				sub_nav.html('<div id="sub_nav_container"><div id="sub_nav_error"><i class="fa fa-ban fa-5x"></i><span>Unauthorized</span></div></div>');
			} else if (response == "Forbidden.") {
				sub_nav.load('sub_nav/forbidden');
			} else {
				sub_nav.load('sub_nav/load_error');
			}
		}
	});
}

function load_content(element, url) {
	var content = $('#content');
	content.html('<div id="content_container"><div id="content_info"><i class="fa fa-refresh fa-spin fa-5x"></i><span>Loading...</span></div></div>');

	if (element) {
		$(element).siblings().each(function (index, ele) {
			$(ele).removeClass('list_now');
		});
		$(element).addClass('list_now');
	}

	content.load(url, function (response, status, xhr) {
		if (status == "error") {
			if (response == "Unauthorized.") {
				content.html('<div id="content_container"><div id="content_error"><i class="fa fa-ban fa-5x"></i><span>Unauthorized</span></div></div>');
			} else if (response == "Forbidden.") {
				content.load('content/forbidden');
			} else {
				content.load('content/load_error');
			}
		}
	});
}

function show_sub_nav_models(models_data) {
	generate_sub_nav_models_list_html(models_data, 0, false);
}

function generate_sub_nav_models_list_html(models_data, id, sub_item) {
	console.log('ID/SUB: ' + id + '/' + sub_item);
	$(models_data).each(function (index, value) {
		if (sub_item) {
			var list_root = $('#model_sub_list_' + id);
		} else {
			var list_root = $("#sub_nav_list");
		}
		list_root.append('<li onclick="load_content(this, \'models/' + value.id + '/task\')"><i class="fa fa-archive"></i> ' + value.name + '</li><ul id="model_sub_list_' + value.id + '"></ul>');
		console.log(value);
		if (typeof(value.sub_models) == 'object') {
			generate_sub_nav_models_list_html(value.sub_models, value.id, true);
		}
	});
}