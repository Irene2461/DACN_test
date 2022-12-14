@extends('frontend.layouts.app_master')
@section('title', 'Cập nhật')
@push('css')
    <link href="/css/user_room.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
    <h1 class="text-bold mt-4 mb-4" style="font-size: 30px;">Chỉnh sửa video và hình ảnh đã đăng</h1>
    @include('user.room.image.form')
    <div class="" style="margin-bottom: 70px;"></div>
@stop

@push('script')
    <script src="/js/user_room.js"></script>
@endpush


{{-- <h1>Chỉnh sửa hình ảnh</h1>
@foreach ($imageList as $img)
    <form action="{{ route('get_user.room.image.delete', $img->id) }}" method="post">
        @method("DELETE")
        @csrf
        <button type="submit" class="btn btn-xs btn-info pull-right">X</button>
    </form>
    <img style="width: 100px;" src="/images/{{ $img->image }}" alt="">
@endforeach
<a href="{{ route('get_user.room.update',$roomId) }}" class="m-3 text-danger">Trở về</a> --}}