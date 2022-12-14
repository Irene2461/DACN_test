<div class="row mt-4 mb-2 d-flex align-items-center">
    <div class="col-md-8">
        <h1 class="text-bold" style="font-size: 30px; color: #424874;">{{ $room->name }}</h1>
    </div>
    <div class="col-md-4">
        <a class="btn-purple float-end" style="color: #424874 !important; background-color: transparent; border: 2px solid #424874;">Available</a>
    </div>
</div>

<div class="row mb-2 d-flex align-items-center">
    <div class="col-md-8">
        <div class="mb-2">
            <span>
                <i class="fas fa-map-marker-alt me-1 text-muted"></i>
                <a class="form-check-label fs-6 me-3">{{ $room->full_address }}, Phường, Quận, Thành phố</a>
            </span>
        </div>
        <div class="">
            <span>
                <i class="fas fa-dollar-sign me-1 text-muted"></i>
                <a class="form-check-label fs-6 me-3">{{ round(($room->price)/1000000, 1) }} tr/tháng</a>
            </span>
            <span>
                <i class="fas fa-bed me-1 text-muted"></i>
                <a class="form-check-label me-3">5</a>
            </span>
            <span>
                <i class="fas fa-bath me-1 text-muted"></i>
                <a class="form-check-label me-3">3</a>
            </span>
            <span>
                <i class="fas fa-th me-1 text-muted"></i>
                <a class="form-check-label me-3">{{ $room->area }} m<sup>2</sup></a>
            </span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="text-right">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <button href="#" class="btn-addtocart mb-1">
                        <i class="fas fa-share-alt mr-3"></i>
                    </button>
                </li>
                <li class="list-inline-item">
                    <button href="#" class="btn-addtocart mb-1">
                        <i class="fas fa-heart mr-3"></i>
                    </button>
                </li>
                <li class="list-inline-item">
                    <button href="#" class="btn-addtocart mb-1">
                        <i class="fas fa-plus mr-3"></i>
                    </button>
                </li>
            </ul>
            
        </div>
    </div>
</div>