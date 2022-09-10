@extends('layouts.login')
@section('title','login')
@section('content')


    <div class="col-lg-6 col-12 p-0">
        <div class="card rounded-0 mb-0 px-2">
            <div class="card-header pb-1">
                <div class="card-title">
                    <h4 class="mb-0">Hello Lottery Team</h4>
                </div>
            </div>
            <p class="px-2">Welcome, please login to your account.</p>
            <div class="card-content">
                <div class="card-body pt-1 mb-3">
                    <form method="POST" action="{{ route('admin.attempt.login') }}">
                        @csrf
                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                            <input id="email" type="email" name="email"  for="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control"  placeholder="Email" >
                            <div class="form-control-position">
                                <i class="feather icon-user"></i>
                            </div>
                            <label for="user-name">Email</label>
                        </fieldset>

                        <fieldset class="form-label-group position-relative has-icon-left">
                            <input type="password"  class="form-control " id="user-password" name="password" required autocomplete="current-password" placeholder="Password">
                            <div class="form-control-position">
                                <i class="feather icon-lock"></i>
                            </div>
                            <label for="password">Password</label>
                        </fieldset>
                        <div class="form-group d-flex justify-content-between align-items-center">

                            <div class="text-right">

                                {{--                                                            <a class="card-link" href="">--}}
                                {{--                                                                Forgot Your Password?--}}
                                {{--                                                            </a>--}}
                            </div>
                        </div>
                        <div class="btn-group">
                            <a href="{{route('password.request')}}" class="btn btn-info">Forget Password</a>
                            <button type="submit" class="btn btn-primary float-right btn-inline">Login to Dashboard</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
