@extends('frontend.layouts.app_master')
@section('title', 'Update Info')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('not_container')
    @include('components.header.sub_header_profile')
@stop

@section('content')
    <!-- <div class="b-auth">
        <div class="auth-header">
            <h1 class="title">Cập nhật thông tin</h1>
        </div>
        <div class="auth-content">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="name">Mã thành viên</label>
                    <input type="text" class="form-control" required placeholder="" value="{{ $user->id }}" disabled>
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" class="form-control" required placeholder="" value="{{ $user->phone }}" disabled>
                    <a href="{{ route('get_user.profile.update_phone') }}" title="Đổi số điện thoại">Đổi số điện thoại</a>
                </div>

                <div class="form-group">
                    <label for="name">Họ tên</label>
                    <input type="text" class="form-control" required placeholder="" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" required placeholder="" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-blue btn-submit">Cập nhật thông tin</button>
                </div>
            </form>
        </div>
    </div> -->

    <h1 class="text-bold mt-4" style="font-size: 30px;">Tài khoản của tôi</h1>
    <form class="form-container" action="" method="POST" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <div class="row g-0 my-5 d-flex justify-content-center">
        <div class="col-md-3">
            <div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 30px;">      
                <div class="card-body mt-2 d-flex justify-content-center" style="margin-left: 20px; margin-right: 20px;">
                    @if ($user->avatar)
                        <img
                            src="{{ pare_url_file($user->avatar) }}"
                            class="rounded-circle"
                            alt=""
                            style="width: 150px;"
                        />
                    @endif
                    
                </div>
                
                {{-- <input type="file" name="avatar"> --}}
                <div class="card-body d-flex justify-content-center" style="margin-left: 20px; margin-right: 20px;">
                    <a class="text-bold fst-italic"  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cập nhật ảnh đại diện <i class="fa-solid fa-pen-to-square fst-italic"></i></a>
                </div>
                <div class="collapse mb-4" id="collapseExample">
                    <div class="card-body py-0" style="margin-left: 20px; margin-right: 20px;">
                        <input type="file" name="avatar">
                    </div>
                    <div class="card-body" style="margin-left: 20px; margin-right: 20px;">
                        <div class="form-group float-end">
                            <button type="submit" class="btn btn-primary btn-submit" style="background: #424874">Lưu cập nhật</button>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 20px;">
                <div class="card-body mt-2" style="margin-left: 20px;">
                    <h1 class="text-bold mt-2 mb-4" style="font-size: 20px;">Nhu cầu thuê nhà</h1>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="rentP" style="padding: 0.5px;"/>
                        <label class="form-check-label form-check-label-nhucau" for="rentP"> Người thuê </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="forrentP" style="padding: 0.5px;"/>
                        <label class="form-check-label form-check-label-nhucau" for="forrentP"> Người cho thuê </label>
                    </div>
                    <!-- Submit button -->
                    <div class="form-group float-end">
                        <button type="submit" class="btn btn-primary btn-submit" style="background: #424874">Lưu cập nhật</button>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-9" style="padding-left: 30px;">
            <div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 30px;">
                <div class="card-body mt-2 mb-3" style="margin-left: 20px; margin-right: 20px;">
                    <div class="b-auth">
                        <div class="auth-content">
                            {{-- <form class="form-container" action="" method="POST" autocomplete="off"> --}}
                                {{-- @csrf --}}
                                <h1 class="text-bold mt-2 mb-3" style="font-size: 20px;">Thông tin cơ bản</h1>
                                <!-- 2 column grid layout -->
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Mã thành viên</label>
                                            <input type="text" class="form-control" id="formId" value="{{ $user->id }}" disabled>
                                        </div>                                        
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Số điện thoại</label>
                                            <input type="text" class="form-control" id="formPhone" value="{{ $user->phone }}" disabled>
                                            <!-- <a class="float-end text-bold" href="{{ route('get_user.profile.update_phone') }}" title="Đổi số điện thoại">Cập nhật số điện thoại</a> -->
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#changePhone" class="float-end text-bold fst-italic" title="Đổi số điện thoại">Cập nhật số điện thoại <i class="fa-solid fa-pen-to-square fst-italic"></i></a>
                                        </div> 
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Họ và tên</label>
                                            <input type="text" class="form-control" id="formName" name="name" value="{{ $user->name }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Email</label>
                                            <input type="text" class="form-control" id="formEmail" name="email" value="{{ $user->email }}">
                                        </div> 
                                    </div>
                                </div>

                                <h1 class="text-bold mb-3" style="font-size: 20px;">Thông tin thêm</h1>
                                <!-- 2 column grid layout -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Giới tính</label>
                                            <input type="text" class="form-control" id="formGender" value="">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Ngày sinh</label>
                                            <input type="text" class="form-control" id="formDate" value="">
                                        </div> 
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Địa chỉ liên hệ</label>
                                            <input type="text" class="form-control" id="formAddress" value="">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Công việc</label>
                                            <input type="text" class="form-control" id="formJob" value="">
                                        </div> 
                                    </div>
                                </div>

                                <h1 class="text-bold mb-3" style="font-size: 20px;">Mạng xã hội</h1>
                                <!-- 2 column grid layout -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Facebook Url</label>
                                            <input type="text" class="form-control" id="formFacebook" value="">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Twitter Url</label>
                                            <input type="text" class="form-control" id="formTwitter" value="">
                                        </div> 
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Linkedin Url</label>
                                            <input type="text" class="form-control" id="formLinkedin" value="">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="form-label text-bold">Instagram Url</label>
                                            <input type="text" class="form-control" id="formInstagram" value="">
                                        </div> 
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="form-group float-end">
                                    <button type="submit" class="btn btn-primary btn-submit" style="background: #424874">Lưu cập nhật</button>
                                </div>                                 
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow border-0" style="border-radius: 20px;">
                <div class="card-body mt-2 mb-3" style="margin-left: 20px; margin-right: 20px;">
                    <div class="b-auth">
                        <div class="auth-content">
                            <form class="form-container" action="" method="POST" autocomplete="off">
                                @csrf
                                <h1 class="text-bold mt-2 mb-3" style="font-size: 20px;">Thay đổi mật khẩu</h1>
                                
                                <div class="row mb-4">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2" class="form-label text-bold">Mật khẩu cũ</label>
                                        <input type="password" class="form-control" id="" value="">
                                    </div>                                        
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2" class="form-label text-bold">Mật khẩu mới</label>
                                        <input type="password" class="form-control" id="" value="">
                                    </div>                                        
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2" class="form-label text-bold">Nhập lại mật khẩu mới</label>
                                        <input type="password" class="form-control" id="" value="">
                                    </div>                                        
                                </div>

                                <!-- Submit button -->
                                <div class="form-group float-end">
                                    <button type="submit" class="btn btn-primary btn-submit" style="background: #424874">Thay đổi mật khẩu</button>
                                </div>                                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="changePhone" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="padding-left: 30px; padding-right: 30px;">
                <div class="modal-header">
                    <h1 class="modal-title text-bold mt-3" style="font-size: 20px;">Cập nhật số điện thoại</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                            <div class="b-auth">
                                <div class="auth-content">
                                    <form class="form-container" action="" method="POST" autocomplete="off">
                                        @csrf
                                        <div class="row mb-4">
                                            <div class="form-group">
                                                <label for="phone" class="form-label text-bold">Số điện thoại cũ</label>
                                                <input type="text" class="form-control" required placeholder="" name="phone_old" value="{{ $user->phone }}" disabled>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="phone" class="form-label text-bold">Số điện thoại mới</label>
                                                <input type="text" class="form-control" id="phone_new" placeholder="" name="phone_new" value="" >
                                                @if ($errors->first('phone_new'))
                                                    <span class="text-error d-block">{{ $errors->first('phone_new') }}</span>
                                                @endif
                                                <div class="row"><a class="js-get-code-phone text-end text-bold" href="javascript:;void(0)">Lấy mã xác thực</a></div>                                                
                                                <div class="row"><p><i>Mã xác thực sẽ gửi về số điện thoại mới của bạn</i></p></div>                                                
                                            </div>                                        
                                        </div>
                                        <div class="row mb-4">
                                            <div class="form-group">
                                                <label for="name" class="form-label text-bold">Mã xác thực</label>
                                                <input type="text" class="form-control" placeholder="" name="code" value="{{ $user->code }}">
                                                @if ($errors->first('code'))
                                                    <span class="text-error d-block">{{ $errors->first('code') }}</span>
                                                @endif
                                            </div>                                        
                                        </div>

                                        <!-- Submit button -->
                                        <div class="form-group float-end">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                            <button type="submit" class="btn btn-primary btn-submit" style="background: #424874">Cập nhật</button>
                                        </div>                                 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@stop

@push('script')
    <script src="/js/auth.js"></script>
    <script src="/js/profile.js"></script>
@endpush
