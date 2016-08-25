

$(function () { // wait for document ready

  if(!$('.support')[0]) {
    return;
  }

  $('.support .item.active .desc').show();

  $('.support .item .title').click(function () {

    if($(this).parent().hasClass('active')) {
      return;
    }

    var speed = 500;

    $('.support .item.active .desc').slideUp(500);

    $('.support .item').removeClass('active');

    $(this).parent().addClass('active');

    $('.support .item.active .desc').slideDown(500);

  });

});
