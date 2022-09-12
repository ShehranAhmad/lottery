@extends('layouts.login')
@section('title','forget password')
@section('content')


    <div class="col-lg-6 col-12 p-0">
        <div class="card rounded-0 mb-0 px-2">
            <div class="card-header pb-1">
                <div class="card-title">
                    <h4 class="mb-0">Hello Lottery Team</h4>
                </div>
            </div>
            <p class="px-2">Forgot your password? No problem. Just let us know your email address.</p>
            <div class="card-content">
                <div class="card-body pt-1 mb-3">

                    <form action="{{ route('password.reset.email') }}" method="post" id="form">
                        @csrf
                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                            <input type="email" name="email" class="form-control" required placeholder=" Email">
                            <div class="form-control-position">
                                <i class="feather icon-user"></i>
                            </div>
                            <label for="user-name">Email</label>
                        </fieldset>

                        <div class="btn-group">
                            <a href="{{route('admin.index.login')}}" class="btn btn-info">Login</a>
                            <button type="submit" class="btn btn-primary float-right btn-inline">Email Password Reset Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection


