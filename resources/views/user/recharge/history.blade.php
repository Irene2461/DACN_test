@extends('frontend.layouts.app_master')
@section('title', 'Trang chủ')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('not_container')
    @include('components.header.sub_header_profile')
@stop

@section('content')
<h1 class="text-bold my-4" style="font-size: 30px;">Lịch sử nạp tiền</h1>
<div class="card shadow border-0 mb-4" style="border-radius: 20px; margin-bottom: 20px;">
    <div class="card-body" style="margin-left: 20px;">
        <table id="tableCategory" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>Mã giao dịch</th>
                    <th>Hình thức</th>
                    <th>Số tiền</th>
                    <th>Khuyến mãi</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Ghi chú</th>
                    <th>Ngày tạo</th>
                    {{-- <th>Thao tác</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($rechargeHistory ?? [] as $item)
                <tr>
                    <td scope="row">{{ $item->code }}</td>
                    <td>
                        @if ($item->type == 1)
                            <span>Chuyển khoản</span>
                        @elseif ($item->type == 2)
                            <span>Tiền mặt</span>
                        @elseif ($item->type == 3)
                            <span>ATM Internet Banking</span>
                        @endif
                    </td>
                    <td scope="row">{{ number_format($item->money,0,',','.') }}đ</td>
                    <td scope="row">{{ number_format($item->discount,0,',','.') }}đ</td>
                    <td scope="row"><span class="text-danger text-bold">{{ number_format($item->total_money,0,',','.') }}đ</span></td>
                    <td scope="row"><span class="{{ $item->getStatus($item->status)['class'] }}">{{ $item->getStatus($item->status)['name'] }}</span></td>
                    <td scope="row">
                        @if ($item->status == \App\Models\RechargeHistory::STATUS_CANCEL)
                            <span class="text-danger" style="font-size: 13px;">{{ $item->note }}</span>
                        @endif
                    </td>
                    <td scope="row">{{ $item->created_at }}</td>
                    {{-- <td scope="row">
                        @if ($item->status != \App\Models\RechargeHistory::STATUS_SUCCESS)
                            <a href="{{ route('get_admin.recharge.update', $item->id) }}" class="text-blue">Edit</a>
                        @endif
                    
                        <a href="{{ route('get_admin.location.delete', $item->id) }}" class="text-danger">Delete</a>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Mã giao dịch</th>
                    <th>Hình thức</th>
                    <th>Số tiền</th>
                    <th>Khuyến mãi</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Ghi chú</th>
                    <th>Ngày tạo</th>
                    {{-- <th>Thao tác</th> --}}
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
                    <span>Phòng</span>
                </a>
            </li>
            <li>
                <span>Danh sách</span>
            </li>
        </ol>
    </section>
    <h1 class="page-title-h1">Lịch sử nạp tiền</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã giao dịch</th>
                <th>Hình thức</th>
                <th>Số tiền</th>
                <th>Khuyến mãi</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Ghi chú</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($rechargeHistory ?? [] as $item)
                <tr>
                    <td scope="row">{{ $item->code }}</td>
                    <td>
                        @if ($item->type == 1)
                            <span>Chuyển khoản</span>
                        @elseif ($item->type == 2)
                            <span>Tiền mặt</span>
                        @else
                        @endif
                    </td>
                    <td scope="row">{{ number_format($item->money,0,',','.') }}đ</td>
                    <td scope="row">{{ number_format($item->discount,0,',','.') }}đ</td>
                    <td scope="row"><span class="text-danger text-bold">{{ number_format($item->total_money,0,',','.') }}đ</span></td>
                    <td scope="row"><span class="{{ $item->getStatus($item->status)['class'] }}">{{ $item->getStatus($item->status)['name'] }}</span></td>
                    <td scope="row">
                        @if ($item->status == \App\Models\RechargeHistory::STATUS_CANCEL)
                            <span class="text-danger" style="font-size: 13px;">{{ $item->note }}</span>
                        @endif
                    </td>
                    <td scope="row">{{ $item->created_at }}</td>
                    <td scope="row">
                        @if ($item->status != \App\Models\RechargeHistory::STATUS_SUCCESS)
                            <a href="{{ route('get_admin.recharge.update', $item->id) }}" class="text-blue">Edit</a>
                        @endif
                    
                        <a href="{{ route('get_admin.location.delete', $item->id) }}" class="text-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
    
@stop

@push('script')
    <script src="/js/home.js"></script>
@endpush
