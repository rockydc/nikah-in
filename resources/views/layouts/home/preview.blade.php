<!DOCTYPE html>
<html>

<head>
 @include('includes.home.style')
</head>

<body>
@include('includes.home.navbar-back')


@yield('content')
    @include('includes.home.footer')
   @include('includes.home.script')
</body>

</html>