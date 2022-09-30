<div>

        <div class="footer-top has_bg_image" data-background="assets/images/dark-bg-four.jpg">
            <div class="footer-top-first">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-4 text-center text-sm-left">
                            <a href="{{url('/')}}" class="site-logo"><img src="{{asset($setting['logo']??'')}}" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top-second">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                            <div class="footer-widget widget-about">
                                <h3 class="widget-title">About LotteryBazar</h3>
                                <ul class="footer-list-menu">
                                    <li><a href="#0">About us</a></li>
                                    <li><a href="#0">How it Works</a></li>
                                    <li><a href="{{route('contact')}}">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                            <div class="footer-widget widget-links">
                                <h3 class="widget-title">Quick links</h3>
                                <ul class="footer-list-menu">
                                    <li><a href="{{route('blogs')}}">Blog</a></li>
                                    <li><a href="{{route('results')}}">Results</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget widget-subscribe">
                                <h3 class="widget-title">email newsletters</h3>
                                <div class="subscribe-part">
                                    <p>Subscribe now and receive weekly newsletter for latest draw and offer news and much more!</p>
                                    <form class="subscribe-form" id="newsletter">
                                        @csrf
                                        <input type="email" name="email" required id="news_email" placeholder="Email address">
                                        <input type="submit" id="newsletter-submit" value="subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom border-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-sm-7">
                        <div class="copy-right-text">
                            <p>© {{\Carbon\Carbon::now()->format('Y')}} <a href="{{route('index')}}">{{$setting['copyright']??''}}</a> - All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5">
                        <ul class="footer-social-links d-flex justify-content-end">
                            <li><a href="{{$setting['facebook'] ?? '#'}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$setting['twitter'] ?? '#'}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$setting['instagram'] ?? '#'}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

</div>
