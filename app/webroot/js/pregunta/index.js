$(function() {
	$('.checkbox-switch').bootstrapSwitch();
});

$(function() {
	$('input[type="checkbox"]').on('switchChange.bootstrapSwitch', function(event, state) {
		$.post(window.baseUrl + 'preguntas/activate/' + $(this).data('id') + '/' + (state ? 1 : 0));
	});
});