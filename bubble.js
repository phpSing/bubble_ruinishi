(function($){


	$(document).ready(function() {
		

		$('.bubble-item').tap(function(e){
			console.log('tapeed');
			$(this).find('.label').removeClass('label-primary').addClass('label-success').text('被捏了');
		});






	});

})(jQuery)