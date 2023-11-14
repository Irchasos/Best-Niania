@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" />
            </div>
            <div class="col-md-6 bg-white p-5">
                <h3 class="pb-3">Login Form</h3>
                <div class="form-style">
                    <form method="POST" action="{{ route('login.custom') }}">
                        @csrf
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group pb-3">

                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group pb-3">

                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="pl-2 font-weight-bold">Remember Me</span>
                            </div>
                            <div>
{{--                                <a href="{{ route('password.request') }}">Forget Password?</a>--}}
                            </div>
                        </div>
                        <div class="pb-2">
                            <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Submit</button>
                        </div>
                    </form>
                    <div class="sideline">OR</div>
                    <div>
                        <button type="submit" class="btn btn-primary w-100 font-weight-bold mt-2">
                            <i class="fa fa-facebook" aria-hidden="true"></i> Login With Facebook
                        </button>
                    </div>
                    <div class="pt-4 text-center">
                        Get Members Benefit. <a href="{{ route('register-user') }}">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection