
$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 500) {
          $("#mainNav").css("background" , "#FDF4E3");
        }
  
        else{
            $("#mainNav").css("background" , "transparent");  	
        }
    })
  })

  $(document).ready(function() {
    $.each($('#mainNav').find('li'), function() {
        $(this).toggleClass('active', 
            window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
    }); 
});