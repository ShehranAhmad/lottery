@extends('layouts.frontend')
@section('title','Home')
@section('css')
    <meta http-equiv="refresh" content="150">
@endsection

@section('content')


    <!-- online-ticket-section start -->
    <section class="online-ticket-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">{{$setting['home_banner_heading'] ?? ''}}</h2>
                        <p>{!! $setting['home_banner_description'] ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- online-ticket-section end -->



    <!-- lottery-timer-section start -->
    <section class="lottery-timer-section" style="background-color: #2C67BB">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5">
                    <div class="timer-content">
                        <h3 class="title">{{$setting['home_timer_heading'] ?? ''}}</h3>
                        <p>{!! $setting['home_timer_description'] ?? '' !!}</p>
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


    <!-- lottery-result-section start -->
    <section class="lottery-result-section section-padding has_bg_image" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">Latest Lottery Bazar Results</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="lottery-winning-num-part">
                        <div class="lottery-winning-num-table">
                            <div class="row">
                                <div class="col-md-6"><h3 class="block-title">lottery winning numbers</h3></div>
                                <div class="col-md-6 text-right pr-5">
                                    <h4 class="block-title">नेक्स्ट ड्रा टाइम <br> {{\Carbon\Carbon::parse($lottery_data->time??'08:30')->addMinutes(30)->format('h:i a')}}</h4>
                                </div>
                            </div>

                            <div class="lottery-winning-table">
                                <table class="border-table home">
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
                                            <th class="">{{ date('h:i a' , strtotime($lottery_data->time??'08:30')) }}</th>
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
                                            <td><span class="">{{$lottery_data->raja_rani ?? 0}}</span></td>
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
                                            <td><span class="">{{$lottery_data->main_star ?? 0}}</span></td>
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
                                            <td><span class="">{{$lottery_data->super_fast ?? 0}}</span></td>
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
                                            <td><span class="">{{$lottery_data->chetak_fast  ?? 0}}</span></td>
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
                                            <td><span class="">{{$lottery_data->sangam_fast ?? 0}}</span></td>
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
                                            <td><span class="">{{$lottery_data->rajshri_special ?? 0}}</span></td>
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
                                            <td><span class="">{{$lottery_data->raj_rani ?? 0}}</span></td>
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
                                            <td><span class="">{{$lottery_data->gold ?? 0}}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 text-center mt-4">
                    <a href="{{route('results')}}" class="cmn-btn">see all result</a>
                </div>
            </div>
        </div>
    </section>
    <!-- lottery-result-section end -->



    <!-- online-ticket-section start -->
    <section class="online-ticket-section section-padding" style="background-color: #2C67BB">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header ">
                    <p>{!! $setting['home_article_description'] ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- online-ticket-section end -->

@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script>
            $(document).ready(function() {
                setTimeout(function (){
                    window.location.href
                },500000)
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
@endsection
