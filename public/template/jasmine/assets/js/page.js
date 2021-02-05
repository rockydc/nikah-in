
    $(window).on('load', function() {
        $('#myModal').modal('show');
        $('#myModal').css("display","flex");
        $('#myModal').css("justify-content","center");
    });

    var myaudio = document.getElementById("myaudio");
   
    $('#btn-open').click(function(){
        $('#myModal').modal('hide');
        myaudio.play()
        
    })

    
  

    


    // playbutton.addEventListener("click",()=>{
    //     if(myaudio.paused){
    //         myaudio.play();
    //         $('#icon-play').removeClass('fa-play');
    //         $('#icon-play').addClass('fa-pause')
    //     }else{
    //         myaudio.pause();
    //         $('#icon-play').removeClass('fa-pause');
    //         $('#icon-play').addClass('fa-play');

    //     }
    // })