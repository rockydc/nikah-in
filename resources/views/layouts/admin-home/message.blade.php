<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Nikah-in - Admin</title>
        
    <!-- Custom fonts for this template-->
    @include('includes.style')
</head>

<body id="page-top">
<div id="wrapper">
@include('includes.admin-home.sidebar')
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
        @include('includes.admin-home.navbar')
        @yield('content-message')
        </div>
    @include('includes.admin-home.footer')
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
    @include('includes.admin-home.script')
</body>

</html>