$(document).ready(function() {
  $('#confirmar-baja').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);

    $(this).find('form').attr('action', window.baseUrl + 'users/delete/' + button.data('id'));
    $(this).find('.modal-body').text('¿Está seguro que desea borrar a ' + button.data('nombre') + '?');
  });

  $('#btn-submit').click(function() {
    $(this).parents('form:first').submit();
  });
});