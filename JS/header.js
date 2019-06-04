
$(document).ready(function(){
  $(window).scroll(function(){
    if($(this).scrollTop() > 0){
      $('header').addClass('cabeza2');
    }else{
      $('header').removeClass('cabeza2');
    }
  });
});
