<html dir="rtl" lang="fa">


<!-- Mirrored from dmoo.ir/demo/andrew/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2024 08:01:35 GMT -->
<head>
    <!-- Metas -->
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
    <meta content="HTML5 Template Andrew Multi-Purpose " name="keywords" />
    <meta content="Andrew - Multi-Purpose HTML5 Template" name="description" />
    <meta content="" name="author" />
    <!-- Title  -->
    <title>
        @yield('title')
    </title>
    <!-- Favicon -->
    <link href={{ asset('/imgs/favicon.ico') }} rel="shortcut icon" />
    <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100..900&amp;display=swap" rel="stylesheet">
    <!-- Plugins -->
    <link href={{ asset('/css/plugins.css') }} rel="stylesheet" />
    <!-- Core Style Css -->
    <link href={{ asset('/css/style.css') }} rel="stylesheet" />
</head>

<body>
    <!-- ==================== Start Loading ==================== -->
    {{-- <div class="loader-wrap">
        <svg preserveaspectratio="none" viewbox="0 0 1000 1000">
            <path d="M0,1005S175,995,500,995s500,5,500,5V0H0Z" id="svg">
            </path>
        </svg>
        <div class="loader-wrap-heading">
            <div dir="ltr" class="load-text">
                <span>
                    L
                </span>
                <span>
                    O
                </span>
                <span>
                    A
                </span>
                <span>
                    D
                </span>
                <span>
                    I
                </span>
                <span>
                    N
                </span>
                <span>
                    G
                </span>
            </div>
        </div>
    </div> --}}
    <!-- ==================== End Loading ==================== -->
    <div class="cursor">
    </div>
    <!-- ==================== Start progress-scroll-button ==================== -->
    {{-- <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" height="100%" viewbox="-1 -1 102 102" width="100%">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98">
            </path>
        </svg>
    </div> --}}
    <!-- ==================== End progress-scroll-button ==================== -->
    <!-- ==================== Start Navbar ==================== -->
    <nav class="navbar navbar-chang navbar-expand-lg">
        <div class="container position-re">
            <div class="row">
                <div class="col-lg-3 col-6 order1">
                    <div class="bord">
                        <!-- Logo -->
                        <a class="logo icon-img-120" href="{{ route('home.index') }}">
                            <img alt="logo" src={{ asset('/imgs/logo.png') }} />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order3">
                    <div class="bg">
                        <!-- navbar links -->
                        <div class="full-width">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home.index') }}">
                                        <span class="">
                                            خانه
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about.index') }}">
                                        <span class="">
                                            درباره
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('services.index') }}">
                                        <span class=" ">
                                            خدمات
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('portfolio.index') }}">
                                        <span class=" ">
                                            نمونه کارها
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact.index') }}">
                                        <span class=" ">
                                            تماس
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 order2">
                    <div class="bord d-flex justify-content-end">
                        <ul class="social d-flex rest">
                            <li>
                                <a href="{{ $myinfo->whatsapp_address }}" target=”_blank”>
                                    <i class="fab fa-whatsapp">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $myinfo->telegram_address }}" target=”_blank”>
                                    <i class="fab fa-telegram">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $myinfo->instagram_address }}" target=”_blank”>
                                    <i class="fab fa-instagram">
                                    </i>
                                </a>
                            </li>
                        </ul>
                        <button class="navbar-toggler" type="button">
                            <span class="icon-bar">
                                <i class="fas fa-bars">
                                </i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ==================== End Navbar ==================== -->

