$(document).ready(function() {

	$('.dropdown-toggle').click(function (e) {
		e.preventDefault();
		$(this).parent().toggleClass('open');
		$(this).parent().find('.submenu').slideToggle('fast');
	});

	$('.menu-toggler').click(function (e) {
		e.preventDefault();
		$(this).parent().find('.sidebar').toggleClass('display');
	})

	$('.submenu>li').hover(function () {
		$(this).find('i.submenu-icon').stop();
		$(this).find('i.submenu-icon').css('display', 'block');
		$(this).find('i.submenu-icon').animate({left:'20px'}, 'fast');
	}, function () {
		$(this).find('i.submenu-icon').stop();
		$(this).find('i.submenu-icon').css('display', 'none');

		if( ($(this).find('i.submenu-icon').css('display')) != 'block') {
			$(this).find('i.submenu-icon').animate({left:'10px'}, 'fast');
		};
	});
	
});

