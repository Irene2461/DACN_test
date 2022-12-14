<form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 30px;">
        <div class="card-body mt-2 mb-3" style="margin-left: 20px; margin-right: 20px;">
            <h1 class="text-bold mb-4" style="font-size: 20px;">Thông tin cơ bản</h1>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Tỉnh / Thành phố</label>
                        <select class="form-control js-select2-search" name="city_id" id="city_id" data-placeholder="Click chọn tỉnh thành">
                            <option value="0">Chọn tỉnh thành</option>
                            @foreach($cities ?? [] as $item)
                                <option value="{{ $item->id }}" {{ $item->id == ($room->city_id ?? 0) ? "selected" : ""}}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->first('city_id'))
                            <span class="text-error">{{ $errors->first('city_id') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Quận huyện</label>
                        
                        <select class="form-control js-select2-search" {{ ($room->district_id ?? 0) ? "" : "disabled" }} name="district_id" id="district_id" data-placeholder="Click chọn quận huyện">
                            <option value="0">Chọn quận huyện</option>
                            @foreach($districts->where('parent_id', $room->city_id ?? 0) ?? [] as $item)
                                <option value="{{ $item->id }}" {{ $item->id == ($room->district_id ?? 0) ? "selected" : ""}}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        
                        @if ($errors->first('district_id'))
                            <span class="text-error">{{ $errors->first('district_id') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Phường xã</label>
                        <select class="form-control js-select2-search" {{ ($room->wards_id ?? 0) ? "" : "disabled" }} name="wards_id" id="wards_id" data-placeholder="Click chọn phường xã">
                            <option value="0">Chọn phường xã</option>
                            @foreach($wards->where('parent_id', $room->district_id ?? 0) ?? [] as $item)
                                <option value="{{ $item->id }}" {{ $item->id == ($room->wards_id ?? 0) ? "selected" : ""}}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->first('wards_id'))
                            <span class="text-error">{{ $errors->first('wards_id') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Số nhà</label>
                        <input type="text" name="apartment_number" class="form-control" placeholder="Số nhà" value="{{ $room->apartment_number ?? "" }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="name" class="form-label text-bold">Địa chỉ chính xác</label>
                    <input type="text" name="full_address" class="form-control" placeholder="Địa chỉ chính xác" value="{{ $room->full_address ?? "" }}">
                    @if ($errors->first('full_address'))
                        <span class="text-error">{{ $errors->first('full_address') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 30px;">
        <div class="card-body mt-2 mb-3" style="margin-left: 20px; margin-right: 20px;">
            <h1 class="text-bold mb-4" style="font-size: 20px;">Thông tin mô tả</h1>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Loại chuyên mục</label>
                        <select class="form-control" name="category_id" id="" data-placeholder="Click chọn danh mục">
                            @foreach($categories ?? [] as $item)
                                <option value="{{ $item->id }}" {{ $item->id == ($room->category_id ?? 0) ? "selected" : ""}}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>            
            </div>
            <div class="row mb-4">
                <div class="form-group">
                    <label for="name" class="form-label text-bold">Tiêu dề</label>
                    <input type="text" name="name" class="form-control" placeholder="Tiêu đề" value="{{ $room->name ?? "" }}">
                    @if ($errors->first('name'))
                        <span class="text-error">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
            <div class="row mb-4">
                <div class="form-group">
                    <label for="name" class="form-label text-bold">Mô tả nội dung</label>
                    <textarea name="description" class="form-control" style="height: 175px;" id="" cols="30" rows="3">{{ $room->description ?? "" }}</textarea>
                    @if ($errors->first('description'))
                        <span class="text-error">{{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="form-label text-bold me-2">Hình ảnh nhà thuê</label>
                            @if (isset($room))
                                <a href="{{ route('get_user.room.image.edit', $room->id) }}" class="fw-bold fst-italic">Chỉnh sửa video và hình ảnh đã đăng <i class="fa-solid fa-pen-to-square fst-italic"></i></a>
                            @endif
                        </div>
                        <div class="col-md-6 float-end">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="float-end text-bold fst-italic" title=""><ins>Tiêu chuẩn hình ảnh</ins></a>
                        </div>
                    </div>                    
                    {{-- <input type="file" name="avatar"> --}}
                    
                    <label class="fw-bold">Ảnh đại diện</label>
                    <input type="file" class="form-control m-2" style="height: 38px;" name="avatar">
                    @if (isset($room))
                        <label class="fw-bold">Đăng thêm video và ảnh nhà thuê</label>
                    @else
                    <label class="fw-bold">Video và hình ảnh nhà thuê</label>
                    @endif
                    <input type="file" class="form-control m-2" style="height: 38px;" name="images[]" multiple>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 30px;">
        <div class="card-body mt-2 mb-3" style="margin-left: 20px; margin-right: 20px;">
            <h1 class="text-bold mb-4" style="font-size: 20px;">Thông tin chi tiết</h1>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Mức giá ( / tháng)</label>
                        <input type="text" name="price" class="form-control" placeholder="Mức giá" value="{{ number_format($room->price ?? 0,0,',','.') ?? 0 }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Diện tích (m<sup>2</sup>)</label>
                        <input type="text" name="area" class="form-control" placeholder="Diện tích" value="{{ $room->area ?? 0 }}">
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Số phòng ngủ</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Số phòng tắm</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Số tầng</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="name" class="form-label text-bold">Tiện ích</label>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" style="padding: 0.5px;"/>
                                <label class="form-check-label" for="loginCheck"> Wifi </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" style="padding: 0.5px;"/>
                                <label class="form-check-label" for="loginCheck"> Bãi đổ xe </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" style="padding: 0.5px;"/>
                                <label class="form-check-label" for="loginCheck"> Cho phép thú cưng </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" style="padding: 0.5px;"/>
                                <label class="form-check-label" for="loginCheck"> Bảo vệ </label>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" style="padding: 0.5px;"/>
                                <label class="form-check-label" for="loginCheck"> Nội thất có sẵn </label>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="name" class="form-label text-bold">Thông tin bổ sung</label>
                    <textarea class="form-control" style="height: 100px;" id="" cols="30" rows="3">{{ $room->description ?? "" }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 30px;">
        <div class="card-body mt-2 mb-3" style="margin-left: 20px; margin-right: 20px;">
            <h1 class="text-bold mb-4" style="font-size: 20px;">Thông tin liên hệ</h1>
            <div class="row">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="" style="padding: 0.5px;"/>
                        <label class="form-check-label" for="loginCheck"> Bạn là chủ nhà </label>
                    </div>
                </div>                
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Họ và tên</label>
                        <input type="text" class="form-control" value="{{ \Auth::user()->name }}" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Số điện thoại</label>
                        <input type="text" class="form-control" value="{{ \Auth::user()->phone }}" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="form-label text-bold">Email</label>
                        <input type="text" class="form-control" value="{{ \Auth::user()->email }}" disabled>
                    </div>
                </div>
            </div>            
            <div class="row">
                <div class="form-group">
                    <label for="name" class="form-label text-bold">Lời nhắn</label>
                    <textarea class="form-control" style="height: 100px;" id="" cols="30" rows="3">{{ $room->description ?? "" }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group shadow float-end" style="margin-bottom: 50px;">
        @if (isset($room))
            <button type="submit" class="btn btn-primary btn-submit text-bold" style="background: #424874">Cập nhật</button>
        @else
            <button type="submit" class="btn btn-primary btn-submit text-bold" style="background: #424874">Đăng tin</button>
        @endif
    </div>
</form>
{{-- @if (count($room->images)>0)
    <p>Images:</p>
    @foreach ($room->images as $img)
    <form action="" method="post">
        <button class="btn text-danger">X</button>
        @csrf
        @method('delete')
        </form>
    <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
    @endforeach
@endif --}}


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="padding-left: 30px; padding-right: 30px;">
            <div class="modal-header">
                <h1 class="modal-title text-bold mt-3" style="font-size: 20px;">Tiểu chuẩn hình ảnh</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Nhằm đảm bảo chất lượng tin đăng và tăng khả năng tiếp cận khách hàng. Chúng tôi khuyến khích các tiêu chuẩn hình ảnh sau:</p>
                <p>- Hình ảnh KHÔNG chứa thông tin liên hệ, logo của các thương hiệu khác.</p>
                <p>- Hình ảnh rõ nét, không có đường viền.</p>
                <p>- Chụp đầy đủ các khu vực phòng (phòng khách, phòng bếp, phòng ngủ, phòng tắm...), ảnh mặt tiền căn nhà, sơ đồ thửa đất (trang 3 sổ hồng).</p>
            </div>
            <div class="modal-footer">
                <div class="form-group float-end">
                    <button type="submit" class="btn btn-primary btn-submit" data-bs-dismiss="modal" style="background: #424874">Đã hiểu</button>
                </div>
            </div>
        </div>
        
    </div>
</div>   

<script>
    var URL_LOAD_DISTRICT = '{{ route("get_user.load.district") }}'
    var URL_LOAD_WARD = '{{ route("get_user.load.wards") }}'
</script>
@push('script')
    <script>
        $(document).ready(function () {
            $('.js-select2-search').select2();
        });
    </script>
    <script src="/js/user_room.js"></script>
    <script>
        $(function (){
        
            $("#city_id").change(function(){
                document.getElementById("wards_id").value = 0;
                console.log(document.getElementById("wards_id").value);
                $('#wards_id').select2().trigger('change');
                document.getElementById("wards_id").setAttribute("disabled","disabled");
                let $this = $(this);
                let city_id = $this.val();
                if (city_id == 0){
                    document.getElementById("district_id").setAttribute("disabled","disabled")
                    document.getElementById("wards_id").setAttribute("disabled","disabled")
                }else{
                    document.getElementById("district_id").removeAttribute("disabled")
                }
                // console.log("----------", city_id);
                $.ajax({
                    url: URL_LOAD_DISTRICT,
                    data: {
                        city_id: city_id
                    },
                    
                })
                .done(function(data) {
                    if (data){
                        let options = `<option value="0">Chọn quận huyện</option>`;
                        // let options = ``;
                        data.map((item, index) => {
                            options += `<option value="${ item.id }">${item.name}</option>`;
                        })
                        $("#district_id").html(options);
                    }

                    // console.log("---------",data);
                    
                });
            })
            $("#district_id").change(function(){
                let $this = $(this);
                let district_id = $this.val();
                // console.log("----------", district_id);
                if (district_id == 0){
                    document.getElementById("wards_id").setAttribute("disabled","disabled")
                }else{
                    document.getElementById("wards_id").removeAttribute("disabled")
                }
                $.ajax({
                    url: URL_LOAD_WARD,
                    data: {
                        district_id: district_id
                    },
                    
                })
                .done(function(data) {
                    if (data){
                        let options = `<option value="0">Chọn phường xã</option>`;
                        // let options = ``;
                        data.map((item, index) => {
                            options += `<option value="${ item.id }">${item.name}</option>`;
                        })
                        $("#wards_id").html(options);
                    }

                    // console.log("--------- phuong xa",data);
                    
                });
            })
        })
    </script>
@endpush