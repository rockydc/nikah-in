@extends('layouts.user.daniel.index')


@section('title')
WebWedding
@endsection
@section('content')


<div class="carousel slide carousel-fade" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block" src="{{url('user/daniel/assets/img/_ARY7025-min.jpg')}}" alt="Slide Image" style="object-position: 50% 50%;"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{url('user/daniel/assets/img/_ARY7242-min.jpg')}}" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{url('user/daniel/assets/img/_ARY7539-min.jpg')}}" alt="Slide Image"></div>
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
            <p class="text-center" style="letter-spacing: 4px;color: rgb(126,99,79);">❝ And over all these virtues put on love, which binds them all together in perfect unity. Let the peace of Christ rule in your hearts, since as members of one body you were called to peace. And be thankful. ❞<br></p>
            <p class="text-center"
                style="color: rgb(126,99,79);">(Colossians 3:14-15)<br></p>
        </div>
    </div>
    <div data-aos="zoom-in-up" data-aos-duration="1000" id="section-about" class="section">
        <div class="text-center wrapper-about" style="color: rgb(8,8,8);"><img class="img-about" src="{{url('aness/assets/img/aboutus-removebg-preview.png')}}">
            <div class="container">
                <div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"><img class="img-profile" src="{{url('user/daniel/assets/img/icon-profile-1.png')}}"></div>
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 align-self-lg-center align-self-xl-center text-left content-about" style="padding: 0px;margin: 0px;">
                            <h1>Daniel</h1>
                            <h3><strong>Daniel Ranap Valentino Siahaan&nbsp;</strong></h3>
                            <p>Son of  Wilson M. Siahaan<br>and Marlina Panjaitan<br></p>
                            <div class="instagram-text">
                            <a class="text-decoration-none" href="https://www.instagram.com/anesitumeang/">
                            <i class="fa fa-instagram mr-2"></i>@danielranap_
                            </a>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><img class="flower" src="{{url('aness/assets/img/bunga-removebg-preview.png')}}"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 align-self-center text-right content-about">
                            <h1>Gabriela</h1>
                            <h3 style="">Ni Putu Gabriela</h3>
                            <p>Daughter of I Nyoman H. Sukendra<br>and Shinta Heririana</p>
                            <div class="instagram-text">
                            <a class="text-decoration-none" href="https://www.instagram.com/nahomilestari/">
                            <i class="fa fa-instagram mr-2"></i> @elaelaaeee
                            </a>

                            </div>

                           
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"><img class="img-profile" src="{{url('user/daniel/assets/img/icon-profile-2.png')}}"></div>
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
                        <div class="d-md-flex d-lg-flex d-xl-flex justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xl-end align-items-xl-center barcode"><img src="{{url('user/daniel/assets/img/qrcode-gbi.png')}}"></div>
                        <div class="mt-3">
                        <h2 class="text-venue" style="">Holly Matrimony</h2>
                        <img src="{{url('aness/assets/img/gereja-removebg-preview.png')}}">
                            <h2 class="text-venue"style="">GBI The Seed</h2>
                            <p class="date-venue" style="">April 23,2021 <br> 11.00 AM</p>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
            <p class="detail-venue" style="">Hotel Borobudur Lt. 2</p>
            <p class="detail-venue" style="">Jl. Magelang KM 6,3, Sleman, Yogyakarta</p>
            <p class="msg-venue" style="font-family: 'Josefin Sans', sans-serif;1">We appologize in the implementation on holy matrimony will only be attended by famillies accordance<br>to health protocols related to the pandemic Covid-19 situation<br></p><img class="flowers" src="{{url('aness/assets/img/bunga.png')}}"></div>

    </div>
    <div id="section-guest" class="section">
        <div data-aos="fade" class="d-flex align-items-center flex-column">
        <h1 class="title-section">RSVP</h1>
        <!-- <img class="img-guest" src="{{url('aness/assets/img/guest_attendance-removebg-preview.png')}}"> -->
            <div class="form-wrapper p-lg-4 p-md-4 p-sm-1">
                <form action="{{url('api/daniela/wish_store')}}" method="post">
                @csrf 

                    <div>

                        <div class="form-row">
                            <div class="col">
                            <div class="form-group"><label>Name</label><input required class="form-control" type="text" name="nama"> </div>
                                <p style="color:red;">
                                @error('nama') {{$message}}
                                @enderror
                                </p>
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label>Wedding pray</label><textarea rows="6" class="form-control" name="pesan"></textarea></div>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex align-item-center justify-content-center"><button onclick="event.preventDefault(); return storeData(event)" class="btn btn-send btn-block text-center" type="submit">Submit</button></div>
                    

                </form>

            </div>
        </div>
    </div>
    <div id="section-gallery" class="section text-center">
        <h2 class="title-section">Gallery</h2>
        <!-- <img class="img-gallery" src="{{url('aness/assets/img/gallery-removebg-preview.png')}}"> -->
        <div data-aos="zoom-in-up" class="gallery-wrapper container">
            <div class="img-wrapper"><img class="img-items" src="{{url('user/daniel/assets/img/gallery/_ARY7013-min.JPG')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/daniel/assets/img/gallery/_ARY7084-min.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/daniel/assets/img/gallery/_ARY7257-min.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/daniel/assets/img/gallery/_ARY7307-min.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/daniel/assets/img/gallery/_ARY7311-min.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/daniel/assets/img/gallery/_ARY7333-min.jp')}}g"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/daniel/assets/img/gallery/_ARY7343-min.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/daniel/assets/img/gallery/_ARY7392-min.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items" src="{{url('user/daniel/assets/img/gallery/_ARY7440-min.jpg')}}"></div>
            <div class="img-wrapper"><img class="img-items img-unik" src="{{url('user/daniel/assets/img/gallery/_ARY7444-min.jpg')}}"></div>
        </div>
    </div>
    
    <div id="section-maps" class="section text-center">
    <h1 class="title-section">Location </h1>
    <!-- <img class="img-location" src="{{url('aness/assets/img/location-removebg-preview.png')}}"> -->
        <div style="padding-top: 20px;"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.390972063845!2d110.35987981530761!3d-7.748289378969745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58f16ca4083b%3A0xf4d932fd7965b97b!2sGBI%20The%20Seed!5e0!3m2!1sen!2sid!4v1617979474518!5m2!1sen!2sid&amp;zoom=15"
                width="100%" height="400"></iframe></div>
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
                        <div class="d-flex justify-content-end">
                        <p class="text-muted text-time">{{$item->DateDiffToday ?? ''}}<br></p>
                        </div>
                        
                    </div>

                @empty
                    <span>Data Pesan kosong</span>
                @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        const Ajax = {
            postAjax: (uri) => {
                return new Promise((resolve, reject) => {
                    let form = $('form');
                    $.ajax({
                        method: 'POST',
                        url: uri,
                        data: form.serialize(),
                        success: function(response){
                            if(response.is_success){
                                form.trigger('reset');
                                resolve(response);
                            }
                        }
                    })
                })
            }
        }
        function storeData(event)
        {
            event.preventDefault();
            Ajax.postAjax($('form').attr('action')).then(
                () => {window.location.reload(true);}
            );
        }
        
    </script>
@endsection
