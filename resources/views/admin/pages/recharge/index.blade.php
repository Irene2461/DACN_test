@extends('admin.layouts.app_master_admin')
@section('content')
<div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 20px;">
    <div class="card-body" style="margin-left: 20px; margin-right: 20px;">
        <div class="text-left mt-2 mb-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item align-bottom">
                    <h1 class="text-bold me-3" style="font-size: 25px;">Danh sách nạp tiền</h1>
                </li>
                <li class="list-inline-item">
                    <a class="float-end text-bold fst-italic" href="{{ route('get_admin.recharge.create') }}">Thêm mới<span><i class="fa fa-plus-circle fst-italic ms-1" style="font-size: 11px"></i></span></a>
                </li>
            </ul>    
        </div>
        <table id="tableCategory" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>Mã giao dịch</th>
                    <th>Hình thức</th>
                    <th>Khách hàng</th>
                    <th>Số tiền</th>
                    <th>Khuyến mãi</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Ghi chú</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
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
                    <td scope="row">{{ $item->user->name ?? '...' }}</td>
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
                            <a class="" href="{{ route('get_admin.recharge.update', $item->id) }}">
                                <button class="btn-card mb-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                        @endif
                    
                        {{-- <a href="{{ route('get_admin.location.delete', $item->id) }}" class="text-danger">Delete</a> --}}
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Mã giao dịch</th>
                    <th>Hình thức</th>
                    <th>Khách hàng</th>
                    <th>Số tiền</th>
                    <th>Khuyến mãi</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Ghi chú</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

{{-- <h2 class="mt-3" style="display: flex;justify-content: space-between"><span>Danh sách nạp tiền</span> <a href="{{ route('get_admin.recharge.create') }}" style="font-size: 16px;">Thêm mới</a></h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã giao dịch</th>
                <th>Hình thức</th>
                <th>Khách hàng</th>
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
                    <td scope="row">{{ $item->user->name ?? '...' }}</td>
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
