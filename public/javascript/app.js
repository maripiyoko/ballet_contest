$(function() {

  $(function() {
    $('.js-tab:first a').tab('show');
  });

  $('body').on('click', '.js-score', function(e) {
    $(this).select();
  });

  $('body').on('keydown', '.js-score', function(e) {
    if(e.which == 13 || e.which == 9) {
      $(this).closest('form').submit();
      e.preventDefault();
      var $allScores = $('.js-score');
      var index = $allScores.index($(this));
      var nextIndex = index + 1;
      if(nextIndex >= $allScores.length) {
        nextIndex = 0;
      }
      $('.js-score:eq('+nextIndex+')').click();
    }
  });

  var setFormUrl = function($form, id) {
    var url = $form.attr('action');
    var originalId = url.split('score/')[1];
    if(!originalId) {
      url = url + "/" + id;
      $form.append('<input name="_method" type="hidden" value="PATCH">');
    }
    $form.attr('action', url);
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
        var id = response.id;
        setFormUrl($form, id);
      },
      error: function(xhr, textStatus, error) {
        console.log(xhr);
      }
    });
  });

});
