<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    @include('includes.user.style')
    <meta name="theme-color" content="rgb(247,182,6)">
    <meta property="keyword" content="pernikahan,nikah,perkawinan,website,undangan,undangan pernikahan">
    <meta name="twitter:description" content="Website Penyedia jasa Pembuatan Undangan Pernikahan Berbasis Website">
    <meta name="twitter:card" content="summary">
    <meta property="og:type" content="website">
    <meta name="description" content="Website Penyedia Jasa Pembuatan Undangan Pernikahan berbasis Website">
    <meta property="og:image" content="{{url('home/assets/img/Nikahin.jpg')}}">
    <meta name="twitter:image" content="{{url('home/assets/img/Nikahin.jpg')}}">
    <meta name="twitter:title" content="Nikah-in">
    <link rel="icon" type="image/jpeg" sizes="1080x1080" href="{{url('home/assets/img/Nikahin.jpg')}}">
    <link rel="icon" type="image/jpeg" sizes="1080x1080" href="{{url('home/assets/img/Nikahin.jpg')}}">
    <link rel="icon" type="image/jpeg" sizes="1080x1080" href="{{url('home/assets/img/Nikahin.jpg')}}">
    <link rel="icon" type="image/jpeg" sizes="1080x1080" href="{{url('home/assets/img/Nikahin.jpg')}}">
    <link rel="icon" type="image/jpeg" sizes="1080x1080" href="{{url('home/assets/img/Nikahin.jpg')}}">
    <!-- <link rel="stylesheet" href="{{url('template/jasmine/assets/css/styles.min.css')}}"> -->
    <link rel="stylesheet" href="{{url($scssFile)}}">
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

    @if($layouts['isAmplopSectionActive'] != false)
    .section-gift {
        padding-bottom:0;
    }
    @endif

    </style>
</head>

<body>
<audio loop id="myaudio" type="audio/mp3">
<source src="{{$musicName}}">
</audio>
<div class="modal" role="dialog" tabindex="-1" id="myModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-modal"><img class="img-header" src="{{$pathFileImg}}{{$modalimg}}" />
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
    

                                                
                        <p style="font-family: montserrat;font-size:11px;margin-bottom:0px;" class="text-center">
                            Kepada Bapak/Ibu/Saudara/Saudari                        </p>
                        <p>
                        <p style="font-weight:700; margin-bottom:0px;font-family:montserrat;font-size:14px;">
                        {{$name}}
                        </p>
                        </p>
                        <p style="font-family: montserrat;font-size:11px;margin-bottom:0px;" class="text-center" >
                            Mohon maaf bila ada kesalahan pada penulisan nama/gelar
                        </p>
                        <div class="d-flex justify-content-center"><a id="btn-open" class="btn btn-buka">Buka Undangan</a></div>
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
                    <li class="nav-item"><a class="nav-link active cool-link js-scroll-trigger" href="#quote" >Profile</a></li>
                    <li class="nav-item"><a class="nav-link active cool-link js-scroll-trigger" href="#galeri" >Galeri</a></li>
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
    <script src="{{url('user/kevinresita/assets/js/countdown.js')}}"></script>
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
       <script>
        $(document).ready(function(){
            const weddingdate = "{{$datapengantin['countdown']}}"
            const Timer = {
                init:(weddingdate)=>{
                    countdownDate(weddingdate)
                }
            }
            Timer.init(weddingdate)
        })
       </script>
</body>

</html>