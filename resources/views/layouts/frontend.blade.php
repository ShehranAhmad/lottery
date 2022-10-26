<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset($setting['favicon'] ?? '')  }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/extensions/toastr.css') }}">
    @yield('css')
    <!-- Google tag (gtag.js) -->
    <meta name="google-site-verification" content="pjAgIkvbOwXBOhx3VcEAySED50mhqxvrT76-JGOSr_s" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-244034172-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-244034172-1');
    </script>
</head>
<body>

<!-- preloader start -->
{{--<div id="preloader"></div>--}}
<!-- preloader end -->
<div class="main-dark-version">
    <!--  header-section start  -->
    <header class="header-section">
        <x-header-component/>
    </header>
    <!--  header-section end  -->

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
<script src="{{ asset('admin/vendors/js/extensions/toastr.min.js') }}"></script>
<script>
    @if(session('message'))
    toastr.success("{{ session('message') }}");
    @elseif(session('status'))
    toastr.success("{{ session('status') }}");
    @elseif(session('error'))
    toastr.error("{{ session('error') }}");
    @endif
</script>
<script>
    $(document).ready(function (e) {
        {{--$('#newsletter-submit').click(function (e){--}}
        {{--    e.preventDefault();--}}
        {{--        $.ajax({--}}
        {{--            type: "POST",--}}
        {{--            data: $('#newsletter').serialize(),--}}
        {{--            url: '{{route('newsletter')}}',--}}
        {{--            success: function (data) {--}}
        {{--                toastr.success(data.message);--}}
        {{--                $('#news_email').val('');--}}
        {{--            },--}}
        {{--            error: function (response) {--}}
        {{--                toastr.error(response.responseJSON.message);--}}
        {{--            }--}}
        {{--        });--}}
        {{--})--}}
    })
</script>

@yield('js')

</body>

</html>
