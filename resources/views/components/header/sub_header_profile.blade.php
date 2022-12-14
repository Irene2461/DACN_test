<nav class="border navbar navbar-expand-lg">
  <div class="container container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarProfile" aria-controls="navbarProfile" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarProfile">
        <ul class="navbar-nav me-auto">
            <li class="nav-item me-3">
                <a class="nav-link btn-nav-profile{{ \Request::route()->getName() == 'get_user.profile.index' ? '-active' : '' }}" aria-current="page" href="{{ route('get_user.profile.index') }}">
                    Tài khoản của tôi
                </a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link btn-nav-profile{{ \Request::route()->getName() == 'get_user.room.index' ? '-active' : '' }}" aria-current="page" href="{{ route('get_user.room.index') }}">
                    Nhà thuê của tôi
                </a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link btn-nav-profile" aria-current="page" href="#">
                    Nhà thuê yêu thích
                </a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link btn-nav-profile{{ \Request::route()->getName() == 'get_user.recharge.history' ? '-active' : '' }}" aria-current="page" href="{{ route('get_user.recharge.history') }}">
                    Nạp tiền
                </a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link btn-nav-profile{{ \Request::route()->getName() == 'get_user.payment.history' ? '-active' : '' }}" aria-current="page" href="{{ route('get_user.payment.history') }}">
                    Thanh toán
                </a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link btn-nav-profile" aria-current="page" href="#">
                    Chuyên viên yêu thích
                </a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link btn-nav-profile" aria-current="page" href="#">
                    Lưu tìm kiếm
                </a>
            </li>
        </ul>        
    </div>
  </div>
</nav>