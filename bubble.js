(function($){
	$(document).ready(function() {
		/* bubble tap event */
		function bindBubbleClick() {
			$('.bubble-item').unbind('click').click(function(e){
				console.log('tapeed');
				$(this).find('.label').removeClass('label-primary')
				.addClass('label-success')
				.text('被捏了')
				.addClass('tapped');
			});			
		}
		bindBubbleClick();
		/* name input */
		$('#student_name').keyup(function(event) {
			/* mobile */
			if ( $(this).val() != '') { /* something, show confirm */
				if ($(this).siblings('.submit-name').length < 1) {
					$(this).after('<button class="btn btn-primary submit-name">Confirm</button>');
				}
			} else { /* nothing, remove submit button */
				$(this).siblings('.submit-name').remove();
			}
			if ($(this).siblings('.submit-name').length == 1) {
				$('.submit-name').unbind('click').click(function(e){
					var $this = $(this);
					var student_name = $('#student_name').val();
					/* mobile submit name */
					$.post('sql.php', {
						student_name : $('#student_name').val(),
						act : 'create_student'
					}, function(data, textStatus, xhr) {
						/*optional stuff to do after success */
						if (data.error) {
							return;
						}
						if (!data.error) {
							console.log('ok');
							/* transform this input into value label */
							$this.parent().before('<div class="student-name">'+student_name+'</div>');
							var new_bubble_row_index = $('.bubble-table .bubble-row').length;
							var new_bubble_row = '<div class="row bubble-row">';
							for (var i=0; i < 12 ;i++) { 
								new_bubble_row += '<div class="col-xs-1 col-sm-1 bubble-item" bubble-owner="'+student_name+'" bubble-index-row="'+new_bubble_row_index+'" bubble-index-col="'+i+'"><div class="label label-primary">捏我</div></div>	';
							}
							new_bubble_row += '</div>';
							$('.bubble-table').append(new_bubble_row);
							/* reset */
							$this.remove();
							$('#student_name').val('').focus();
							bindBubbleClick();
						}
					},'json');
				});
			}
			/* PC */
			var key = event.keyCode;
			if (key == 13) {
				var $this = $('.submit-name');
				var student_name = $('#student_name').val();
				/* record into databaase */
				$.post('sql.php', {
					student_name : $('#student_name').val(),
					act : 'create_student'
				}, function(data, textStatus, xhr) {
					/*optional stuff to do after success */
						/*optional stuff to do after success */
						if (data.error) {
							return;
						}
						if (!data.error) {
							/* transform this input into value label */
							$this.parent().before('<div class="student-name">'+student_name+'</div>');
							var new_bubble_row_index = $('.bubble-table .bubble-row').length;
							var new_bubble_row = '<div class="row bubble-row">';
							for (var i=0; i < 12 ;i++) { 
								new_bubble_row += '<div class="col-xs-1 col-sm-1 bubble-item" bubble-owner="'+student_name+'" bubble-index-row="'+new_bubble_row_index+'" bubble-index-col="'+i+'"><div class="label label-primary">捏我</div></div>	';
							}
							new_bubble_row += '</div>';
							$('.bubble-table').append(new_bubble_row);
							/* reset */
							$this.remove();
							$('#student_name').val('').focus();
							bindBubbleClick();
						}
				},'json');
			}
		});
	});
})(jQuery)