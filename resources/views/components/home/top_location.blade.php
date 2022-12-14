<section class="top-location">
    <div class="text-left mb-4">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item align-bottom">
                <h1 class="text-bold me-3" style="font-size: 30px;">Khu vực nổi bật</h1>
            </li>
            <li class="list-inline-item">
                {{-- <a class="float-end text-bold fst-italic" href="">Xem tất cả<span><i class="fas fa-chevron-right fst-italic ms-1" style="font-size: 11px"></i></span></a> --}}
            </li>
        </ul>    
    </div>
    <div class="row d-flex justify-content-center">
        @foreach ($locationsHot ?? [] as $item)
        <div class="col-md-3 d-flex justify-content-center">
            <a class="d-flex justify-content-center" href="{{ route('get.room.by_location',['id', $item->id, 'slug', $item->slug]) }}" title="Cho thuê phòng trọ {{$item->name}}">
                <div class="card card-hover border-0 shadow" style="width: 200px;">
                    <div style="overflow: hidden; height: 150px; position: relative;">
                        <img src="{{ pare_url_file($item->avatar) }}" alt="" class="card-img-top" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                    </div>
                    <div class="card-body py-2 d-flex justify-content-center">
                        <a class="form-check-label" href="{{ route('get.room.by_location',['id', $item->id, 'slug', $item->slug]) }}" title="Cho thuê phòng trọ {{$item->name}}">{{$item->name}}</a>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>

{{-- <section class="top-location">
    <div class="top-location__header">
        <h1 class="page-h1">Cho thuê phòng trọ, cho thuê nhà trọ, tìm phòng trọ</h1>
        <p class="page-description">Cho thuê phòng trọ, nhà trọ số 1 Việt Nam - Website đăng tin cho thuê phòng trọ, tìm
            phòng trọ nhanh, hiệu quả với hơn 70.000+ tin đăng và 2.000.000 lượt xem mõi tháng.</p>
    </div>
    <div class="top-location__body">
        <div class="body-title">
            Khu vực nổi bật
        </div>
        <div class="location-list">
            @foreach ($locationsHot ?? [] as $item)
                <a class="location-item city-1" href="{{ route('get.room.by_location',['id', $item->id, 'slug', $item->slug]) }}" title="Cho thuê phòng trọ {{$item->name}}">
                    <img src="{{ url('images/location_hcm.jpg') }}" alt="">
                    <span class="location-cat">Phòng trọ <span class="location-name">{{$item->name}}</span></span>
                </a>
            @endforeach
        </div>
    </div>
</section> --}}
