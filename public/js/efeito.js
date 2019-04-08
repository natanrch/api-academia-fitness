
  $('document').ready(function(){
  var count = 0;
  $('.step').each(function(){
    count++;
   
  });
   
  var i = 0;
  //NEXT
  $('#next').on('click', function(){
    if(count > i +1 ){
        i++;
        $('.active').removeClass('active');
        $('.step').eq(i).addClass('active');
       }
  });
    //PREV
  $('#prev').on('click', function(){
   if(i > 0 ){
    i--;
    $('.active').removeClass('active');
    $('.step').eq(i).addClass('active');
   }
  });
});

  $(function(){
    $(document).on( 'scroll', function(){
        if ($(window).scrollTop() > 100) {
            $('.smoothscroll-top').addClass('show');
        } else {
            $('.smoothscroll-top').removeClass('show');
        }
    });
    $('.smoothscroll-top').on('click', scrollToTop);
});
function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 600, 'linear');
}

