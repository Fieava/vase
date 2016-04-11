function load_sub_nav(element, url) {
	if (element) {
		$(element).siblings().each(function (index, ele) {
			$(ele).removeClass('nav_item_now');
		});
		$(element).addClass('nav_item_now');
	}

	$('#sub_nav').load(url, function (response, status, xhr) {
		if (status == "error") {
			if (response == "Forbidden.") {
				$('#sub_nav').load('sub_nav/forbidden');
			} else {
				$('#sub_nav').load('sub_nav/load_error');
			}
		}
	});
}