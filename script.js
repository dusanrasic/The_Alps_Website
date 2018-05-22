// Animations
$(document).ready(function(){
$(window).scroll(function(){
  var wScroll=$(this).scrollTop();
  $(".sky").css({transform:"translate(0px, "+wScroll/40+"%)"}),
  $(".mountain").css({transform:"translate(0px, "+wScroll/40+"%)"}),
  $(".lines").css({transform:"translate(0px, -"+wScroll/40+"%)"}),
  $(".circle").css({transform:"translate(0px, -"+wScroll/20+"%)"});
  if(wScroll > $('#home').offset().top - ($(window).height() / 1.2)) {
    $('.paragraf').each(function(i){
      setTimeout(function(){
        $('.paragraf').eq(i).addClass('active');
      }, 300 * (i+1));
    });  }
  if(wScroll > $('#rows').offset().top - $(window).height()){

  var offset = (Math.min(0, wScroll - $('#rows').offset().top +$(window).height() - 350)).toFixed();

  $('.row-1').css({'transform': 'translate('+ offset +'px, '+ Math.abs(offset * 0.2) +'px)'});

  $('.row-3').css({'transform': 'translate('+ Math.abs(offset) +'px, '+ Math.abs(offset * 0.2) +'px)'});
}
});

//Form
  $(".regmail").hide();
//registration
$('#register').hide();
$('#btnRegister').click(function(event){
  event.preventDefault();
  $('#btnRegister').hide();
  $('#register').show();
  $("#login").hide();
  $(".or").hide();
  $(".regmail").show(1000);
});
/* slider plugin*/
$(function() {
    $(".rslides").responsiveSlides({
      auto: false,
      pager: true,
      nav: true,
      speed: 500,
      maxwidth: 800,
      namespace: "centered-btns"
    });
  });
//script for table
$('table tr').each(function(){
  $(this).find('th').first().addClass('first');
  $(this).find('th').last().addClass('last');
  $(this).find('td').first().addClass('first');
  $(this).find('td').last().addClass('last');
});

$('table tr').first().addClass('row-first');
$('table tr').last().addClass('row-last');
});
