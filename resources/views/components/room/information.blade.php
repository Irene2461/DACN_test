@if ($room->status == 2)
    <style>
        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }
    </style>
    <div class="alert alert-warning" role="alert">
        <p>Tin đăng đã hết hạn, xin vui lòng liên hệ Admin để giải quyết, hoặc click
            <a href="{{ route('get_user.room.pay', $room->id) }}" target="_blank" title="Gia hạn tin">tại đây</a> để gia hạn !</p>
    </div>
@endif
<h1 class="text-bold mb-4" style="font-size: 20px;">Tổng quan</h1>
<p class="form-check-label fs-6">{{ $room->name }}</p>
<p class="form-check-label-normal fs-6">{{ $room->description }}</p>
<hr class="solid my-4" style="border-top: 2px solid #424874; opacity:50%;">
<h1 class="text-bold mb-4" style="font-size: 20px;">Thông tin cơ bản</h1>
<div class="row g-5 d-flex align-items-center">
    <div class="col">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <a class="form-check-label-normal fs-6">Loại hình</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-6">{{ $room->category->name }}</a>
            </div>
        </div>
        <hr style="border-top: 1px dashed #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <a class="form-check-label-normal fs-6">Phòng ngủ</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-6">5</a>
            </div>
        </div>
        <hr style="border-top: 1px dashed #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <a class="form-check-label-normal fs-6">Nội thất</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-6">Đầy đủ</a>
            </div>
        </div>
        <hr style="border-top: 1px dashed #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <a class="form-check-label-normal fs-6">Pháp lý</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-6">Đã xác thực</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <a class="form-check-label-normal fs-6">Diện tích </a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-6">{{ $room->area }} m<sup>2</sup></a>
            </div>
        </div>
        <hr style="border-top: 1px dashed #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <a class="form-check-label-normal fs-6">Phòng tắm</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-6">3</a>
            </div>
        </div>
        <hr style="border-top: 1px dashed #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <a class="form-check-label-normal fs-6">Hướng</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-6">Nam</a>
            </div>
        </div>
        <hr style="border-top: 1px dashed #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <a class="form-check-label-normal fs-6">Giá (/tháng)</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-6">{{ round(($room->price)/1000000, 1) }} tr/tháng</a>
            </div>
        </div>
    </div>
</div>
<hr class="solid my-4" style="border-top: 2px solid #424874; opacity:50%;">
<h1 class="text-bold mb-4" style="font-size: 20px;">Tiện nghi</h1>
<div class="row">
    <div class="col">
        <a class="form-check-label-normal fs-6">
            <span class="fa fa-check-circle me-2"></span>Wifi
        </a>
    </div>
    <div class="col">
        <a class="form-check-label-normal fs-6">
            <span class="fa fa-check-circle me-2"></span>Wifi
        </a>
    </div>
    <div class="col">
        <a class="form-check-label-normal fs-6">
            <span class="fa fa-check-circle me-2"></span>Wifi
        </a>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="form-check-label-normal fs-6">
            <span class="fa fa-check-circle me-2"></span>Wifi
        </a>
    </div>
    <div class="col">
        <a class="form-check-label-normal fs-6">
            <span class="fa fa-check-circle me-2"></span>Wifi
        </a>
    </div>
    <div class="col">
        <a class="form-check-label-normal fs-6">
            <span class="fa fa-check-circle me-2"></span>Wifi
        </a>
    </div>
</div>
<hr class="solid my-4" style="border-top: 2px solid #424874; opacity:50%;">
<h1 class="text-bold mb-4" style="font-size: 20px;">Tiện ích khu vực</h1>
<div class="row mb-4 g-5 d-flex align-items-center">
    <div class="col">
        <div class="row d-flex align-items-center">
            <div class="col">
                <a class="form-check-label fs-6"><span class="fa fa-school fs-4 me-2"></span>Trường học</a>
            </div>
        </div>
        <hr style="border-top: 2px solid #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-8">
                <a class="form-check-label-normal fs-7">Địa điểm</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-7">0.2 km<sup>2</sup></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row d-flex align-items-center">
            <div class="col">
                <a class="form-check-label fs-6"><span class="fa fa-hospital fs-4 me-2"></span>Bệnh viện</a>
            </div>
        </div>
        <hr style="border-top: 2px solid #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-8">
                <a class="form-check-label-normal fs-7">Địa điểm</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-7">0.2 km<sup>2</sup></a>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4 g-5 d-flex align-items-center">
    <div class="col">
        <div class="row d-flex align-items-center">
            <div class="col">
                <a class="form-check-label fs-6"><span class="fa fa-utensils fs-4 me-2"></span>Ăn uống</a>
            </div>
        </div>
        <hr style="border-top: 2px solid #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-8">
                <a class="form-check-label-normal fs-7">Địa điểm</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-7">0.2 km<sup>2</sup></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row d-flex align-items-center">
            <div class="col">
                <a class="form-check-label fs-6"><span class="fa fa-briefcase fs-4 me-2"></span>Văn phòng</a>
            </div>
        </div>
        <hr style="border-top: 2px solid #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-8">
                <a class="form-check-label-normal fs-7">Địa điểm</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-7">0.2 km<sup>2</sup></a>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4 g-5 d-flex align-items-center">
    <div class="col">
        <div class="row d-flex align-items-center">
            <div class="col">
                <a class="form-check-label fs-6"><span class="fa fa-laugh-squint fs-4 me-2"></span>Giải trí</a>
            </div>
        </div>
        <hr style="border-top: 2px solid #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-8">
                <a class="form-check-label-normal fs-7">Địa điểm</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-7">0.2 km<sup>2</sup></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row d-flex align-items-center">
            <div class="col">
                <a class="form-check-label fs-6"><span class="fa fa-shopping-cart fs-4 me-2"></span>Mua sắm</a>
            </div>
        </div>
        <hr style="border-top: 2px solid #A6B1E1;">
        <div class="row d-flex align-items-center">
            <div class="col-8">
                <a class="form-check-label-normal fs-7">Địa điểm</a>
            </div>
            <div class="col text-right">
                <a class="form-check-label fs-7">0.2 km<sup>2</sup></a>
            </div>
        </div>
    </div>
</div>
<hr class="solid my-4" style="border-top: 2px solid #424874; opacity:50%;">
<h1 class="text-bold mb-4" style="font-size: 20px;">Xem trên bản đồ</h1>
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4478530917604!2d106.65194831533417!3d10.776970262129309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec76b47e24b%3A0xba0529aa6b7f600c!2zNDYgVGhpw6puIFBoxrDhu5tjLCBQaMaw4budbmcgOSwgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1669196980764!5m2!1svi!2s"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
