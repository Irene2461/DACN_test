@extends('frontend.layouts.app_master')
@section('title', 'Trang chủ')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('not_container')
    @include('components.header.sub_header_profile')
@stop

@section('content')
    <div class="text-left mt-4">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item align-bottom">
                <h1 class="text-bold me-3" style="font-size: 30px;">Nhà thuê của tôi</h1>
            </li>
            <li class="list-inline-item">
                <a class="float-end text-bold fst-italic" href="{{ route('get_user.room.create') }}">Thêm tin mới<span><i class="fas fa-plus-circle fst-italic ms-1" style="font-size: 11px"></i></span></a>
            </li>
        </ul>    
    </div>
    @include('components.room.grid_own_items', ['rooms' => $rooms])
    {{-- <h1 class="page-title-h1">Cho thuê phòng trọ, cho thuê nhà trọ, tìm phòng trọ <a href="{{ route('get_user.room.create') }}" title="Thêm mới">Thêm tin mới</a></h1>
    <div class="table-responsive">          
        <table class="table">
            <thead>
                <tr>
                    <th>Mã tin</th>
                    <th>Ảnh đại diện</th>
                    <th>Tiêu đề</th>
                    <th>Giá</th>
                    <th style="text-align: center;">Ngày bắt đầu</th>
                    <th style="text-align: center;">Ngày kết thúc</th>
                    <th>Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($rooms ?? [] as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                            <div style="overflow: hidden; width: 100px; height: 100px; margin: 0 auto; position: relative;">
                                <img src="{{ pare_url_file($item->avatar) }}" alt="" style="display: block;width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </td>
                        <td>
                            <a href="#" style="font-size: 14px; font-weight: 500; color: #007aff;"><span class="label label-danger bg-danger">{{ $item->category->name ?? "[N\A]" }}</span> {{ $item->name }}</a>
                            <p>
                                @if ($item->status == \App\Models\Room::STATUS_ACTIVE)
                                    <a href=""><i class="fa fa-eye-slash"></i> Ẩn tin</a> 
                                @endif
                                @if ($item->status == \App\Models\Room::STATUS_EXPIRED)
                                    <a href=""><i class="fa fa-refresh"></i>Đăng lại</a>
                                    <a href="{{ route('get_user.room.pay', $item->id) }}" class="text-warning" style="font-size: 13px;text-decoration: none;font-weight: 500"><i class="fa fa-refresh"></i> Thanh toán tin</a>
                                @endif
                                @if ($item->status <= \App\Models\Room::STATUS_EXPIRED)
                                    <a href="{{ route('get_user.room.update', $item->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa tin</a>
                                @endif
                            </p>
                        </td>
                        <td>2.5 triệu / tháng</td>
                        <td style="text-align: center;"><span>{{ $item->time_start }}</span></td>
                        <td style="text-align: center;"><span>{{ $item->time_stop }}</span></td>
                        <td>
                            <span>{{ $item->getStatus($item->status)['name'] }}</span>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div> --}}
@stop

@push('script')
    <script src="/js/home.js"></script>
    
@endpush
