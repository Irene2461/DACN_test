@extends('frontend.layouts.app_master')
@section('title', 'Register')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('not_container')


    <!-- Section: Design Block -->
        <div class="home_img">
            <a><img src="{{ url('images/home-img2-small.jpg') }}" alt="" enable-gradients="true"/></a>
        </div>
    <!-- Background image -->
@stop

@section('content')
    <!-- <div class="b-auth">
        <div class="auth-header">
            <h1 class="title">Tạo tài khoản mới</h1>
        </div>
        <div class="auth-content">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="name">Họ tên</label>
                    <input type="text" class="form-control" required placeholder="" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" required placeholder="" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" class="form-control" required placeholder="" name="phone">
                </div>
                <div class="form-group">
                    <label for="password">Tạo mật khẩu</label>
                    <input type="password" class="form-control" required placeholder="" name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-blue btn-submit">Tạo tài khoản</button>
                </div>
                <div class="form-group form-group-register">
                    <p>Bấm vào nút đăng ký tức là bạn đã đồng ý với <a href="#" target="_blank">quy định sử dụng</a> của chúng tôi</p>
                    <p>Bạn đã có tài khoản? <a class="link" href="{{ route('get.login') }}">Đăng nhập ngay</a></p>
                </div>
            </form>
        </div>
    </div> -->

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
            <form action="" method="POST" autocomplete="off">
                @csrf
                <div class="text-center mb-2">
                    <p>Đăng ký với:</p>
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
                    <input type="text" class="form-control" id="formHoten" placeholder="Họ và tên" name="name">
                </div>
                <div class="mb-4">
                    <!-- <label for="formGroupExampleInput" class="form-label">Example label</label> -->
                    <input type="text" class="form-control" id="formEmail" placeholder="Email" name="email">
                </div>
                <div class="mb-4">
                    <!-- <label for="formGroupExampleInput" class="form-label">Example label</label> -->
                    <input type="text" class="form-control" id="formPhone" placeholder="Số điện thoại" name="phone">
                </div>
                <div class="mb-4">
                    <!-- <label for="formGroupExampleInput2" class="form-label">Another label</label> -->
                    <input type="password" class="form-control" id="formPassword" placeholder="Mật khẩu" name="password">
                </div>
                <div class="mb-4">
                    <!-- <label for="formGroupExampleInput2" class="form-label">Another label</label> -->
                    <input type="password" class="form-control" id="formPasswordConfirm" placeholder="Nhập lại mật khẩu">
                </div>

                <div class="text-center">
                    <p>Bấm vào nút đăng ký khi bạn đã đồng ý với <a href="#" style="color: #424874;">quy định sử dụng</a> của chúng tôi</p>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" style="background: #424874">Đăng ký</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Bạn đã có tài khoản? <a href="{{ route('get.login') }}" style="color: #424874;">Đăng nhập ngay</a></p>
                </div>
            </form>
        </div>
        </div>
    </div>
    </section>
    <!-- Section: Design Block -->
@stop

@push('script')
    <script src="/js/auth.js"></script>
@endpush
