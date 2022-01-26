<!-- START PAGE SOURCE -->

@extends('frontend.layouts.main')
@section('main-container')

<section class="portfolio">
<div class="container">
        <h2 class="text-center font-weight-bold text-title  ">Portfolio</h2>
        <div class="title-div pb-4">
            <span class="bottom-icon"><i class="fas fa-arrow-alt-circle-left"></i><span class="p-1"></span><i
                    class="fas fa-arrow-alt-circle-right"></i></span>
        </div>
        <!-------------------------- Isotope Section ----------------------->
        <div id="filters">

            @foreach (App\Models\PortfolioCategory::all() as $category)
            <button class="btn btn-sm" active data-filter=".website" onclick="portfolioLoad({{ $category->id}}, '{{ $category->portfolio_category }}')">
                {{ $category->portfolio_category }}</button>
            @endforeach
        </div>
        <div id="parentItem" style="height: auto; display:flex; flex-wrap:wrap;">
            <!------------------------------- Website Development Section ------------------------>
            <!-- ===============================================================================-->
            {{--  <div class="element-item transition website col-md-4 featured " data-category="website">
                <a href="{{ asset('frontend') }}/img/SpinnerTech/Paikary.png" data-lightbox="example-set"
                    data-title="TimBass eCommerce Website">
                    <div class="imageBox">
                        <img src="{{ asset('frontend') }}/img/SpinnerTech/paikary_full.png" class="img-fluid"
                            alt="image">
                        <div class="imgText">
                            <h6 class="font-weight-bold">Multi Vendor eCommerce Website</h6>
                            <a href="https://paikary.com.bd/" target="_blank">https://paikary.com.bd/</a>
                        </div>
                    </div>
                </a>
            </div>  --}}
        </div>
            {{--  <div class="element-item transition website col-md-4 featured " data-category="website">
                    <a href="{{ asset('frontend') }}/img/SpinnerTech/gigclassifieds_logo.png"
            data-lightbox="example-set" data-title="TimBass eCommerce Website">
            <div class="imageBox">
                <img src="{{ asset('frontend') }}/img/SpinnerTech/gig.png" class="img-fluid" alt="image">
                <div class="imgText">
                    <h6 class="font-weight-bold">Multi Vendor eCommerce Website</h6>
                    <a href="http://gigclassified.spinnertechworld.com/"
                        target="_blank">http://gigclassified.spinnertechworld.com/</a>
                </div>
            </div>
            </a>
        </div>
        <div class="element-item transition website col-md-4 featured " data-category="website">
            <a href="{{ asset('frontend') }}/img/SpinnerTech/agroz_logo.png" data-lightbox="example-set"
                data-title="TimBass eCommerce Website">
                <div class="imageBox">
                    <img src="{{ asset('frontend') }}/img/SpinnerTech/agrooz.png" class="img-fluid" alt="image">
                    <div class="imgText">
                        <h6 class="font-weight-bold">Multi Vendor eCommerce Website</h6>
                        <a href="http://agrooz.com/" target="_blank">http://agrooz.com/</a>
                    </div>
                </div>
            </a>
        </div> --}}
        {{--

    <div class="element-item software col-md-4  featured" data-category="software">
                    <a href="{{ asset('frontend') }}/img/SpinnerTech/Sofia.png" data-lightbox="example-set"
        data-title="Cure Grocery Software">
        <div class="imageBox">
            <img src="{{ asset('frontend') }}/img/SpinnerTech/Sofia.png" class="img-fluid" alt="image">
            <div class="imgText">
                <h6 class="font-weight-bold">Homoeopathic POS Software</h6>
                <a href="https://sufiahomoeohall.com/" target="_blank">https://sufiahomoeohall.com/</a>
            </div>
        </div>
        </a>
    </div>
    <div class="element-item software col-md-4  featured" data-category="software">
        <a href="{{ asset('frontend') }}/img/SpinnerTech/aonmart_logo.png" data-lightbox="example-set"
            data-title="Cure Grocery Software">
            <div class="imageBox">
                <img src="{{ asset('frontend') }}/img/SpinnerTech/Aonmart.png" class="img-fluid" alt="image">
                <div class="imgText">
                    <h6 class="font-weight-bold">POS Software - Multi Store warehouse</h6>
                    <a href="http://aonmart.abaacorp.com/" target="_blank">http://aonmart.abaacorp.com/</a>
                </div>
            </div>
        </a>
    </div>
    <div class="element-item software col-md-4  featured" data-category="software">
        <a href="{{ asset('frontend') }}/img/SpinnerTech/Sofia.png" data-lightbox="example-set"
            data-title="Cure Grocery Software">
            <div class="imageBox">
                <img src="{{ asset('frontend') }}/img/SpinnerTech/crm.png" class="img-fluid" alt="image">
                <div class="imgText">
                    <h6 class="font-weight-bold">CRM Software</h6>
                    <a href="http://sfsecuritybd.com/login" target="_blank">http://sfsecuritybd.com/login</a>
                </div>
            </div>
        </a>
    </div> --}}

    <!------------------------------- Apps Section ------------------------>
    <!-- ================================================================-->
    {{--  <div class="element-item apps col-md-4 featured" data-category="apps">
                    <a href="{{ asset('frontend') }}/img/SpinnerTech/toletgo.jpg" data-lightbox="example-set"
    data-title="DoshApps Development">
    <div class="imageBox">
        <img src="{{ asset('frontend') }}/img/SpinnerTech/toletgo.jpg" class="img-fluid" alt="image">
        <div class="imgText">
            <h6 class="font-weight-bold">Rent App </h6>
            <a href="https://play.google.com/store/apps/details?id=dev.spinnertech.toletgo" target="_blank">Availble on
                the google play store</a>
        </div>
    </div>
    </a>
    </div>
    <div class="element-item apps col-md-4 featured" data-category="apps">
        <a href="{{ asset('frontend') }}/img/SpinnerTech/Oneshop.jpg" data-lightbox="example-set"
            data-title="DoshApps Development">
            <div class="imageBox">
                <img src="{{ asset('frontend') }}/img/SpinnerTech/Oneshop.jpg" class="img-fluid" alt="image">
                <div class="imgText">
                    <h6 class="font-weight-bold">Multi vendor App </h6>
                    <a href="https://play.google.com/store/apps/details?id=dev.spinnertech.oneshop"
                        target="_blank">Availble on the google play store</a>
                </div>
            </div>
        </a>
    </div>
    <div class="element-item apps col-md-4 featured" data-category="apps">
        <a href="{{ asset('frontend') }}/img/SpinnerTech/Food_App.png" data-lightbox="example-set"
            data-title="DoshApps Development">
            <div class="imageBox">
                <img src="{{ asset('frontend') }}/img/SpinnerTech/Food_App.png" class="img-fluid" alt="image">
                <div class="imgText">
                    <h6 class="font-weight-bold">Food App </h6>
                    <a href="https://play.google.com/store/apps/details?id=com.partnerFoodApp.app"
                        target="_blank">Availble on the google play store</a>
                </div>
            </div>
        </a>
    </div> --}}

    <!------------------------------- UX / UI Section ------------------------>
    <!-- ================================================================-->
    {{--  <div class="element-item ux-ui col-md-4 " data-category="ux-ui">
                    <a href="{{ asset('frontend') }}/img/portfolio/ux-ui/hd-express.png" data-lightbox="example-set"
    data-title="HD Express Logo Design">
    <div class="imageBox">
        <img src="{{ asset('frontend') }}/img/portfolio/ux-ui/hd-express.png" class="img-fluid" alt="image">
        <div class="imgText">
            <h6 class="font-weight-bold">HD Express Logo Design</h6>
            <a href="#" target="_blank"></a>
        </div>
    </div>
    </a>
    </div>
    <div class="element-item ux-ui col-md-4 " data-category="ux-ui">
        <a href="{{ asset('frontend') }}/img/portfolio/ux-ui/Doshapps.jpg" data-lightbox="example-set"
            data-title="DoshApp Apps Design">
            <div class="imageBox">
                <img src="{{ asset('frontend') }}/img/portfolio/ux-ui/Doshapps.jpg" class="img-fluid" alt="image">
                <div class="imgText">
                    <h6 class="font-weight-bold">DoshApp Apps Design</h6>
                    <a href="#" target="_blank"></a>
                </div>
            </div>
        </a>
    </div>
    <div class="element-item ux-ui col-md-4 featured " data-category="ux-ui">
        <a href="{{ asset('frontend') }}/img/portfolio/ux-ui/dinero-rd.jpg" data-lightbox="example-set"
            data-title="Dinero Apps Design">
            <div class="imageBox">
                <img src="{{ asset('frontend') }}/img/portfolio/ux-ui/dinero-rd.jpg" class="img-fluid" alt="image">
                <div class="imgText">
                    <h6 class="font-weight-bold">Dinero Apps Design</h6>
                    <a href="#" target="_blank"></a>
                </div>
            </div>
        </a>
    </div> --}}

    <!--------------------------- Video Animation Section -------------------->
    <!-- ================================================================-->
    {{--  <div class="element-item vdo-animation col-md-4 " data-category="vdo-animation">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/53_f4xvIssY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="element-item vdo-animation col-md-4 featured " data-category="vdo-animation">
        <iframe src="https://drive.google.com/file/d/1-gCsZS5qNkKrqAZrGXILAAHYsG4OnlOr/preview" width="100%"
            height="200"></iframe>
    </div>
    <div class="element-item vdo-animation col-md-4 featured " data-category="vdo-animation">
        <iframe src="https://drive.google.com/file/d/1-gCsZS5qNkKrqAZrGXILAAHYsG4OnlOr/preview" width="100%"
            height="200"></iframe>
    </div>
    <div class="element-item vdo-animation col-md-4 featured " data-category="vdo-animation">
        <iframe src="https://drive.google.com/file/d/1-gCsZS5qNkKrqAZrGXILAAHYsG4OnlOr/preview" width="100%"
            height="200"></iframe>
    </div>
    <div class="element-item vdo-animation col-md-4 featured " data-category="vdo-animation">
        <iframe src="https://drive.google.com/file/d/1-gCsZS5qNkKrqAZrGXILAAHYsG4OnlOr/preview" width="100%"
            height="200"></iframe>
    </div>
    </div>  --}}



</section>
{{--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  --}}
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $(document).ready(function(){
        portfolioLoad(2,"web");
    });
    function portfolioLoad(id, name) {
        var item = "";
        $.ajax({
            url: "/admin/portfolio/webshow/" + id,
            method: "get",
            success: function (data) {
                $('#parentItem').empty();
                if(name == "video"){
                    $.each(data, function (key, portfolio) {
                        console.log(portfolio);
                        item += `<div class="element-item vdo-animation col-md-4 " data-category="vdo-animation">
                        <iframe width="100%" height="200" src="`+ portfolio.web_link +`?autoplay=1&mute=1" ></iframe>
                        </div>`;
                    });
                } else{
                    $.each(data, function (key, portfolio) {
                        console.log(portfolio);
                        item += `<div class="element-item transition website col-md-4 featured " data-category="website">
                            <a href="http://127.0.0.1:8000/` + portfolio.portfolio_image + `" data-lightbox="example-set"
                                data-title="TimBass eCommerce Website">
                                <div class="imageBox" style="height: 170px;">
                                    <img src="http://127.0.0.1:8000/` + portfolio.portfolio_image + `" class="img-fluid"
                                        alt="image">
                                    <div class="imgText">
                                        <h6 class="font-weight-bold">` + portfolio.title + `</h6>
                                        <a href="` + portfolio.web_link + `" target="_blank">` + portfolio.web_link + `</a>
                                    </div>
                                </div>
                            </a>
                        </div>`;
                    });
                }
                $('#parentItem').html(item);
            }
        });
    }

</script>
<script type="text/javascript" charset="utf-8">
    $(function () {
        $.fn.loopedSlider.defaults.addPagination = true;
        $('#loopedSlider').loopedSlider();
    });

</script>
<!-- END PAGE SOURCE -->
@endsection
