<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         // If you use .navbar with .smooth-scroll, use this code to avoid overlapping navigation to a header.

#test1::before,
#test2::before {
display: block;
content: " ";
margin-top: -65px;
height: 65px;
visibility: hidden;
}
    </style>
</head>
<body>
<!-- <nav class="navbar navbar-light navbar-expand" id="sidebar-wrapper">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler d-none" data-target="#"></button>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav sidebar-nav" id="sidebar-nav">
                <li class="nav-item sidebar-brand"><a class="nav-link active js-scroll-trigger" href="#page-top">Brand</a></li>
                <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="#page-top">Home</a></li>
                <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav> -->
@include('includes.anes.navbar')
<header class="d-flex masthead" style="background-image:url('bg-masthead.jpg');">
    <div class="container my-auto text-center">
        <h1 class="mb-1">Stylish Portfolio</h1>
        <h3 class="mb-5"><em>A Free Bootstrap Theme</em></h3><a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="#about">Find Out More</a>
        <div class="overlay"></div>
    </div>
</header>
<section id="about" class="content-section bg-light">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
                <p class="lead mb-5"><span>This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at </span><a href="https://unsplash.com/">Unsplash</a><span>!</span></p><a class="btn btn-dark btn-xl js-scroll-trigger" role="button" href="#services">What We Offer</a></div>
        </div>
    </div>
</section>
<section id="services" class="content-section bg-primary text-white text-center">
    <div class="container">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Services</h3>
            <h2 class="mb-5">What We Offer</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0"><span class="mx-auto service-icon rounded-circle mb-3"><i class="icon-screen-smartphone"></i></span>
                <h4><strong>Responsive</strong></h4>
                <p class="mb-0 text-faded">Looks great on any screen size!</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0"><span class="mx-auto service-icon rounded-circle mb-3"><i class="icon-pencil"></i></span>
                <h4><strong>Redesigned</strong></h4>
                <p class="mb-0 text-faded">Freshly redesigned for Bootstrap 4.</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0"><span class="mx-auto service-icon rounded-circle mb-3"><i class="icon-like"></i></span>
                <h4><strong>Favorited</strong></h4>
                <p class="mb-0 text-faded"><span>Milions of users </span><i class="fa fa-heart"></i><span> us!</span></p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0"><span class="mx-auto service-icon rounded-circle mb-3"><i class="icon-mustache"></i></span>
                <h4><strong>Question</strong></h4>
                <p class="mb-0 text-faded">I mustache you a question...</p>
            </div>
        </div>
    </div>
</section>
<script src="{{url('aness/assets/js/scrolling.js')}}"></script>
</body>
</html>