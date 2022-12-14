@extends('frontend.layouts.app_master')
@section('title', 'Trang chủ')
@push('css')
    <link href="/css/user_room.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
    <h1 class="text-bold mt-4 mb-4" style="font-size: 30px;">Đăng tin thuê nhà</h1>
    @include('user.room.form')
    <div class="" style="padding-bottom: 70px;"></div>
@stop


