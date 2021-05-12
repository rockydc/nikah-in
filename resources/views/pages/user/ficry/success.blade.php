@extends('layouts.user.ficry.success')
@section('content-success')

<div class="container">
        <nav class="text-center mb-5">
        <img class="mr-2" src="{{url('home/assets/img/Nikahin.jpg')}}" style="width: 32px;height: 32px;">Nikah-in</a>
        </nav>    
<div class="d-flex justify-content-center"> 
<lottie-player class="align-self-center rounded" style="width:245px; height:245px;" src="{{url('
rsvp.json')}}"  loop  autoplay></lottie-player>
</div>

        <div class="d-flex justify-content-center align-items-center flex-column">
            <p style="font-size:25px;font-weight:700; font-familiy:montserrat,sans-serif;">Yeay ! Terimakasih telah mengisi Buku Tamu</p>
            <p>Tetap Patuhi Protokol Kesehatan !</p> 

            <a class="btn btn-buka" style="" href="{{route('ficry')}}">Home</a>     
        </div>
    </div>
    
@endsection