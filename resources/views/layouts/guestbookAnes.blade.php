<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Yohanes &amp; Nahomi</title>
    <meta name="description" content="Yohanes &amp; Nahomi Wedding">
    <link rel="icon" type="image/png" sizes="500x500" href="{{url('aness/assets/img/icon.png')}}">
    <link rel="stylesheet" href="{{url('aness/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Andika">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Beth+Ellen">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Damion">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Homemade+Apple">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Meddon">
    <link rel="stylesheet" href="{{url('aness/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="{{url('aness/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('aness/assets/css/styles.compiled.css')}}">
    <link rel="stylesheet" href="{{url('aness/assets/scss/styles.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7YLNT1MN0T"></script>
</head>

<body style="background: rgb(246,236,226);">
    <div class="text-center container p-5 wrapper-guest">
        <h1 style="font-family: 'Josefin Sans', sans-serif;">Guest Book</h1>
        <div class="mt-5">
        <form action="{{route('anesStore')}}" method="post">
            @csrf 
                <div class="form-group"><label style="font-family: 'Josefin Sans', sans-serif;">Nama</label><input class="form-control" type="text"></div>
                <div class="form-group"><label style="font-family: 'Josefin Sans', sans-serif;">No_Telepon</label><input class="form-control" type="text"></div>
                <div class="form-group"><label style="font-family: 'Josefin Sans', sans-serif;">Alamat</label><input class="form-control" type="text"></div>
                <div class="form-group"><label style="font-family: 'Josefin Sans', sans-serif;">Kerabat</label><select class="form-control" style="font-family: 'Josefin Sans', sans-serif;"><option value="12" selected="">Keluarga Pengantin Lelaki</option><option value="13">Keluarga Pengantin Wanita</option></select></div>
                <button
                    class="btn btn-primary" type="button">Send</button>
            </form>
        </div>
    </div>
    <script src="{{url('aness/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('aness/assets/js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="{{url('aness/assets/js/countdown.js')}}"></script>
    <script src="{{url('aness/assets/js/scrolling.js')}}"></script>
    <script src="{{url('aness/assets/js/scrollchangecolor.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script>
</body>

</html>