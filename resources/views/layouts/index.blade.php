<!DOCTYPE html>
<html>

<head>
 @include('includes.home.style')
</head>

<body id="bodypage">
@include('includes.home.navbar')
@yield('content')
    @include('includes.home.footer')
   @include('includes.home.script')
</body>

</html>