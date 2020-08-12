$('#testForm').submit(function(e) {
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'action.php',
    data: $(this).serialize(),
    success: function(response) {
      element = $('<p></p>', {
        text: response
      });
      $('#testForm').after(element);
    }
  });
});
