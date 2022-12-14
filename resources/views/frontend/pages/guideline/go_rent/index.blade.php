@extends('frontend.layouts.app_master')
@section('title', 'Hướng dẫn')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
    <h1 class="my-4 text-bold" style="font-size: 30px;">Hướng dẫn thuê nhà</h1>
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
                                        <p class="text-bold">Đăng nhập để trải nghiệm tốt hơn</p>
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
                            <p class="text-bold">Lựa chọn nhà thuê phù hợp</p>
                        </div>
                        <div class="text-left">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <p>Xem các tin đăng nổi bật tại</p>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-bold" href="{{ route('get.home')}}">Trang chủ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-left mb-2">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <p>Tìm kiếm theo các tiêu chí tại</p>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-bold" href="{{ route('get.room.search')}}">Trang tìm kiếm</a>
                                </li>
                            </ul>    
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="text-center mb-2">
                            <p class="text-bold">Liên hệ trực tiếp với người cho thuê</p>
                            <p class="text-bold">tại trang thông tin chi tiết nhà thuê</p>
                            <p class="text-bold">Ví dụ như dưới đây</p>
                        </div>
                    </div>
                    <div class="card card-contact border-0 shadow-sm">
                        <div class="card-body bg-light">
                            <div class="row d-flex align-items-center">
                                <p class="text-uppercase text-muted fw-bold">Liên hệ với</p>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img
                                        src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                        class="rounded-circle"
                                        alt=""
                                        style="width: 45px; height: 45px"
                                        />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="fw-bold fs-5 mb-1">Ngọc Hoàng</p>
                                    </div>
                                </div>
                            </div>
                            <hr style="background-color: hsl(0, 0%, 75%)" />
                            <a class="btn btn-purple btn-upload btn-block text-bold mb-4 py-2">
                                <span class="fa fa-phone me-3"></span>Gọi điện thoại
                            </a>
                            <div class="row mb-3">
                                <div class="col">
                                    <a class="btn btn-black btn-block" target="_blank">
                                        <span class="fa fa-comment-dots me-2"></span>Zalo
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="btn btn-black btn-block">
                                        <span class="fab fa-facebook-messenger me-2"></span>Messenger
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-black btn-block">
                                        <span class="fa fa-envelope me-2"></span>Email
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="btn btn-black btn-block">
                                        <span class="fa fa-inbox me-2"></span>Liên hệ tôi
                                    </a>
                                </div>
                            </div>
                            <hr style="background-color: hsl(0, 0%, 75%)" />
                            <a rel="nofollow" class="btn btn-purple btn-block active mb-2">
                                <span class="fa fa-comment-medical me-2"></span>Chat với HomeUs
                            </a>
                            <div  class="text-center form-check-label-normal fs-6">Tư vấn hoàn toàn miễn phí</div>
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
