<!doctype html>
<html lang="en">

<head>
    @php
        $seo = App\Models\Siteseo::find(1);
        $sitesetting = App\Models\Sitesetting::find(1);

    @endphp
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="csrf_token" content="{{ csrf_token() }}">

    <meta name="author" content="{{ $seo->meta_author }}">
    <meta name="keywords" content="{{ $seo->meta_keyword }}">
    <meta name="robots" content="all">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&amp;family=Coda+Caption:wght@800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/dropdown.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.theme.default.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/solid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/lightbox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">

    @stack('css')
    <title>{{ $seo->meta_title }} -@yield('frontend_title')</title>
    <link rel="icon" type="img/icon" href="{{ asset('frontend') }}/img/favicon.png">
</head>

<body style="">
    <!-- Start Markup for Header Top-->
    <!-- <section class="header-top">
        <div class=" container" style="max-width: 90%;" >
            <div class="row pt-1 pb-1 m-0">
                <div class="d-flex flex-row bd-highlight mb-3">
                    <a href="{{ $sitesetting->facebook_url }}" target="_blank"><img src="{{ asset('frontend') }}/img/facebook.png" class="img-responsive" style="height:25px"></a>
                </div>
                <div class="d-flex flex-row bd-highlight mb-3">
                    <a href="{{ $sitesetting->youtube_url }}" target="_blank"><img src="{{ asset('frontend') }}/img/youtube.png" class="img-responsive" style="height:25px"></a>
                </div>
                <div class="d-flex flex-row bd-highlight mb-3">
                    {{-- col-md-4 d-inline d-md-block whatsapp --}}
                    <a href="{{ $sitesetting->linkedin_url }}" target="_blank"><img src="{{ asset('frontend') }}/img/linkedin.png" class="img-responsive" style="height:25px"></a>
                </div>
                <div class="d-flex flex-row bd-highlight mb-3">
                    <a href="{{ $sitesetting->twitter_url }}" target="_blank"><img src="{{ asset('frontend') }}/img/twitter.png" class="img-responsive" style="height:25px"></a>
                </div>
                {{-- <div class="col-md-4 text-center">
                    <p class="f-12"> We Create Client Demanding Web Software & Mobile Application For Start-up
                        & Enterprises </p>
                </div> --}}
                <div class="col-md-4">
                    <div class="d-inline float-right icon-top">
                        <a href="https://www.facebook.com/spinnertechbd/"><i class="fab fa-facebook"></i></a>
                            <a href="https://wa.me/8801312182660?text=Thanks%20for%20being%20with%20us.We%20provide%3A%20Website%2C%20Mobile%2C%20Desktop%20Application"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.linkedin.com/company/spinner-tech-bd/"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/channel/UCdq70t85q8YKUM_AvDKfUxA"><i class="fab fa-youtube"></i></a>
                        <a href="mailto:murtaja.self@gmail.com"><img
                                src="{{ asset('frontend') }}/img/feature_product/gmail.png"
                                style="height: 15px;width: 15px" class="img-fluid">info@coderspoint.dev</a>
                        <a href="tell:+8801781498128"><img
                                src="{{ asset('frontend') }}/img/feature_product/phone-call.png"
                                style="height: 15px;width: 15px" class="img-fluid"> +</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Markup for Header Top-->
    <!-- Start Markup for Header Bottom -->
    <section class="header-bottom sticky-top" id="header">
        <!-- Markup for Navbar-->
        <div class="navbar-main ">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="main_navbar">
                <div class="container" style="max-width: 90%;" >
                    <a class="navbar-brand" href="{{ route('frontend.index') }}">
                        <img src="{{ asset($sitesetting->logo) }}" alt="" class="rounded"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav ml-auto">
                            {{--  <li class="nav-item active">
                                <a class="nav-link" href="{{ route('frontend.index') }}">Home</a>
                                <!--home service product portfolio training contact us about us-->
                            </li>  --}}
                            @php
                                $categories = App\Models\Category::all();
                            @endphp

                             @foreach($categories as $category)

                                    <li class="nav-item dropdown">
                                        <a class="nav-link {{$category->subcategories->isEmpty() ? '' : 'dropdown-toggle' }}" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{$category->category_name}}
                                        </a>
                                         @if( ! $category->subcategories->isEmpty())
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                @foreach($category->subcategories as $subcategory)
                                                     <li>
                                                        <a class="dropdown-item" href="">{{ $subcategory->subcategory_name }}</a>

                                                    </li>
                                                 @endforeach
                                            </ul>
                                        @endif
                                    </li>

                            @endforeach

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('frontend.blog') }}">Our Blog</a>
                                <!--home service product portfolio training contact us about us-->
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('frontend.portfolio') }}">Portfolio</a>
                                <!--home service product portfolio training contact us about us-->
                            </li>
                             <li class="nav-item active">
                                <a class="nav-link" href="{{ route('frontend.videogellary') }}">Video Gellary</a>
                                <!--home service product portfolio training contact us about us-->
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('frontend.contact') }}">Contact Us</a>
                                <!--home service product portfolio training contact us about us-->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- End Header Bottom -->
