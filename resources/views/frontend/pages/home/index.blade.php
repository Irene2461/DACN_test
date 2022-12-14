@extends('frontend.layouts.app_master')
@section('title', 'Trang chủ')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('not_container')
    @include('components.home.carousel_image')
    {{-- @include('components.home.header_home_img') --}}
@stop

@section('content')
    @include('components.searchbar')
    @include('components.home.top_location',['locationsHot' => $locationsHot ?? []])
    @include('components.home.carousel_hot_card', ['rooms' => $roomVipFive ?? []])
    @include('components.home.carousel_card', ['roomNew' => $roomNew ?? []])
    {{-- @include('components.post_popular') --}}
    {{-- @include('frontend.pages.home.include._inc_room_hot',['roomHots' => $roomHots ?? []]) --}}
    {{-- @include('frontend.pages.home.include._inc_category') --}}
    {{-- @include('components.link_footer') --}}
    @include('components.home.carousel_review')
@stop

@section('not_container_bottom')
    @include('components.whyus')
    {{-- @include('components.home.carousel_review') --}}
@stop

@push('script')
    <script src="/js/home.js"></script>
@endpush
