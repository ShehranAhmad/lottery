@extends('layouts.frontend')
@section('title','Blogs')


@section('content')



    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{asset('frontend/assets/images/01.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">Blogs</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#0">Blog</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- blog-grid-section start -->
    <section class="blog-section section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="row m-bottom-not-30">
                        @foreach($blogs as $blog)

                            <div class="col-lg-4 col-md-6">
                                <div class="post-item m-bottom-30">
                                    <div class="thumb">
                                        <img src="{{asset($blog->image)}}" alt="image">
                                    </div>
                                    <div class="content">
                                        <h3 class="post-title"><a href="#0">{{substr_replace($blog->description, "...", 40)}}</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="#0"><span>BY</span>{{$blog->written_by}}</a></li>
                                        </ul>
                                        <p>{{substr_replace($blog->description, "...", 70)}}</p>
                                        <a href="#0" class="blog-btn">read more</a>
                                    </div>
                                </div>
                            </div><!-- post-item end -->

                        @endforeach

                        <div class="col-lg-4 col-md-6">
                            <div class="post-item m-bottom-30">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/blog/m2.jpg')}}" alt="image">
                                </div>
                                <div class="content">
                                    <h3 class="post-title"><a href="#0">Try Playing Lotto Online and Check How...</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#0"><span>BY</span>David Millward</a></li>
                                        <li><a href="#0"><i class="fa fa-calendar"></i>11 June 2018</a></li>
                                    </ul>
                                    <p>Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable...</p>
                                    <a href="#0" class="blog-btn">read more</a>
                                </div>
                            </div>
                        </div><!-- post-item end -->
                        <div class="col-lg-4 col-md-6">
                            <div class="post-item m-bottom-30">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/blog/m1.jpg')}}" alt="image">
                                </div>
                                <div class="content">
                                    <h3 class="post-title"><a href="#0">Learn the Advantages of Playing Lottery...</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#0"><span>BY</span>David Millward</a></li>
                                        <li><a href="#0"><i class="fa fa-calendar"></i>11 June 2018</a></li>
                                    </ul>
                                    <p>Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable...</p>
                                    <a href="#0" class="blog-btn">read more</a>
                                </div>
                            </div>
                        </div><!-- post-item end -->
                        <div class="col-lg-4 col-md-6">
                            <div class="post-item m-bottom-30">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/blog/m3.jpg')}}" alt="image">
                                </div>
                                <div class="content">
                                    <h3 class="post-title"><a href="#0">Do You Know How to Become a Lotto....</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#0"><span>BY</span>David Millward</a></li>
                                        <li><a href="#0"><i class="fa fa-calendar"></i>11 June 2018</a></li>
                                    </ul>
                                    <p>Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable...</p>
                                    <a href="#0" class="blog-btn">read more</a>
                                </div>
                            </div>
                        </div><!-- post-item end -->
                        <div class="col-lg-4 col-md-6">
                            <div class="post-item m-bottom-30">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/blog/m4.jpg')}}" alt="image">
                                </div>
                                <div class="content">
                                    <h3 class="post-title"><a href="#0">All-time highest lottery winnings</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#0"><span>BY</span>David Millward</a></li>
                                        <li><a href="#0"><i class="fa fa-calendar"></i>11 June 2018</a></li>
                                    </ul>
                                    <p>Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable...</p>
                                    <a href="#0" class="blog-btn">read more</a>
                                </div>
                            </div>
                        </div><!-- post-item end -->
                        <div class="col-lg-4 col-md-6">
                            <div class="post-item m-bottom-30">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/blog/m3.jpg')}}" alt="image">
                                </div>
                                <div class="content">
                                    <h3 class="post-title"><a href="#0">Do You Know How to Become a Lotto....</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#0"><span>BY</span>David Millward</a></li>
                                        <li><a href="#0"><i class="fa fa-calendar"></i>11 June 2018</a></li>
                                    </ul>
                                    <p>Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable...</p>
                                    <a href="#0" class="blog-btn">read more</a>
                                </div>
                            </div>
                        </div><!-- post-item end -->
                        <div class="col-lg-4 col-md-6">
                            <div class="post-item m-bottom-30">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/blog/m5.jpg')}}" alt="image">
                                </div>
                                <div class="content">
                                    <h3 class="post-title"><a href="#0">A few tips on how to win the lotto online</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#0"><span>BY</span>David Millward</a></li>
                                        <li><a href="#0"><i class="fa fa-calendar"></i>11 June 2018</a></li>
                                    </ul>
                                    <p>Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable...</p>
                                    <a href="#0" class="blog-btn">read more</a>
                                </div>
                            </div>
                        </div><!-- post-item end -->
                        <div class="col-lg-4 col-md-6">
                            <div class="post-item m-bottom-30">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/blog/m6.jpg')}}" alt="image">
                                </div>
                                <div class="content">
                                    <h3 class="post-title"><a href="#0">What to avoid when you win the lotto</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#0"><span>BY</span>David Millward</a></li>
                                        <li><a href="#0"><i class="fa fa-calendar"></i>11 June 2018</a></li>
                                    </ul>
                                    <p>Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable...</p>
                                    <a href="#0" class="blog-btn">read more</a>
                                </div>
                            </div>
                        </div><!-- post-item end -->
                        <div class="col-lg-4 col-md-6">
                            <div class="post-item m-bottom-30">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/blog/m5.jpg')}}" alt="image">
                                </div>
                                <div class="content">
                                    <h3 class="post-title"><a href="#0">A few tips on how to win the lotto online</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#0"><span>BY</span>David Millward</a></li>
                                        <li><a href="#0"><i class="fa fa-calendar"></i>11 June 2018</a></li>
                                    </ul>
                                    <p>Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable...</p>
                                    <a href="#0" class="blog-btn">read more</a>
                                </div>
                            </div>
                        </div><!-- post-item end -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <nav class="d-pagination" aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item previous"><a href="#"><i class="fa fa-chevron-left"></i>prev</a></li>
                                    <li class="page-item active"><a href="#">1</a></li>
                                    <li class="page-item"><a href="#">2</a></li>
                                    <li class="page-item"><a href="#">3</a></li>
                                    <li class="page-item next"><a href="#">next<i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-grid-section end -->


@endsection
