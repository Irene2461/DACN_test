@extends('frontend.layouts.app_master')
@section('title', 'Cập nhật')
@push('css')
    <link href="/css/user_room.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
    <h1 class="text-bold mt-4 mb-4" style="font-size: 30px;">Sửa tin thuê nhà</h1>
    @include('user.room.form')
    <div class="" style="padding-bottom: 70px;"></div>
@stop

@push('script')
    <script src="/js/user_room.js"></script>
@endpush
