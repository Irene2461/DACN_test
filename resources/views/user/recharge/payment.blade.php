@extends('frontend.layouts.app_master')
@section('title', 'Trang chủ')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('not_container')
    @include('components.header.sub_header_profile')
@stop

@section('content')
<h1 class="text-bold my-4" style="font-size: 30px;">Lịch sử thanh toán</h1>
<div class="card shadow border-0 mb-4" style="border-radius: 20px; margin-bottom: 20px;">
    <div class="card-body" style="margin-left: 20px;">
        <table id="tableCategory" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th style="text-align: left">Mã giao dịch</th>
                    <th>Loại</th>
                    <th>Tổng tiền</th>
                    <th>Tin</th>
                    <th>Ngày tạo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paymentHistory ?? [] as $item)
            <tr>
                <td style="text-align: left" scope="row">{{ $item->id }}</td>
                <td>
                    @if ($item->type == 1)
                        <span>Tin thường</span>
                    @elseif($item->type == 2)
                        <span>Vip 3</span>
                    @elseif($item->type == 3)
                        <span>Vip 2</span>
                    @elseif($item->type == 4)
                        <span>Vip 1</span>
                    @else
                        <span>Đặc biệt</span>
                    @endif
                    <span>{{ $item->type }}</span>
                </td>
                <td scope="row"><span class="text-danger text-bold">{{ number_format($item->money,0,',','.') }}đ</span></td>
                <td scope="row">
                    <a href="">{{ $item->room_id }}</a>
                </td>
                <td scope="">
                    {{ $item->created_at }}
                </td>
            </tr>
        @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th style="text-align: left">Mã giao dịch</th>
                    <th>Loại</th>
                    <th>Tổng tiền</th>
                    <th>Tin</th>
                    <th>Ngày tạo</th>
                </tr>
            </tfoot>
        </table>
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
                    <span>Lịch sử thanh toán</span>
                </a>
            </li>
            <li>
                <span>Danh sách</span>
            </li>
        </ol>
    </section>
    <h1 class="page-title-h1">Lịch sử thanh toán</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th style="text-align: left">Mã giao dịch</th>
            <th>Loại</th>
            <th>Tổng tiền</th>
            <th>Tin</th>
            <th>Ngày tạo</th>
        </tr>
        </thead>
        <tbody>
        @foreach($paymentHistory ?? [] as $item)
            <tr>
                <td style="text-align: left" scope="row">{{ $item->id }}</td>
                <td>
                    @if ($item->type == 1)
                        <span>Tin thường</span>
                    @elseif($item->type == 2)
                        <span>Vip 3</span>
                    @elseif($item->type == 3)
                        <span>Vip 2</span>
                    @elseif($item->type == 4)
                        <span>Vip 1</span>
                    @else
                        <span>Đặc biệt</span>
                    @endif
                    <span>{{ $item->type }}</span>
                </td>
                <td scope="row"><span class="text-danger text-bold">{{ number_format($item->money,0,',','.') }}đ</span></td>
                <td scope="row">
                    <a href="">{{ $item->room_id }}</a>
                </td>
                <td scope="">
                    {{ $item->created_at }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> --}}
@stop

@push('script')
    <script src="/js/home.js"></script>
@endpush
