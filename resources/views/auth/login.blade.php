@extends('frontend.layouts.app_master')
@section('title', 'Login')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('not_container')

    <!-- Section: Design Block -->
        <div class="home_img">
            <a><img src="{{ url('images/pic1-1.jpg') }}" alt=""/></a>
        </div>
    <!-- Background image -->
@stop

@section('content')
    <!-- <div class="b-auth">
        <div class="auth-header">
            <h1 class="title">Đăng nhập</h1>
        </div>
        <div class="auth-content">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" class="form-control" placeholder="" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" placeholder="" name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-blue btn-submit">Đăng nhập</button>
                </div>
                <div class="form-group">
                    <a href="#">Bạn quên mật khẩu?</a>
                    <a style="float: right;" href="{{ route('get.register') }}">Tạo tài khoản mới</a>
                </div>
            </form>
        </div>
    </div> -->

    <!-- Section: Design Block -->
    <section class="text-center">

    <div class="card w-75 mx-auto" style="
            margin-top: -170px;
            margin-bottom: 100px;
            background: hsla(0, 0%, 100%, 0.8);
            backdrop-filter: blur(30px);
            ">
        <div class="card-body py-5 px-md-5 w-70 mx-auto">

        <div class="row d-flex justify-content-center">
            <img src="images/homeus-logo.png" style="width: 150px; margin-bottom: 20px" alt="logo">
            <div class="b-auth">
                <!-- <div class="auth-header">
                    <h1 class="title">Đăng nhập</h1>
                </div> -->
                <div class="auth-content">
                    <form action="" method="POST" autocomplete="off">
                        @csrf
                        <div class="text-center mb-2">
                            <p>Đăng nhập với:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1" style="font-size: 23px; color: #424874">
                            <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1" style="font-size: 23px; color: #424874">
                            <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1" style="font-size: 23px; color: #424874">
                            <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1" style="font-size: 23px; color: #424874">
                            <i class="fab fa-github"></i>
                            </button>
                        </div>

                        <p class="text-center">hoặc:</p>
                        <div class="mb-4">
                            <!-- <label for="formGroupExampleInput" class="form-label">Example label</label> -->
                            <input type="text" class="form-control" id="formEmail" placeholder="Email" name="email">
                        </div>
                        <div class="mb-4">
                            <!-- <label for="formGroupExampleInput2" class="form-label">Another label</label> -->
                            <input type="password" class="form-control" id="formPassword" placeholder="Mật khẩu" name="password">
                        </div>

                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" style="padding: 0.5px;" checked />
                                    <label class="form-check-label-normal" for="loginCheck"> Nhớ mật khẩu </label>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Simple link -->
                                <a href="#!" style="color: #424874;">Quên mật khẩu?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4" style="background: #424874">Đăng nhập</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Bạn chưa có tài khoản? <a href="{{ route('get.register') }}" style="color: #424874;">Đăng ký</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- Section: Design Block -->
@stop

@push('script')
    <script src="/js/auth.js"></script>
@endpush
