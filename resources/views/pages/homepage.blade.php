@extends('layouts.index')

@section('title')
Nikah-in - Home
@endsection
@section('content')
<header class="section-header text-center">
        <div class="container header-wrap"><img class="tada animated" src="{{url('home/assets/img/Ilustrasi%20header%201.png')}}" style="width: 150px;height: 150px;">
            <h1 class="rubberBand animated">Buat undangan pernikahan digital dengan cara yang mudah <br></h1><a data-bs-hover-animate="bounce" class="btn btn-header" href="https://api.whatsapp.com/send?phone=6285157336832&amp;text=Hallo%20%2C%20saya%20ingin%20mengetahui%20lebih%20detail%20mengenai%20nikah-in">Buat Sekarang</a>
        </div><a class="js-scroll-trigger" href="#quote-wrap"><img data-bs-hover-animate="rubberBand" src="{{url('home/assets/img/Group%20227.svg')}}" style="width: 50px;height: 50px;"></a>
    </header>
    <div id="quote-wrap" class="quote-wrap text-center container" style="margin-top: 70px;"><img data-aos="fade-up" src="{{url('home/assets/img/ic_quote.svg')}}" style="width: 50px;height: 41px;">
        <div data-aos="fade-up" class="block-quote">
            <h1>"A great marriage <br>isn’t something that just happens<br>it’s something that must<br> be created."<br></h1><footer style="margin-top:30px;"class="blockquote-footer">Fawn Weaver</footer>
        </div>
    </div>
    <div class="carousel-section"><div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 2,"autoPlay": 3000,
"pauseAutoPlayOnHover": false ,"wrapAround":true,"pageDots":false,"prevNextButtons":false}'>
    <img class="carousel-image"
      data-flickity-lazyload="{{url('home/assets/img/carousel/IMG_2660-2 copy.jpg')}}" />
    <img class="carousel-image"
      data-flickity-lazyload="https://images.unsplash.com/photo-1541250848049-b4f7141dca3f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" />
    <img class="carousel-image"
      data-flickity-lazyload="https://images.unsplash.com/photo-1501005727661-77318235fcac?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=751&q=80" />
    <img class="carousel-image"
      data-flickity-lazyload="https://images.unsplash.com/photo-1512141633501-8eb74114f568?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1868&q=80" />
    <img class="carousel-image"
      data-flickity-lazyload="{{url('home/assets/img/carousel/IMG_2753.jpg')}}" />
    <img class="carousel-image"
      data-flickity-lazyload="{{url('home/assets/img/carousel/IMG_2869-2.jpg')}}" />
    <img class="carousel-image"
      data-flickity-lazyload="{{url('home/assets/img/carousel/IMG_2892.jpg')}}" />
    <img class="carousel-image"
      data-flickity-lazyload="{{url('home/assets/img/carousel/IMG_2992.jpg')}}" />
    <img class="carousel-image"
      data-flickity-lazyload="https://images.unsplash.com/photo-1488600779855-8151a2b2e4eb?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80"
      data-flickity-lazyload="{{url('home/assets/img/carousel/IMG_3002.jpg')}}" />
    <img class="carousel-image"
      data-flickity-lazyload="https://images.unsplash.com/photo-1490379936993-c343b8780fbd?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" />
    <img class="carousel-image"
      data-flickity-lazyload="https://images.unsplash.com/photo-1528164907495-0c9a3bf6af37?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" />
</div></div>
    <div class="section-features">
        <h1 data-aos="fade-up" class="container text-title-section">Fitur</h1>
        <div class="container features-wrap">
            <div class="features-content">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4" data-aos="fade-up">
                        <div data-aos="fade-up" class="card-content"><img data-aos="fade-up" src="{{url('home/assets/img/ic_desainPremium.svg')}}">
                            <div data-aos="fade-up" class="text-content">
                                <h1 data-aos="fade-up">Desain Premium</h1>
                                <p data-aos="fade-up">Kami menyediakan desain yang premium untuk memenuhi kebutuhan undangan kamu.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4" data-aos="fade-up">
                        <div data-aos="fade-up" class="card-content"><img data-aos="fade-up" src="{{url('home/assets/img/ic_multimedia.svg')}}">
                            <div data-aos="fade-up" class="text-content">
                                <h1 data-aos="fade-up">Perlengkapan Multimedia</h1>
                                <p data-aos="fade-up">Kamu dapat menambahkan foto, video preweeding dan musik kesukaan mu sebagai musik pengiring.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4" data-aos="fade-up">
                        <div data-aos="fade-up" class="card-content"><img data-aos="fade-up" src="{{url('home/assets/img/ic_countdown.svg')}}">
                            <div data-aos="fade-up" class="text-content">
                                <h1 data-aos="fade-up">Hitung Mundur</h1>
                                <p data-aos="fade-up">Para tamu undangan akan dapat melihat hitungan mundur dari acara pernikahan kamu.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4" data-aos="fade-up">
                        <div data-aos="fade-up" class="card-content"><img data-aos="fade-up" src="{{url('home/assets/img/ic_maps.svg')}}">
                            <div data-aos="fade-up" class="text-content">
                                <h1 data-aos="fade-up">Petunjuk arah</h1>
                                <p data-aos="fade-up">Berikan petunjuk arah kepada para tamu undangan agar semua dapat hadir di acara pernikahan.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4" data-aos="fade-up">
                        <div data-aos="fade-up" class="card-content"><img data-aos="fade-up" src="{{url('home/assets/img/ic_guestbook.svg')}}">
                            <div data-aos="fade-up" class="text-content">
                                <h1 data-aos="fade-up">Buku Tamu Digital</h1>
                                <p data-aos="fade-up">Dengan adanya buku tamu digital kamu akan mendapatkan kemudahan dalam melakukan pendataan tamu undangan.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4" data-aos="fade-up">
                        <div class="card-content"><img src="{{url('home/assets/img/ic_gift.svg')}}">
                            <div class="text-content">
                                <h1>Ucapan dan Donasi</h1>
                                <p>Para tamu undangan dapat mengirimkan ucapan dan donasi dalam bentuk e money.<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="desain" class="section-desain">
        <h1 data-aos="fade-up" class="container text-title-section" style="margin-bottom: 0px;">Desain</h1>
        <div class="container features-wrap" style="padding-top: 0px;">
            <div class="features-content">
                <div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4" data-aos="fade-up" data-aos-duration="900" style="margin-top: 0px;">
                            <div>
                                <div class="wrapper-themes">
                                    <div class="btn-wrap-themes"><a class="btn btn-primary view-themes d-none" role="button" id="btn-themes1" href="https://silent-cake-8261.bss.design/"><i class="fa fa-eye mr-2"></i>View themes</a></div><img id="themes1" src="{{url('home/assets/img/desain_sample.png')}}" loading="lazy">
                                    <div class="top-left-content-desain"><img src="{{url('home/assets/img/ic_diamond_cover.svg')}}" style="width: 18px;height: 14px;"><span style="color: rgb(255,255,255);">Rekomendasi</span></div>
                                </div>
                                <div class="desain-content">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-7 col-lg-7 col-xl-8">
                                            <p>Charles and Diana Themes<br></p>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4">
                                            <div class="likes-wrap"><img src="{{url('home/assets/img/ic_eyee_black.svg')}}" style="width: 24px;height: 24px;"><span>48</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4" data-aos="fade-down" data-aos-duration="900" style="margin-top: 0px;">
                            <div>
                                <div class="wrapper-themes">
                                    <div class="btn-wrap-themes"><a class="btn btn-primary view-themes d-none" role="button" id="btn-themes2" href="https://green-bread-6481.bss.design/"><i class="fa fa-eye mr-2"></i>View themes</a></div><img id="themes2" src="{{url('home/assets/img/design%20black%20diamonds.png')}}" loading="lazy">
                                    <div class="top-left-content-desain"><img src="{{url('home/assets/img/ic_diamond_cover.svg')}}" style="width: 18px;height: 14px;"><span style="color: rgb(255,255,255);">Rekomendasi</span></div>
                                </div>
                                <div class="desain-content">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-7 col-lg-7 col-xl-8">
                                            <p>Charles and Diana Themes<br></p>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4">
                                            <div class="likes-wrap"><img src="{{url('home/assets/img/ic_eyee_black.svg')}}" style="width: 24px;height: 24px;"><span>48</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tombol tampilkan semua -->
                    <!-- <div class="row" style="margin-top: 57px;">
                        <div class="col d-flex align-items-center justify-content-center"><a data-bs-hover-animate="rubberBand" class="btn btn-design" href="desain.html" target="_top">Tampilkan semua</a></div>
                    </div> -->

                    <!-- end tombol tampilkan semua -->
                </div>
            </div>
        </div>
    </div>
    <div id="harga" class="section-harga">
        <h1 data-aos="fade-up" class="container text-title-section">Harga</h1>
        <div class="container">
            <div data-aos="zoom-in" class="product-wrapper">
                <h1 style="font-size: 14px;line-height: 21px;"><img class="mr-3" src="{{url('home/assets/img/diamond_ring_ic.png')}}">Paket Basic</h1>
                <div class="line"></div>
                <div>
                    <div class="product-content ml-5 mt-4"><span>Desain Premium<br></span></div>
                    <div class="product-content ml-5 mt-4"><span>Galeri Photo atau video<br></span></div>
                    <div class="product-content ml-5 mt-4"><span>Database tamu<br></span></div>
                    <div class="product-content ml-5 mt-4"><span>Buku tamu Digital / RSVP<br></span></div>
                    <div class="product-content ml-5 mt-4"><span>Ucapan dan gift e-money<br></span></div>
                    <div class="product-content ml-5 mt-4"><span>Integrasi peta lokasi<br></span></div>
                </div>
                <p class="text-left ml-5 mt-4" style="font-size: 14px;color: #C4C4C4;font-style: normal;text-decoration:line-through;">Rp 450 ribu</p>
                <h1 class="text-left ml-5" style="font-family: Poppins, sans-serif;font-size: 30px;font-weight: 700;">Rp. 200 ribu</h1><a data-bs-hover-animate="pulse" class="btn btn-undangan" href="https://api.whatsapp.com/send?phone=6285157336832&amp;text=Hallo%20%2C%20saya%20ingin%20mengetahui%20lebih%20detail%20mengenai%20nikah-in">Buat Undangan</a>
            </div>
        </div>
    </div>
    <div id="caraorder" class="section-order">
        <h1 data-aos="fade-up" class="container text-title-section">Cara Order</h1>
        <div class="order-wrapper container">
            <div class="content text-center"><img data-aos="slide-up" src="{{url('home/assets/img/Group%20213.svg')}}">
                <p data-aos="slide-up" class="mt-3">Pilih Desain</p>
            </div>
            <div class="content text-center"><img data-aos="slide-up" src="{{url('home/assets/img/ic_buatsekarang.svg')}}">
                <p data-aos="slide-up" class="mt-3">Buat Undangan</p>
            </div>
            <div class="content text-center"><img data-aos="slide-up" src="{{url('home/assets/img/ic_data.svg')}}">
                <p data-aos="slide-up" class="mt-3">Mengisi Data</p>
            </div>
            <div class="content text-center"><img data-aos="fade-up" src="{{url('home/assets/img/ic_pembayaran.svg')}}">
                <p data-aos="fade-up" class="mt-3">Pembayaran</p>
            </div>
        </div>
    </div>
    <div id="tentang" style="padding-top: 100px;">
        <h1 data-aos="fade-up" class="container text-title-section">Tentang</h1>
        <div class="container">
            <div class="container-xl about-wrap" style="margin-left: 0px;">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-6" data-aos="fade-up" data-aos-duration="900" style="padding: 0px;">
                        <div class="image-about"><img class="img-kecil" src="{{url('home/assets/img/foto-aboutus.png')}}" loading="lazy"><img class="img-besar" src="{{url('home/assets/img/Rectangle%2082.png')}}" loading="lazy"></div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-6 about-text" data-aos="fade-down" data-aos-duration="900">
                        <div>
                            <h1>Nikah-in</h1>
                            <p>Nikah-in merupakan sebuah platform yang bergerak dalam bidang pelayanan pembuatan undangan digital berbasis website. Nikah-in memudahakan calon pengantin mempublikasi informasi pernikahan kepada calon tamu undangan dengan efektif dan efisien karena dikemas dalam bentuk link website dan dapat disebar ke berbagai aplikasi pesan(messanging app).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 800px;background: #fbf4ed;">
        <h1 class="text-promosi">Sebarkan kabar bahagia</h1>
        <h1 class="text-promosi">bersama kami</h1>
    </div>
    <div class="footer-msg d-flex justify-content-center align-items-center">
        <div data-aos="zoom-in-up" class="footer-msg-form">
            <h4>Kirim pesan kepada kami</h4>
            <form><input class="form-control" type="text" name="nama" placeholder="Nama kamu"><input class="form-control" type="text" name="email" placeholder="E-mail kamu"><input class="form-control" type="text" name="subjek" placeholder="subjek"><textarea class="form-control" name="pesan" placeholder="pesan" rows="6"></textarea>
                <div class="d-flex justify-content-end"><button class="btn btn-primary btn-pesan" data-bs-hover-animate="pulse" type="button">Kirim Pesan</button></div>
            </form>
        </div>
    </div>
@endsection
