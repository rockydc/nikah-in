<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    @include('includes.user.style')
    <title>{{$datapengantin['cowo']}} &amp; {{ $datapengantin['cewe']}}</title>
    <meta name="description"  content="{{ $profilecowo['nama'] }} &amp; {{ $profilecewe['nama']}} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{url('user/ridho/assets/scss/style.css')}}">
    <link rel="stylesheet" href="{{url('template/puzzlewood/assets/css/Video-Responsive-YouTube.css')}}">
</head>
<audio loop id="myaudio" type="audio/mp3">
    <source src="{{url('user/ridho/Raef -You Are The One.mp3')}}">
</audio>
<body id="page-top">

<div class="modal" role="dialog" tabindex="-1" id="myModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-modal"><img class="img-header" src="/user/ridho/assets/img/galery/{{$modalimg}}" />
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

<div class="modal" role="dialog" tabindex="-1" id="modalProkes">
    <div class="modal-dialog modal-dialog-centered modal-md"  role="document">
        <div class="modal-content">
            <div class="modal-body">
           
                <div class="container-fluid py-5 border border-dark rounded">
                    <p class="mb-0 text-center">Acara ini dilaksanakan dengan menerapkan</p>
                    <h1 class="text-center">PROTOKOL KESEHATAN</h1>
                    <p class="text-center">Sebagai Berikut:</p>
                    <div class="gambar-prokes">
                        <div class="row">
                            <div class="col-6">
                            <img src="{{url('user/riowira/assets/img/masker.png')}}" alt="" class="img-thumbnail">
                            <p class="text-center">masker</p>
                            </div>
                            <div class="col-6">
                            <img src="{{url('user/riowira/assets/img/cuci-tangan.png')}}" alt="" class="img-thumbnail">
                            <p class="text-center">Cuci Tangan</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                            <img src="{{url('user/riowira/assets/img/jagajarak.png')}}" alt="" class="img-thumbnail">
                            <p class="text-center">jagajarak</p>
                            </div>
                            <div class="col-6">
                            <img src="{{url('user/riowira/assets/img/salaman.png')}}" alt="" class="img-thumbnail">
                            <p class="text-center">Tidak Bersalaman</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                            <img src="{{url('user/riowira/assets/img/hand-sanitizer.png')}}" alt="" class="img-thumbnail">
                            <p class="text-center">Handsanitizer</p>
                            </div>
                            <div class="col-6">
                            <img src="{{url('user/riowira/assets/img/termo-gun.png')}}" alt="" class="img-thumbnail">
                            <p class="text-center">Pengecekan Suhu</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center"><a id="btn-prokes" class="btn btn-buka" href="#">Saya Mengerti</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <nav class="navbar navbar-light navbar-expand-md sticky-top">
        <div class="container-fluid"><a class="navbar-brand" href="https://nikah-in.com"><img class="mr-2" src="{{url('template/puzzlewood/assets/img/Nikahin-removebg-preview.png')}}" style="width: 32px;height: 32px;">Nikah-in</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active cool-link js-scroll-trigger" href="#profile" target="_top">Profil</a></li>
                    <li class="nav-item"><a class="nav-link cool-link js-scroll-trigger" href="#galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link cool-link js-scroll-trigger" href="#lokasi">Lokasi</a></li>
                    <li class="nav-item"><a class="nav-link cool-link js-scroll-trigger" href="#rsvp">Rsvp</a></li>
                    <li class="nav-item"></li>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('template/puzzlewood/assets/js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    script>
    <script src="{{url('user/ridho/assets/js/countdown.js')}}"></script>
    <script src="{{url('aness/assets/js/scrolling.js')}}"></script>
    <script src="{{url('aness/assets/js/scrollchangecolor.js')}}"></script>
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

            const weddingdate = "May 21, 2022 16:00:00"
            const Timer = {
                init:(weddingdate)=>{
                    countdownDate(weddingdate)
                }
            }
            Timer.init(weddingdate);
            })
    </script>

</body>

</html>