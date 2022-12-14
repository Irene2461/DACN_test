@extends('frontend.layouts.app_master')
@section('title', 'Hướng dẫn')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
    <h1 class="my-4 text-bold" style="font-size: 30px;">Hướng dẫn cho thuê nhà</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <h1 class="text-bold" style="font-size: 25px;">Bước 1</h1>
            @if(isset(Auth::user()->name))
            <div class="card border-0 mt-0 pt-0">
                <div class="card-body ps-0">
                    <div class="row d-flex justify-content-center">
                        <div class="text-center mb-2">
                            <p class="text-bold">Xin chào {{$user->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="card border-0 mt-0 pt-0">
                <div class="card-body ps-0">
                    <div class="row d-flex justify-content-center">
                        <div class="b-auth">
                            <!-- <div class="auth-header">
                                <h1 class="title">Đăng nhập</h1>
                            </div> -->
                            <div class="auth-content">
                                <form action="" method="POST" autocomplete="off">
                                    @csrf
                                    <div class="text-center mb-2">
                                        <p class="text-bold">Đăng nhập với:</p>
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
            @endif
        </div>
        <div class="col-md-4">
            <h1 class="text-bold" style="font-size: 25px;">Bước 2</h1>
            <div class="card border-0 mt-0 pt-0">
                <div class="card-body ps-0">
                    <div class="row d-flex justify-content-center">
                        <div class="text-center mb-2">
                            <p class="text-bold">Điền các thông tin nhà thuê phù hợp:</p>
                        </div>
                        <div class="nav-item d-flex justify-content-center" style="margin-left: 2px; margin-right: 2px;">
                            <a rel="" class="btn btn-purple btn-upload"
                            style=""
                            href="{{ route('get.login')}}">Đăng tin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h1 class="text-bold" style="font-size: 25px;">Hoặc</h1>
            <div class="card border-0 mt-0 pt-0">
                <div class="card-body ps-0">
                    <div class="row d-flex justify-content-center">
                        <div class="text-center mb-2">
                            <p class="text-bold">Liên hệ với</p>
                        </div>
                        <img src="{{ url('images/homeus-logo.png') }}" style="width: 130px; margin-bottom: 20px" alt="logo">
                    </div>
                    <div class="text-center form-check-label-normal fs-6 mb-2">Tư vấn hoàn toàn miễn phí</div>
                    <a class=""></a>
                    <a rel="nofollow" class="btn btn-purple btn-block active mb-2" href="tel:{{ $author->phone ?? '' }}">
                        <span class="fa fa-phone me-2"></span>Gọi điện thoại
                    </a>
                    <a rel="nofollow" class="btn btn-purple btn-block active mb-2" data-bs-toggle="modal" data-bs-target="#contactHomeUs">
                        <span class="fa fa-inbox me-2"></span>Liên hệ với tôi
                    </a>
                    <a rel="nofollow" class="btn btn-purple btn-block active mb-2" href="#">
                        <span class="fa fa-comment-medical me-2"></span>Chat với HomeUs
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('components.home.carousel_review') --}}
    @include('components.guideline.contact_model')
@stop

@section('not_container_bottom')
    @include('components.whyus')
@stop

@push('script')
    <script src="/js/home.js"></script>
@endpush
