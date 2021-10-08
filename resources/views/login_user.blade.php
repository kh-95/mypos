@extends('user.home')
@section('content')

<!-- login page content area start -->
<div class="login-page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-page-wrapper"><!-- login page wrapper -->
                    <div class="or">
                        <span>or</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="left-content-area">
                                <div class="top-content">
                                    <h4 class="title">Welcome Back Again</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                                <div class="bottom-content">
                                    <div class="left-content">
                                        <div class="thumb">
                                            <img src="/user/assets/img/login-image.jpg" alt="login image">
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <ul>
                                            <li class="active">
                                                <a href="#">Login as shuvo</a>
                                            </li>
                                            <li>
                                                <a href="#">Delete Account</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-contnet-area">
                                <div class="top-content">
                                    <h4 class="title">Account Login</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                                <div class="bottom-content">
                                    <form action="{{route('user.home')}}" class="login-form" method="Post">
                                        @csrf
                                        <div class="form-element">
                                            <input type="email" class="input-field" placeholder="Enter Username or Email" name="email">
                                        </div>
                                        <div class="form-element">
                                            <input type="password" class="input-field" placeholder="Enter Password" name="password">
                                        </div>
                                        <div class="btn-wrapper">
                                            <button type="submit" class="submit-btn">Login</button>
                                            <a href="#" class="link">Forget password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- //.login page wrapper -->
            </div>
        </div>
    </div>
</div>
<!-- login page content area end -->
@endsection
