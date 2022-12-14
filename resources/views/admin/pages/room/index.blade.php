@extends('admin.layouts.app_master_admin')
@section('content')
<div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 20px;">
    <div class="card-body" style="margin-left: 20px; margin-right: 20px;">
        <div class="text-left mt-2 mb-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item align-bottom">
                    <h1 class="text-bold me-3" style="font-size: 25px;">Danh sách tin đăng</h1>
                </li>
                <li class="list-inline-item">
                    {{-- <a class="float-end text-bold fst-italic" href="{{ route('get_admin.category.create') }}">Thêm danh mục mới<span><i class="fa fa-plus-circle fst-italic ms-1" style="font-size: 11px"></i></span></a> --}}
                </li>
            </ul>    
        </div>
        <table id="tableCategory" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th style="width:50px;">Code</th>
                    <th style="width: 100px;">Ảnh đại diện</th>
                    <th style="width: 350px;">Thông tin</th>
                    <th>Giá</th>
                    <th>Thời gian</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms ?? [] as $item)
                <tr>
                    <td>#{{ $item->id }}</td>
                    <td>
                        <div style="overflow: hidden;width: 100px;height: 100px;margin: 0 auto;position: relative;">
                            <a href="{{ route('get.room.detail',['id' => $item->id,'slug' => $item->slug]) }}" target="_blank">
                                <img src="{{ pare_url_file($item->avatar) }}" alt="" style="display: block;width: 100%;height: 100%;object-fit: cover;">
                            </a>
                        </div>
                    </td>
                    <td>
                        <p target="_blank">
                            <span class="badge text-bg-info">{{ $item->category->name ?? "[N\A]" }}</span>
                        </p>
                        <a href="{{ route('get.room.detail',['id' => $item->id,'slug' => $item->slug]) }}" target="_blank"
                            class="form-check-label"> {{ $item->name }}</a>
                        <p style="margin-bottom: 2px">
                            @if ($item->status != \App\Models\Room::STATUS_ACTIVE)
                                <a href="{{ route('get_admin.room.success', $item->id) }}" class="text-success" style="font-size: 13px;text-decoration: none;font-weight: 500"><i class="fa fa-refresh"></i> Duyệt</a>
                                <a href="{{ route('get_admin.room.expires', $item->id) }}" class="text-warning" style="font-size: 13px;text-decoration: none;font-weight: 500"><i class="fa fa-credit-card"></i> Hết hạn</a>
                            @endif
                            @if ($item->status == \App\Models\Room::STATUS_ACTIVE)
                                <a href="{{ route('get_admin.room.hide', $item->id) }}" class="text-secondary" style="font-size: 13px;text-decoration: none"> <i class="fa fa-eye-slash"></i> Ẩn tin</a>
                            @endif
                            <a href="{{ route('get_admin.room.cancel', $item->id) }}" class="text-danger" style="font-size: 13px;text-decoration: none;font-weight: 500"><i class="fa fa-cancel"></i> Huỷ</a>
                        </p>
                        @if ($item->status == \App\Models\Room::STATUS_CANCEL)
                            <p style="margin-bottom: 2px;font-size: 12px"><i class="text-danger">{{ $item->reason }}</i></p>
                        @endif
                    </td>
                    <td>{{ round(($item->price)/1000000, 1) }} tr/tháng</td>
                    <td>
                        <p style="font-size: 14px;margin-bottom: 5px;"><span>Bắt đầu</span> <span>{{ $item->time_start }}</span></p>
                        <p style="font-size: 14px;"><span>Kết thúc</span> <span>{{ $item->time_stop }}</span></p>
                    </td>
                    <td>
                        <span class="{{ $item->getStatus($item->status)['class'] ?? "..." }}">{{ $item->getStatus($item->status)['name'] ?? "..." }}</span>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th style="width:50px;">Code</th>
                    <th style="width: 100px;">Ảnh đại diện</th>
                    <th style="width: 350px;">Thông tin</th>
                    <th>Giá</th>
                    <th>Thời gian</th>
                    <th>Trạng thái</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

    {{-- <h2 class="mt-3" style="display: flex;justify-content: space-between"><span>Danh sách tin đăng</span></h2>
    <div class="table table-hover">
        <table class="table">
            <thead>
            <tr>
                <th style="width:50px;">Code</th>
                <th style="width: 100px;">Ảnh đại diện</th>
                <th style="width: 350px;">Thông tin</th>
                <th>Giá</th>
                <th>Thời gian</th>
                <th>Trạng thái</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rooms ?? [] as $item)
                <tr>
                    <td>#{{ $item->id }}</td>
                    <td>
                        <div style="overflow: hidden;width: 100px;height: 100px;margin: 0 auto;position: relative;">
                            <a href="{{ route('get.room.detail',['id' => $item->id,'slug' => $item->slug]) }}" target="_blank">
                                <img src="{{ pare_url_file($item->avatar) }}" alt="" style="display: block;width: 100%;height: 100%;object-fit: cover;">
                            </a>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('get.room.detail',['id' => $item->id,'slug' => $item->slug]) }}" target="_blank"
                           style="font-size: 14px;font-weight: 500;color: #007aff;text-decoration: none"><span class="label label-danger">{{ $item->category->name ?? "[N\A]" }}</span> {{ $item->name }}</a>
                        <p style="margin-bottom: 2px">
                            @if ($item->status != \App\Models\Room::STATUS_ACTIVE)
                                <a href="{{ route('get_admin.room.success', $item->id) }}" class="text-success" style="font-size: 13px;text-decoration: none;font-weight: 500"><i class="fa fa-refresh"></i> Duyệt</a>
                                <a href="{{ route('get_admin.room.expires', $item->id) }}" class="text-warning" style="font-size: 13px;text-decoration: none;font-weight: 500"><i class="fa fa-credit-card"></i> Hết hạn</a>
                            @endif
                            @if ($item->status == \App\Models\Room::STATUS_ACTIVE)
                                <a href="{{ route('get_admin.room.hide', $item->id) }}" class="text-secondary" style="font-size: 13px;text-decoration: none"> <i class="fa fa-eye-slash"></i> Ẩn tin</a>
                            @endif
                            <a href="{{ route('get_admin.room.cancel', $item->id) }}" class="text-danger" style="font-size: 13px;text-decoration: none;font-weight: 500"><i class="fa fa-cancel"></i> Huỷ</a>
                        </p>
                        @if ($item->status == \App\Models\Room::STATUS_CANCEL)
                            <p style="margin-bottom: 2px;font-size: 12px"><i class="text-danger">{{ $item->reason }}</i></p>
                        @endif
                    </td>
                    <td>{{ number_format($item->price,0,',','.') }} triệu / tháng</td>
                    <td>
                        <p style="font-size: 14px;margin-bottom: 5px;"><span>Bắt đầu</span> <span>{{ $item->time_start }}</span></p>
                        <p style="font-size: 14px;"><span>Kết thúc</span> <span>{{ $item->time_stop }}</span></p>
                    </td>
                    <td>
                        <span class="{{ $item->getStatus($item->status)['class'] ?? "..." }}">{{ $item->getStatus($item->status)['name'] ?? "..." }}</span>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div> --}}
@stop
