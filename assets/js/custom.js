
jQuery(document).ready(function($){

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	var t = $(e.target);
	// console.log(t.href);
	$('a[href="'+t.attr('href')+'"]').addClass('active').siblings().removeClass('active')
	});


});

