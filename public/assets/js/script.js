'use strict';

$('#shopNav').affix({
  offset: {
    top: 100
  }
});

$(document).ready(function () {
  $('section .thumbnail').mouseenter(function () {
    $(this).find('img').css('max-height', '170px');
  });
  $('section .thumbnail').mouseleave(function () {
    $(this).find('img').css('max-height', '140px');
  });
});
//# sourceMappingURL=script.js.map
