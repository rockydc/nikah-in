<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    @include('includes.user.style')
    <!-- <link rel="stylesheet" href="{{url('template/jasmine/assets/css/styles.min.css')}}"> -->
    <link rel="stylesheet" href="{{url('user/tia/assets/scss/style.css')}}">
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
<source src="{{url('user/tia/Shane Filan - Beautiful In White.mp3')}}">
</audio>
<div class="modal" role="dialog" tabindex="-1" id="myModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-modal"><img class="img-header" src="/user/tia/assets/img/galery/{{$modalimg}}" />
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
            $(document).ready(function(){

            const weddingdate = "April 09, 2022 09:00:00"
            const Timer = {
                init:(weddingdate)=>{
                    countdownDate(weddingdate)
                }
            }
            Timer.init(weddingdate);
            })
    </script>
    <script>
   

        var myaudio = document.getElementById("myaudio");
      

        
        $(window).on('load', function() {
        $('#myModal').modal('show');
        $('#myModal').css("display","flex");
        $('#myModal').css("justify-content","center");
    });

    var myaudio = document.getElementById("myaudio");
   
    $('#btn-open').click(function(){
        $('#myModal').modal('hide');
        $('#modalProkes').modal('show')
       
        
    })

    $('#btn-prokes').click(function(){
        $('#modalProkes').modal('hide');
        myaudio.play()
    })

       
       </script>
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
</body>

</html>