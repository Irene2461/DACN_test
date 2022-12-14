@extends('frontend.layouts.app_master')
@section('title', 'Update Info')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
    <div class="b-auth">
        <div class="auth-header">
            <h1 class="title">Cập nhật số điện thoại</h1>
        </div>
        <div class="auth-content">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="phone">Số điện thoại cũ</label>
                    <input type="text" class="form-control" required placeholder="" name="phone_old" value="{{ $user->phone }}" disabled>
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại mới</label>
                    <input type="text" class="form-control" id="phone_new" placeholder="" name="phone_new" value="" >
                    @if ($errors->first('phone_new'))
                        <span class="text-error d-block">{{ $errors->first('phone_new') }}</span>
                    @endif
                    <a class="js-get-code-phone" href="javascript:;void(0)">Lấy mã xác thực</a>
                    <p><i>Mã xác thực sẽ gửi về số điện thoại / email mới của bạn</i></p>
                </div>
                <div class="form-group">
                    <label for="name">Mã xác thực</label>
                    <input type="text" class="form-control" placeholder="" name="code" value="{{ $user->code }}">
                    @if ($errors->first('code'))
                        <span class="text-error d-block">{{ $errors->first('code') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-blue btn-submit">Cập nhật số điện thoại</button>
                </div>
            </form>
        </div>
    </div>
@stop

@push('script')
    <script src="/js/profile.js"></script>
@endpush
