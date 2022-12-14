@extends('frontend.layouts.app_master')
@section('title', 'Trang chủ')
@push('css')
    <link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
    <h1 class="my-4 text-bold" style="font-size: 30px;">Giới thiệu</h1>
    <section class="grid post-category">
        <div class="container clearfix">
            <section class="section" style="padding: 20px; border: 0; box-shadow: 0 0 30px 10px rgb(0 0 0 / 3%);">
                <div class="section-content">
                    <p>ĐỪNG ĐỂ PHÒNG TRỐNG THÊM BẤT CỨ NGÀY NÀO!, đăng tin ngay tại Homeus.vn và tất cả các vấn đề sẽ được giải quyết một cách nhanh nhất.</p>
                    <p>ƯU ĐIỂM Homeus:</p>
                    <p><i class="fa-solid fa-check-double me-2"></i><strong>Top đầu google</strong> về từ khóa: cho thuê phòng trọ, thuê phòng trọ, phòng trọ hồ chí minh, phòng trọ hà nội, thuê nhà nguyên căn, cho thuê căn hộ, tìm người ở ghép…với lưu lượng truy cập (traffic) cao nhất trong lĩnh vực. </p>
                    <p><i class="fa-solid fa-check-double me-2"></i> Homeus.vn tự hào có lượng dữ liệu bài đăng lớn nhất trong lĩnh vực cho thuê phòng trọ với hơn <strong>103.348</strong> tin trên hệ thống và tiếp tục tăng.</p>
                    <p><i class="fa-solid fa-check-double me-2"></i> Homeus.vn tự hào có số lượng người dùng lớn nhất trong lĩnh vực cho thuê phòng trọ với hơn <strong>300.000</strong> khách truy cập thường xuyên và hơn <strong>2.500.000</strong> lượt pageview mỗi tháng.</p>
                    <p><i class="fa-solid fa-check-double me-2"></i> Homeus.vn tự hào được sự tin tưởng sử dụng của hơn <strong>116.998 khách hàng</strong> là chủ nhà, đại lý, môi giới đăng tin thường xuyên tại website.</p>
                    <p><i class="fa-solid fa-check-double me-2"></i> Homeus.vn tự hào ghi nhận <strong>88.879</strong> giao dịch thành công khi sử dụng dịch vụ tại web, mức độ <strong>hiệu quả đạt xấp xỉ 85% tổng tin đăng</strong>.</p>
                </div>
            </section>
        </div>
    </section>
    <h1 class="my-4 text-bold" style="font-size: 30px;">Bảng giá dịch vụ</h1>
    @include('components.recharge.price_table')
    <h1 class="my-4 text-bold" style="font-size: 30px;">Tin minh họa</h1>
    <h1 id="scrollspyHeading1" class="my-4 text-bold text-center" style="font-size: 20px;">Tin VIP đặc biệt</h1>
    <div class="d-flex justify-content-center">
        <div style="overflow: hidden; width: 800px; position: relative;">
            <img class="rounded" src="{{ url('images/price_demo/vip_dacbiet1.png') }}"
            alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div style="overflow: hidden; width: 350px; position: relative;">
            <img class="rounded" src="{{ url('images/price_demo/vip_dacbiet2.png') }}"
            alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h1 id="scrollspyHeading2" class="my-4 text-bold text-center" style="font-size: 20px;">Tin VIP 1</h1>
            <div class="d-flex justify-content-center">
                <div style="overflow: hidden; width: 350px; position: relative;">
                    <img class="rounded" src="{{ url('images/price_demo/vip_1.png') }}"
                    alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h1 id="scrollspyHeading3" class="my-4 text-bold text-center" style="font-size: 20px;">Tin VIP 2</h1>
            <div class="d-flex justify-content-center">
                <div style="overflow: hidden; width: 350px; position: relative;">
                    <img class="rounded" src="{{ url('images/price_demo/vip_2.png') }}"
                    alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h1 id="scrollspyHeading4" class="my-4 text-bold text-center" style="font-size: 20px;">Tin VIP 3</h1>
            <div class="d-flex justify-content-center">
                <div style="overflow: hidden; width: 350px; position: relative;">
                    <img class="rounded" src="{{ url('images/price_demo/vip_3.png') }}"
                    alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h1 id="scrollspyHeading5" class="my-4 text-bold text-center" style="font-size: 20px;">Tin thường</h1>
            <div class="d-flex justify-content-center">
                <div style="overflow: hidden; width: 350px; position: relative;">
                    <img class="rounded" src="{{ url('images/price_demo/thuong.png') }}"
                    alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    @include('components.home.carousel_review')

@stop

@section('not_container_bottom')
    @include('components.whyus')
@stop

@push('script')
    <script src="/js/home.js"></script>
@endpush
