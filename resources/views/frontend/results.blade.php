@extends('layouts.frontend')
@section('title','Results')


@section('content')


    <!-- lottery-result-section start -->
    <section class="lottery-result-section section-padding has_bg_image" data-background="{{asset('frontend/assets/images/dark-bg-one.jpg')}}">
        <div class="container results-html">
            @include('partial.all-results',['date'=> $date, "lottery_data" => $lottery_data])
        </div>
    </section>
    <!-- lottery-result-section end -->


@endsection

@section('js')

    <script>
        $(document).ready(function () {
            $(document).on('click','#search-results',function (e){
                e.preventDefault();
                    $.ajax({
                        type: "POST",
                        data: $('#result-form').serialize(),
                        url: '{{route('search_result')}}',
                        success: function (data) {
                            $('.results-html').html(data.html)
                        },
                        error: function (response) {
                            toastr.success(response.error);
                        }
                    });

            })
        })
    </script>

    @endsection
