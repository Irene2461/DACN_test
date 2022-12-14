<section class="popular-posts">
    <div class="section-title">Tin nổi bật</div>
    <div class="posts-listing style-gird">
        @foreach($roomHots ?? [] as $item)
        <div class="col-item">
            <div class="col-item__image">
                <a href="" class="a-img">
                    <img src="{{ pare_url_file($item->avatar) }}" alt="{{ $item->name }}">
                    <span class="images-number">5 ảnh</span>
                    <span class="chothuenhanh-label"></span>
                    <span class="post-save js-btn-save">
                        <i></i>
                    </span>
                </a>
            </div>
            <div class="col-item__info">
                <div class="post-title">
                    <span class="star star-5"></span>
                    <a href="#">{{ $item->name }}</a>
                </div>
                <div class="post-price">3 triệu/tháng</div>
                <div class="post-acreage fz-13">22m²</div>
                <div class="post-location fz-13">
                    <a href="#" title="Cho thuê Phòng trọ Quận Gò Vấp, Hồ Chí Minh">{{ $item->full_address }}</a>
                </div>
                <time class="post-time fz-13">Cập nhật: 2 giờ trước</time>
                <span class="post-hot"></span>
            </div>
        </div>
        @endforeach
    </div>
</section>