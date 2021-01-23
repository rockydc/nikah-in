@extends('layouts.home.preview')

@section('content')


<section>
@forelse( $items as $item)
        <div class="mt-5 container"> 
        <a  href="{{url('/desain')}}"><i class="fa fa-chevron-left mr-4"></i>Desain Undangan</a>
            <div class="row mt-5">
           
                <div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
                    <div class="d-flex justify-content-center"><img src="{{Storage::url($item->imgprev)}}" style="max-width:100%;"></div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-6 col-xl-6">
                    <div class="content-detail container">
                        <p style="font-size: 18px;font-weight: 600;">{{$item->nama}}</p>
                        <div class="wrapper-feature">
                            <p class="text-left">{{$item->deskripsi}}</p>

                        </div>
                        <div class="button-wrapper mt-5"><a class="btn btn-detail-theme" href="https://api.whatsapp.com/send?phone=6285157336832&text=halo%20nikah-in%20saya%20ingin%20membuat%20website%20seperti%20template%20{{$item->nama}}">Buat undangan</a><a target="_blank" class="btn btn-detail-theme" href="{{url('/desain/template')}}/{{$item->nama}}">Lihat Website</a></div>
                    </div>
                </div>
                @empty
                <div class="text-center">
                    data kosong
                </div>
            </div>
        </div>
        @endforelse
    </section>



    @endsection