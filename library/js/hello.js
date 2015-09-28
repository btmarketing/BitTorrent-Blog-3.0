jQuery(document).ready(function($) { 

	$('.hello-submit, .modal_close').on('click', function(){
		closeHello();

		// Save data to the current session's store
		sessionStorage.setItem("emailcapture", "captured");
	})

	console.log()

	if ($(window).width() > 768 && !sessionStorage.getItem('emailcapture')){
		animateHello();
	}



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
