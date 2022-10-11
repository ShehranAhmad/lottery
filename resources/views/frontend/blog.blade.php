@extends('layouts.frontend')
@section('title','Lottery - Blogs')
@section('meta')
    <meta name="keywords" content="{{$setting['blog_meta_tag'] ?? '' }}" />
    <meta name="title" content="{{ $setting['blog_title'] ?? '' }}" />
    <meta name="description" content="{{$setting['blog_meta_description'] ?? '' }}" />
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
                                        <img src="{{asset($blog->image)}}" style="height: 210px" alt="image">
                                    </div>
                                    <div class="content" style="height: 313px">
                                        <h5 class="post-title" style="min-height: 60px"><a href="{{route('blog_detail',$blog->slug)}}">{{substr_replace($blog->title, "...", 47)}}</a></h5>
                                        <ul class="post-meta">
                                            <li><a href="#0"><span>BY</span>{{$blog->written_by}}</a></li>
                                        </ul>
                                        @php
                                            $sm=strip_tags($blog->description);
                                            $desc=substr_replace($sm, "...", 110);
                                        @endphp
                                        <p style="font-size: 15px !important;">{!! $desc !!}</p>
                                        <a href="{{route('blog_detail',$blog->slug)}}" class="blog-btn">read more</a>
                                    </div>
                                </div>
                            </div><!-- post-item end -->
                        @endforeach
                    </div>
                    <div class="row justify-content-center mt-4">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-grid-section end -->


@endsection
