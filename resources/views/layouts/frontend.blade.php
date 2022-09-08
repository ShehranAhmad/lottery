<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lottery - @yield('title')</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/images/favicon.jpg')}}">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css')}}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- animate css link -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/lightcase.css')}}">
    <!-- slick css link -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
    <!-- swiper css link -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper.min.css')}}">
    <!-- flipclock css link -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flipclock.css')}}">
    <!-- jqvmap css link -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jqvmap.min.css')}}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <!-- dark version css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/dark-version.css')}}">
    <!-- responsive css link -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    @yield('css')
</head>
<body>

<!-- preloader start -->
<div id="preloader"></div>
<!-- preloader end -->


<div class="main-dark-version">
    <!--  header-section start  -->
    <header class="header-section">
        <x-header-component/>
    </header>
    <!--  header-section end  -->


    <!-- banner-section start -->
    <section class="banner-section">
        <div class="banner-elements-part has_bg_image" data-background="{{asset('frontend/assets/images/banner-net.png')}}">
            <div class="element-one"><img src="{{asset('frontend/assets/images/elements/box.png')}}" alt="vector-image"></div>

            <div class="element-two"><img src="{{asset('frontend/assets/images/elements/car.png')}}" alt="vector-image"></div>

            <div class="element-three"><img src="{{asset('frontend/assets/images/elements/chart.png')}}" alt="vector-image"></div>

            <div class="element-four"><img src="{{asset('frontend/assets/images/elements/dollars.png')}}" alt="vector-image"></div>

            <div class="element-five"><img src="{{asset('frontend/assets/images/elements/laptop.png')}}" alt="vector-image"></div>

            <div class="element-six"><img src="{{asset('frontend/assets/images/elements/money-2.png')}}" alt="vector-image"></div>

            <div class="element-seven"><img src="{{asset('frontend/assets/images/elements/person.png')}}" alt="vector-image"></div>

            <div class="element-eight"><img src="{{asset('frontend/assets/images/elements/person-2.png')}}" alt="vector-image"></div>

            <div class="element-nine"><img src="{{asset('frontend/assets/images/elements/power.png')}}" alt="vector-image"></div>
        </div>
        <div class="banner-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-content">
                            <h1 class="title">Take the chance to change your life</h1>
                            <p>Sorteo is online lottery platform inspired by few sorteo lover's fantasy of the ultimate lottery platfrom.</p>
                            <a href="#" class="cmn-btn">buy ticket now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

        @yield('content')

    <!-- footer-section start -->
    <footer class="footer-section">
        <x-footer-component/>
    </footer>
    <!-- footer-section end -->
</div>

<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-angle-up"></i>
    </span>
</div>
<!-- scroll-to-top end -->

<!-- jquery library js file -->
<script data-cfasync="false" src="{{asset('frontend/assets/cloudflare-static/email-decode.min.js')}}">

</script><script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
<!-- bootstrap js file -->
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<!-- flipclock js file -->
<script src="{{asset('frontend/assets/js/flipclock.min.js')}}"></script>
<!-- countdown js file -->
<script src="{{asset('frontend/assets/js/jquery.countdown.min.js')}}"></script>
<!-- slick js file -->
<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<!-- swiper js file -->
<script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
<!-- lightcase js file -->
<script src="{{asset('frontend/assets/js/lightcase.js')}}"></script>
<!-- wow js file -->
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<!-- vamp js files -->
<script src="{{asset('frontend/assets/js/jquery.vmap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.vmap.world.js')}}"></script>
<!-- main script js file -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
@yield('js')

</body>

</html>
