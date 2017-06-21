// Show arrow when scroll
$(window).scroll(function(){
   if($(this).scrollTop() > 50) {
       $('header.navbar').addClass('hfixed');
   }else{
       $('header.navbar').removeClass('hfixed');
   }
});

jQuery.scrollSpeed(80, 800);