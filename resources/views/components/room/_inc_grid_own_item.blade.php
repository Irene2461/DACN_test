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
                    <p class="text-truncate fw-bold text-muted">
                        {{$item->name}}
                    </p>
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
                <hr class="my-0 py-0" style="background-color: hsl(0, 0%, 75%)" />
                <div class="card-body my-0 py-2 d-flex justify-content-around">
                    <p class="text-truncate text-muted my-0 py-0">
                        {{ $item->created_at }}
                    </p>
                    <p class="text-truncate text-muted my-0 py-0">
                        {{ $item->created_at }}
                    </p>
                </div>
                <div class="card-body my-0 py-2 bg-light d-flex justify-content-center">
                    @if ($item->status == \App\Models\Room::STATUS_ACTIVE)
                        <a class="mx-5" href="#">
                            <button class="btn-card mb-1">
                                <i class="fas fa-eye-slash"></i>
                            </button>
                        </a>
                    @endif
                    @if ($item->status == \App\Models\Room::STATUS_EXPIRED)
                        <a class="mx-5" href="{{ route('get_user.room.pay', $item->id) }}">
                            <button class="btn-card mb-1">
                                <i class="fas fa-redo"></i>
                            </button>
                        </a>
                    @endif
                    @if ($item->status <= \App\Models\Room::STATUS_EXPIRED)
                        <a class="mx-5" href="{{ route('get_user.room.update', $item->id) }}">
                            <button class="btn-card mb-1">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>
                    @endif
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