<div class="text-left" style="margin-top: 50px;">
    <ul class="list-unstyled list-inline">
        <li class="list-inline-item align-bottom">
            <h1 class="text-bold me-3" style="font-size: 30px;">Nhà thuê nổi bật</h1>
        </li>
        <li class="list-inline-item">
            <a class="float-end text-bold fst-italic" href="">Xem tất cả<span><i class="fas fa-chevron-right fst-italic ms-1" style="font-size: 11px"></i></span></a>
        </li>
    </ul>
</div>

<div id="carouselHotCard" class="carousel slide" data-bs-ride="none">
    <div class="carousel-indicators" style="bottom: -30px;">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach($rooms ?? [] as $item)
        <a href="{{ route('get.room.detail', ['id' => $item->id, 'slug' => $item->slug]) }}" target="">
            @if ($item === $rooms[0])
            <div class="carousel-item active">
                <div class="row">
                    <div class="container mt-5">
                        <div class="d-flex justify-content-center">
                            <div class="card card-hover border-0 shadow mb-4" style="width: 800px; height: 500px">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <div style="overflow: hidden; height: 500px; position: relative;">
                                            <img src="{{ pare_url_file($item->avatar)}}"
                                            alt="" class="rounded-start" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                                        </div>
                                        {{-- <span class="card-label-left">Căn hộ</span> --}}
                                        <span class="cardhot-label-right">Available</span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body px-4">
                                            <div class="card-body pb-0">
                                                <p class="text-truncate fw-bold text-muted fs-5 mb-1">
                                                    <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                </p>
                                                <p class="text-truncate fw-bold fs-5 mb-1 text-danger">
                                                {{$item->name}}
                                                </p>
                                                <p class="text-left fw-bold h4 my-2">{{ round(($item->price)/1000000, 1) }} tr/tháng</p>
                                                <p class="text-truncate fw-bold text-muted mb-0">{{$item->full_address}}</p>
                                            </div>

                                            <hr style="background-color: hsl(0, 0%, 75%)" />

                                            <div class="card-body d-flex justify-content-around py-1">
                                                <span
                                                ><i class="fas fa-bed me-2 text-muted"></i>
                                                <strong class="me-1">5</strong
                                                ></span
                                                >
                                                <span
                                                ><i class="fas fa-bath me-2 text-muted"></i>
                                                <strong class="me-1">3</strong
                                                ></span
                                                >
                                                <span
                                                ><i class="fas fa-th me-2 text-muted"></i>
                                                <strong class="me-1">{{$item->area}} m<sup>2</sup></strong
                                                ></span
                                                >
                                            </div>

                                            <hr style="background-color: hsl(0, 0%, 75%)" />

                                            {{-- <p class="text-truncate text-muted fs-6 fw-semibold mb-1">
                                                {{$item->name}}
                                            </p> --}}
                                            <div class="text-truncate-container">
                                                <p class="text-truncate-container text-muted fs-6 mb-1">
                                                    {{$item->description}}
                                                </p>
                                            </div>

                                            <div class="card-body float-bottom bg-light">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-md-10">
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
                                                    <div class="col-md-2 mx-auto">
                                                        <button href="#" class="btn-card mb-1">
                                                            <i class="fas fa-share-alt mr-3"></i>
                                                        </button>
                                                        <button href="#" class="btn-card mb-1">
                                                            <i class="fas fa-heart mr-3"></i>
                                                        </button>
                                                        <button href="#" class="btn-card mb-1">
                                                            <i class="fas fa-plus mr-3"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="carousel-item">
                <div class="row">
                    <div class="container mt-5">
                        <div class="d-flex justify-content-center">
                            <div class="card card-hover border-0 shadow mb-4" style="width: 800px; height: 500px">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <div style="overflow: hidden; height: 500px; position: relative;">
                                            <img src="{{ pare_url_file($item->avatar)}}"
                                            alt="" class="rounded-start" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                                        </div>
                                        {{-- <span class="card-label-left">Căn hộ</span> --}}
                                        <span class="cardhot-label-right">Available</span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body px-4">
                                            <div class="card-body pb-0">
                                                <p class="text-truncate fw-bold text-muted fs-5 mb-1">
                                                    <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                </p>
                                                <p class="text-truncate fw-bold fs-5 mb-1 text-danger">
                                                {{$item->name}}
                                                </p>
                                                <p class="text-left fw-bold h4 my-2">{{ round(($item->price)/1000000, 1) }} tr/tháng</p>
                                                <p class="text-truncate fw-bold text-muted mb-0">{{$item->full_address}}</p>
                                            </div>

                                            <hr style="background-color: hsl(0, 0%, 75%)" />

                                            <div class="card-body d-flex justify-content-around py-1">
                                                <span
                                                ><i class="fas fa-bed me-2 text-muted"></i>
                                                <strong class="me-1">5</strong
                                                ></span
                                                >
                                                <span
                                                ><i class="fas fa-bath me-2 text-muted"></i>
                                                <strong class="me-1">3</strong
                                                ></span
                                                >
                                                <span
                                                ><i class="fas fa-th me-2 text-muted"></i>
                                                <strong class="me-1">{{$item->area}} m<sup>2</sup></strong
                                                ></span
                                                >
                                            </div>

                                            <hr style="background-color: hsl(0, 0%, 75%)" />

                                            {{-- <p class="text-truncate text-muted fs-6 fw-semibold mb-1">
                                                {{$item->name}}
                                            </p> --}}
                                            <div class="text-truncate-container">
                                                <p class="text-truncate-container text-muted fs-6 mb-1">
                                                    {{$item->description}}
                                                </p>
                                            </div>

                                            <div class="card-body float-bottom bg-light">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-md-10">
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
                                                    <div class="col-md-2 mx-auto">
                                                        <button href="#" class="btn-card mb-1">
                                                            <i class="fas fa-share-alt mr-3"></i>
                                                        </button>
                                                        <button href="#" class="btn-card mb-1">
                                                            <i class="fas fa-heart mr-3"></i>
                                                        </button>
                                                        <button href="#" class="btn-card mb-1">
                                                            <i class="fas fa-plus mr-3"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </a>
        @endforeach
        {{-- <a href="" target="">
            <div class="carousel-item">
                <div class="row">
                    <div class="container mt-5">
                        <div class="d-flex justify-content-center">
                            <div class="card" style="width: 800px; height: 500px">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img
                                            src="images/hot-card.jpg"
                                            class="img-fluid rounded-start"
                                            alt="..."
                                        />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body" style="margin: 20px;">
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

                                        <hr style="background-color: hsl(0, 0%, 75%)" />



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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="" target="">
            <div class="carousel-item">
                <div class="row">
                    <div class="container mt-5">
                        <div class="d-flex justify-content-center">
                            <div class="card" style="width: 800px; height: 500px">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img
                                            src="images/hot-card.jpg"
                                            class="img-fluid rounded-start"
                                            alt="..."
                                        />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body" style="margin: 20px;">
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

                                        <hr style="background-color: hsl(0, 0%, 75%)" />



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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHotCard" data-bs-slide="prev">
        <i class="fas fa-arrow-left" style="font-size: 40px; color: #424874; " aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHotCard" data-bs-slide="next">
        <i class="fas fa-arrow-right" style="font-size: 40px; color: #424874; " aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </button>
</div>
