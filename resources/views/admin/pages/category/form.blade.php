<form class="form" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label text-bold">Tên danh mục</label>
        <input type="text" class="form-control" name="name" value="{{ old('name', $category->name ?? '') }}"
               aria-describedby="emailHelp" placeholder="Tên danh mục" >
    </div>
    <div class="mb-3">
        <label class="form-label text-bold">Mô tả</label>
        <textarea name="description" id="" cols="4" rows="4" class="form-control">{{ old('name', $category->description ?? '') }}</textarea>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status"
                   {{ ($category->status ?? 0) == 1 ? "checked" : "" }} id="flexRadioDefault1" value="1">
            <label class="form-check-label" for="flexRadioDefault1">
                Hiển thị
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status"
                   {{ ($category->status ?? 0) == 0 ? "checked" : "" }} id="flexRadioDefault2" value="0">
            <label class="form-check-label" for="flexRadioDefault2">
                Ẩn
            </label>
        </div>
    </div>
    <div class="form-group float-end">
        <button type="submit" class="btn btn-primary btn-submit" data-bs-dismiss="modal" style="background: #424874">Lưu dữ liệu</button>
    </div>
</form>
