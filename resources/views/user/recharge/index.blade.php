@extends('frontend.layouts.app_master')
@section('title', 'Trang chủ')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
    <h1 class="my-4 text-bold" style="font-size: 30px;">Nạp tiền vào tài khoản</h1>
    <h1 class="text-bold mt-2 mb-3" style="font-size: 20px;">Khuyến mãi</h1>
    <section class="grid post-category">
        <div class="container clearfix">
            <section class="section" style="padding: 20px; border: 0; box-shadow: 0 0 30px 10px rgb(0 0 0 / 3%);">
                <div class="section-content">
                    <p><i class="fa-solid fa-gift me-2"></i>Tặng thêm +10% cho giá trị nạp từ 50.000đ đến dưới 1.000.000đ.</p>
                    <p><i class="fa-solid fa-gift me-2"></i>Tặng thêm +20% cho giá trị nạp từ 1.000.000đ đến 2.000.000đ.</p>
                    <p><i class="fa-solid fa-gift me-2"></i>Tặng thêm +25% cho giá trị nạp trên 2.000.000đ.</p>
                </div>
            </section>
        </div>
    </section>
    <h1 class="text-bold my-4" style="font-size: 20px;">Phương thức nạp tiền</h1>
    <div class="row d-flex justify-content-center">
        @foreach ($recharge ?? [] as $item)
        <div class="col-md-3 d-flex justify-content-center">
            <a class="d-flex justify-content-center" href="{{ route('get_user.recharge.switch', ['slug' => \Illuminate\Support\Str::slug($item['name']), 'id' => $item['code']]) }}">
                <div class="card card-hover border-0 shadow" style="width: 200px;">
                    <div class="d-flex align-items-center" style="overflow: hidden; height: 150px; position: relative;">
                        <img src="{{ $item['avatar'] }}" alt="{{ $item['name'] }}" title="{{ $item['name'] }}" class="card-img-top method_item_icon" style="display: block; height: 50%; width: 100%; object-fit: cover;">
                    </div>
                    <hr style="background-color: hsl(0, 0%, 75%)" />
                    <div class="card-body py-2 d-flex justify-content-center align-items-center bg-light">
                        <a class="form-check-label">{{ $item['name'] }}</a>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="mb-5"></div>
    @include('components.home.carousel_review')

    {{-- <section class="breadcrumb">
        <ol>
            <li>
                <a href="">
                    <span>Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>Phòng</span>
                </a>
            </li>
            <li>
                <span>Danh sách</span>
            </li>
        </ol>
    </section>
    <h1 class="page-title-h1">Phương thức nạp tiền</h1>
    <div class="d-none d-md-block">
        <style>
            .addfund_method_list {
                display: flex;
                flex-wrap: nowrap;
            }
            .addfund_method_list .col-item-3 {
                width:20%;
                margin-bottom: 30px;
                border: 1px solid #ddd;
                border-radius: 5px;
                overflow: hidden;
                margin-right: 1%;
            }
            .addfund_method_list .col-item-3 img {
                max-width: 160px;
                max-height: 60px;
            }
            .method_item_icon {
                height: 120px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-bottom: 0;
                padding: 10px;
            }
            .addfund_method_list .method_item .method_item_name {
                text-align: center;
                padding: 10px 0;
                border-top: 0;
                font-weight: bold;
                background: #eee;
            }
            .btn_select_method {
                margin-top: 10px;
                background: #ddd;
                color: #333;
                display: block;
                width: 100%;
                border-radius: 0;
                display: none;
            }
        </style>
        <div class="addfund_method_list clearfix">
            @foreach($recharge ?? [] as $item)
            <div class="col-item-3">
                <div class="method_item">
                    <a href="{{ route('get_user.recharge.switch', ['slug' => \Illuminate\Support\Str::slug($item['name']), 'id' => $item['code']]) }}">
                        <div class="method_item_icon">
                            <img src="{{ $item['avatar'] }}" alt="{{ $item['name'] }}" title="{{ $item['name'] }}">
                        </div>
                        <div class="method_item_name">{{ $item['name'] }}</div>
                        <button class="btn btn_select_method">Chọn</button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}
@stop

@section('not_container_bottom')
    @include('components.whyus')
@stop

@push('script')
    <script src="/js/home.js"></script>
@endpush

