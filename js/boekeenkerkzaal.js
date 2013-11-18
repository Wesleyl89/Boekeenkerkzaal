$(document).ready(function(e) {

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

	$('.room-list>li').hover(function () {
		$(this).find('i.room-list-icon').stop();
		$(this).find('i.room-list-icon').css('display', 'block');
		$(this).find('i.room-list-icon').animate({left:'-22px'}, 'fast');
	}, function () {
		$(this).find('i.room-list-icon').stop();
		$(this).find('i.room-list-icon').css('display', 'none');

		if( ($(this).find('i.room-list-icon').css('display')) != 'block') {
			$(this).find('i.room-list-icon').animate({left:'-30px'}, 'fast');
		};
	});

	$('.alert').click(function (){
		$(this).slideUp(600);
	});
	
	$( '#slider-range' ).slider({
		      range: true,
		      min: 0,
		      max: 2000,
		      step: 10,
		      values: [ $("#min_amount").val(), $("#max_amount").val() ],
      slide: function( event, ui ) {
        $( "#min_amount" ).val(ui.values[0]);
        $( "#p-min" ).text('€ '+ui.values[0]);
        $( "#max_amount" ).val(ui.values[1]);
        $( "#p-max" ).text('€ '+ui.values[1]);
      }
    });

	$('.room-delete-button').click(function(e) {
		e.preventDefault();
		$('.confirm-dialog').css('display', 'none');
		$(this).parent().find('.confirm-dialog').fadeIn('fast');
	});

	$('.cancel-delete').click(function(e) {
		e.preventDefault();
		$(this).parent().fadeOut('fast');
	});

});

