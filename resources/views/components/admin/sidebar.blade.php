<div class="wrapper">
    <nav id="sidebar" class="bg-white shadow">
        <div class="sidebar-header">
            {{-- <h3>Bootstrap Slider</h3> --}}
            <a class="" href="{{ route('get.home') }}">
                <img src="{{ url('images/homeus-logo.png') }}" class="mx-auto d-block" alt="Bootstrap" height="50">
            </a>
        </div>
        <ul class="lisst-unstyled components text-left">
            {{-- <p>The Providers</p> --}}
            <li class="">
                <a id="btn-dashboard" rel="nofollow" class="btn btn-purple btn-sidebar {{ \Request::route()->getName() == 'get_admin.home.index' ? 'active' : '' }}" href="{{ route('get_admin.home.index') }}" title="Dashboard">Dashboard</a>
            </li>
            <li>
                <a id="btn-location" rel="nofollow" class="btn btn-purple btn-sidebar {{ \Request::route()->getName() == 'get_admin.location.index' ? 'active' : '' }}" href="{{ route('get_admin.location.index') }}" title="Địa điểm">Địa điểm</a>
            </li>
            <li>
                <a id="btn-category" rel="nofollow" class="btn btn-purple btn-sidebar {{ \Request::route()->getName() == 'get_admin.category.index' ? 'active' : '' }}" href="{{ route('get_admin.category.index') }}" title="Danh mục">Danh mục</a>
            </li>
            <li>
                <a id="btn-user" rel="nofollow" class="btn btn-purple btn-sidebar {{ \Request::route()->getName() == 'get_admin.user.index' ? 'active' : '' }}" href="{{ route('get_admin.user.index') }}" title="Thành viên">Thành viên</a>
            </li>
            <li>
                <a id="btn-room" rel="nofollow" class="btn btn-purple btn-sidebar {{ \Request::route()->getName() == 'get_admin.room.index' ? 'active' : '' }}" href="{{ route('get_admin.room.index') }}" title="Tin đăng nhà thuê">Tin đăng nhà thuê</a>
            </li>
            <li>
                <a id="btn-recharge" rel="nofollow" class="btn btn-purple btn-sidebar {{ \Request::route()->getName() == 'get_admin.recharge.index' ? 'active' : '' }}" href="{{ route('get_admin.recharge.index') }}" title="Nạp tiền">Giao dịch nạp tiền</a>
            </li>
        </ul>
    </nav>

    <div id="content" class="bg-light">
        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn  btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>

                </button>
            </div>
        </nav> --}}
        <nav class="navbar navbar-expand-lg bg-white mb-5" style="box-shadow: 0 4px 10px -9px rgb(52, 50, 50);">
            <a id="sidebarCollapse" class="btn btn-purple text-bold mx-3" rel="nofollow"><i class="fa-solid fa-xmark"></i></a>
            <div class="container container-fluid">
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto"></ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" style="margin-left: 2px; margin-right: 2px;">
                            <div class="btn-group dropstart">
                                <button type="button" class="btn rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                        class="rounded-circle"
                                        alt=""
                                        style="width: 38px; height: 38px">
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-bold" href="#">Admin's name</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Tài khoản của tôi</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ route('get_admin.logout') }}">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('not_container')

        <main class="flex-shrink-0">
            <div class="container">
                @yield('content')
            </div>
        </main>

        @yield('not_container_bottom')

        @include('components.general.button_backtotop')

        @include('components.admin.footer', [
            'container' => 'container'
        ])
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).find('i').toggleClass('fa-xmark').toggleClass('fa-list');
        });
        $('#tableCategory').DataTable({
                language: {
                    info: "Đang hiện từ _START_ đến _END_ trong _TOTAL_ kết quả",
                    lengthMenu: "Hiện _MENU_ kết quả",
                    search: "Tìm kiếm:",
                    paginate: {
                        next: '<span><i class="fa-solid fa-chevron-right"></i></span>',
                        previous: '<span><i class="fa-solid fa-chevron-left"></i></span>'
                    },
                    url: 'dataTables.vi.json'

                }
            });
    });
</script>
