$(document).ready(function() {

	$('select').selectric();
	

	$('.portfolio-elem').children('.title').bind('click', function(){
		$(this).parent('.portfolio-elem').addClass('active');
	});
	$('.portfolio-elem').find('.close').bind('click', function(){
		$(this).parents('.portfolio-elem').removeClass('active');
	});
	$(".fancybox").fancybox({
		padding: 0,
		scrolling: 'visible',
		wrapCSS: 'wrap-popup'
	});
	function initFullpage(){
		var width = $( window ).width(),
			height = $( window ).height();

		if ( $('div').is('#fullpage') ){
			if( height > 400 ) {
				if ( height / width > 0.5 ) {
					$('#fullpage').fullpage({
						anchors: ['window-0', 'window-1', 'window-2', 'window-3', 'window-4', 'window-5', 'window-6'],
						menu: '#myMenu',
						css3: true,
						animateAnchor: true,
						onLeave: function () {
							if ($('#section0').is('.active')) {
								$('.main-menu').removeClass('top').addClass('bottom');
							} else {
								$('.main-menu').removeClass('bottom').addClass('top');
							}
						}
					});
				}
			} else {
				$.fn.fullpage.destroy('all');
			};
		}
	};

	initFullpage();

	$( window ).resize(function() {
		initFullpage();
	});

})
