
$(document).ready(function(){
  $(window).scroll(function(){
    var div = document.getElementById("un_div");
    if($(this).scrollTop() > 0){
      $('header').addClass('cabeza2');
      div.style.display = "block"
    }else{
      $('header').removeClass('cabeza2');
      div.style.display = "none"
    }
  });
});
