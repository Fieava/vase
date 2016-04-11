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
			if (response == "Forbidden.") {
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
			if (response == "Forbidden.") {
				content.load('content/forbidden');
			} else {
				content.load('content/load_error');
			}
		}
	});
}