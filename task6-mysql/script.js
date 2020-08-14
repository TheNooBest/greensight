$('#requestForm').submit(function(e) {
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'action.php',
    data: $(this).serialize(),
    success: function(response) {
      element = $('<plaintext></plaintext>', {
        text: response
      });
      $('#requestForm').after(element);
    }
  });
});

$('#select_all').on('click', function(e) {
  $('#input').val('select * from a');
});
$('#delete_last').on('click', function(e) {
  $('#input').val('delete from a order by c1 desc limit 1');
});
$('#update_first').on('click', function(e) {
  $('#input').val('update a set c2 = \'new_value\' where c1 = (select min(c1) from a)');
});
$('#create_table').on('click', function(e) {
  $('#input').val('create table new_table (\n\tc1 int,\n\tc2 varchar(20)\n)');
});
