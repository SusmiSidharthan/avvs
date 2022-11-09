$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('#fixedheader').addClass('headactive');
    } else {
       $('#fixedheader').removeClass('headactive');
    }
});


$(window).scroll(function(){
   if ($(this).scrollTop() > 50) {
      $('#menuheader').addClass('menuactive');
   } else {
      $('#menuheader').removeClass('menuactive');
   }
});