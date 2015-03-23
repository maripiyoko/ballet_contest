$(function() {

  $('body').on('keyup', '.js-score', function(e) {
    if(e.which == 13) {
      $(this).blur();
      e.preventDefault();
    }
    return false;
  });

  var setFormUrl = function($form, id) {
    var url = $form.attr('action');
    var originalId = url.split('score/')[1];
    if(!originalId) {
      url = url + "/" + id;
    }
    $form.attr('action', url);
    console.log($form.attr('action'));
  };

  $('.js-form-ajax').on('submit', 'form', function(e) {
    e.preventDefault();
    var $form = $(this);
    var url = $form.attr('action');
    $.ajax({
      type: 'POST',
      url: url,
      data: $form.serialize(),
      dataType: 'json',
      success: function(response) {
        console.log(response);
        var id = response.id;
        setFormUrl($form, id);
      },
      error: function(xhr, textStatus, error) {
        console.log(xhr);
      }
    });
  });

});
