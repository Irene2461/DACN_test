@extends('admin.layouts.app_master_admin')
@section('content')
<div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 20px;">
    <div class="card-body" style="margin-left: 20px; margin-right: 20px;">
        <div class="text-left mt-2 mb-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item align-bottom">
                    <h1 class="text-bold me-3" style="font-size: 25px;">Danh sách thành viên</h1>
                </li>
                <li class="list-inline-item">
                    {{-- <a class="float-end text-bold fst-italic" href="{{ route('get_admin.category.create') }}">Thêm danh mục mới<span><i class="fa fa-plus-circle fst-italic ms-1" style="font-size: 11px"></i></span></a> --}}
                </li>
            </ul>    
        </div>
        <table id="tableCategory" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Avatar</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users ?? [] as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td scope="row">
                        <img src="{{ pare_url_file($item->avatar) }}" style="width: 60px;height: 60px;border-radius: 50%" alt="">
                    </td>
                    <td scope="row">{{ $item->name }}</td>
                    <td class="fw-bold" scope="row">{{ $item->email }}</td>
                    <td scope="row">{{ $item->phone }}</td>
                    <td scope="row">{{ $item->created_at }}</td>
                    <td></td>
                    {{-- <td scope="row">
                        <a href="{{ route('get_admin.category.update', $item->id) }}" class="text-blue">Edit</a>
                        <a href="{{ route('get_admin.location.delete', $item->id) }}" class="text-danger">Delete</a>
                    </td> --}}
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Avatar</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

{{-- <h2 class="mt-3" style="display: flex;justify-content: space-between"><span>Danh sách thành viên</span></h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Avatar</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users ?? [] as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td scope="row">
                        <img src="{{ pare_url_file($item->avatar) }}" style="width: 60px;height: 60px;border-radius: 50%" alt="">
                    </td>
                    <td scope="row">{{ $item->name }}</td>
                    <td scope="row">{{ $item->email }}</td>
                    <td scope="row">{{ $item->phone }}</td>
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