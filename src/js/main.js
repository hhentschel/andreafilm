
$(document).ready(function() {
  var width = $(window).width(); 
  var height=$(window).height(); 
  var mydiv=$("#container__navbox-home");
  mydiv.width(width);
  mydiv.height(height);

  $(window).resize(function(){
    width = $(window).width();
    height=$(window).height();
    mydiv.width(width);
    mydiv.height(height);

  });

});