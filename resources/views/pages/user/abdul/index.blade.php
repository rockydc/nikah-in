
@extends('layouts.user.abdul.index')


@section('title')
WebWedding
@endsection
@section('content')
<div class="carousel slide carousel-fade" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
        @foreach($imgCarousel as $index => $value)
        @if($value['isActive'] == true)
            <div class="carousel-item active "><img class="w-100 d-block" src="/user/abdul/assets/img/{{$value['img']}}" alt="Slide Image" style="object-position: 40% 15%;"></div>
         
         @else
            <div class="carousel-item"><img class="w-100 d-block" src="/user/abdul/assets/img/{{$value['img']}}" alt="Slide Image" style="object-position: 0% 30%;"></div>
        @endif
            @endforeach
        </div>
        <!-- <div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span></a>
            </div> -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
      
            </ol>
</div>
    <div id="countdown" class="container">
        <h4 class="text-center text-white pb-3" style="font-family: 'Josefin Sans', sans-serif;">We Are Getting Married</h4>
        <div class="wrapper">
            <div class="count-items" style="background: linear-gradient(25deg, rgba(0,0,0,0) 0%, rgb(108,108,108) 99%);">
                <h2 id="days" style="font-family: Andika, sans-serif;font-weight: normal;">12</h2>
                <p style="font-family: 'Josefin Sans', sans-serif;">Days</p>
            </div>
            <div class="count-items">
                <h2 id="hours" style="font-weight: normal;font-family: Andika, sans-serif;">0</h2>
                <p style="font-family: 'Josefin Sans', sans-serif;">Hours</p>
            </div>
            <div class="count-items" style="font-weight: normal;font-family: Andika, sans-serif;">
                <h2 id="minutes">0</h2>
                <p style="font-family: 'Josefin Sans', sans-serif;">Minutes</p>
            </div>
            <div class="count-items">
                <h2 id="seconds" style="font-family: Andika, sans-serif;font-weight: normal;">0</h2>
                <p style="font-family: 'Josefin Sans', sans-serif;">Seconds</p>
            </div>
        </div>
    </div>
    <div id="section-love" class="section" style="background: #f6ece2;">
        <div data-aos="zoom-in">
            <h2 class="text-center" style="margin-bottom: 19px;font-family: moonTime, sans-serif;font-size:40px;font-weight: normal;color: rgb(126,99,79);">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h2>
            <p class="text-center" style="letter-spacing: 4px;color: rgb(126,99,79);">“ Dan diantara tanda-tanda kekuasaan-Nya ialah diciptakan Nya untukmu pasangan hidup dari jenismu sendiri supaya kamu mendapat ketenangan hati dan dijadikan-Nya kasih sayang diantara kamu. Sesungguhnya yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berfikir.. ” <br>
            (Ar-Rum: 21)
        </p>
            <!-- <p class="text-center"
                style="color: rgb(126,99,79);">(Colossians 3:14-15)<br></p> -->
        </div>
    </div>
    <div data-aos="zoom-in-up" data-aos-duration="1000" id="section-about" class="section">
        <div class="text-center wrapper-about" style="color: rgb(8,8,8);"><img class="img-about" src="{{url('aness/assets/img/aboutus-removebg-preview.png')}}">
            <div class="container">
                <div>
                    <div class="row">
              
                        </p>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"><img class="img-profile" src="/user/abdul/assets/img/{{$profilecowo['foto']}}"></div>
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 align-self-lg-center align-self-xl-center text-left content-about" style="padding: 0px;margin: 0px;">
                            <h1>{{$profilecowo['nick']}}</h1>
                            <h3><strong>{{$profilecowo['nama']}}&nbsp;</strong></h3>
                            <p>Son of {{$profilecowo['ayah']}}<br>and {{$profilecowo['ibu']}}<br></p>
                            <div class="instagram-text">
                            <a class="text-decoration-none" href={{$profilecowo['ig_link']}}">
                            <i class="fa fa-instagram mr-2"></i>{{$profilecowo['ig']}}
                            </a>


                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><img class="flower" src="{{url('aness/assets/img/bunga-removebg-preview.png')}}"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 align-self-center text-right content-about">
                        <h1>{{$profilecewe['nick']}}</h1>
                            <h3 style="">{{$profilecewe['nama']}}</h3>
                            <p>Daughter of {{$profilecewe['ayah']}}<br>and {{$profilecewe['ibu']}}</p>
                            <div class="instagram-text">
                            <a class="text-decoration-none" href={{$profilecewe['ig_link']}}">
                            <i class="fa fa-instagram mr-2"></i>{{$profilecewe['ig']}}
                            </a>

                            </div>

                           
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"><img class="img-profile" src="/user/abdul/assets/img/{{$profilecewe['foto']}}"></div>
                    </div>
                </div>
            </div>
        </div>
        <div><img id="bunga-1" class="bunga" src="{{url('aness/assets/img/2.png')}}"></div>
        <div><img id="bunga-2" class="bunga" src="{{url('aness/assets/img/1.png')}}"></div>
    </div>
    <div id="section-join" class="section">
        <div data-aos="zoom-in" data-aos-duration="900" class="text-center">
            <h1 class="title-section">Save The Date</h1>
            <!-- <img class="img-join" src="{{url('aness/assets/img/saveTheDate-removebg-preview.png')}}"> -->
        </div>
        <div data-aos="zoom-in-up" class="text-center">
            <div>
                <div>
                    <div class="wrapper-content-church">
                        <div class="d-md-flex d-lg-flex d-xl-flex justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xl-end align-items-xl-center barcode">
                            
                        <!-- <img src="{{url('user/ficry/assets/img/qrcode.png')}}"> -->
                    
                    </div>
                        <div class="mt-3">
                        <h2 class="text-venue" style="">{{$sesi['sesi1']['judul']}}</h2>
                        <img src="{{url('user/ficry/assets/img/mosque 2.png')}}">
                           
                            <p class="date-venue" style="">{{$sesi['sesi1']['tanggal']}} 

                            @foreach($sesi['sesi1']['jam'] as $index => $value)  
                        @if($value['subjudul'] != null)

                        <br>{{$value['subjudul']}} : {{$value['jam']}}
                       @else
                       <br>{{$value['subjudul']}}  {{$value['jam']}}
                       @endif
                        @endforeach

                        </p>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
            <p class="detail-venue" style="">{{$sesi['sesi1']['lokasi']}}</p>
            <p class="msg-venue" style="font-family: 'Josefin Sans', sans-serif;1">We appologize in the implementation on akad will only be attended by famillies accordance<br>to health protocols related to the pandemic Covid-19 situation<br></p>
            @if($sesi['sesi1']['streaming']['isActive'] != false )
            <a style="background-color:#f2b577;border:none;" class="btn btn-primary btn-sm" href="{{$sesi['sesi1']['streaming']['link']}}">{{$sesi['sesi1']['streaming']['title']}}</a>
            <p class="detail-venue mt-3">password : LF24072022 </p>
            @endif
            <img class="flowers" src="{{url('aness/assets/img/bunga.png')}}">
        
        </div>
 
        @if($sesi['sesi2']['isActive'] != false)
        <div data-aos="zoom-in-up"
            class="text-center">
            <div>
                <div>
                    <div class="wrapper-content-church">
                        <div></div>
                        <div><h2 class="text-venue" style="">{{$sesi['sesi2']['judul']}}</h2>
                        <img src="{{url('user/ficry/assets/img/mosque 2.png')}}">
                       
                        <p class="date-venue" style="">{{$sesi['sesi2']['tanggal']}} 
                        @foreach($sesi['sesi2']['jam'] as $index => $value)  
                        @if($value['subjudul'] != null)

                        <br>{{$value['subjudul']}} : {{$value['jam']}}
                       @else
                       <br>{{$value['subjudul']}}  {{$value['jam']}}
                       @endif
                        @endforeach

                    </p>
                        </div>
                        <div class="d-md-flex justify-content-md-start align-items-md-center barcode">
                            <!-- <img src="{{url('user/ficry/assets/img/qrcode.png')}}"> -->
                        </div>
                    </div>
                </div>
            </div>
            <p class="detail-venue">{{$sesi['sesi2']['lokasi']}}</p>
            <p class="msg-venue" style="font-family: 'Josefin Sans', sans-serif;">We would apply strictly health protocol.  Please always wear a mask, Wash your hand, Keeping a save distance, <br>Use hand sanitizer frequently</p>
        </div>
        @endif
    </div>
    <div id="section-guest" class="section">
        <div data-aos="fade" class="d-flex align-items-center flex-column">
        <h1 class="title-section">Wedding Wish</h1>
        <!-- <img class="img-guest" src="{{url('aness/assets/img/guest_attendance-removebg-preview.png')}}"> -->
            <div class="form-wrapper p-lg-4 p-md-4 p-sm-1">
                <form action="{{route('abdulstore')}}" method="post">
                @csrf 

                    <div>
                        <div class="form-row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group"><label>Name</label><input class="form-control" type="text" name="nama" value="{{old('nama')}}" required>   </div>
                                <p style="color:red;">
                                @error('nama') {{$message}}
                                @enderror
                                </p>
                                </div>

                   

                        </div>
              
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label>Wedding Wish</label><textarea required class="form-control" name="pesan"></textarea></div>
                            </div>
                        </div>
                 
   
                    </div>
                    <div class="d-flex align-item-center justify-content-center"><button class="btn btn-send btn-block text-center" type="submit">Submit</button></div>
                </form>

            </div>
        </div>
    </div>


    @if($imggaleri != null)
    <div id="section-gallery" class="section text-center">
        <h2 class="title-section">Gallery</h2>
        <!-- <img class="img-gallery" src="{{url('aness/assets/img/gallery-removebg-preview.png')}}"> -->
        <div data-aos="zoom-in-up" class="gallery-wrapper container">
        @foreach($imggaleri as $index => $value)
        <div class="img-wrapper"><img  class="img-items" src="/user/abdul/assets/img/{{$value}}"></div>
        @endforeach
        
        </div>
    </div>
    @endif

    @if($datapengantin['map_link'] != null)
    <div id="section-maps" class="section text-center">
    <h1 class="title-section">Location </h1>
    <!-- <img class="img-location" src="{{url('aness/assets/img/location-removebg-preview.png')}}"> -->

        <div style="padding-top: 20px;">
        <p style="font-size:20px; font-family:'Josefin Sans', sans-serif;">Akad</p>
        <iframe allowfullscreen="" frameborder="0" src={{$datapengantin['map_link']}}&amp;zoom=15"
                width="100%" height="400"></iframe></div>
    </div>
    @endif
    <div id="share-the-love" class="section text-center">
        <h1 class="title-section" style="font-size:50px;">Share The Love</h1>
        <div class="wrapper-love d-flex justify-content-center align-items-center flex-column">
            <p style="letter-spacing: 4px;color: rgb(126,99,79);"> We Also Provide Cash Less
                <br>Wedding Gift Using qrcode</p>
                @foreach($emoney as $index => $value)
                <img class="mt-4 img-barcode" src="/user/abdul/assets/img/{{$value['img']}}">
                <p class="mt-1" >{{$value['name']}}</p>
                @endforeach
                @foreach($accountbank as $index => $value)
                <div class="bank-account mb-2">
                
                <p><strong>{{$value['bank']}}</strong> : {{$value['account']}}  <br>{{$value['acc_name']}}</p>
             
                <input type="hidden" id={{$value['id']}} value={{$value['account']}}>
                <button onclick="copyToClipboard('{{$value['id']}}')"style="background-color:#f2b577;border:none;" class="btn btn-primary btn-sm">Copy</button>
                </div>
                @endforeach

        </div>

    </div>
    <div id="section-ucapan" class="section">
    <div class="container wrapper-content" style="background-color:#F3DBB2;">
            <h1>Pray &amp; <strong>Love</strong></h1>
            <div>
                <div class="wrapper wrapper-pesan">
                @forelse($items as $item)
                    <div class="pt-3">
                   
                        <h3 style="font-family: 'Josefin Sans', sans-serif; font-size:20px;">{{$item->nama}}</h3>
                        <p style="font-family: 'Josefin Sans', sans-serif;"><i class="fa fa-comment mr-2"></i>
                        {{$item->pesan}}
                        </p>
                    </div>

                @empty
                    <span>Data Pesan kosong</span>
                @endforelse
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(menu) {
          let copyText = document.getElementById(menu);
          console.log(copyText.value);
          copyText.select();
          document.execCommand('copy', copyText.value);
          navigator.clipboard.writeText(copyText.value);
          alert('Text Copied');
        } 
    </script>
@endsection
