<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Areion Productions | Wedding & Event Planner</title>
    <link rel="shortcut icon" href="{{url('assets/img/favicon.png')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Didact+Gothic&amp;family=Playfair+Display:ital@0;1&amp;display=swap">
    <link rel="stylesheet" href="{{ url('assets/css/plugins.css') }}"/>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}"/>
</head>
<body>
<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"> <span></span> </div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="{{url('/')}}"> <img src="{{url('/assets/img/logo.png')}}" class="logo-img" alt=""> </a>
            <!-- <a class="logo" href="index.html"> <h2>Florya</h2> </a> -->
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
{{--                <li class="nav-item dropdown"> <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Home <i class="ti-angle-down"></i></a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a href="index.html" class="dropdown-item"><span>Slider</span></a></li>--}}
{{--                        <li><a href="index2.html" class="dropdown-item"><span>Video</span></a></li>--}}
{{--                        <li><a href="index3.html" class="dropdown-item"><span>Parallax Image</span></a></li>--}}
{{--                        <li><a href="index4.html" class="dropdown-item active"><span>Slideshow</span></a></li>--}}
{{--                        <li><a href="onepage.html" class="dropdown-item"><span>Onepage</span></a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/service')}}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/portfolio')}}">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
