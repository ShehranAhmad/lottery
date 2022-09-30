@extends('layouts.frontend')
@section('title','Contact Us')

@section('content')


    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">contact us</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active">contact us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->


    <!-- contact-section start -->
    <section class="contact-section pt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper">
                        <div class="contact-area d-flex">
                                <div class="contact-form-area">
                                    <form class="contact-form" id="inquiry" method="post" action="{{route('inquiry_submit')}}">
                                        @csrf
                                        <div class="form-grp">
                                            <input type="text" required name="name" id="contact_name" placeholder="Full Name">
                                        </div>
                                        <div class="form-grp">
                                            <input type="email" name="email" required id="contact_email" placeholder="Email Address">
                                        </div>
                                        <div class="form-grp">
                                            <input type="tel" name="phone" required id="contact_phone" placeholder="Phone No">
                                        </div>
                                        <div class="form-grp">
                                            <textarea name="message" required id="contact_message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-grp">
                                            <input class="submit-btn" id="submit-inquiry" type="submit" value="sent message">
                                        </div>
                                    </form>
                                </div>
                            <div class="address-area has_bg_image" data-background="{{asset('frontend/assets/images/contact-mg.jpg')}}">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

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
    <script>
        $(document).ready(function () {
            let $contactForm = $("#inquiry");
            $contactForm.validate({
                rules: {
                    'name': {
                        required: true,
                    },
                    'email': {
                        required: true,
                        email: true,
                    },
                    'phone':{
                        required: true,
                        minlength: 8,
                    },
                    'message':{
                        required: true,
                    },

                },
                messages: {
                    'name': {
                        required: 'This Field is Required',
                    },
                    'email': {
                        required: 'This Field is Required',
                        email: 'Please Enter Valid Email Address',
                    },
                    'phone':{
                        required: 'This Field is Required',
                        minlength: 'Please Enter valid phone number',
                    },
                    'message':{
                        required: 'This Field is Required',
                    },

                },
            });

            $('#submit-inquiry').click(function (e){
                e.preventDefault();
                if($contactForm.valid()){
                    $.ajax({
                        type: "POST",
                        data: $contactForm.serialize(),
                        url: '{{route('inquiry_submit')}}',
                        success: function (data) {
                            toastr.success(data.message);
                            $('#contact_name').val('');
                            $('#contact_email').val('');
                            $('#contact_phone').val('');
                            $('#contact_message').val('');
                        },
                        error: function (response) {
                            toastr.success(response.error);
                        }
                    });
                }
            })
        });

    </script>
@endsection
