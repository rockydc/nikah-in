<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    @include('includes.user.style')
    <!-- <link rel="stylesheet" href="{{url('template/jasmine/assets/css/styles.min.css')}}"> -->
    <link rel="stylesheet" href="{{url('user/isby/assets/scss/style.css')}}">
    <style>
    
.act-btn{
    z-index:100;
    background:#ff299c;
    line-height: 20px;
    color: white;
    width:50px;
    height:50px;
    -webkit-border-radius:50%;
    text-decoration: none;
    transition: ease all 0.3s;
    position: fixed;
    right: 30px;
    bottom:30px;
    border:none;
    outline:none!important;


}

    </style>
</head>

<body>
<audio loop id="myaudio" type="audio/mp3">
    <source src="https://media.vocaroo.com/mp3/1ODuXGBophr">
</audio>
<div class="modal" role="dialog" tabindex="-1" id="myModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-modal"><img class="img-header" src="{{url('user/isby/assets/img/header-mobile.png')}}" />
                    <div class="mt-4">
                        <p class="text-center">Wedding of<br /></p>
                        <h1>Isby &amp; Hesti<br /></h1>
                        <div class="d-flex justify-content-center">
                            <div class="date-wrapper">
                                <p>13</p>
                                <p>.</p>
                                <p>03</p>
                                <p>.</p>
                                <p>21</p>
                            </div>
                        </div>
                    </div>
                    <div><img src="{{url('template/jasmine/assets/img/fluent_music-note-2-24-filled.svg')}}" /><span class="ml-3">Can't Help Falling In Love - Kinna Granis<br /></span>
                        <div class="d-flex justify-content-center"><a id="btn-open" class="btn btn-buka" href="#">Buka Undangan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <nav class="navbar navbar-light navbar-expand-md sticky-top">
        <div class="container-fluid"><a class="navbar-brand" href="https://nikah-in.com"><img class="mr-2" src="{{url('template/jasmine/assets/img/Nikahin-removebg-preview.png')}}" style="width: 32px;height: 32px;">Nikah-in</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active cool-link js-scroll-trigger" href="#quote" target="_top">Quote</a></li>
                 
                    <li class="nav-item"><a class="nav-link cool-link js-scroll-trigger" href="#lokasi">Lokasi</a></li>
                    <li class="nav-item"><a class="nav-link cool-link js-scroll-trigger" href="#rsvp">Rsvp</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
  
    @yield('content')
    <footer style="font-size: 12px;">
        <div>
            <p class="text-center">© Copyright Nikah-in. 2021. All Rights Reserved.<br></p>
        </div>

        <button class="act-btn text-center"type="button" id="playbutton">
            <i class="fa fa-pause" id="icon-play"></i>
            </button>
    </footer>

    @include('includes.user.script')
    <script src="{{url('template/jasmine/assets/js/script.min.js')}}"></script>
    <script src="{{url('template/jasmine/assets/js/page.js')}}"></script>
    <script src="{{url('user/isby/assets/js/countdown.js')}}"></script>
    <script>
   

        var myaudio = document.getElementById("myaudio");
        var iconplay = document.getElementById("icon-play");

        


        playbutton.addEventListener("click",()=>{
            if(myaudio.paused){
                myaudio.play();
                $('#icon-play').removeClass('fa-play');
                $('#icon-play').addClass('fa-pause')
            }else{
                myaudio.pause();
                $('#icon-play').removeClass('fa-pause');
                $('#icon-play').addClass('fa-play');

            }
        })
       
       </script>
</body>

</html>