@extends('layouts.frontend')
@section('title','Lottery - '.$blog->title)
@section('meta')
    <meta name="title" content="{{ $blog->meta_title ?? '' }}" />
    <meta name="keywords" content="{{$blog->meta_keywords ?? '' }}" />
    <meta name="description" content="{{$blog->meta_description ?? '' }}" />
@endsection
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
                                <li class="breadcrumb-item"><a href="{{route('blogs')}}">Blogs</a></li>
                                <li class="breadcrumb-item"><a href="#0">Blog</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- blog-details-section start -->
    <section class="blog-details-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 ">
                    <div class="blog-details-wrapper">
                        <div class="thumb">
                            <img src="{{asset($blog->image)}}" alt="">
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li><a href="#0"><span>BY</span>{{$blog->written_by}}</a></li>

                            </ul>
                           <p>{!! $blog->description !!}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-section end -->


@endsection
