@extends('layouts.admin')
@section('title','Setting')
@section('heading','Settings Control')


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
                                <h4 class="card-title">Home Section</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Favicon</label>
                                            <input type="file" class=" dropify dropify-event" id="fileChooser" name="favicon" data-default-file="{{ asset($setting['favicon'] ?? '')  }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Logo Dark</label>
                                            <input type="file" class=" dropify dropify-event" id="fileChooser" name="logo" data-default-file="{{ asset($setting['logo'] ?? '')  }}">
                                        </div>
                                    </div>
{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Logo Light</label>--}}
{{--                                            <input type="file" class=" dropify dropify-event" id="fileChooser" name="logo_footer" data-default-file="{{ asset($setting['logo_footer'] ?? '')  }}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Footer Section</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="bmd-label-floating">Phone</label>--}}
{{--                                            <input type="text" value="{{$setting['phone'] ?? ''}}" name="phone" class="form-control">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="text" value="{{$setting['email'] ?? ''}}" name="email" class="form-control">
                                        </div>
                                    </div>
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="bmd-label-floating">Address</label>--}}
{{--                                            <input type="text" value="{{$setting['address'] ?? ''}}" name="address" class="form-control">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Copyright</label>
                                            <input type="text" value="{{$setting['copyright'] ?? ''}}" name="copyright" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Social Links</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Facebook</label>
                                            <input type="text" value="{{$setting['facebook'] ?? ''}}" name="facebook" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Instagram</label>
                                            <input type="text" value="{{$setting['instagram'] ?? ''}}" name="instagram" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Twitter</label>
                                            <input type="text" value="{{$setting['twitter'] ?? ''}}" name="twitter" class="form-control">
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

