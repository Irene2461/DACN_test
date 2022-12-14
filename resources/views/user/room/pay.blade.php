@extends('frontend.layouts.app_master')
@section('title', 'Trang chủ')
@push('css')
    {{-- <link href="/css/user_room.css" rel="stylesheet"> --}}
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('not_container')
    @include('components.header.sub_header_profile')
@stop

@section('content')
    <h1 class="text-bold my-4" style="font-size: 30px;">Gia hạn tin đăng</h1>
    <style>
        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }
    </style>
    <div class="alert alert-warning" role="alert">
        <p>Nếu bạn đã từng đăng tin trên HomeUs, hãy sử dụng chức năng ĐẨY TIN / GIA HẠN / NÂNG CẤP VIP trong mục QUẢN LÝ TIN ĐĂNG để làm mới, đẩy tin lên cao thay vì đăng tin mới. Tin đăng trùng nhau sẽ không được duyệt.</p>
        <p>Xin cảm ơn!</p>
    </div>
    <div class="row">
        @include('components.room._inc_grid_own_item', ['item' => $room])
        <div class="col-md-8">
            <div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 30px;">      
                <div class="card-body mt-2" style="margin-left: 20px; margin-right: 20px;">
                    <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="form-room">
                            <div class= "room-left">
                                <div class="row-lists">
                                    <div class="form-group row-lists-3 mb-2">
                                        <label for="room_type" class="form-check-label">Chọn loại tin</label>
                                        <select name="room_type" id="" class="js-select2 js-not-search">
                                            <option value="1">Tin thường ( 2.000đ / ngày )</option>
                                            <option value="2">Vip 3 ( 20.000đ / ngày )</option>
                                            <option value="3">Vip 2 ( 30.000đ / ngày )</option>
                                            <option value="4">Vip 1 ( 50.000đ / ngày )</option>
                                            <option value="5">Nổi bật ( 80.000đ / ngày )</option>
                                        </select>
                                    </div>
                                    <div class="form-group row-lists-3 mb-2">
                                        <label for="name" class="form-check-label">Số ngày</label>
                                        <select name="day" id="" class="js-select2 js-not-search">
                                            @for($i = 5 ; $i <= 20 ; $i ++)
                                                <option value="{{ $i }}">{{ $i }} ngày</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group row-lists-3 mb-4">
                                        <label for="name" class="form-check-label">Ngày bắt đầu</label>
                                        <input type="date" class="form-control" name="time_start">
                                    </div>
                                </div>
                                <div class="form-group float-end">
                                    <button type="submit" class="btn btn-primary btn-submit" style="background: #424874">Lưu dữ liệu</button>
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="breadcrumb">
        <ol>
            <li>
                <a href="">
                    <span>Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>Tin đăng</span>
                </a>
            </li>
            <li>
                <span>Danh sách</span>
            </li>
        </ol>
    </section>
    <h1 class="page-title-h1">Gia hạn tin</h1>
    <style>
        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }
    </style>
    <div class="alert alert-warning" role="alert">
        <p>Nếu bạn đã từng đăng tin trên HomeUs, hãy sử dụng chức năng ĐẨY TIN / GIA HẠN / NÂNG CẤP VIP trong mục QUẢN LÝ TIN ĐĂNG để làm mới, đẩy tin lên cao thay vì đăng tin mới. Tin đăng trùng nhau sẽ không được duyệt.</p>
        <p>Xin cảm ơn!</p>
    </div>
    <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="form-room">
            <div class= "room-left">
                <h4>Địa chỉ cho thuê</h4>
                <div class="row-lists">
                    <div class="form-group row-lists-3">
                        <label for="room_type">Chọn loại tin</label>
                        <select name="room_type" id="">
                            <option value="1">Tin thường ( 2.000đ / ngày )</option>
                            <option value="2">Vip 3 ( 20.000đ / ngày )</option>
                            <option value="3">Vip 2 ( 30.000đ / ngày )</option>
                            <option value="4">Vip 1 ( 50.000đ / ngày )</option>
                            <option value="5">Nổi bật ( 80.000đ / ngày )</option>
                        </select>
                    </div>
                    <div class="form-group row-lists-3">
                        <label for="name">Số ngày</label>
                        <select name="day" id="">
                            @for($i = 5 ; $i <= 20 ; $i ++)
                                <option value="{{ $i }}">{{ $i }} ngày</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group row-lists-3">
                        <label for="name">Ngày bắt đầu</label>
                        <input type="date" class="form-control" name="time_start">
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="margin-bottom: 20px;">Lưu dữ liệu</button>
            </div>
        </div>
    </form> --}}
@stop

@push('script')
    <script src="/js/home.js"></script>
@endpush
