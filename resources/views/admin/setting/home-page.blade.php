@extends('layouts.admin')
@section('title','Home Page Setting')
@section('heading','Home Page Setting Control')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

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
                                    <h4 class="card-title">Home Banner Section</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Banner Heading</label>
                                                <input type="text" value="{{$setting['home_banner_heading'] ?? ''}}" name="home_banner_heading" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Banner Description</label>
                                                <textarea class="form-control" name="home_banner_description"  >{!! $setting['home_banner_description'] ?? '' !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Home Timer Section</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Timer Section Heading</label>
                                                <input type="text" value="{{$setting['home_timer_heading'] ?? ''}}" name="home_timer_heading" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Timer Section Description</label>
                                                <textarea class="form-control" name="home_timer_description"  >{!! $setting['home_timer_description'] ?? '' !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Home Page Article Section</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Phone</label>
                                                <textarea type="text" class="form-control" id="description_article" name="home_article_description">{!! $setting['home_article_description'] ?? '' !!}</textarea>
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
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $(document).ready(function () {
                $('#description_article').summernote();
            });
        });
    </script>
@endsection

