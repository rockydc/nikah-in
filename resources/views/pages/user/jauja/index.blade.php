
@extends('layouts.user.jauja.index')


@section('title')
WebWedding
@endsection
@section('content')
<div class="carousel slide carousel-fade" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block" src="{{url('user/jauja/assets/img/RENJANAs-6.jpg')}}" alt="Slide Image" style="object-position: 50% 50%;"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{url('user/jauja/assets/img/RENJANAs-8.jpg')}}" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{url('user/jauja/assets/img/RENJANAs-12.jpg')}}" alt="Slide Image"></div>
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
            <li data-target="#carousel-1" data-slide-to="2"></li>
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
            <h2 class="text-center" style="margin-bottom: 19px;font-family: moonTime, sans-serif;font-size:80px;font-weight: normal;color: rgb(126,99,79);">We Found Love</h2>
            <p class="text-center" style="letter-spacing: 4px;color: rgb(126,99,79);">“ And among the signs of His power is He created for you wives of your own kind, your stable tends and is at ease with it, and made Him between you taste and affection. In fact, in this there are really signs for people who think “<br></p>
            <!-- <p class="text-center"
                style="color: rgb(126,99,79);">(Colossians 3:14-15)<br></p> -->
        </div>
    </div>
    <div data-aos="zoom-in-up" data-aos-duration="1000" id="section-about" class="section">
        <div class="text-center wrapper-about" style="color: rgb(8,8,8);"><img class="img-about" src="{{url('aness/assets/img/aboutus-removebg-preview.png')}}">
            <div class="container">
                <div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"><img class="img-profile" src="{{url('user/jauja/assets/img/profile-cowo.png')}}"></div>
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 align-self-lg-center align-self-xl-center text-left content-about" style="padding: 0px;margin: 0px;">
                            <h1>{{$profilecowo['nick']}}</h1>
                            <h3><strong>{{$profilecowo['nama']}}&nbsp;</strong></h3>
                            <p>Son of {{$profilecowo['ayah']}}<br>and {{$profilecowo['ibu']}}<br></p>
                            <div class="instagram-text">
                            <a class="text-decoration-none" href="https://www.instagram.com/anesitumeang/">
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
                            <a class="text-decoration-none" href="#">
                            <i class="fa fa-instagram mr-2"></i>{{$profilecewe['ig']}}
                            </a>

                            </div>

                           
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"><img class="img-profile" src="{{url('user/jauja/assets/img/profile-cewe.png')}}"></div>
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
                        <div class="d-md-flex d-lg-flex d-xl-flex justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xl-end align-items-xl-center barcode"><img src="{{url('user/ficry/assets/img/qrcode.png')}}"></div>
                        <div class="mt-3">
                        <h2 class="text-venue" style="">Akad</h2>
                        <img src="{{url('user/ficry/assets/img/mosque 2.png')}}">
                           
                            <p class="date-venue" style="">{{$datapengantin['tanggal']}} <br> {{$datapengantin['jam akad']}}</p>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
            <p class="detail-venue" style="">{{$datapengantin['lokasi']}}</p>
            <p class="msg-venue" style="font-family: 'Josefin Sans', sans-serif;1">We appologize in the implementation on akad will only be attended by famillies accordance<br>to health protocols related to the pandemic Covid-19 situation<br></p><img class="flowers" src="{{url('aness/assets/img/bunga.png')}}"></div>
        <div data-aos="zoom-in-up"
            class="text-center">
            <div>
                <div>
                    <div class="wrapper-content-church">
                        <div></div>
                        <div><h2 class="text-venue" style="">Unduh Mantu</h2>
                        <img src="{{url('user/ficry/assets/img/mosque 2.png')}}">
                       
                        <p class="date-venue" style="">{{$datapengantin['tanggal resepsi']}} <br> {{$datapengantin['jam resepsi']}}</p>
                        </div>
                        <div class="d-md-flex justify-content-md-start align-items-md-center barcode"><img src="{{url('user/ficry/assets/img/qrcode.png')}}"></div>
                    </div>
                </div>
            </div>
            <p class="detail-venue">{{$datapengantin['lokasi resepsi']}}</p/>
            <p class="msg-venue" style="font-family: 'Josefin Sans', sans-serif;">We would apply strictly health protocol.  Please always wear a mask, Wash your hand, Keeping a save distance, <br>Use hand sanitizer frequently</p>
        </div>
    </div>
    <div id="section-guest" class="section">
        <div data-aos="fade" class="d-flex align-items-center flex-column">
        <h1 class="title-section">RSVP</h1>
        <!-- <img class="img-guest" src="{{url('aness/assets/img/guest_attendance-removebg-preview.png')}}"> -->
            <div class="form-wrapper p-lg-4 p-md-4 p-sm-1">
                <form action="{{route('jaujastore')}}" method="post">
                @csrf 

                    <div>
                        <div class="form-row">
                            <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                <div class="form-group"><label>Name</label><input class="form-control" type="text" name="nama" value="{{old('nama')}}" required>   </div>
                                <p style="color:red;">
                                @error('nama') {{$message}}
                                @enderror
                                </p>
                                </div>

                            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="form-group"><label>Ikatan</label><input class="form-control" type="text" name="ikatan" value="{{old('ikatan')}}"required></div>
                                <p class="text-danger">
                                @error('ikatan') {{$message}}
                                @enderror</p>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label>Email</label><input class="form-control" name="email" required></div>
                                <p class="text-danger">
                                @error('email') {{$message}}
                                @enderror</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label>Wedding pray</label><textarea class="form-control" name="pesan"></textarea></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group text-center"><label class="text-center" style="font-weight: bold;">Will You Be Coming ?</label>
                                    <div>
                                        <div class="form-group form-status text-center">
                                            <div class="form-check ml-2">
                                            <input checked class="form-check-input" type="radio" id="attend" value="Hadir" name="status"><label class="form-check-label" for="attend">i will attend</label>
                                            </div>
                                            
                                            <div class="form-check ml-3"><input class="form-check-input" type="radio" id="not_attend" name="status" value="Tidak Hadir"><label class="form-check-label" for="not_attend">No, I cant Attend</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group text-center d-flex align-items-center justify-content-center">
                                    <div><label class="d-xl-flex d-flex justify-content-center" style="font-weight: bold;">Guest&nbsp;</label></div><select  name="jmlh_orang" class="form-control ml-2" style="width: 150px;"><option value="1" selected="">1 Person</option><option value="2">2 Person</option><option value="3">3 Person</option>
                                    
                                    <!-- <option value="4">4 Person</option><option value="5 ">5 Person</option> -->
                                    <option value="4">4</option></select></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-item-center justify-content-center"><button class="btn btn-send btn-block text-center" type="submit">Submit</button></div>
                    

                </form>

            </div>
        </div>
    </div>
    <div id="section-gallery" class="section text-center">
        <h2 class="title-section">Gallery</h2>
        <!-- <img class="img-gallery" src="{{url('aness/assets/img/gallery-removebg-preview.png')}}"> -->
        <div data-aos="zoom-in-up" class="gallery-wrapper container">
        <div class="img-wrapper"><img class="img-items" src="{{url('user/jauja/assets/img/RENJANAs-9.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/jauja/assets/img/RENJANAs-2.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/jauja/assets/img/RENJANAs-12.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/jauja/assets/img/RENJANAs-11.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/jauja/assets/img/RENJANAs-4.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/jauja/assets/img/RENJANAs-5.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/jauja/assets/img/RENJANAs-6.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/jauja/assets/img/RENJANAs-7.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/jauja/assets/img/RENJANAs-8.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items img-unik" src="{{url('user/jauja/assets/img/RENJANAs-10.jpg')}}"></div>
        </div>
    </div>
    <div id="section-maps" class="section text-center">
    <h1 class="title-section">Location </h1>
    <!-- <img class="img-location" src="{{url('aness/assets/img/location-removebg-preview.png')}}"> -->
        <div style="padding-top: 20px;"><iframe allowfullscreen="" frameborder="0" src="{{$datapengantin['Map link']}}"&amp;zoom=15"
                width="100%" height="400"></iframe></div>
    </div>
    <div id="share-the-love" class="section text-center">
        <h1 class="title-section" style="font-size:50px;">Share The Love</h1>
        <div class="wrapper-love d-flex justify-content-center align-items-center flex-column">
            <p style="letter-spacing: 4px;color: rgb(126,99,79);"> We Also Provide Cash Less
                <br>Wedding Gift Using Ovo and Bank Account</p>
                <img class="mt-4 img-barcode" src="{{url('user/jauja/assets/img/qr.png')}}">
                <p class="mt-1" >BCA</p>
                <div class="bank-account">
                <p><strong>CIMB</strong> : 706127039900  <br>jauza Hasanah isdiana</p>
                </div>
                

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
@endsection
