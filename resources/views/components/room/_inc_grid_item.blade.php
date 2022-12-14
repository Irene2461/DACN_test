<div class="col-lg-4 col-md-12 mb-4">
    <div class="container mb-5 d-flex">
        <a href="{{ route('get.room.detail', ['id' => $item->id, 'slug' => $item->slug]) }}">
            <div class="card card-hover border-0 shadow" style="width: 400px">
                <div style="overflow: hidden; height: 250px; position: relative;">
                    <img src="{{ pare_url_file($item->avatar) }}"
                    alt="" class="card-img-top" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                </div>
                <span class="card-label-left">{{ $item->category->name }}</span>
                <span class="card-label-right">Available</span>
                <span class="card-label-bottom-left">{{ $item->id }}</span>
                <div class="card-body pb-1">
                    @if ($item->service_hot == 5)
                        <p class="text-truncate fw-bold text-danger">
                            @if ($item->service_hot > 0)
                                @for($k = 1 ; $k <= $item->service_hot ; $k++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @endfor
                            @endif
                            {{$item->name}}
                        </p>
                    @elseif ($item->service_hot <= 1)
                        <p class="text-truncate fw-bold text-mute">
                            {{$item->name}}
                        </p>
                    @else
                        <p class="text-truncate fw-bold" style="color: #424874;">
                            @if ($item->service_hot > 0)
                                @for($k = 1 ; $k <= $item->service_hot ; $k++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @endfor
                            @endif
                            {{$item->name}}
                        </p>
                    @endif
                    <div class="row my-1 d-flex align-items-center justify-content-end">
                        <div class="col">
                            <p class="text-left fw-bold h5 mb-1">{{ round(($item->price)/1000000, 1) }} tr/tháng</p>
                        </div>
                        <div class="col-auto">
                            <div class="d-flex justify-content-end">
                                <span
                                ><i class="fas fa-bed text-muted"></i>
                                <strong class="me-3">5</strong
                                ></span
                                >
                                <span
                                ><i class="fas fa-bath text-muted"></i>
                                <strong class="me-3">3</strong
                                ></span
                                >
                                <span
                                ><i class="fas fa-th text-muted"></i>
                                <strong class="me-0">{{$item->area}} m<sup>2</sup></strong
                                ></span
                                >
                            </div>
                        </div>
                    </div>
                    <p class="text-truncate text-muted mb-0">
                        {{$item->full_address}}
                    </p>
                </div>
                <div class="card-body bg-light pb-1">
                    <div class="">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img
                                        src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                        class="rounded-circle"
                                        alt=""
                                        style="width: 35px; height: 35px"
                                        />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="fw-bold">Ngọc Hoàng</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item float-end mt-2">
                                <a class="" href="#">
                                    <button class="btn-card">
                                        <i class="fas fa-share-alt"></i>
                                    </button>
                                </a>
                                <a class="" href="#">
                                    <button class="btn-card">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </a>
                                <a href="">
                                    <button class="btn-card">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

{{-- <div class="post-item bd-red">
    <div class="post-item__image">
        <a href="{{ route('get.room.detail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="a-img">
            <img src="{{ pare_url_file($item->avatar) }}" alt="{{ $item->name }}">
            <span class="images-number">5 ảnh</span>
            <span class="post-save js-btn-save">
                <i></i>
            </span>
        </a>
    </div>
    <div class="post-item__info">
        <div class="post-title">
            <span class="star star-5"></span>
            <a href="{{ route('get.room.detail', ['id' => $item->id, 'slug' => $item->slug]) }}" title="{{ $item->name }}">{{ $item->name }}</a>
        </div>
        <div class="meta-salry-time">
            <div class="post-price">{{ number_format($item->price,0,',','.') }} vnđ</div>
            <div class="post-time fz-13">Cập nhật: {{ $item->updated_at }}</div>
        </div>
        <div class="meta-acreage-location">
            <span class="post-acreage fz-13">{{ $item->area }}m²</span>
            <span class="post-location">
                <a href="#" title="{{ $item->full_address }}">{{ $item->full_address }}</a>
            </span>
        </div>
        <span class="post-hot"></span>
        <p class="post-summary">
            {{ $item->description }}
        </p>
    </div>
</div> --}}
