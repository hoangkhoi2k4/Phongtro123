<form class="form" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên danh mục</label>
        <input type="text" class="form-control" name="name" placeholder="Tỉnh location" value="{{old('name', $category -> name ?? "")}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" id="" cols="4" rows="2" class="form-control">{{old('name', $category -> description ?? "")}}</textarea>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" {{ ($category -> status ?? 0) == 1 ? "checked" : ""}} id="flexRadioDefault1" value="1">
            <label class="form-check-label" for="flexRadioDefault1">
                Hiển thị
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" {{ ($category -> status ?? 0) == 0 ? "checked" : ""}} value="0">
            <label class="form-check-label" for="flexRadioDefault2">
                Ẩn
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
</form>