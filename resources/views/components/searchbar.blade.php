<div id="searchbar" class="shadow bg-light my-4" style="border-radius: 20px">
    <form role="search" method="GET" action="{{ route('get.room.search') }}" class="searchform js-form-submit-data bg-light rounded-pill">
        <div class="search_field" style="justify-content: space-between">
            <style>
                .search_field_item {
                    width: 100% !important;
                }
                .select2 {
                    width:100% !important;
                }
            </style>
            <div class="search_field_item">
                <label class="form-check-label">Loại tin</label>
                <select id="search_room_type" class="js-select2 js-not-search" name="category_id">
                    <option value="">Tất cả</option>
                    @foreach($categoriesGlobal ?? [] as $item)
                        <option value="{{ $item->id }}" {{ Request::get('category_id') == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="search_field_item">
                <label class="form-check-label">Địa điểm</label>
                <div class="dropdown">
                    <button class="btn btn-dropdown-search dropdown-toggle btn-block" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        Địa điểm
                    </button>
                    <div class="dropdown-menu btn-block">
                        <form class="">
                            <div class="">
                                <select id="city_id" class="js-select2-search" name="location_city_id" tabindex="-1" aria-hidden="true">
                                    <option value="0">Tỉnh/ Thành phố</option>
                                    @foreach($locationsCity ?? [] as $item)
                                        <option value="{{ $item->id }}" {{ Request::get('location_city_id') == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="">
                                <select id="district_id" class="js-select2-search" disabled name="location_district_id" tabindex="-1" aria-hidden="true">
                                    <option value="0">Quận/ huyện</option>
                                    @foreach($locationsDistrict ?? [] as $item)
                                        <option value="{{ $item->id }}" {{ Request::get('location_district_id') == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="">
                                <select id="wards_id" class="js-select2-search" disabled name="location_wards_id" tabindex="-1" aria-hidden="true">
                                    <option value="0">Phường/ xã</option>
                                    @foreach($locationsWards ?? [] as $item)
                                        <option value="{{ $item->id }}" {{ Request::get('location_wards_id') == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="search_field_item">
                <label class="form-check-label">Khoảng giá</label>
                <select class="js-select2 js-not-search" name="price">
                    <option value="" >Chọn mức giá</option>
                    @foreach(config('config_search.price') as $key =>  $item)
                        <option value="{{ $key }}" {{ Request::get('price') == $key ? "selected" : "" }}>{{ $item }}</option>
                    @endforeach
                </select>
            </div>
            <div class="search_field_item">
                <label class="form-check-label">Diện tích</label>
                <select id="search_dientich" name="area" class="js-select2 js-not-search">
                    <option value="">Chọn diện tích</option>
                    @foreach(config('config_search.area') as $key =>  $item)
                        <option value="{{ $key }}" {{ Request::get('area') == $key ? "selected" : "" }}>{{ $item }}</option>
                    @endforeach
                </select>
            </div>
            <div class="search_field_item_submit">
                <label class="form-check-label mb-item-label">&nbsp;</label>
                <div>
                    <button type="submit" class="btn btn-primary ms-4 me-2" style="background: #424874">Lọc tin</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    var URL_LOAD_DISTRICT = '{{ route("get.load.district") }}'
    var URL_LOAD_WARD = '{{ route("get.load.wards") }}'
</script>
@push('script')
    <script>
        $(document).ready(function () {
            $('.js-select2-search').select2();
        });
    </script>
    <script>
        $(function (){
            $("#city_id").change(function(){
                document.getElementById("wards_id").value = 0;
                console.log(document.getElementById("wards_id").value);
                $('#wards_id').select2().trigger('change');
                document.getElementById("wards_id").setAttribute("disabled","disabled");
                let $this = $(this);
                let city_id = $this.val();
                if (city_id < 1){
                    document.getElementById("district_id").setAttribute("disabled","disabled")
                    document.getElementById("wards_id").setAttribute("disabled","disabled")
                }else{
                    document.getElementById("district_id").removeAttribute("disabled")
                }
                console.log("----------", city_id);
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

                    console.log("---------",data);
                    
                });
            })
            $("#district_id").change(function(){
                let $this = $(this);
                let district_id = $this.val();
                console.log("----------", district_id);
                if (district_id < 1){
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

                    console.log("--------- phuong xa",data);
                    
                });
            })
        })
    </script>
@endpush

{{-- <div id="searchbar">
    <form role="search" method="GET" action="{{ route('get.room.search') }}" class="searchform js-form-submit-data">
        <div class="search_field" style="justify-content: space-between">
            <style>
                .search_field_item {
                    width: 100% !important;
                }
            </style>
            <label class="">Example</label>
            <select class="js-select2" name="state">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
            </select>
            <div class="search_field_item search_field_item_loaitin">
                <label class="search_field_item_label">Loại tin</label>
                <select id="search_room_type" class="form-control js_select2_room_type" name="category_id">
                    <option value="">Tất cả</option>
                    @foreach($categoriesGlobal ?? [] as $item)
                        <option value="{{ $item->id }}" {{ Request::get('category_id') == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="search_field_item search_field_item_tinhthanh">
                <label class="search_field_item_label">Tỉnh thành</label>
                <select id="search_city" class="form-control tinh-tp js_select2_tinhthanh js-select-tinhthanhpho" name="location_city_id" tabindex="-1" aria-hidden="true">
                    <option value="">Tất cả</option>
                    @foreach($locationsCity ?? [] as $item)
                        <option value="{{ $item->id }}" {{ Request::get('location_city_id') == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
           <div class="search_field_item search_field_item_quanhuyen">
               <label class="search_field_item_label">Quận huyện</label>
               <select class="form-control js_select2_quanhuyen js-select-quanhuyen select2-hidden-accessible"
                   name="quan" data-current="" tabindex="-1" aria-hidden="true">
                   <option value="0">Tất cả</option>
               </select>
           </div>
           <div class="search_field_item search_field_item_duongpho">
               <label class="search_field_item_label">Đường phố</label>
               <select name="duong" class="form-control js_select2_duongpho js-select-duong select2-hidden-accessible" data-current="" tabindex="-1" aria-hidden="true">
                   <option value="0">Tất cả</option>
               </select>
           </div>
            <div class="search_field_item search_field_item_mucgia">
                <label class="search_field_item_label">Khoảng giá</label>
                <select class="form-control price js_select2_price" name="price">
                    <option value="" >Chọn mức giá</option>
                    @foreach(config('config_search.price') as $key =>  $item)
                        <option value="{{ $key }}" {{ Request::get('price') == $key ? "selected" : "" }}>{{ $item }}</option>
                    @endforeach
                </select>
            </div>
            <div class="search_field_item search_field_item_dientich">
                <label class="search_field_item_label">Diện tích</label>
                <select id="search_dientich" name="area" class="form-control js_select2_acreage">
                    <option value="">Chọn diện tích</option>
                    @foreach(config('config_search.area') as $key =>  $item)
                        <option value="{{ $key }}" {{ Request::get('area') == $key ? "selected" : "" }}>{{ $item }}</option>
                    @endforeach
                </select>
            </div>
            <div class="search_field_item search_field_item_submit">
                <label class="search_field_item_label mb-item-label">&nbsp;</label>
                <div>
                    <button type="submit" class="btn btn-default btn_search_box form-control"> Lọc tin </button>
                </div>
            </div>
        </div>
    </form>
</div> --}}

