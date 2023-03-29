$(document).ready(function(){
    $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if (scroll > 10) {
        $("#headerNav").removeClass('bg-transparent').css("background" , "rgba(0, 0, 0, 0.8)");
      }else{
        $("#headerNav").css("background" , "").addClass('bg-transparent');
      }
    });
  });