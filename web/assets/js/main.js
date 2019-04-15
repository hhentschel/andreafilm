/*!
 * andreafilm v1.0.0
 * Andrea Film Website
 * (c) 2019 henrik hentschel
 * MIT License
 * http://link-to-your-git-repo.com
 */


$(document).ready((function() {
  var width = $(window).width(); 
  var height=$(window).height(); 
  var mydiv=$(".container__navbox");
  mydiv.width(width);
  mydiv.height(height);

  $(window).resize((function(){
    width = $(window).width();
    height=$(window).height();
    mydiv.width(width);
    mydiv.height(height);

  }));

}));