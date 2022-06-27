<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{$datapengantin['cowo']}} &amp; {{ $datapengantin['cewe']}}</title>
    <meta name="description"  content="{{ $profilecowo['nama'] }} &amp; {{ $profilecewe['nama']}} ">
    @include('includes.user.style')
    <link rel="icon" type="image/png" sizes="500x500" href="{{url('user/ficry/assets/img/mosque 2.png')}}">
    <link rel="stylesheet" href="{{url('aness/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Andika">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Beth+Ellen">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Damion">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Homemade+Apple">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Meddon">
    <link rel="stylesheet" href="{{url('aness/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">

    <link rel="stylesheet" href="{{url('user/kevinresita/assets/scss/styles.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7YLNT1MN0T"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7YLNT1MN0T');
    </script>



</head>

<audio loop id="myaudio" type="audio/mp3">
    <source src="{{url('user/rizky/bg-sound.mp3')}}">
</audio>

<body id="page-top"style="background: rgb(246,236,226);">

<div class="modal" role="dialog" tabindex="-1" id="myModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-modal"><img class="img-header" src="/user/rizky/assets/img/{{$modalimg}}" />
                    <div class="mt-4">
                        <p class="text-center">Wedding of<br /></p>
                        <h1>{{$datapengantin['cowo']}} &amp; {{$datapengantin['cewe']}}<br /></h1>
                        <div class="d-flex justify-content-center">
                            <div class="date-wrapper">
                                <p>{{$datapengantin['tgl']}}</p>
                                <p>.</p>
                                <p>{{$datapengantin['bln']}}</p>
                                <p>.</p>
                                <p>{{$datapengantin['thn']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center flex-column">
                        <div class="mb-3">
                            <img src="{{url('template/jasmine/assets/img/fluent_music-note-2-24-filled.svg')}}" /><span class="ml-3 text-center">{{$datapengantin['lagu']}}<br /></span>
                        </div>
    

                                                
                        <p style="font-family: montserrat;font-size:12px;margin-bottom:0px;" class="text-center">
                            Kepada Bapak/Ibu/Saudara/Saudari                        </p>
                        <p>
                        <p style="font-weight:700; margin-bottom:0px;font-family:montserrat;font-size:14px;">
                        {{$name}}
                        </p>
                        </p>
                        <p style="font-family: montserrat;font-size:12px;margin-bottom:0px;" class="text-center" >
                            Mohon maaf bila ada kesalahan pada penulisan nama/gelar
                        </p>
                        <div class="d-flex justify-content-center"><a id="btn-open" class="btn btn-buka">Buka Undangan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
<nav class="navbar navbar-light navbar-expand-md fixed-top " id="mainNav">
        <div class="container-fluid"><a style="font-family:Dancing Script;color:#af8876;font-weight:600;letter-spacing:5px; text-shadow: 1px 1px 13px rgb(255 255 255 / 70%);" class="navbar-brand" href="#page-top">{{$datapengantin['cowo']}} & {{$datapengantin['cewe']}}</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item "><a class="nav-link  js-scroll-trigger" href="#page-top">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#section-about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#section-join">Wedding</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#section-guest">RSVP</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#section-gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#section-maps">Location</a></li>
               
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#section-ucapan">Pray & Love</a></li>
                </ul>
        </div>
        </div>
    </nav>
    @yield('content')
    <footer class="text-center">
 


        <div>
            <p style="font-family: 'Josefin Sans', sans-serif;"><em>© &nbsp;nikah-in.com 2020. All rights reserved.</em><br></p>
            <!-- <iframe src="{{url('aness/music/Isyana Sarasvati, Afgan, Rendy Pandugo - Heaven (Official Music Video).mp3')}}" allow="autoplay" style="display:none" id="iframeAudio">
            </iframe>  -->
            <button class="act-btn text-center"type="button" id="playbutton">
            <i class="fa fa-pause" id="icon-play"></i>
            </button>
        </div>
    </footer>

    <script src="{{url('aness/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('aness/assets/js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="{{url('user/kevinresita/assets/js/countdown.js')}}"></script>
    <script src="{{url('aness/assets/js/scrolling.js')}}"></script>
    <script src="{{url('aness/assets/js/scrollchangecolor.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{url('template/jasmine/assets/js/page.js')}}"></script>
    <script>
   

        var myaudio = document.getElementById("myaudio");
        var iconplay = document.getElementById("icon-pause");

        


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
    <script>
               $(document).ready(function(){
             
             const weddingdate = "{{$datapengantin['countdown']}}"
             const Timer = {
                 init:(weddingdate)=>{
                     countdownDate(weddingdate)
                 }
             }
             Timer.init(weddingdate);
             })
    </script>

    
    <script src="{{url('aness/assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>