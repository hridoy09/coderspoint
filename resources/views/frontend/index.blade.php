@extends('frontend.layouts.main')
@section('frontend_title')
{{ 'Home' }}
@endsection
@section('main-container')

<!-- Starts Carousel Section -->
<section class="crousel-section">
    <div class="container" style="max-width: 90%;">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset($banner->banner_image) }}" class="d-block w-100"
                        alt="{{ $banner->banner_title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <a class="btn btn-sm quota-btn " href="" role="button">Quote Now</a>
                        <a class="btn btn-sm quota-btn" href="#" role="button">See Package & Price</a>
                    </div>
                </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- End Carousel Section -->
<!-- Starts Feature Section -->
<!-- <section class="feature-section">
        <div class="container">
            <h3 align="center" style="color:#333">Our Services</h3>
         
            <div class="row">
                <div class="col-6 col-md-2  text-center  feature-div">
           
                    <img src="{{ asset('frontend') }}/img/feature_product/buy-now.png" style="height: 50px;width:auto"
                        class="img-fluid">
                    <p>Mobile Commerce</p>
                </div>
                <div class="col-6 col-md-2  text-center  feature-div">
                
                    <img src="{{ asset('frontend') }}/img/feature_product/globe-grid%20(1).png"
                        style="height: 50px;width:auto" class="img-fluid">
                    <p>Website Commerce</p>
                </div>
                <div class="col-6 col-md-2  text-center  feature-div">
               
                    <img src="{{ asset('frontend') }}/img/feature_product/conversion.png" style="height: 50px;width:auto"
                        class="img-fluid">
                    <p>Conversion Optimized</p>
                </div>
                <div class="col-6 col-md-2  text-center  feature-div">
                 
                    <img src="{{ asset('frontend') }}/img/feature_product/data-analytics.png"
                        style="height: 50px;width:auto" class="img-fluid">
                    <p>Search Engine Visibility</p>
                </div>
                <div class="col-6 col-md-2  text-center   feature-div">
                  
                    <img src="{{ asset('frontend') }}/img/feature_product/shopping-cart%20(1).png"
                        style="height: 50px;width:auto" class="img-fluid">
                    <p>Muiltiple eCommerce Platform Option</p>
                </div>
                <div class="col-6 col-md-2  text-center  feature-div">
            
                    <img src="{{ asset('frontend') }}/img/feature_product/social-media.png"
                        style="height: 50px;width:auto" class="img-fluid">
                    <p>Social Media</p>
                </div>
            </div>
        </div>
    </section> -->
<!-- End Feature Section -->
<!-- Starts Who We are Section -->
<section class="who-we-are">
    <div class="container">
        <div class="who-we-are-div">
            <h2 class="text-center font-weight-bold text-title" style="padding-bottom: 20px;color:#FE5C2C;font-family: cursive; "> What we are??</h2>
            <!-- <div class="title-div pb-4">
                                                                                <span class="bottom-icon"><i class="fas fa-angle-left"></i><i class="fas fa-angle-right"></i></span>
                                                                            </div>-->
            <p style="text-align: justify">“Coders Point” is an agency for Web, Interactive Design & Development. Motto:
                <b>”Your web Solution”</b>
                “Coders Point” involved in designing developing implementing and maintaining Business Application
                Software.
                “Coders Point” provides complete life cycle of software development services including system analysis,
                use case development, system architecture & design, system integration, UI/UX design, database design
                and administration, functional and system testing, quality assurance and project management</p>
        </div>
    </div>
</section>
<!-- End Who We are Section -->
<!-- Starts Counselling Section -->
<!-- <section class="Counselling-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('frontend') }}/img/feature_product/opening.gif" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 mr-auto">
                    <div class="counselling-form">
                        <div class="mb-3 text-center">
                            <h4>Any Query?</h4>
                        </div>

                        @include('frontend.flash-message')
                        
                        <form method="post" action="{{ route('frontend.customer.message.store') }}">
                            @csrf

                            <div class="form-row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group">
                                        <input type="text" name="full_name" class="form-control form-control-sm" id="ful-name"
                                            aria-describedby="ful-name" placeholder="Your Full Name" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="ful-name"><i
                                                    class="fas fa-user-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control form-control-sm" id="email"
                                            aria-describedby="email" placeholder="Email Address" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="email"><i
                                                    class="fas fa-envelope"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="input-group">
                                        <input type="text" name="phone_number" class="form-control form-control-sm" id="phone"
                                            aria-describedby="phone" placeholder="Phone" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phone"><i
                                                    class="fas fa-phone-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                               <div class="col-md-6 mb-1">
                                    <div class="input-group">
                                        <input type="text" name="address" class="form-control form-control-sm" id="address"
                                            aria-describedby="address" placeholder="Address" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="address"><i
                                                    class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                               
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                                            placeholder="Message" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mb-4">
                                <button class="btn btn-primary btn-submit" type="submit">Send Query </button>
                            </div>
                         
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- End Counselling Section -->
<!-- Starts Course Section -->
<!-- <section class="course-section">
        <div class="container">
            <h2 class="text-center text-title"> <img src="{{ asset('frontend') }}/img/feature_product/globe.png"
                    style="height: 30px;width: 30px" class="img-fluid"> Alif Tech International – Bringing IT
                Innovations </h2>
            <div class="title-div pb-4">
                <span class="bottom-icon"><i class="fas fa-arrow-alt-circle-left"></i><i
                        class="fas fa-arrow-alt-circle-right"></i></span>
            </div>
            <div class="course-des">
                <div>
                    <p>
                        We are developing astonishing individuality for our clients that people fall in love with. We
                        combine brilliantly designed interfaces with strictly tested code to build
                        master-piece for your business. We help to grow your business & help to take it to the next level.
                        Everything That we do for Our clients Happens
                    </p>
                </div>
            </div>
            <div class="row tabs mt-4">
                <div class=" col-sm-12 col-md-6 m-auto px-sm-0 mt-4">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="pills-web-tab" data-toggle="pill" href="#pills-web" role="tab"
                                aria-controls="pills-web" aria-selected="true">
                                <div class="text-center">
                                    <img src="{{ asset('frontend') }}/img/feature_product/programming.png"
                                        style="height: 50px;width:50px" class="img-fluid">
                                </div>
                                <p>Web Design & Development</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-mobile-tab" data-toggle="pill" href="#pills-mobile"
                                role="tab" aria-controls="pills-mobile" aria-selected="true">
                                <div class="text-center">
                                    <img src="{{ asset('frontend') }}/img/feature_product/android.png"
                                        style="height: 50px;width:50px" class="img-fluid">
                                </div>
                                <p>Mobile App Development</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-graphics-tab" data-toggle="pill" href="#pills-graphics"
                                role="tab" aria-controls="pills-graphics" aria-selected="true">
                                <div class="text-center">
                                    <img src="{{ asset('frontend') }}/img/feature_product/photoshop.png"
                                        style="height: 50px;width:50px" class="img-fluid">
                                </div>
                                <p>Graphics <br>Design</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-ux-ui-tab" data-toggle="pill" href="#pills-ux-ui"
                                role="tab" aria-controls="pills-ux-ui" aria-selected="true">
                                <div class="text-center">
                                    <img src="{{ asset('frontend') }}/img/feature_product/pen-tool.png"
                                        style="height: 50px;width:50px" class="img-fluid">
                                </div>
                                UI/UX <br>Design
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-seo-tab" data-toggle="pill" href="#pills-seo" role="tab"
                                aria-controls="pills-seo" aria-selected="true">
                                <div class="text-center">
                                    <img src="{{ asset('frontend') }}/img/feature_product/data-analytics.png"
                                        style="height: 50px;width:50px" class="img-fluid">
                                </div>
                                Search Engine Optimization (SEO)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-ecommerce-tab" data-toggle="pill" href="#pills-ecommerce"
                                role="tab" aria-controls="pills-ecommerce" aria-selected="true">
                                <div class="text-center">
                                    <img src="{{ asset('frontend') }}/img/feature_product/shopping-cart%20(1).png"
                                        style="height: 50px;width:50px" class="img-fluid">
                                </div>
                                E-commerce Development
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-desktop-tab" data-toggle="pill" href="#pills-desktop"
                                role="tab" aria-controls="pills-desktop" aria-selected="true">
                                <div class="text-center">
                                    <img src="{{ asset('frontend') }}/img/feature_product/code.png"
                                        style="height: 50px;width:50px" class="img-fluid">
                                </div>
                                Desktop App Development
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-wordpress-tab" data-toggle="pill" href="#pills-wordpress"
                                role="tab" aria-controls="pills-wordpress" aria-selected="true">
                                <div class="text-center">
                                    <img src="{{ asset('frontend') }}/img/feature_product/wordpress.png"
                                        style="height: 50px;width:50px" class="img-fluid">
                                </div>
                                Wordpress Development
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-erp-tab" data-toggle="pill" href="#pills-erp" role="tab"
                                aria-controls="pills-erp" aria-selected="true">
                                <div class="text-center">
                                    <img src="{{ asset('frontend') }}/img/feature_product/bar-chart.png"
                                        style="height: 50px;width:50px" class="img-fluid">
                                </div>
                                ERP <br> solution
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=" col-sm-12 col-md-6 m-auto px-sm-0">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show phils-des active" id="pills-web" role="tabpanel"
                            aria-labelledby="pills-web-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4>Web design & Development</h4>
                                    <p> We provide web design, development and custom solutions for any business or
                                        industry...
                                        <br>
                                        <a href="#">» Read More</a>
                                    </p>
                                    <div class="link mb-4">
                                        <a href="{{ route('frontend.project_details') }}">» Request Quote Now</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('frontend') }}/img/service/gd-1.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade phils-des" id="pills-mobile" role="tabpanel"
                            aria-labelledby="pills-mobile-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4>Mobile Apps Development (Android & IOS)</h4>
                                    <p> We design, develop and deploy mobile apps in multiple platforms such as Iphone and
                                        Android etc...
                                        <br>
                                        <a href="#">» Read More</a>
                                    </p>
                                    <div class="link">
                                        <a href="{{ route('frontend.project_details') }}">» Request Quote Now</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('frontend') }}/img/service/gd-2.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade phils-des" id="pills-graphics" role="tabpanel"
                            aria-labelledby="pills-graphics-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4>Graphics Design</h4>
                                    <p>We are Graphic Design Service company in Bangladesh providing Graphic consultancy for
                                        building a positive brand image which would not only reinforce loyalty amon
                                        existing consumers but will help attract new ones...
                                        <br>
                                        <a href="#">» Read More</a>
                                    </p>
                                    <div class="link">
                                        <a href="{{ route('frontend.project_details') }}">» Request Quote Now</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('frontend') }}/img/service/gd-3.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade phils-des" id="pills-ux-ui" role="tabpanel"
                            aria-labelledby="pills-ux-ui-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4>UX/UI Design</h4>
                                    <p>Our process begins with developing a comprehensive set of creative guidelines which
                                        set forth the design patterns, color palettes, fonts, layout structure, and
                                        other technical and aesthetic considerations for your project...
                                        <br>
                                        <a href="#">» Read More</a>
                                    </p>
                                    <div class="link">
                                        <a href="{{ route('frontend.project_details') }}">» Request Quote Now</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('frontend') }}/img/service/gd-4.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade phils-des" id="pills-seo" role="tabpanel"
                            aria-labelledby="pills-seo-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4>Search Engine Optimization (SEO)</h4>
                                    <p>Alif Tech International is the largest dedicated Search engine optimization (SEO)
                                        company
                                        in Bangladesh. We are focused on deliver the uppermost results and rankings...
                                        <br>
                                        <a href="#">» Read More</a>
                                    </p>
                                    <div class="link">
                                        <a href="{{ route('frontend.project_details') }}">» Request Quote Now</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('frontend') }}/img/service/gd-5.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade phils-des" id="pills-ecommerce" role="tabpanel"
                            aria-labelledby="pills-ecommerce-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4> eCommerce & WooCommerce Development</h4>
                                    <p>We build powerful and easy to use B2B and B2C e-commerce and WhooCommerce solutions
                                        and offer end to end consulting service...
                                        <br>
                                        <a href="#">» Read More</a>
                                    </p>
                                    <div class="link">
                                        <a href="{{ route('frontend.project_details') }}">» Request Quote Now</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('frontend') }}/img/service/gd-6.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade phils-des" id="pills-desktop" role="tabpanel"
                            aria-labelledby="pills-desktop-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4> Desktop Application Development</h4>
                                    <p>Our desktop application development services include cross-platform applications for
                                        Windows, Mac and Linux, and Javascript-based desktop applications...
                                        <br>
                                        <a href="#">» Read More</a>
                                    </p>
                                    <div class="link">
                                        <a href="{{ route('frontend.project_details') }}">» Request Quote Now</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('frontend') }}/img/service/gd-7.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade phils-des" id="pills-wordpress" role="tabpanel"
                            aria-labelledby="pills-wordpress-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4>Wordpress Development</h4>
                                    <p>We offer great looking responsive Web design and development service on the WordPress
                                        platform. we offer the great WordPress theme and plugin development
                                        Services...
                                        <br>
                                        <a href="#">» Read More</a>
                                    </p>
                                    <div class="link">
                                        <a href="{{ route('frontend.project_details') }}">» Request Quote Now</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('frontend') }}/img/service/gd-8.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade phils-des" id="pills-erp" role="tabpanel"
                            aria-labelledby="pills-erp-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4>Enterprise Resource Planning (ERP) Solution</h4>
                                    <p>Our ERP solutions are flexible enough to transform your business process and achieve
                                        potential of agile growth. We offer affordable implementation & future
                                        customization...
                                        <br>
                                        <a href="#">» Read More</a>
                                    </p>
                                    <div class="link">
                                        <a href="{{ route('frontend.project_details') }}">» Request Quote Now</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('frontend') }}/img/service/gd-9.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- End Course Section -->
<!-- Start typed Section -->
<section class="typed-section">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-12">
                <div class="header-text wow fadeInUp text-center">
                    <h3>Let us help you to <span class="typeOne"> </span></h3> 
                    <!-- <h3>that people <span class="typeTwo"> </span></h3> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End typed Section -->
<!-- Starts Innovative Section -->
<!-- <section class="innovative-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="font-weight-bold" align="center">Alif Tech International will transcend your business to the
                    next
                    level</h5>
                <p>We are a leading software development company that offers top-rated Software Development Services due
                    to our vast experience, team of skilled professionals, key business
                    insights, and a dedicated working process. We primarily develop applications which automates
                    everyday workflow of a company or organization and makes life easier.</p>
                <div class="row">
                    <div class="col-md-6 col-6">
                        <ul>
                            <li><a href="software_pages/accounting-software.html">Accounting Software</a></li>
                            <li><a href="software_pages/point-of-sale-software.html"> Point of Sales (POS)</a></li>
                            <li><a href="software_pages/school-management-software.html"> School Management ERP</a></li>
                            <li><a href="software_pages/restaurant-software.html"> Restaurant Management</a></li>
                            <li><a href="software_pages/tours-travel-software.html"> Ticket Management</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-6">
                        <ul>
                            <li><a href="software_pages/hotel-management-software.html"> Hotel Management </a></li>
                            <li><a href="software_pages/hospital-management-software.html"> Hospital Management</a></li>
                            <li><a href="software_pages/inventory-software.html"> Inventory Software</a></li>
                            <li><a href="software_pages/invoice-billing-software.html"> Invoice/Billing Software</a>
                            </li>
                            <li><a href="software_pages/medicine-shop-software.html"> Medicine Shop Management</a></li>
                        </ul>
                    </div>
                </div>
            </div>
     
        </div>
    </div>
</section> -->
<!-- End Innovative Section -->


<!-- Starts Client Section -->
<section class="client-section footer-client" style="background:white;">
    <div class="container">
        <h2 class="text-center font-weight-bold text-title"> Our Client </h2>
        <div class="title-div pb-4">
            <span class="bottom-icon"><i class="fas fa-arrow-alt-circle-left"></i><span class="p-1"></span><i
                    class="fas fa-arrow-alt-circle-right"></i></span>
        </div>
        <div class="owl-carousel client-carousel owl-theme">
          @foreach ($clients as $client )
          <div class="item"><img src="{{asset($client->client_logo)}}" class="img-fluid"
            alt="Partner Image"></div>
          @endforeach
           
         
    </div>
    </div>
</section>
<!-- End Client Section -->
@endsection
