@extends('layouts.user.ardy.index')

@section('title')

Nikah-in | Adit & Ika
@endsection

@section('content')

<header class="text-center" style="margin-top: -70px;">
        <div class="header-wrap">
            <p style="font-family: 'Playfair Display', serif;">Wedding of</p>
            <h1 style="font-family: 'Playfair Display', serif;">Adit &amp; Ika</h1>
            <div class="date-wrap"><span class="days">05</span><span>.</span><span>06</span><span>.</span><span>21</span></div>
        </div>
    </header>
    <section class="section-quotes container text-center" id="quote" >
        <div>
           
            <img src="{{url('user/isby/assets/img/bismillah.png')}}">
            <p data-aos="fade-up" class="mt-5" style="color:#613F3F;">“ And among the signs of His power is He created for you wives of your own kind, your stable tends and is at ease with it, and made Him between you taste and affection. In fact, in this there are really signs for people who think “<br></p>
            <div class="photo-wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div><img data-aos="fade-up" src="{{url('user/ardy/assets/img/profile-cowo.png')}}">
                            <h1 data-aos="fade-up" class="mt-5 text-name">Ardy Adit Nugraha</h1>
                            <p data-aos="fade-up" style="font-family: Montserrat, sans-serif;">Putra dari Dedy Lesmana. Zubirman dan ibu Tuti Mardiasih<br></p>
                            <div>
                                <a href="https://www.instagram.com/ardyaditia28/">
                                <p data-aos="fade-up" class="instagram-profile"><img src="{{url('user/isby/assets/img/ig_icon.svg')}}" class="mr-3" style="width:24px;height:24px;">@ardyaditia28</p>
                                 </a>
                                </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-sm-between flex-column">
                        <div data-aos="fade-up" >
                         <img class="mt-5 mb-5" src="{{url('user/isby/assets/img/gambardan.png')}}" style="width:136px;height:136px;" alt="gambar-dan">
                        </div>
                        <div></div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div><img data-aos="fade-up" src="{{url('user/ardy/assets/img/profile-cewe.png')}}">
                            <h1 data-aos="fade-up" class="mt-5 text-name">Ika Retno widyati</h1>
                            <p data-aos="fade-up" style="font-family: Montserrat, sans-serif;">Putri dari bapak Basuki(Alm.) dan ibu Siti Wardani<br></p>
                          
                           
                            <div>
                                <a href="https://www.instagram.com/ikaarw/">
                                <p data-aos="fade-up" class="instagram-profile"><img src="{{url('user/isby/assets/img/ig_icon.svg')}}" class="mr-3" style="width:24px;height:24px;">@ikaarw</p>
                            </a>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="story" class="section-story container-fluid">
        <div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 photo-story" id="photo-story1"></div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-story" style="background: url({{url('template/jasmine/assets/img/bg-story1.png')}}) right / cover no-repeat;">
                    <div class="text-wrapper-story"><img class="icon-leaf"src="{{url('template/jasmine/assets/img/ic-leaf.svg')}}">
                        <p>Dari Abu Hurairah Radhiyallaahu 'anhu bahwa Nabi SAW 
bila mendoakan seseorang yang nikah, beliau bersabda:</p>
                        <p class="mt-4" style="color:#613F3F;font-size:20px;font-family:Montserrat,sans-serif;letter-spacing:1px;">“Semoga Allah memberkahimu dan menetapkan berkah atasmu, serta mengumpulkan engkau berdua dalam kebaikan."<br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="galeri" class="section-galeri">
        <h1 data-aos="fade-up" class="text-center">Galeri Pre Wedding</h1>
        <div class="gallery-wrap container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="200" src="{{url('user/ardy/assets/img/AditIka1.jpeg')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="250" src="{{url('user/ardy/assets/img/AditIka2.jpeg')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="300" src="{{url('user/ardy/assets/img/AditIka3.jpeg')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="350" src="{{url('user/ardy/assets/img/AditIka4.jpeg')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="400" src="{{url('user/ardy/assets/img/AditIka5.jpeg')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="300" src="{{url('user/ardy/assets/img/AditIka6.jpeg')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="250" src="{{url('user/ardy/assets/img/AditIka11.jpeg')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="200" src="{{url('user/ardy/assets/img/AditIka12.jpeg')}}"></div>
            </div>
      
        </div>
    </section>

    <section class="section-information d-flex justify-content-center align-items-center" style="width: 100%;">
        <div class="wrap-info">
            <p style="font-family:Montserrat,sans-serif;font-size:15px;font-weight:500;letter-spacing:5px;">Save the Date</p>
            <h1 class="text-wedding-date">01 Agustus 2021</h1>
            <div class="countdown-wrap">
                <div>
                    <p id="days" class="text-date">25</p>
                    <p class="text-info">Hari</p>
                </div>
                <div>
                    <p id="hours" class="text-date">01</p>
                    <p class="text-info">Jam</p>
                </div>
                <div>
                    <p id="minutes" class="text-date">34</p>
                    <p class="text-info">Menit</p>
                </div>
                <div>
                    <p id="seconds" class="text-date">07</p>
                    <p class="text-info">Detik</p>
                </div>
            </div>
        </div>
    </section>
    <section id="lokasi" class="section-venue d-flex justify-content-center align-items-center">
        <div class="information-detail container text-center d-flex align-items-center justify-content-center flex-column">
            <div class="location">
                <div data-aos="fade-up">
                    <p data-aos="fade-up">Akad nikah</p>
                    <p data-aos="fade-up">09.00 - 10.00</p>
                </div>
                <div data-aos="fade-up"></div>
                <div data-aos="fade-up">
                    <p data-aos="fade-up">Resepsi</p>
                    <p data-aos="fade-up">11.00 - 14.00</p>
                </div>
            </div>
            <div data-aos="fade-up" class="d-flex align-items-center justify-content-center" style="width: 100%;">
                <div data-aos="fade-up" class="line text-center"></div>
            </div>
            <div data-aos="fade-up" style="margin-top: 70px;">
                <p data-aos="fade-up" style="margin-bottom: 1px;" class="mb-2">Lokasi</p>
                <p data-aos="fade-up" style="font-size:14px;"class="mb-2">Aula Tirta<br></p>
                <p data-aos="fade-up" style="margin-bottom: 0px;font-weight:300;font-size:12px;color:white;">Aula Tirta. Jl Slamet Riyadi III No.17, RT.7/RW.4, Kb. Manggis, Kec. Matraman, Jakarta Timur<br></p>
            </div><a data-bs-hover-animate="pulse" class="btn btn-direction" href="https://goo.gl/maps/9S2SCp98o7F2KfjM7">Petunjuk Arah</a>
        </div>
    </section>
    <section id="rsvp" class="section-rsvp">
        <div class="form-wrapper">
            <h1 class="text-center">Daftar Kehadiran</h1>


            <form action="{{route('ardystore')}}" method="post" >

            

            @csrf 
            <label class="mt-5" for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" placeholder="Nama kamu" required>

            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label class="mt-5" for="ikatan">Hubungan <span>(teman pengantin pria, teman pengantin wanita)</span></label>
     
            <input class="form-control " type="text" name="ikatan" placeholder="kerabat pria / kerabat wanita" required>
            @error('ikatan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label class="mt-5" for="email">Email</label>
            <input class="form-control" type="text" name="email" placeholder="email kamu" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label class="mt-5" for="pesan">Ucapan atau Doa</label>
            <textarea class="form-control " rows="8" placeholder="Ucapan" name="pesan"></textarea>
                <div class="form-group d-flex justify-content-center mt-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="rd_1" name="status" class="custom-control-input" value="Hadir">
                    <label class="custom-control-label green" for="rd_1">Akan Hadir</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="rd_2" name="status" class="custom-control-input" value="Tidak Hadir">
                    <label class="custom-control-label red" for="rd_2">Tidak Bisa Hadir</label>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <div class="d-flex align-items-center mr-4"><label>Hadir Bersama</label></div><select class="form-control" name="jmlh_orang"style="width: 150px;">
                        <optgroup label="Jumlah orang">
                            <option value="1" selected="">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group d-flex justify-content-center mt-5"><button class="btn btn-primary" data-bs-hover-animate="pulse" type="submit">Kirim pesan</button></div>
            </form>
        </div>
    </section>
    <section class="section-gift">
        <div class="container wrapper">
            <h1 style="font-family: Montserrat, sans-serif;">Share gift</h1>
            <p>Bagikan kebahagian bersama Adit &amp; Ika<br></p>
         
            <div class="content-wrapper mt-5"><img class="amplop-ats items" src="{{url('template/jasmine/assets/img/amplop-ats.png')}}"><img class="kertas items" src="{{url('user/ardy/assets/img/qrcodeBCA.png')}}"><img class="amplop-bwh items" src="{{url('template/jasmine/assets/img/amplop-bwh.png')}}"></div>
        </div>
    </section>
    <section class="section-ucapan">
        <h1 class="text-center">Kartu ucapan<br></h1>
        <div data-aos="zoom-in-up" class="ucapan-wrapper container">

        @forelse($items as $item)
    
            <div class="content-ucapan">
                <div class="d-flex align-items-start justify-content-center pt-1"><img src="{{url('user/isby/assets/img/profile-ic.svg')}}"></div>
                <div>
                
                <h1>{{$item->nama}}</h1>
            
              
                  
                    <p class="mt-3">{{$item->pesan}}<br></p>
                    <div class="d-flex justify-content-end">
                        <p class="text-muted text-time">{{$item->DateDiffToday ?? ''}}<br></p>
                    </div>
                </div>
            </div>
       
       @empty
       <span>Data Kosong</span>
       @endforelse

        </div>
    </section>
@endsection