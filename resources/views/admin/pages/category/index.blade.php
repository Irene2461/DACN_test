@extends('admin.layouts.app_master_admin')
@section('content')
<div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 20px;">
    <div class="card-body" style="margin-left: 20px; margin-right: 20px;">
        <div class="text-left mt-2 mb-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item align-bottom">
                    <h1 class="text-bold me-3" style="font-size: 25px;">Danh sách danh mục</h1>
                </li>
                <li class="list-inline-item">
                    <a class="float-end text-bold fst-italic" href="{{ route('get_admin.category.create') }}">Thêm danh mục mới<span><i class="fa fa-plus-circle fst-italic ms-1" style="font-size: 11px"></i></span></a>
                </li>
            </ul>    
        </div>
        <table id="tableCategory" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Trạng thái</th>
                    <th>Mô tả</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories ?? [] as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td class="fw-bold" scope="row">{{ $item->name }}</td>
                    <td scope="row">
                        @if ($item->status == 1)
                            <span class="badge text-bg-success">Hiển thị</span>
                        @else
                            <span class="badge text-bg-secondary">Ẩn</span>
                        @endif
                    </td>
                    <td scope="row">{{ $item->description }}</td>
                    <td scope="row">{{ $item->created_at }}</td>
                    <td scope="row">
                        <a class="" href="{{ route('get_admin.category.update', $item->id) }}">
                            <button class="btn-card mb-1">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>
                        {{-- <a href="{{ route('get_admin.location.delete', $item->id) }}" class="text-danger">Delete</a> --}}
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Trạng thái</th>
                    <th>Mô tả</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

{{-- <h2 class="mt-3" style="display: flex;justify-content: space-between"><span>Danh sách danh mục</span> <a href="{{ route('get_admin.category.create') }}" style="font-size: 16px;">Thêm mới</a></h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Trạng thái</th>
                <th>Mô tả</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories ?? [] as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td scope="row">{{ $item->name }}</td>
                    <td scope="row">
                        @if ($item->status == 1)
                            <span class="text-danger">Hiển thị</span>
                        @else
                            <span class="text-pink">Ẩn</span>
                        @endif
                    </td>
                    <td scope="row">{{ $item->description }}</td>
                    <td scope="row">{{ $item->created_at }}</td>
                    <td scope="row">
                        <a href="{{ route('get_admin.category.update', $item->id) }}" class="text-blue">Edit</a>
                        <a href="{{ route('get_admin.location.delete', $item->id) }}" class="text-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@stop
