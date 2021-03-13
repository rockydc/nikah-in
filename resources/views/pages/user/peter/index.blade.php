@extends('layouts.user.peter.index')

@section('title')

Nikah-in | Peter & Melita
@endsection

@section('content')

<header class="text-center" style="margin-top: -70px;">
        <div class="header-wrap">
            <p style="font-family: 'Playfair Display', serif;">Wedding of</p>
            <h1 style="font-family: 'Playfair Display', serif;">Peter &amp; Melita</h1>
            <div class="date-wrap"><span class="days">03</span><span>.</span><span>04</span><span>.</span><span>2021</span></div>
        </div>
    </header>
    <section class="section-quotes container text-center" id="quote" >
        <div>
           
        <h3 data-aos="fade-up" class="mb-5">We Are Getting Married</h3>
            <div class="photo-wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div><img data-aos="fade-up" src="{{url('user/peter/assets/img/profile-cowo.png')}}">
                            <h1 data-aos="fade-up" class="mt-5 text-name">Peter Pandapotan Hutabalian</h1>
                            <p data-aos="fade-up" style="font-family: Montserrat, sans-serif;">Putra dari Aldet Hutabalian dan ibu  Marisi Uli Pakpahan<br></p>
                            <div>
                            <p data-aos="fade-up" class="instagram-profile"><img src="{{url('user/isby/assets/img/ig_icon.svg')}}" class="mr-3" style="width:24px;height:24px;">@hutabalianpeter</p>
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
                        <div><img data-aos="fade-up" src="{{url('user/peter/assets/img/profile-cewe.png')}}">
                            <h1 data-aos="fade-up" class="mt-5 text-name">Melita Ovia br. Simanjuntak</h1>
                            <p data-aos="fade-up" style="font-family: Montserrat, sans-serif;">Putri dari Subert Simanjuntak dan ibu Nurhayati br. Rajagukguk<br></p>
                            <div>
                            <p data-aos="fade-up" class="instagram-profile"><img src="{{url('user/isby/assets/img/ig_icon.svg')}}" class="mr-3" style="width:24px;height:24px;">@melitaovia</p>
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
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-story" style="background: url({{url('user/peter/assets/img/motif-how-we-meet.png')}}) right / cover no-repeat;">
                    <div class="text-wrapper-story text-white">
                    <div class="d-flex">
                    <img src="{{url('user/peter/assets/img/leaf_ic.svg')}}">
                        <h2 class="ml-3 mt-2" class="title-story">Awal Mula</h2>
                    
                    </div>
                    <div class="text-left">
                    <p class="subtitle text-white">
                        2010
                        </p>
                    <p class="caption text-white">
                    Berawal dari pertemuan di sebuah gereja yang sama.
                    Kala itu kami saling mengenal satu sama lain, dan takdir pun mempersatukan kami untuk bersama.
                    </p>
                    </div>
                 
              
                    </div>
                </div>
            </div>
        </div>
        <div>
        <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 photo-story" id="photo-story2"></div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-story" style="background: url({{url('template/jasmine/assets/img/bg-story1.png')}}) right / cover no-repeat;">
                    <div class="text-wrapper-story">
                    <div class="d-flex">
                    <img src="{{url('user/peter/assets/img/ic_leaf_green.svg')}}">
                        <h2 style="color:#2D540B;" class="ml-3 mt-2" class="title-story">Lembaran Baru</h2>
                    
                    </div>
                    <div class="text-left">
                    <p style="color:#2D540B;"  class="subtitle ">
                        2021
                        </p>
                    <p style="color:#2D540B;"  class="caption ">
                    Berawal dari pertemuan di sebuah gereja yang sama.
                    Kala itu kami saling mengenal satu sama lain, dan takdir pun mempersatukan kami untuk bersama.
                    </p>
                    </div>
                 
              
                    </div>
                </div>
            </div>
        </div>
        <div>
        <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 photo-story" id="photo-story3"></div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-story-doa" style="background: url({{url('user/peter/assets/img/motif-doa.png')}}) right / cover no-repeat;">
                    <div class="text-wrapper-story ">
                    <div class="d-flex">
                    <img src="{{url('user/peter/assets/img/sun-ic.png')}}" width="30" height="30">
                        <h2 class="ml-3" class="title-story">Doa</h2>
                    
                    </div>
                    <div class="text-left">
             
                    <p class="caption ">


                    Tuhan membuat segala sesuatu indah pada waktu-Nya. Indah ketika mempertemukan kami, indah saat menumbuhkan kasih di antara kami, dan indah saat Ia mempersatukan kami dalam pernikahan yang kudus.<br><br>
                    Mazmur 46:2
                    <br><br>
                    “Allah itu bagi kita tempat perlindungan dan kekuatan, sebagai penolong dalam kesesakan sangat terbukti.”
                    </p>
                    </div>
                 
              
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="galeri" class="section-galeri">
        <h1 data-aos="fade-up" class="text-center">Galeri Pre Wedding</h1>
        <div class="gallery-wrap container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="200" src="{{url('user/peter/assets/img/galery-1.png')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="250" src="{{url('user/peter/assets/img/galery-2.png')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="300" src="{{url('user/peter/assets/img/galery-3.png')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="350" src="{{url('user/peter/assets/img/galery-4.png')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="400" src="{{url('user/peter/assets/img/galery-5.png')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="300" src="{{url('user/peter/assets/img/galery-6.png')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="250" src="{{url('user/peter/assets/img/galery-7.png')}}" loading="lazy"></div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-3"><img data-aos="fade-up" data-aos-delay="200" src="{{url('user/peter/assets/img/galery-8.png')}}"></div>
            </div>
      
        </div>
    </section>
    <section class="section-information d-flex justify-content-center align-items-center" style="width: 100%;">
        <div class="wrap-info">
            <p style="font-family:Montserrat,sans-serif;font-size:15px;font-weight:500;letter-spacing:5px;">Save the Date</p>
            <h1 class="text-wedding-date">03 April 2021</h1>
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
    <section id="lokasi" class="section-venue">

    <div class="row justify-content-around">
                <div class="col-lg-4 col-md-4 col-sm-12">
 <div class="mt-5 information-detail container text-center d-flex align-items-center justify-content-center flex-column">
    
    <div class="location">
        <div data-aos="fade-up">
            <p data-aos="fade-up">Akad nikah</p>
            <p data-aos="fade-up">09.00 - Selesai</p>
        </div>
     
    </div>
    <div data-aos="fade-up" class="d-flex align-items-center justify-content-center" style="width: 100%;">
        <div data-aos="fade-up" class="line text-center"></div>
    </div>
    <div data-aos="fade-up" style="margin-top: 70px;">
        <p data-aos="fade-up" style="margin-bottom: 10px;">Lokasi</p>
        <p class="mb-1" data-aos="fade-up" style="margin-bottom: 0;font-size:17px;">Gereja HKBP Pondok Kopi<br></p>
        <p data-aos="fade-up" style="margin-bottom: 0px;font-size:10px;color:rgba(255,255,255,0.3);">Jln. Arabica Raya Blok W2 No. 5, Pondok Kopi<br></p>
    </div><a data-bs-hover-animate="pulse" class="btn btn-direction" href="https://goo.gl/maps/B5nsJdCDF239bb5c7">Petunjuk Arah</a>
</div> 
                </div>
       

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="mt-5 information-detail container text-center d-flex align-items-center justify-content-center flex-column">
                    
                <div class="location">
                    <div data-aos="fade-up">
                        <p data-aos="fade-up">Resepsi</p>
                        <p data-aos="fade-up">11.30 - selesai</p>
                    </div>
                
                </div>
                <div data-aos="fade-up" class="d-flex align-items-center justify-content-center" style="width: 100%;">
                    <div data-aos="fade-up" class="line text-center"></div>
                </div>
                <div data-aos="fade-up" style="margin-top:70px;">
                    <p data-aos="fade-up" style="margin-bottom:10px;">Lokasi</p>
                    <p class="mb-1" data-aos="fade-up" style="margin-bottom: 0;font-size:17px;">Gedung Sopo Marpingkir<br></p>
                    <p data-aos="fade-up" style="margin-bottom: 0px;font-size:10px;color:rgba(255,255,255,0.3);">Jln. Damai No. 7, Pulo Gebang, Cakung<br></p>
                </div><a data-bs-hover-animate="pulse" class="btn btn-direction" href="https://goo.gl/maps/WrLCo2A73EA7bZNJ8">Petunjuk Arah</a>
            </div>
     </div>
</div>
 
    </section>
    <section id="rsvp" class="section-rsvp">
        <div class="form-wrapper">
            <h1 class="text-center">Daftar Kehadiran</h1>


            <form action="{{route('peterstore')}}" method="post" >

            

            @csrf 
            <label class="mt-5" for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" placeholder="Nama kamu">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label class="mt-5" for="ikatan">Hubungan <span>(teman pengantin pria, teman pengantin wanita)</span></label>
     
            <input class="form-control " type="text" name="ikatan" placeholder="kerabat pria / kerabat wanita">
            @error('ikatan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label class="mt-5" for="email">Email</label>
            <input class="form-control" type="text" name="email" placeholder="email kamu">
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
            <p>Bagikan kebahagian sebagai dukungan dalam mewujudkan cita cita Peter &amp; Melita<br></p>
            <p class="text-center">
               Mandiri: 1240007971709 <br>
               a/n: Peter Pandapotan Hutabalian
            </p>
 
            <div class="content-wrapper mt-5"><img class="amplop-ats items" src="{{url('template/jasmine/assets/img/amplop-ats.png')}}"><img class="kertas items" src="{{url('user/peter/assets/img/kertas-peter.png')}}"><img class="amplop-bwh items" src="{{url('template/jasmine/assets/img/amplop-bwh.png')}}"></div>
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