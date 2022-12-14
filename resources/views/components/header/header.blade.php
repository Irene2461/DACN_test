<!-- <header class="header-default {{ $container ? $container : '' }} container-header">
    <div class="header-area">
        <a class="top-logo" href="{{ route('get.home') }}" title="">
            <img src="{{ url('images/logo-2021-tet.jpg') }}" alt="">
        </a>
        <div class="user-welcome js-reload-html-header">
            @if(isset(Auth::user()->name))
                <div class="welcome-text"><a href="{{route('get_user.profile.index')}}">Hi!</a><a href="{{ route('get.logout') }}">{{ Auth::user()->name ?? "..." }}</a></div>
                <a rel="nofollow" class="btn btn-pink btn-add-post" href="{{ route('get_user.room.index')}}">
                    Đăng tin mới
                    <i class="la la-plus-circle" aria-hidden="true"></i>
                </a>
            @else
                <a rel="nofollow" class="btn btn-blue" href="{{ route('get.login')}}">Đăng nhập</a>
                <a rel="nofollow" class="btn btn-blue" href="{{ route('get.register')}}"> Đăng ký</a>
            @endif
        </div>
        <div class="mb-icon-nav js-mobile-panel">
            <i class="fa fa-bars" aria-hidden="true"></i>
            Danh mục
        </div>
    </div>
</header> -->

<!-- <nav class="navbar-menu" class="">
    <ul id="menu-main-menu" class="container-menu level-1">
        <li class="navbar_item active"><a href="{{ route('get.home') }}">Trang chủ</a></li>
        @foreach($categoriesGlobal ?? [] as $item)
            <li class="navbar_item">
                <a href="{{ route('get.category.item',['slug' => $item->slug,'id' => $item->id]) }}"
                title="{{ $item->name }}">{{ $item->name }}</a>
            </li>
        @endforeach
        <li class="navbar_item"><a href="/blog">Blog</a></li>
        <li class="navbar_item"><a href="#">Hướng dẫn</a></li>
        <li class="navbar_item"><a href="#">Nạp tiền</a></li>
        <li class="navbar_item"><a href="#">Bảng giá</a></li>
    </ul>
</nav>

<div class="mb-distance"></div> -->

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container container-fluid">
    <a class="navbar-brand" href="{{ route('get.home') }}">
      <img src="{{ url('images/homeus-logo.png') }}" alt="Bootstrap" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
            <li class="nav-item" style="margin-right: 2px;">
                <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                <a rel="nofollow" class="btn btn-purple nav-link {{ \Request::route()->getName() == 'get.home' ? 'active' : '' }}" href="{{ route('get.home')}}">Trang chủ</a>
            </li>
            <li class="nav-item" style="margin-left: 2px; margin-right: 2px;">
                <div class="btn-group">
                    <button type="button" class="btn btn-purple dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="">
                        <a>Cho thuê</a>
                    </button>
                    <ul class="dropdown-menu" style="margin-top: 10px;">
                        @foreach($categoriesGlobal ?? [] as $item)
                        <li class="navbar_item {{ \Request::path() == 'chuyen-muc-'. $item->slug.'-'. $item->id ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('get.category.item',['slug' => $item->slug,'id' => $item->id]) }}"
                            title="{{ $item->name }}">{{ $item->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li class="nav-item" style="margin-left: 2px; margin-right: 2px;">
                <a rel="nofollow" class="btn btn-purple nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item {{ \Request::route()->getName() == 'get.guideline.do_rent.index' ? 'active' : '' }} {{ \Request::route()->getName() == 'get.guideline.go_rent.index' ? 'active' : '' }}" style="margin-left: 2px; margin-right: 2px;">
                <div class="btn-group">
                    <button type="button" class="btn btn-purple dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="">
                        <a>Hướng dẫn</a>
                    </button>
                    <ul class="dropdown-menu" style="margin-top: 10px;">
                        <li class="navbar_item">
                            <a class="dropdown-item" href="{{ route('get.guideline.do_rent.index') }}"
                            title="huong-dan-cho-thue">Hướng dẫn cho thuê nhà</a>
                        </li>
                        <li class="navbar_item">
                            <a class="dropdown-item" href="{{ route('get.guideline.go_rent.index') }}"
                            title="huong-dan-cho-thue">Hướng dẫn thuê nhà</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item" style="margin-left: 2px; margin-right: 2px;">
                <a rel="nofollow" class="btn btn-purple nav-link {{ \Request::route()->getName() == 'get_user.recharge.index' ? 'active' : '' }}" href="{{ route('get_user.recharge.index') }}" title="Nạp tiền">Nạp tiền</a>
            </li>
            <li class="nav-item" style="margin-left: 2px; margin-right: 2px;">
                <a rel="nofollow" class="btn btn-purple nav-link {{ \Request::route()->getName() == 'get.service.price' ? 'active' : '' }}" href="{{ route('get.service.price') }}">Bảng giá</a>
            </li> 
        </ul>
        @if(isset(Auth::user()->name))
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-left: 2px; margin-right: 2px;">
                    <div class="btn-group">
                        <a class="form-check-label" href="#" style="padding-top: 20px;">{{ number_format(get_data_user('web','account_balance'),0,',','.') }}đ</a>
                        <button type="button" class="btn bg-light rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                class="rounded-circle"
                                alt=""
                                style="width: 38px; height: 38px">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-bold" href="#">{{ Auth::user()->name ?? "..." }}</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('get_user.profile.index') }}">Tài khoản của tôi</a></li>
                            <li><a class="dropdown-item" href="{{ route('get_user.room.index') }}">Nhà thuê của tôi</a></li>
                            <li><a class="dropdown-item" href="#">Nhà thuê yêu thích</a></li>
                            <li><a class="dropdown-item" href="{{ route('get_user.recharge.history') }}">Lịch sử nạp tiền</a></li>
                            <li><a class="dropdown-item" href="{{ route('get_user.payment.history') }}">Lịch sử thanh toán</a></li>
                            <li><a class="dropdown-item" href="#">Chuyên viên yêu thích</a></li>
                            <li><a class="dropdown-item" href="#">Lưu tìm kiếm</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('get.logout') }}">Đăng xuất</a></li>
                        </ul>
                    </div>
                    <a rel="" class="btn btn-purple btn-upload"
                    style=""
                    href="{{ route('get_user.room.create') }}">Đăng tin</a>
                </li>
            </ul>
        @else
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-left: 2px; margin-right: 2px;">
                    <a rel="nofollow" class="btn btn-purple nav-link active" href="{{ route('get.login')}}">Đăng nhập</a>
                </li>
                <li class="nav-item" style="margin-left: 2px; margin-right: 2px;">
                    <a rel="nofollow" class="btn btn-purple nav-link active" href="{{ route('get.register')}}">Đăng ký</a>
                </li>
                <li class="nav-item" style="margin-left: 2px; margin-right: 2px;">
                    <a rel="" class="btn btn-purple btn-upload"
                    style=""
                    href="{{ route('get.login')}}">Đăng tin</a>
                </li>
            </ul>
        @endif
    </div>
  </div>
</nav>
