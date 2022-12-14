@extends('frontend.layouts.app_master')
@section('title', 'Nạp tiền ATM ')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
    <h1 class="text-bold my-4" style="font-size: 30px;">Nạp tiền Internet Banking</h1>
    <div class="d-flex justify-content-center">
        <div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 20px; width: 550px;">
            <div class="card-body" style="margin-left: 20px; margin-right: 20px;">
                <div class="b-auth">
                    <div class="auth-content">
                        <form action="" method="POST" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="phone" class="form-check-label">Số tiền nạp</label>
                                <input type="number" class="form-control" placeholder="" name="price" value="">
                                <p><i>Số tiền cần nạp tối thiểu phải lớn 10.000 đ</i></p>
                            </div>
                            <div class="form-group float-end">
                                <button type="submit" class="btn btn-primary btn-submit" style="background: #424874">Tiếp tục</button>
                            </div>
                        </form>
                    </div>
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
                <span>Nạp tiền</span>
            </li>
        </ol>
    </section>
    <h1 class="page-title-h1">Nạp tiền</h1>
    <div class="b-auth">
        <div class="auth-content">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="phone">Số tiền nạp</label>
                    <input type="number" class="form-control" placeholder="" name="price" value="">
                    <p><i>Số tiền cần nạp tối thiểu phải lớn 10.000 đ</i></p>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-blue btn-submit">Tiếp tục</button>
                </div>
            </form>
        </div>
    </div> --}}
@stop

@section('not_container_bottom')
    @include('components.whyus')
@stop

@push('script')
    <script src="/js/home.js"></script>
@endpush
