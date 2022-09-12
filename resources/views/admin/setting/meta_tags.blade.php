@extends('layouts.admin')
@section('title','Meta Tags')

@section('heading','Setting Meta Tags')


@section('content')


    <section>
        <div class="row">
            <div class="col-sm-12">
                <form method="post" action="{{ route('admin.setting.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Home Page</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Home Page Title</label>
                                                <input type="text" name="home_title" class="form-control" value="{{$setting['home_title'] ?? ''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Home Page Meta Tags ( Please write meta tags with comma separated )</label>
                                                <input type="text" name="home_meta_tag" class="form-control" value="{{$setting['home_meta_tag'] ?? ''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Home Page Meta Description</label>

                                                <textarea name="home_meta_description" class="form-control" cols="12" rows="3">{!! $setting['home_meta_description'] ?? '' !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">

                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Blog's List Page</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Blog's Page Title</label>
                                                <input type="text" name="blog_title" class="form-control" value="{{$setting['blog_title'] ?? ''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Blog's Page Meta Tags ( Please write meta tags with comma separated )</label>
                                                <input type="text" name="blog_meta_tag" class="form-control" value="{{$setting['blog_meta_tag'] ?? ''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Blog's Page Meta Description</label>
                                                <textarea name="blog_meta_description" class="form-control" cols="12" rows="3">{!! $setting['blog_meta_description'] ?? '' !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group pull-right mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{route('admin.dashboard')}}" class="btn btn-danger">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </section>



@endsection
