@extends('frontend.layouts.app_master')
@section('title', 'Trang chủ')
@push('css')
    {{-- <link href="/css/mini_apartment.css" rel="stylesheet"> --}}
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
    @include('components.searchbar')
    @include('frontend.pages.category.include._inc_info',['category' => $category])
    @include('components.room.grid_items', ['rooms' => $rooms])
    <div class="mb-4"></div>
    {{-- @php
        $dataBreadcrumb = ['Cho thuê căn hộ', 'Cho thuê căn hộ mini', 'Cho thuê căn hộ mini', 'Huyện Bình Chánh'];
    @endphp
    @include('components.breadcrumb', ['data' => $dataBreadcrumb])
    @include('frontend.pages.category.include._inc_info',['category' => $category])
    @include('frontend.pages.category.include._inc_category',['rooms' => $rooms])
    <section class="grid post-category">
        <div class="wrapper">
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="cpn-heading">Danh sách tin đăng</div>
                        <div class="cpn-sort">
                            <span>Sắp xếp: </span>
                            <a rel="nofollow" class="active" href="#">Mặc định</a>
                            <a rel="nofollow" class="" href="#">Mới nhất</a>
                            <a rel="nofollow" class="" href="#">Có video</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="post-list">
                            @foreach($rooms ?? [] as $item)
                                @include('components.room._inc_item', ['item' => $item])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar sidebar-right">
                <div class="card b-list-cate">
                    <div class="card-header">
                        <div class="cpn-heading">Danh mục cho thuê</div>
                    </div>
                    <div class="card-body list-cate">
                        <ul>
                            <li>
                                <a href="#" title="">Cho thuê phòng trọ <span class="count">(51.692)</span></a>
                            </li>
                            <li>
                                <a href="#" title="">Cho thuê nhà nguyên căn <span class="count">(9.550)</span></a>
                            </li>
                            <li>
                                <a href="#" title="">Cho thuê căn hộ <span class="count">(9.588)</span></a>
                            </li>
                            <li class="sub">
                                <a href="#" title=""><i class="la la-angle-right" aria-hidden="true"></i>Cho thuê căn hộ mini</a>
                            </li>
                            <li class="sub">
                                <a href="#" title=""><i class="la la-angle-right" aria-hidden="true"></i>Cho thuê căn hộ dịch vụ</a>
                            </li>
                            <li>
                                <a href="#" title="">Cho thuê mặt bằng <span class="count">(2.127)</span></a>
                            </li>
                            <li>
                                <a href="#" title="">Tìm người ở ghép <span class="count">(15.747)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card cate-nested">
                    <div class="card-body list-cate">
                        <ul>
                            @for ($i = 0; $i < 2; $i++)
                            <li>
                                <a href="#" title="">Cho thuê căn hộ mini Ba Đình</a>
                            </li>
                            @endfor
                        </ul>
                    </div>
                </div>
                <div class="card b-new-post">
                    <div class="card-header">
                        <div class="cpn-heading">Tin mới đăng</div>
                    </div>
                    <div class="card-body">
                        <div class="new-post">
                            @for ($i = 0; $i < 2; $i++)
                            <div class="new-post-item">
                                <a href="">
                                    <div class="new-post-image">
                                        <img src="{{ url('images/news-1.jpg') }}" alt="">
                                    </div>
                                    <div class="new-post-info">
                                        <h4 class="new-post-title">Nhà trọ Bắc Từ Liêm - Hà Nội nhà trọ giá… </h4>
                                        <div class="new-post-price">5 triệu/tháng</div>
                                    </div>
                                </a>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="card b-list-article">
                    <div class="card-header">
                        <div class="cpn-heading">Bài viết mới</div>
                    </div>
                    <div class="card-body">
                        <div class="list-article">
                            @for ($i = 0; $i < 2; $i++)
                            <div class="article-item">
                                <a href="">
                                    <div class="article-image">
                                        <img src="{{ url('images/news-1.jpg') }}" alt="">
                                    </div>
                                    <div class="article-info">
                                        <h4 class="article-title">Ưu và nhược điểm của việc ở trọ "bạn nên biết"</h4>
                                    </div>
                                </a>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="card b-link-suggest">
                    <div class="card-header">
                        <div class="cpn-heading">Có thể bạn quan tâm</div>
                    </div>
                    <div class="card-body">
                        <div class="link-suggest">
                            <ul>
                                <li>
                                    <a href="#" title="">Mẫu hợp đồng cho thuê phòng trọ</a>
                                </li>
                                <li>
                                    <a href="#" title="">Cẩn thận các kiểu lừa đảo khi thuê phòng trọ</a>
                                </li>
                                <li>
                                    <a href="#" title="">Kinh nghiệm thuê phòng trọ Sinh Viên</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    
    {{-- @include('components.link_footer') --}}
@stop

@push('script')
    <script src="/js/mini_apartment.js"></script>
@endpush
