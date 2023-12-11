@extends('layouts.auth')
@section('content')
    {{-- <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password"
                        class="form-control  {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="agreeTerms">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>
            @if (Route::has('password.request'))
                <p class="mb-1">
                    <a href="{{ route('password.request') }}">I forgot my password</a>
                </p>
            @endif
            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
 --}}



    <div class="containerlogin">
       
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
							
                            <div class="w-100">
                                <h2>Droplogix</h2>
                                <h4 class="mb-4">Login</h4>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a>
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                        </div>
                        <form action="#" class="signin-form">
                            <div class="form-group mb-3">
                                <label class="label" for="name">Email</label>
                                <input type="email" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Password" required="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                    In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                        <input type="checkbox" checked="">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="text-center">Not a member? <a data-toggle="tab" href="#signup" class="active">Sign Up</a>
                        </p>
                    </div>
					<div class="img" style="background:#000">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .bg-primary {
            background: #e3b04b !important;
        }

        .containerlogin {
            width: 808px;
        }

        .ftco-section {
            padding: 7em 0;
        }

        .ftco-no-pt {
            padding-top: 0;
        }

        .ftco-no-pb {
            padding-bottom: 0;
        }

        .heading-section {
            font-size: 28px;
            color: #000;
        }

        .img {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .wrap {
            width: 100%;
            overflow: hidden;
            background: #fff;
            border-radius: 5px;
            -webkit-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
            box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
        }

        .img,
        .login-wrap {
            width: 50%;
        }

        @media (max-width: 991.98px) {

            .img,
            .login-wrap {
                width: 100%;
            }
        }

        @media (max-width: 767.98px) {
            .wrap .img {
                height: 250px;
            }
        }

        .login-wrap {
            position: relative;
            background: #fff h3;
            background-font-weight: 300;
        }

        .form-group {
            position: relative;
        }

        .form-group .label {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #000;
            font-weight: 700;
        }

        .form-group a {
            color: gray;
        }

        .form-control {
            height: 48px;
            background: #fff;
            color: #000;
            font-size: 16px;
            border-radius: 5px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .form-control::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: rgba(0, 0, 0, 0.2) !important;
        }

        .form-control::-moz-placeholder {
            /* Firefox 19+ */
            color: rgba(0, 0, 0, 0.2) !important;
        }

        .form-control:-ms-input-placeholder {
            /* IE 10+ */
            color: rgba(0, 0, 0, 0.2) !important;
        }

        .form-control:-moz-placeholder {
            /* Firefox 18- */
            color: rgba(0, 0, 0, 0.2) !important;
        }

        .form-control:focus,
        .form-control:active {
            outline: none !important;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid #e3b04b;
        }

        .social-media {
            position: relative;
            width: 100%;
        }

        .social-media .social-icon {
            display: block;
            width: 40px;
            height: 40px;
            background: transparent;
            border: 1px solid rgba(0, 0, 0, 0.05);
            font-size: 16px;
            margin-right: 5px;
            border-radius: 50%;
        }

        .social-media .social-icon span {
            color: #999999;
        }

        .social-media .social-icon:hover,
        .social-media .social-icon:focus {
            background: #e3b04b;
        }

        .social-media .social-icon:hover span,
        .social-media .social-icon:focus span {
            color: #fff;
        }

        .checkbox-wrap {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .checkbox-wrap input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "\f0c8";
            font-family: "FontAwesome";
            position: absolute;
            color: rgba(0, 0, 0, 0.1);
            font-size: 20px;
            margin-top: -4px;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        @media (prefers-reduced-motion: reduce) {
            .checkmark:after {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }
        }

        /* Show the checkmark when checked */
        .checkbox-wrap input:checked~.checkmark:after {
            display: block;
            content: "\f14a";
            font-family: "FontAwesome";
            color: rgba(0, 0, 0, 0.2);
        }

        /* Style the checkmark/indicator */
        .checkbox-primary {
            color: #e3b04b;
        }

        .checkbox-primary input:checked~.checkmark:after {
            color: #e3b04b;
        }

        .btn {
            cursor: pointer;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            font-size: 15px;
            padding: 10px 20px;
        }

        .btn:hover,
        .btn:active,
        .btn:focus {
            outline: none;
        }

        .btn.btn-primary {
            background: #e3b04b !important;
            border: 1px solid #e3b04b !important;
            color: #fff !important;
        }

        .btn.btn-primary:hover {
            border: 1px solid #e3b04b;
            background: transparent;
            color: #e3b04b;
        }

        .btn.btn-primary.btn-outline-primary {
            border: 1px solid #e3b04b;
            background: transparent;
            color: #e3b04b;
        }

        .btn.btn-primary.btn-outline-primary:hover {
            border: 1px solid transparent;
            background: #e3b04b;
            color: #fff;
        }
    </style>
@endsection
