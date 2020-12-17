// JavaScript Document

$(".sliderslideshow > div:gt(0)").hide();

setInterval(function() { 
  $('.slider2 > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('.slider2');
},  3000);