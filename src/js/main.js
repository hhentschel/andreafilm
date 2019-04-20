
$(document).ready(function() {


  $('.container__navbox--arrow').click(function() {
      $(this).hide();
  });


  $('a[href*="#"]').on('click',function(e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    $('html, body').stop().animate({
     'scrollTop': $target.offset().top
    }, 900, 'swing', function () {
     window.location.hash = target;
    });
   });

});

$(window).resize(function(){
  if(window.innerHeight < 610){
    $('.container__navbox').addClass('mobile');
  }
  else {
    $('.container__navbox').removeClass('mobile');
  }
});