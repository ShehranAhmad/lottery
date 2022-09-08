@extends('layouts.frontend')
@section('title','Home')


@section('content')

    <!-- lottery-timer-section start -->
    <section class="lottery-timer-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5">
                    <div class="timer-content">
                        <h3 class="title">Buy Lottery Tickets Online</h3>
                        <p>Buy lottery tickets online to the biggest lotteries in the world offering huge jackpot prizes that you can win when you play online lottery.</p>
                    </div>
                </div>
                <div class="col-xl-6 text-center">
                    <div class="timer-part">
                        <div class="clock">
                            <div id="Date"></div>
                            <ul>
                                <li id="hours"></li>
                                <li id="point">:</li>
                                <li id="min"></li>
                                <li id="point">:</li>
                                <li id="sec"></li>
                                <li id="day-night"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- lottery-timer-section end -->

    <!-- jackpot-section start -->
    <section class="jackpot-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Lottery Jackpots</h2>
                        <p>Choose from the Powerball, Mega Millions, Lotto or Lucky Day Lotto and try for a chance to win a big cash prize</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="jackpot-item text-center">
                        <img src="{{asset('frontend/assets/images/elements/jackpot-1.png')}}" alt="image">
                        <span class="amount">€161,557,581</span>
                        <h5 class="title">US Powerball</h5>
                        <p class="next-draw-time">Next Draw : <span id="remainTime1"></span></p>
                        <a href="#0" class="cmn-btn">play now!</a>
                    </div>
                </div><!-- jackpot-item end -->
                <div class="col-lg-4 col-md-6">
                    <div class="jackpot-item text-center">
                        <img src="{{asset('frontend/assets/images/elements/jackpot-2.png')}}" alt="image">
                        <span class="amount">€161,557,581</span>
                        <h5 class="title">Cancer Charity</h5>
                        <p class="next-draw-time">Next Draw : <span id="remainTime2"></span></p>
                        <a href="#0" class="cmn-btn">play now!</a>
                    </div>
                </div><!-- jackpot-item end -->
                <div class="col-lg-4 col-md-6">
                    <div class="jackpot-item text-center">
                        <img src="{{asset('frontend/assets/images/elements/jackpot-3.png')}}" alt="image">
                        <span class="amount">€161,557,581</span>
                        <h5 class="title">EuroJackpot</h5>
                        <p class="next-draw-time">Next Draw : <span id="remainTime3"></span></p>
                        <a href="#0" class="cmn-btn">play now!</a>
                    </div>
                </div><!-- jackpot-item end -->
            </div>
        </div>
    </section>
    <!-- jackpot-section start -->

    <!-- lottery-result-section start -->
    <section class="lottery-result-section section-padding has_bg_image" data-background="{{asset('frontend/assets/images/dark-bg-one.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h2 class="section-title">Latest Lottery Results</h2>
                        <p>Check your lotto results online, find all the lotto winning numbers and see if you won the latest lotto jackpots! </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="lottery-winning-num-part">
                        <div class="lottery-winning-num-table">
                            <h3 class="block-title">lottery winning numbers</h3>
                            <div class="lottery-winning-table">
                                <table class="border-table">
                                    <thead>
                                        <tr class="lottery-heading">
                                            <th class="" >नाम</th>
                                            <th class="" >सीरीज</th>
                                            <th class="" >जीत</th>
                                            <th class="" >0</th>
                                            <th class="" >1</th>
                                            <th class="" >2</th>
                                            <th class="" >3</th>
                                            <th class="" >4</th>
                                            <th class="" >5</th>
                                            <th class="" >6</th>
                                            <th class="" >7</th>
                                            <th class="" >8</th>
                                            <th class="" >9</th>
                                            <th class="">क्वांटिटी</th>
                                            <th class="">अमाउंट</th>
                                            <th class="">05:30 pm</th>
                                        </tr>
                                    </thead>
                                    <tbody class="lottery-record">
                                        <tr>
                                            <td><span class="">राजा रानी <br> Raja Rani</span></td>
                                            <td><span class="">A</span></td>
                                            <td><span class="">100</span></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><span class="">32</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="">मेन स्टार <br> Main Star</span></td>
                                            <td><span class="">B</span></td>
                                            <td><span class="">100</span></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><span class="">32</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="">सुपर फ़ास्ट <br> Super Fast</span></td>
                                            <td><span class="">C</span></td>
                                            <td><span class="">100</span></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><span class="">32</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="">चेतक फ़ास्ट <br> Chetak Fast</span></td>
                                            <td><span class="">D</span></td>
                                            <td><span class="">100</span></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><span class="">32</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="">संगम फ़ास्ट <br> Sangam Fast</span></td>
                                            <td><span class="">E</span></td>
                                            <td><span class="">100</span></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><span class="">32</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="">राजश्री स्पेशल <br> Rajshri Special</span></td>
                                            <td><span class="">F</span></td>
                                            <td><span class="">100</span></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><span class="">32</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="">राज रानी <br> Raj Rani</span></td>
                                            <td><span class="">G</span></td>
                                            <td><span class="">100</span></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><span class="">32</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="">गोल्ड<br> Gold</span></td>
                                            <td><span class="">H</span></td>
                                            <td><span class="">100</span></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><span class="">32</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 text-center">
                    <a href="#" class="text-btn">see all result</a>
                </div>
            </div>
        </div>
    </section>
    <!-- lottery-result-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section section-padding">
        <div class="choose-us-image"><img src="{{asset('frontend/assets/images/elements/mouse.png')}}" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Why Choose Us?</h2>
                        <p>Sorteo makes playing the world's largest lotteries easy and fun.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row mt-mb-15">
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/svg-icons/choose-us-icons/1.svg')}}" alt="icon"></div>
                                    <h4 class="title">Biggest lottery jackpots</h4>
                                </div>
                                <div class="back">
                                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/svg-icons/choose-us-icons/2.svg')}}" alt="icon"></div>
                                    <h4 class="title">No commission on Winnings</h4>
                                </div>
                                <div class="back">
                                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/svg-icons/choose-us-icons/3.svg')}}" alt="icon">
                                    </div>
                                    <h4 class="title"> Safe and Secure Playing</h4>
                                </div>
                                <div class="back">
                                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/svg-icons/choose-us-icons/4.svg')}}" alt="icon">
                                    </div>
                                    <h4 class="title">Instant payout system</h4>
                                </div>
                                <div class="back">
                                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/svg-icons/choose-us-icons/5.svg')}}" alt="icon">
                                    </div>
                                    <h4 class="title">Performance Bonuses</h4>
                                </div>
                                <div class="back">
                                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/svg-icons/choose-us-icons/6.svg')}}" alt="icon">
                                    </div>
                                    <h4 class="title">Dedicated Support</h4>
                                </div>
                                <div class="back">
                                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->

    <!-- work-steps-section strat -->
    <section class="work-steps-section section-padding border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h2 class="section-title">how it works</h2>
                        <p>Sorteo is the best way to play these exciting lotteries from anywhere in the world.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-steps-items-part d-flex">
                        <div class="line"><img src="{{asset('frontend/assets/images/elements/line.png')}}" alt="line-image"></div>
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img src="{{asset('frontend/assets/images/svg-icons/how-work-icons/1.svg')}}" alt="icon">
                                    <span class="count-num">01</span></div>
                                <h4 class="title">choose</h4>
                                <p>Choose your lottery & pick your numbers</p>
                            </div>
                        </div><!-- work-steps-item end -->
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img src="{{asset('frontend/assets/images/svg-icons/how-work-icons/2.svg')}}" alt="icon">
                                    <span class="count-num">02</span></div>
                                <h4 class="title">buy</h4>
                                <p>Complete your purchase</p>
                            </div>
                        </div><!-- work-steps-item end -->
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img src="{{asset('frontend/assets/images/svg-icons/how-work-icons/3.svg')}}" alt="icon">
                                    <span class="count-num">01</span></div>
                                <h4 class="title">win</h4>
                                <p>Start dreaming, you're almost there</p>
                            </div>
                        </div><!-- work-steps-item end -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="work-steps-thumb-part">
                        <img src="{{asset('frontend/assets/images/elements/step.png')}}" alt="work-step-image">
                        <a href="https://www.youtube.com/embed/aFYlAzQHnY4" data-rel="lightcase:myCollection" class="play-btn"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-steps-section strat -->



    <!-- affiliate-section start -->
    <section class="affiliate-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">Affiliate Programs</h2>
                        <p>Tell A Friend is our unique lottery friends promotion club that enables you to earn amazing bonus money rewards for inviting friends to play the world’s biggest jackpots!</p>
                    </div>
                </div>
            </div>
            <div class="row m-bottom-not-30">
                <div class="col-lg-3 col-sm-6">
                    <div class="affiliate-item text-center">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{asset('frontend/assets/images/svg-icons/affiliate-icons/1.svg')}}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">High Revenues</h4>
                            <p>We offer the best commissions in the market and provide proven.</p>
                        </div>
                    </div>
                </div><!-- affiliate-item end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="affiliate-item text-center">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{asset('frontend/assets/images/svg-icons/affiliate-icons/4.svg')}}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Reliable Payments</h4>
                            <p>Payments are made monthly via a variety of  payment methods.</p>
                        </div>
                    </div>
                </div><!-- affiliate-item end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="affiliate-item text-center">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{asset('frontend/assets/images/svg-icons/affiliate-icons/2.svg')}}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Unlimited Affiliates</h4>
                            <p>Thee is no limit  for your number of affiliates and no earning limit.</p>
                        </div>
                    </div>
                </div><!-- affiliate-item end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="affiliate-item text-center">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{asset('frontend/assets/images/svg-icons/affiliate-icons/3.svg')}}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Dedicated Support</h4>
                            <p>Our dedicated technical support team works with you to understand and identify</p>
                        </div>
                    </div>
                </div><!-- affiliate-item end -->
            </div>
        </div>
    </section>
    <!-- affiliate-section end -->





    <!-- contact-section start -->
    <section class="contact-section overflow-hidden has_bg_image" data-background="assets/images/dark-bg-three.jpg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title text-uppercase">Contact us</h2>
                        <p>If you have any questions or queries our helpful support team will be more than happy to assist.</p>
                    </div>
                    <div class="contact-form-area">
                        <form class="contact-form">
                            <div class="form-grp">
                                <input type="text" name="contact_name" id="contact_name" placeholder="Full Name">
                            </div>
                            <div class="form-grp">
                                <input type="email" name="contact_email" id="contact_email" placeholder="Email Address">
                            </div>
                            <div class="form-grp">
                                <input type="tel" name="contact_phone" id="contact_phone" placeholder="Phone No">
                            </div>
                            <div class="form-grp">
                                <textarea name="contact_message" id="contact_message" placeholder="Message"></textarea>
                            </div>
                            <div class="form-grp">
                                <input class="submit-btn" type="submit" value="sent message">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-thumb">
                        <img src="{{asset('frontend/assets/images/elements/contact.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

@endsection
@section('js')

    <script>
        // var clock = $('.clock').FlipClock(99000 * 24 * 3, {
        //     clockFace: 'HourlyCounter',
        //     countdown: false
        // });

            $(document).ready(function() {
            // Making 2 variable month and day
            var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
            var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

            // make single object
            var newDate = new Date();
            // make current time
            newDate.setDate(newDate.getDate());
            // setting date and time
            $('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

            setInterval( function() {
                // Create a newDate() object and extract the seconds of the current time on the visitor's
                var seconds = new Date().getSeconds();
                // Add a leading zero to seconds value
                $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
            },1000);

            setInterval( function() {
                // Create a newDate() object and extract the minutes of the current time on the visitor's
                var minutes = new Date().getMinutes();
                // Add a leading zero to the minutes value
                $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
            },1000);

            setInterval( function() {
                // Create a newDate() object and extract the hours of the current time on the visitor's
                var hours = new Date().getHours();
                    var dn="AM"
                    if (hours >= 12) {
                        dn="PM"
                        hours = hours - 12;
                    }
                    if (hours == 0) {
                        hours = 12;
                    }
                $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
                $("#day-night").html(dn);
            }, 1000);
        });
    </script>

{{--    <script>--}}
{{--        jQuery(document).ready(function() {--}}
{{--            jQuery('#vmap').vectorMap({--}}
{{--                map: 'world_en',--}}
{{--                color: '#434574',--}}
{{--                backgroundColor: '#f7fcff',--}}
{{--                hoverOpacity: 0.8,--}}
{{--                selectedColor: '#eaedef',--}}
{{--                scaleColors: ['#434574', '#434574'],--}}
{{--                normalizeFunction: 'polynomial'--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

@endsection
