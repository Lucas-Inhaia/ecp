
$(function() {
  $('#states').change(function() {
    if ($(this).val()) {
      $('#cities').hide();
      $('.js_load').show();
      $.getJSON('cities.php?search=', {
        states: $(this).val(),
        ajax: 'true'
      }, function(j) {
        var options = '<select class="custom-select " name="cities" id="cities"><option value="">Escolha uma Cidade</option>';
        for (var i = 0; i < j.length; i++) {
          options += '<option value="' + j[i].id + '">' + j[i].name + '</option>';
        }
        $('#cities').html(options).show();
        $('.js_load').hide();
      });
    } else {
      $('#cities').html('<option value="">– Escolha uma Cidade –</option>');
    }
  });
});


