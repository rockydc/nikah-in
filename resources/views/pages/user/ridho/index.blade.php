
@extends('layouts.user.ridho.index')


@section('title')
WebWedding
@endsection
@section('content')

<header>
        <div class="header-wrap"><img class="pol-1" src="{{url('template/puzzlewood/assets/img/Polygon%201.svg')}}"><img class="pol-2" src="{{url('template/puzzlewood/assets/img/Polygon%202.svg')}}">
            <h1>R&amp;T<br></h1>
        </div>
    </header>
    <section class="section-profile" id="profile">
        <div class="container">
            <p class="text-center p-heading ">Assalamu'alaikum warahmatullahi wabarakatuh</p>

            <p class="text-center mb-5" style="letter-spacing: 2px;color: rgb(126,99,79);">“Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir. “<br> - <strong class="mt-3">QS Ar Rum Ayat 21 </strong> <br></p>
            <div class="profile-wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="profile-content text-center"><img src="/user/ridho/assets/img/{{$profilecowo['foto']}}">
                            <h3 class="mt-4">{{$profilecowo['nama']}}<br></h3>
                            <p data-aos="fade-up" style="font-family: Montserrat, sans-serif;">Putra dari Bpk. {{$profilecowo['ayah']}} dan Ibu {{$profilecowo['ibu']}}<br></p>
                        </div>
                    </div>
                    <div class="col d-flex align-content-center justify-content-center">
                        <h1 class="mt-4 mb-4" style="font-size: 144px;font-family: 'Playfair Display', serif;">&amp;</h1>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="profile-content text-center"><img src="/user/ridho/assets/img/{{$profilecewe['foto']}}">
                        <h3 data-aos="fade-up" class="mt-5 text-name">{{$profilecewe['nama']}}</h3>
                            <p data-aos="fade-up" style="font-family: Montserrat, sans-serif;">Putri dari  Bpk. {{$profilecewe['ayah']}} dan Ibu {{$profilecewe['ibu']}}<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-countdown">
        <div class="d-sm-flex flex-column justify-content-sm-center align-items-sm-center wrapper container">
            <h1 class="text-center mb-5 text-title">Save the date</h1>
            <div class="countdown-wrapper">
                <div class="text-center">
                    <p class="text-waktu" id="days">25</p>
                    <p class="text-keterangan">Hari</p>
                </div>
                <div class="text-center">
                    <p class="text-waktu" id="hours">01</p>
                    <p class="text-keterangan">Jam</p>
                </div>
                <div class="text-center">
                    <p class="text-waktu" id="minutes">34</p>
                    <p class="text-keterangan">Menit</p>
                </div>
                <div class="text-center">
                    <p class="text-waktu" id="seconds">07</p>
                    <p class="text-keterangan">Detik</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-venue" id="lokasi"><img class="bungakiri" src="{{url('template/puzzlewood/assets/img/bungakiri.svg')}}"><img class="bungakanan" src="{{url('template/puzzlewood/assets/img/bungakanan.svg')}}">
        <div class="container content-venue text-center">
            <div>
                <p class="mt-5">{{$sesi['sesi1']['judul']}}<br></p>
                <h1>{{$sesi['sesi1']['tanggal']}}<br></h1>
          
                @foreach($sesi['sesi1']['jam'] as $index => $value)  
                        @if($value['subjudul'] != null)

                        <p class="mb-3" style="margin: 0px;">{{$value['subjudul']}} : {{$value['jam']}}<br></p>
                       @else
                       <p class="mb-3" style="margin: 0px;">{{$value['subjudul']}} {{$value['jam']}}<br></p>
                       @endif
                        @endforeach
                <p class="mb-5">{{$sesi['sesi1']['lokasi']}}<br></p><a class="btn btn-direction"  href="{{$sesi['sesi1']['map_link']}}">Petunjuk Arah</a>
            </div><img src="{{url('template/puzzlewood/assets/img/ic_venue.svg')}}" style="margin-top: 48px;margin-bottom: 50px;">
            <div>
                <p class="mt-5">{{$sesi['sesi2']['judul']}}<br></p>
                <h1>{{$sesi['sesi2']['tanggal']}}<br></h1>

                @foreach($sesi['sesi2']['jam'] as $index => $value)  
                        @if($value['subjudul'] != null)

                        <p class="mb-3" style="margin: 0px;">{{$value['subjudul']}} : {{$value['jam']}}<br></p>
                       @else
                       <p class="mb-3" style="margin: 0px;">{{$value['subjudul']}} {{$value['jam']}}<br></p>
                       @endif
                        @endforeach
             
                <p class="mb-5">{{$sesi['sesi2']['lokasi']}}<br></p><a class="btn btn-direction" href="{{$sesi['sesi2']['map_link']}}">Petunjuk Arah</a>
            </div><img src="{{url('template/puzzlewood/assets/img/ic_venue.svg')}}" style="margin-top: 48px;margin-bottom: 50px;">
        </div>

        @if($video != null)
        <div class="d-flex justify-content-center flex-column align-items-center" style="margin-top: 153px;">
            <p class="text-center mb-3" style="font-size: 25px;">Video pre wedding Jenny &amp; Ronald <br></p>
            <div class="d-flex justify-content-center video-wrapper"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/Oh1eIFNbypQ" data-aos="zoom-out-down" data-aos-duration="1000" class="embed-responsive-item"></iframe></div>
        </div>
        @endif
 
    </section>
    <section id="rsvp" class="section-rsvp">
        <div class="form-wrapper">
            <h1 class="text-center">Daftar Kehadiran</h1>


            <form action="{{route('ridhostore')}}" method="post" >

            

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
    <section id="galeri" class="section-galeri px-3">
        <h2 data-aos="fade-up" class="text-center">Galeri Pre Wedding</h2>
        <div class="gallery-wrap container">
            <div class="row">
            @foreach($imggaleri as $index => $value)
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 mt-3">
                    <img data-aos="fade-up" data-aos-delay="200" src="/user/ridho/assets/img/galery/{{$value}}" loading="lazy">
                </div>
                @endforeach
            </div>
      
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
       </div>


</div>
            @if($qrcode != null)
            <div class="content-wrapper mt-5"><img class="amplop-ats items" src="{{url('template/puzzlewood/assets/img/amplop-ats.png')}}"><img class="kertas items" src="{{url('template/puzzlewood/assets/img/kertas.png')}}"><img class="amplop-bwh items" src="{{url('template/puzzlewood/assets/img/amplop-bwh.png')}}"></div>
            @endif
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