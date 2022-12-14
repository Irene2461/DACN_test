@extends('admin.layouts.app_master_admin')
@section('content')
<div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 20px;">
    <div class="card-body" style="margin-left: 20px; margin-right: 20px;">
        <div class="text-left mt-2 mb-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item align-bottom">
                    <h1 class="text-bold me-3" style="font-size: 25px;">Danh sách địa điểm</h1>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('get_admin.location.create') }}" class="float-end text-bold fst-italic">Thêm địa điểm mới<span><i class="fa fa-plus-circle fst-italic ms-1" style="font-size: 11px"></i></span></a>
                    {{-- <a type="button" data-bs-toggle="modal" data-bs-target="#createLocation" class="float-end text-bold fst-italic">Thêm địa điểm mới<span><i class="fa fa-plus-circle fst-italic ms-1" style="font-size: 11px"></i></span></a> --}}
                </li>
            </ul>    
        </div>
        <table id="tableCategory" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Phân loại</th>
                    <th>Trạng thái</th>
                    <th>Nổi bật</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($locations ?? [] as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td class="fw-bold" scope="row">{{ $item->name }}</td>
                    <td scope="row">{{ $item->getType($item->type) }}</td>
                    <td scope="row"><span class="badge text-bg-success">Active</span></td>
                    <td scope="row">
                        @if ($item->hot == 1)
                            <span class="badge text-bg-danger">Hot</span>
                        @else
                            <span class="badge text-bg-secondary">Mặc định</span>
                        @endif
                    </td>
                    <td scope="row">{{ $item->created_at }}</td>
                    <td scope="row">
                        <a class="" href="{{ route('get_admin.location.update', $item->id) }}">
                        {{-- <a type="button" data-bs-toggle="modal" data-bs-target="#updateLocation"> --}}
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
                    <th>Phân loại</th>
                    <th>Trạng thái</th>
                    <th>Nổi bật</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class="modal fade" id="createLocation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="padding-left: 30px; padding-right: 30px;">
            <div class="modal-header">
                <h1 class="modal-title text-bold mt-3" style="font-size: 20px;">Thêm địa điểm mới</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('admin.pages.location.form')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updateLocation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="padding-left: 30px; padding-right: 30px;">
            <div class="modal-header">
                <h1 class="modal-title text-bold mt-3" style="font-size: 20px;">Cập nhật địa điểm</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('admin.pages.location.form')
            </div>
        </div>
    </div>
</div>

{{-- <h2 class="mt-3" style="display: flex;justify-content: space-between"><span>Danh sách địa điểm</span> <a href="{{ route('get_admin.location.create') }}" style="font-size: 16px;">Thêm mới</a></h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Phân loại</th>
                <th>Trạng thái</th>
                <th>Nổi bật</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations ?? [] as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td scope="row">{{ $item->name }}</td>
                    <td scope="row">{{ $item->getType($item->type) }}</td>
                    <td scope="row"><span class="text-success">Active</span></td>
                    <td scope="row">
                        @if ($item->hot == 1)
                            <span class="text-danger">Hot</span>
                        @else
                            <span class="text-pink">Mặc định</span>
                        @endif
                    </td>
                    <td scope="row">{{ $item->created_at }}</td>
                    <td scope="row">
                        <a href="{{ route('get_admin.location.update', $item->id) }}" class="text-blue">Edit</a>
                        <a href="{{ route('get_admin.location.delete', $item->id) }}" class="text-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@stop
