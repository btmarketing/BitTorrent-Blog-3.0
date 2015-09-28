jQuery(document).ready(function($) { 

	setTimeout(function(){
		if ($(window).width() > 768){
			animateHello();
		}
	}, 1000)

	$('.email-capture a.modal_close').on('click', function(){
		closeHello();
	})

	function animateHello(){
		$('.email-capture').animate({
			right: "+=420"
		}, 200, 'swing');
	}

	function closeHello(){
		$('.email-capture').animate({
			right: "-=420"
		}, 200, 'swing');
	}

});