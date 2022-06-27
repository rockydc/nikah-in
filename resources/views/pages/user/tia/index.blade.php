@extends('layouts.user.tia.index')

@section('title')

Nikah-in | {{$datapengantin['cowo']}} &amp; {{$datapengantin['cewe']}}
@endsection

@section('content')

<header class="text-center" style="margin-top: -70px;">
        <div class="header-wrap">
            <p style="font-family: 'Playfair Display', serif;">Wedding of</p>
            <h1 style="font-family: 'Playfair Display', serif;">{{$datapengantin['cowo']}} &amp; {{$datapengantin['cewe']}}</h1>
            <div class="date-wrap"><span class="days">{{$datapengantin['tgl']}}</span><span>.</span><span>{{$datapengantin['bln']}}</span><span>.</span><span>{{$datapengantin['thn']}}</span></div>
        </div>
    </header>
    <section class="section-quotes container text-center" id="quote" >
        <div>
            <div class="photo-wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div><img data-aos="fade-up" src="/user/{{$owner}}/assets/img/{{$profilecowo['foto']}}">
                            <h1 data-aos="fade-up" class="mt-5 text-name">{{$profilecowo['nama']}}</h1>
                            <p data-aos="fade-up" style="font-family: Montserrat, sans-serif;">Putra dari Bpk.{{$profilecowo['ayah']}} dan Ibu {{$profilecowo['ibu']}}<br></p>

                            @if($profilecowo['ig'] != null)
                            <div>
                                <a href={{$profilecowo['igurl']}}>
                                <p data-aos="fade-up" class="instagram-profile"><img src="{{url('user/isby/assets/img/ig_icon.svg')}}" class="mr-3" style="width:24px;height:24px;">{{$profilecowo['ig']}}</p>
                                 </a>
                                </div>
                                @endif
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-sm-between flex-column">
                        <div data-aos="fade-up" >
                         <img class="mt-5 mb-5" src="{{url('user/isby/assets/img/gambardan.png')}}" style="width:136px;height:136px;" alt="gambar-dan">
                        </div>
                        <div></div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div><img data-aos="fade-up" src="/user/{{$owner}}/assets/img/{{$profilecewe['foto']}}">
                            <h1 data-aos="fade-up" class="mt-5 text-name">{{$profilecewe['nama']}}</h1>
                            <p data-aos="fade-up" style="font-family: Montserrat, sans-serif;">Putri dari  Bpk.{{$profilecewe['ayah']}} dan Ibu {{$profilecewe['ibu']}}<br></p>
                          
                           @if($profilecewe['ig'] != null)
                            <div>
                                <a href={{$profilecewe['igurl']}}>
                                <p data-aos="fade-up" class="instagram-profile"><img src="{{url('user/isby/assets/img/ig_icon.svg')}}" class="mr-3" style="width:24px;height:24px;">{{$profilecewe['ig']}}</p>
                            </a>
                                </div>
                            @endif
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
                        <p>{{$datapengantin['ayat']}}</p>
                        <p class="mt-4" style="color:#613F3F;font-size:20px;font-family:Montserrat,sans-serif;letter-spacing:1px;">
                        {{$datapengantin['ayatsuci']}}
                        <br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@if($imggaleri != null)
    <section id="galeri" class="section-galeri">
        <h1 data-aos="fade-up" class="text-center">Galeri Pre Wedding</h1>
        <div class="gallery-wrap container">
            <div class="row">
            @foreach($imggaleri as $index => $value)
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 mt-3">
                    <img data-aos="fade-up" data-aos-delay="200" src="/user/{{$owner}}/assets/img/galery/{{$value}}" loading="lazy">
                </div>
                @endforeach
            </div>
      
        </div>
    </section>
@endif
    <section class="section-information d-flex justify-content-center align-items-center" style="width: 100%;">
        <div class="wrap-info">
            <p style="font-family:Montserrat,sans-serif;font-size:15px;font-weight:500;letter-spacing:5px;">Save the Date</p>
            <h1 class="text-wedding-date">{{$datapengantin['tanggal']}}</h1>
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
                    <p data-aos="fade-up">{{$datapengantin['acara1']}}</p>
                    <p data-aos="fade-up">{{$datapengantin['jam akad']}}</p>
                </div>
                <div data-aos="fade-up"></div>
                <div data-aos="fade-up">
                    <p data-aos="fade-up">Resepsi</p>
                    <p data-aos="fade-up">{{$datapengantin['jam resepsi']}}</p>
                </div>
            </div>
            <div data-aos="fade-up" class="d-flex align-items-center justify-content-center" style="width: 100%;">
                <div data-aos="fade-up" class="line text-center"></div>
            </div>
            <div data-aos="fade-up" style="margin-top: 70px;">
                <p data-aos="fade-up" style="margin-bottom: 1px;" class="mb-2">Lokasi</p>

            </div>
      
                <div data-aos="fade-up">
                    <p data-aos="fade-up"><strong>{{$datapengantin['acara1']}}</strong></p>
                    <p data-aos="fade-up">{{$datapengantin['lokasi']}}</p>
                    <a data-bs-hover-animate="pulse" class="mb-3 btn btn-direction" target="_blank"  href={{$datapengantin['Map link pemberkatan']}}>Buka Peta</a>
                </div>
                <div data-aos="fade-up"></div>
                <div data-aos="fade-up">
                    <p data-aos="fade-up"><strong>Resepsi</strong></p>
                    <p data-aos="fade-up">{{$datapengantin['lokasi resepsi']}}</p>
                    <a data-bs-hover-animate="pulse" class="mb-3 btn btn-direction" target="_blank"  href={{$datapengantin['Map link resepsi']}}>Buka Peta</a>
            </div>
            <!-- <div class="btn-location">
            <a data-bs-hover-animate="pulse" class="btn btn-direction" target="_blank"  href={{$datapengantin['Map link pemberkatan']}}>Pemberkatan</a>
            <a data-bs-hover-animate="pulse" class="btn btn-direction" target="_blank"  href={{$datapengantin['Map link resepsi']}}>Resepsi</a>
            </div> -->

        </div>
    </section>
    <section id="section-maps" class="section text-center my-5">
    <h1 class="title-section">Location </h1>
    <!-- <img class="img-location" src="{{url('aness/assets/img/location-removebg-preview.png')}}"> -->
        <div style="padding-top: 20px;"><iframe allowfullscreen="" frameborder="0" src={{$datapengantin['map_link']}}&amp;zoom=15"
                width="100%" height="400"></iframe></div>
    </section>
    <section id="rsvp" class="section-rsvp">
        <div class="form-wrapper">
            <h1 class="text-center">Daftar Kehadiran</h1>


            <form action="{{route('retnostore')}}" method="post" >

            

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
            <textarea  required class="form-control " rows="8" placeholder="Ucapan" name="pesan"></textarea>
                <div class="form-group d-flex justify-content-center mt-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="rd_1" name="status" checked class="custom-control-input" value="Hadir">
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
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
     
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
            <p>Bagikan kebahagiaan bersama {{$datapengantin['cowo']}} &amp; {{$datapengantin['cewe']}}<br></p>
           
        <div class="wrapper-love d-flex justify-content-center align-items-center flex-column">
       
                <div class="bank-account">
                @foreach($accountbank as $index => $value)
                    <div class="box-account mb-3 text-center ">
                    <input type="hidden" id={{$value['id']}} value={{$value['account']}}>
                    <p><strong>{{$value['bank']}}</strong> : {{$value['account']}}  <br>{{$value['acc_name']}}
             </p>
      

              <div class="container d-flex justify-content-center align-items-center">
                         <button onclick="copyToClipboard('{{$value['id']}}')"style="background-color:#f2b577;border:none;" class="btn btn-primary btn-sm">Copy</button>
              </div>
      
                    </div>
            
               @endforeach
               <h3 class="text-center">GoPay</h3>
                </div>


        </div>

        <div class="content-wrapper mt-5"><img class="amplop-ats items" src="{{url('template/jasmine/assets/img/amplop-ats.png')}}"><img class="kertas items" src="/user/{{$owner}}/assets/img/{{$qrcode}}"><img class="amplop-bwh items" src="{{url('template/jasmine/assets/img/amplop-bwh.png')}}"></div>
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