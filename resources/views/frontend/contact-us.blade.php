@extends('frontend.layouts.main')
@section('main-container')


    <!-- Start  skills Banner Section -->
    <section class="banner contact-banner">
        <h2 class="banner-title">CONTACT US</h2>
        <nav aria-label="breadcrumb">
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol> -->
        </nav>
    </section>
    <!-- Start skills Banner Section -->
    <!-- Start  Banner Section -->
    <section class="contact-body body-section">
        <div class="container">
            <div style="text-align: center" class="row">
                {{-- <div class="col-md-4 sidebar">
                    <div class="menu--links">
                        <div class="menu__content">
                            <p><a href="#"><span><i class="fas fa-bars"></i></span>Services / Web Design</a></p>
                            <p><a href="web-app.html"><span><i class="fas fa-angle-double-right"></i></span>Dynamic Web
                        Solutions</a></p>
                        <p><a href="custom-software-dev.html"><span><i class="fas fa-angle-double-right"></i></span>Custom web
                    design</a>
                </p>
                <p><a href="web-app.html"><span><i class="fas fa-angle-double-right"></i></span>Web Application</a>
            </p>
            <p><a href="web-redesign.html"><span><i class="fas fa-angle-double-right"></i></span>Website
        Re-design</a></p>
        <p><a href="website-maintanance.html"><span><i class="fas fa-angle-double-right"></i></span>Website
    Mantainence</a></p>
    <p><a href="website-maintanance.html"><span><i class="fas fa-angle-double-right"></i></span>Our Design
Process</a></p>
<p><a href="recent-dev.html"><span><i class="fas fa-angle-double-right"></i></span>Recent Development
Site</a></p>
</div>
</div>

<div class="menu--links">
<div class="menu__content">
<p><a href="#"><span><i class="fas fa-bars"></i></span>Services</a></p>
<p><a href="web-design.html"><span><i class="fas fa-angle-double-right"></i></span>Web design</a></p>
<p><a href="web-app.html"><span><i class="fas fa-angle-double-right"></i></span>Web development</a>
</p>
<p><a href="mobile-app-dev.html"><span><i class="fas fa-angle-double-right"></i></span>Mobile App
development</a></p>
<p><a href="mobile-web-ux-ui.html"><span><i class="fas fa-angle-double-right"></i></span>Mobile &amp; web app
design</a></p>
<p><a href="custom-software-dev.html"><span><i class="fas fa-angle-double-right"></i></span>custom software
development</a></p>
<p><a href="web-app.html"><span><i class="fas fa-angle-double-right"></i></span>Desktop App
development</a></p>
<p><a href="ecommerce-woocommerce.html"><span><i class="fas fa-angle-double-right"></i></span>E-Commerce &amp;
Woo-Commerce development</a></p>
<p><a href="graphics-design.html"><span><i class="fas fa-angle-double-right"></i></span>graphics design</a>
</p>
<p><a href="wordpress-theme-dev.html"><span><i class="fas fa-angle-double-right"></i></span>theme
development(wordpress)</a></p>
<p><a href="business-package.html"><span><i class="fas fa-angle-double-right"></i></span>startup business
package(wordpress)</a></p>
</div>
</div>
</div> --}}
                <div class="col-md-12">
                    <ul  style="display:block;" class="nav nav-tabs m-auto"    id="myTab" role="tablist">
                        <li  class="nav-item">
                            <a class="nav-link active" id="head-office-tab" data-toggle="tab" href="#head-office" role="tab"
                                aria-controls="head-office" aria-selected="true">Our Office</a>
                 
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="head-office" role="tabpanel"
                            aria-labelledby="head-office-tab">
                            <div class="pt-4 pb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="">
                                            <h5 class="text-center font-weight-bold">Address</h5>
                                            <div class="title-div pb-4">
                                                <span class="bottom-icon"><i
                                                        class="fas fa-arrow-alt-circle-left"></i><span
                                                        class="p-1"></span><i
                                                        class="fas fa-arrow-alt-circle-right"></i></span>
                                            </div>
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-location-arrow"></i> {{$sitesetting->address}} </li>
                                                <li><i class="fas fa-map-marker"></i>{{$sitesetting->city}}</li>
                                            </ul>
                                        </div>
                                        <div class="">
                                            <h5 class="text-center font-weight-bold">Office Hours & Visits</h5>
                                            <div class="title-div pb-4">
                                                <span class="bottom-icon"><i
                                                        class="fas fa-arrow-alt-circle-left"></i><span
                                                        class="p-1"></span><i
                                                        class="fas fa-arrow-alt-circle-right"></i></span>
                                            </div>
                                            <div class="pb-4 text-center">
                                                <h5>Saturday - Thursday
                                                    <br>
                                                    10.00 am to 6.00 pm
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h5 class="text-center font-weight-bold">Contact</h5>
                                            <div class="title-div pb-4">
                                                <span class="bottom-icon"><i
                                                        class="fas fa-arrow-alt-circle-left"></i><span
                                                        class="p-1"></span><i
                                                        class="fas fa-arrow-alt-circle-right"></i></span>
                                            </div>
                                            <div>
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-phone-square-alt"></i> {{ $sitesetting->telephone }}</li>
                                                    <li><a style="color:#fe5e2f;" href="{{ $sitesetting->facebook_url }}"><i class="fab fa-facebook"></i >Coders Point</li></a>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="text-center">GET IN TOUCH</h5>
                                        @include('frontend.flash-message')
                                        <form action="{{ route('frontend.customer.message.store') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" required name="full_name" class="form-control" id="name" aria-describedby="name"
                                                    placeholder="Your Full Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" required name="email" class="form-control" id="email" placeholder="Your Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required name="phone_number" class="form-control" id="phoneNumber"
                                                    placeholder="Your Phone Number">
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="text" required name="address" class="form-control" id=""
                                                    placeholder="Your Address">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" required class="w-100" id="message" cols="30"
                                                    rows="10" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </div>
                                </div>


                         


                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start  Banner Section -->

@endsection
