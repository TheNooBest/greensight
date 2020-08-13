function getHandler(offX, offY) {
  let handler = function(e) {
    x = e.clientX;
    y = e.clientY;

    $(this).css('left', x + offX + 'px');
    $(this).css('top', y + offY + 'px');
  }
  return handler;
}

$('.draggable').on('mousedown', function(e) {
  let offX = $(this).position().left - e.clientX;
  let offY = $(this).position().top - e.clientY;

  let handler = getHandler(offX, offY);
  $(this).on('mousemove', handler);

  $(this).parent().css('background-color', '#aaa');
});
$('.draggable').on('mouseup', function(e) {
  $(this).off('mousemove');
  $(this).parent().css('background-color', '#fff');
});
