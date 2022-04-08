<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('uikit/css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('uikit/css/notyf.min.css')}}">
    <link rel="stylesheet" href="{{ asset('uikit/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.uikit.min.css">
    @livewireStyles
</head>
<body>
    <body>
        <div uk-sticky="" class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed" style="position: fixed; top: 0px; width: 938px;">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar="" class="uk-navbar">
                    <div class="uk-navbar-left">
                        <a id="sidebar_toggle" class="uk-navbar-toggle uk-navbar-toggle-icon uk-icon" uk-navbar-toggle-icon=""><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg></a>
                        <a href="#" class="uk-navbar-item uk-logo">
                            UI Admin
                        </a>
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="#" aria-expanded="false">Èrik &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;" class="uk-dropdown">
                                   <ul class="uk-nav uk-navbar-dropdown-nav">
                                       <li class="uk-nav-header">Options</li>
                                       <li><a href="#">Edit Profile</a></li>
                                       <li class="uk-nav-header">Actions</li>
                                       <li><a href="#">Lock</a></li>
                                       <li><a href="#">Logout</a></li>
                                   </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div><div class="uk-sticky-placeholder" style="height: 80px; margin: 0px;"></div>
        <div id="sidebar" class="tm-sidebar-left uk-background-default" style="display: block; transform: translate(0px); opacity: 1;">
            <center>
                <div class="user">
                    <img id="avatar" class="uk-border-circle" src="{{asset('uikit/images/avatar.jpg')}}" width="100">
                    <div class="uk-margin-top"></div>
                    <div id="name" class="uk-text-truncate">Èrik Campobadal</div>
                    <div id="email" class="uk-text-truncate">ConsoleTVs@gmail.com</div>
                    <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success">Online</span>
                </div>
                <br>
            </center>
            <ul class="uk-nav uk-nav-default">
                <livewire:menu>
            </ul>
        </div>
        <div class="content-padder content-background" style="margin-left: 300px;">
            <div class="uk-section-small uk-section-default header">
                <div class="uk-container uk-container-large">
                    <h1><span class="ion-speedometer"></span> Dashboard</h1>
                    <p>
                        Welcome back, Èrik Campobadal
                    </p>
                    <ul class="uk-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><span href="">Dashboard</span></li>
                    </ul>
                </div>
            </div>
            <div class="uk-section-small">
                <div class="uk-container uk-container-large">
                        @stack('actionbar');
                    <main>
                        {{$slot}}
                    </main>
                </div>
            </div>
        </div>
		<!-- Load More Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="{{ asset('uikit/js/uikit.min.js') }}"></script>
        <script src="{{ asset('uikit/js/notyf.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" integrity="sha256-UGwvyUFH6Qqn0PSyQVw4q3vIX0wV1miKTracNJzAWPc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
        <script src="{{ asset('uikit/js/script.js') }}"></script>

        <script src="{{ asset('uikit/js/notification.js') }}"></script>
        <script src="{{ asset('uikit/js/charts.js') }}"></script>
        <script src="{{ asset('uikit/js/status.js') }}"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.uikit.min.js"></script>
        <script>
            $('.ajaxTable').each(function(){
                let uri = $(this).attr('data-uri');
                console.log(uri);
                if(uri == undefined || uri == ''){
                    console.error('Ajax Table data-uri is not set up correctly!');
                    return false;
                }
                $(this).DataTable({
                    serverSide: true,
                    processing:true,
                    ajax:{
                        url: uri,
                        method: 'POST'
                    }
                })
            })
        </script>
		@livewireScripts
</body>
</html>