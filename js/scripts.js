// JavaScript Document
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
$(function(){
  SyntaxHighlighter.all();
});
$(window).load(function(){
  $('#slider-home').flexslider({
	animation: "slide",
	controlNav: false,
  });
});

$('#menu ul li a').click(function () {
	$('#menu ul li a').not(this).removeClass('active');
	$(this).addClass('active');
});		