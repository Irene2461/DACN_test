{{-- <hr class="solid" style="border-top: 2px solid #424874; opacity:100%; margin-top: 100px;"> --}}

<div class="text-left" style="margin-top: 100px;">
    <ul class="list-unstyled list-inline">
        <li class="list-inline-item align-bottom">
            <h1 class="text-bold me-3" style="font-size: 30px;">Cho thuê căn hộ</h1>
        </li>
        <li class="list-inline-item">
            <a class="float-end text-bold fst-italic" href="">Xem tất cả<span><i class="fas fa-chevron-right fst-italic ms-1" style="font-size: 11px"></i></span></a>
        </li>
    </ul>
</div>

<div id="carouselCard" class="carousel slide" data-bs-ride="none">
    <div class="carousel-indicators" style="bottom: -30px;">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @for($i = 0; $i < count($roomNew); $i+=3)
        @if($i % 3 == 0)
            @if($i == 0)
        <div class="carousel-item active">
            @else
        <div class="carousel-item">
            @endif
        @endif
            <div class="row">
                @if ($i + 3 <= count($roomNew))
                    @for ($j = $i; $j < $i + 3; $j++)
                        <div class="col-lg-4 col-md-12 mt-4">
                            <div class="container mb-5 d-flex">
                                <a href="{{ route('get.room.detail', ['id' => $roomNew[$j]->id, 'slug' => $roomNew[$j]->slug]) }}">
                                    <div class="card card-hover border-0 shadow" style="width: 400px">
                                        <div style="overflow: hidden; height: 250px; position: relative;">
                                            <img src="{{ pare_url_file($roomNew[$j]->avatar) }}"
                                            alt="" class="card-img-top" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                                        </div>
                                        {{-- <span class="card-label-left">{{ $roomNew[$j]->category_id }}</span> --}}
                                        <span class="card-label-right">Available</span>
                                        <span class="card-label-bottom-left">{{ $roomNew[$j]->id }}</span>
                                        <div class="card-body pb-1">
                                            <p class="text-truncate fw-bold text-muted" style="color: #424874 !important;">
                                                @if ($roomNew[$j]->service_hot > 0)
                                                    @for($k = 1 ; $k <= $roomNew[$j]->service_hot ; $k++)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @endfor
                                                @endif
                                            {{$roomNew[$j]->name}}
                                            </p>
                                            <div class="row my-1 d-flex align-items-center justify-content-end">
                                                <div class="col">
                                                    <p class="text-left fw-bold h5 mb-1">{{ round(($roomNew[$j]->price)/1000000, 1) }} tr/tháng</p>
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
                                                        <strong class="me-0">{{$roomNew[$j]->area}} m<sup>2</sup></strong
                                                        ></span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-truncate text-muted mb-0">
                                                {{$roomNew[$j]->full_address}}
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
                    @endfor
                @else
                    @for ($j = $i; $j < count($roomNew); $j++)
                    <div class="col-lg-4 col-md-12 mt-4">
                        <div class="container mb-5 d-flex">
                            <a href="{{ route('get.room.detail', ['id' => $roomNew[$j]->id, 'slug' => $roomNew[$j]->slug]) }}">
                                <div class="card card-hover border-0 shadow" style="width: 400px">
                                    <div style="overflow: hidden; height: 250px; position: relative;">
                                        <img src="{{ pare_url_file($roomNew[$j]->avatar) }}"
                                        alt="" class="card-img-top" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                                    </div>

                                    {{-- <span class="card-label-left">Căn hộ</span> --}}
                                    <span class="card-label-right">Available</span>
                                    <span class="card-label-bottom-left">{{ $roomNew[$j]->id }}</span>
                                    <div class="card-body pb-1">
                                        <p class="text-truncate fw-bold text-muted" style="color: #424874 !important;">
                                            @if ($roomNew[$j]->service_hot > 0)
                                                @for($k = 1 ; $k <= $roomNew[$j]->service_hot ; $k++)
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @endfor
                                            @endif
                                        {{$roomNew[$j]->name}}
                                        </p>
                                        <div class="row my-1 d-flex align-items-center justify-content-end">
                                            <div class="col">
                                                <p class="text-left fw-bold h5 mb-1">{{ round(($roomNew[$j]->price)/1000000, 1) }} tr/tháng</p>
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
                                                    <strong class="me-0">{{$roomNew[$j]->area}} m<sup>2</sup></strong
                                                    ></span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-truncate text-muted mb-0">
                                            {{$roomNew[$j]->full_address}}
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
                    @endfor
                @endif
            </div>
        </div>
        @endfor
        {{-- <div class="carousel-item">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="container mt-5">
                        <a class="d-flex justify-content-center" href="" target="">
                            <div class="card" style="width: 400px">
                                <img
                                    src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                                    class="card-img-top"
                                    alt="..."
                                />

                                <div class="card-body pb-2">
                                    <p class="fw-bold text-muted small text-uppercase mb-1">
                                    Căn hộ
                                    </p>
                                    <p class="fw-bold h4 mb-1">15.000.000 / tháng</p>
                                    <p class="text-muted mb-0">Đường CMT8</p>
                                </div>

                                <hr style="background-color: hsl(0, 0%, 75%)" />

                                <div class="card-body d-flex justify-content-around pt-2">
                                    <span
                                    ><i class="fas fa-bed me-2 text-muted"></i>
                                    <strong class="me-1">5</strong
                                    ><span class="text-muted">Phòng ngủ</span></span
                                    >

                                    <span
                                    ><i class="fas fa-bath me-2 text-muted"></i>
                                    <strong class="me-1">3</strong
                                    ><span class="text-muted">Phòng tắm</span></span
                                    >
                                </div>
                                <div class="card-body bg-light">
                                    <p class="text-uppercase text-muted small fw-bold">Môi giới</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img
                                            src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                            class="rounded-circle"
                                            alt=""
                                            style="width: 45px; height: 45px"
                                            />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="fw-bold mb-1">Ngọc Hoàng</p>
                                            <p class="text-muted mb-0">503-396-0094</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="container mt-5">
                        <a class="d-flex justify-content-center" href="" target="">
                            <div class="card" style="width: 400px">
                                <img
                                    src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                                    class="card-img-top"
                                    alt="..."
                                />

                                <div class="card-body pb-2">
                                    <p class="fw-bold text-muted small text-uppercase mb-1">
                                    Căn hộ
                                    </p>
                                    <p class="fw-bold h4 mb-1">15.000.000 / tháng</p>
                                    <p class="text-muted mb-0">Đường CMT8</p>
                                </div>

                                <hr style="background-color: hsl(0, 0%, 75%)" />

                                <div class="card-body d-flex justify-content-around pt-2">
                                    <span
                                    ><i class="fas fa-bed me-2 text-muted"></i>
                                    <strong class="me-1">5</strong
                                    ><span class="text-muted">Phòng ngủ</span></span
                                    >

                                    <span
                                    ><i class="fas fa-bath me-2 text-muted"></i>
                                    <strong class="me-1">3</strong
                                    ><span class="text-muted">Phòng tắm</span></span
                                    >
                                </div>
                                <div class="card-body bg-light">
                                    <p class="text-uppercase text-muted small fw-bold">Môi giới</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img
                                            src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                            class="rounded-circle"
                                            alt=""
                                            style="width: 45px; height: 45px"
                                            />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="fw-bold mb-1">Ngọc Hoàng</p>
                                            <p class="text-muted mb-0">503-396-0094</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="container mt-5">
                        <a class="d-flex justify-content-center" href="" target="">
                            <div class="card" style="width: 400px">
                                <img
                                    src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                                    class="card-img-top"
                                    alt="..."
                                />

                                <div class="card-body pb-2">
                                    <p class="fw-bold text-muted small text-uppercase mb-1">
                                    Căn hộ
                                    </p>
                                    <p class="fw-bold h4 mb-1">15.000.000 / tháng</p>
                                    <p class="text-muted mb-0">Đường CMT8</p>
                                </div>

                                <hr style="background-color: hsl(0, 0%, 75%)" />

                                <div class="card-body d-flex justify-content-around pt-2">
                                    <span
                                    ><i class="fas fa-bed me-2 text-muted"></i>
                                    <strong class="me-1">5</strong
                                    ><span class="text-muted">Phòng ngủ</span></span
                                    >

                                    <span
                                    ><i class="fas fa-bath me-2 text-muted"></i>
                                    <strong class="me-1">3</strong
                                    ><span class="text-muted">Phòng tắm</span></span
                                    >
                                </div>
                                <div class="card-body bg-light">
                                    <p class="text-uppercase text-muted small fw-bold">Môi giới</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img
                                            src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                            class="rounded-circle"
                                            alt=""
                                            style="width: 45px; height: 45px"
                                            />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="fw-bold mb-1">Ngọc Hoàng</p>
                                            <p class="text-muted mb-0">503-396-0094</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCard" data-bs-slide="prev">
        <i class="fas fa-arrow-left" style="font-size: 40px; color: #424874; margin-right: 300px;" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCard" data-bs-slide="next">
        <i class="fas fa-arrow-right" style="font-size: 40px; color: #424874; margin-left: 300px;" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </button>
</div>
