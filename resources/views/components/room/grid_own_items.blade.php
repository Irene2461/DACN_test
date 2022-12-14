@if($rooms->total())
    <div class="row mb-5 d-flex align-items-center">
        <div class="col-md-6">
            <div class="form-check-label">Tìm thấy {{$rooms->total()}} kết quả.</div>
        </div>
        <div class="col-md-2 d-flex justify-content-center">
            <select class="form-select" aria-label="Sort select">
                <option value="0" selected>Mặc định</option>
                <option value="1">Mới nhất</option>
                <option value="2">Giá tăng dần</option>
                <option value="3">Giá giảm dần</option>
            </select>
        </div>
        <div class="col-md-2 d-flex justify-content-center">
            <select class="form-select" aria-label="Number show select">
                <option value="0" selected>9 / trang</option>
                <option value="1">12 / trang</option>
                <option value="2">15 / trang</option>
                <option value="3">18 / trang</option>
                <option value="4">Tất cả</option>
            </select>
        </div>
        <div class="col-md-2 d-flex justify-content-center">
            <select class="form-select" aria-label="Show select">
                <option value="0" selected>Grid</option>
                <option value="1">List</option>
            </select>
        </div>
    </div>
    <div class="row mb-4">
        @foreach($rooms ?? [] as $item)
            @include('components.room._inc_grid_own_item', ['item' => $item])
        @endforeach
    </div>
    {{$rooms->links('components.pagination')}}
@else
    <div class="my-5 form-check-label text-center fs-4">Bạn chưa có nhà thuê nào.</div>    
@endif