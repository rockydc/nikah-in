@extends('layouts.desain')

@section('title')
Nikah-in - Desain
@endsection
@section('content')
<div class="container desain-wrapper" style="padding-top: 80px;font-size: 36px;">
        <h1>Desain undangan</h1>
        <div style="margin-bottom: 500px;">
            <div class="row" style="margin-top: 70px;">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 pt-4">
                    <div>
                        <div class="view-wrapper">
                            <div id="btn-view1" class="btn-view-desain-wrap" style="padding: 0px;margin-top: -23px;"><a id="view-before" class="btn d-none" href="#"><img class="mr-3" src="{{url('home/assets/img/eye_ic.png')}}" style="width: 17px;height: 12px;">View themes</a></div><img id="img-content1" class="img-desain" src="{{url('home/assets/img/desain_sample.png')}}">
                        </div>
                        <div style="margin-top: 45px;">
                            <p style="font-weight: 700;">Tema Vintage</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus urna eget erat tincidunt placerat.<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 pt-4">
                    <div class="desain-wrapper">
                        <div class="view-wrapper">
                            <div id="btn-view2" class="btn-view-desain-wrap" style="padding: 0px;margin-top: -23px;"><a id="view-before2" class="btn d-none" href="#"><img class="mr-3" src="{{url('home/assets/img/eye_ic.png')}}" style="width: 17px;height: 12px;">View themes</a></div><img id="img-content2" class="img-desain" src="{{url('home/assets/img/design%20black%20diamonds.png')}}">
                        </div>
                        <div style="margin-top: 45px;">
                            <p style="font-weight: 700;">Tema Vintage</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus urna eget erat tincidunt placerat.<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection