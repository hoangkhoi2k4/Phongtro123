<form class="form" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="name" placeholder="Tỉnh location" value="{{old('name', $location -> name ?? "")}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Phân loại</label>
        <select class="form-select" name="type" aria-label="Default select example">
            <option value="1" {{ ($location -> type  ?? 1) == 1 ? "selected" : ""}}>Tỉnh thành</option>
            <option value="2" {{ ($location -> type  ?? 1) == 2 ? "selected" : ""}}>Quận huyện</option>
            <option value="3" {{ ($location -> type  ?? 1) == 3 ? "selected" : ""}}>Phường xã</option>
        </select>
    </div>
    @if(isset($location) && $location -> type == 2)
        <div class="mb-3">
            <label class="form-label">Tỉnh thành</label>
            <select class="form-select" name="parent_id" aria-label="Default select example">
                @foreach ($cities ?? [] as $item)
                    <option value="{{$item -> id}}" {{ ($item -> id == $location -> parent_id ?? 0) ? "selected" : ""}}>{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    @endif
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="hot" {{ ($location -> hot ?? 0) == 1 ? "checked" : ""}} id="flexRadioDefault1" value="1">
            <label class="form-check-label" for="flexRadioDefault1">
                Nổi bật
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="hot" id="flexRadioDefault2" {{ ($location -> hot ?? 0) == 0 ? "checked" : ""}} value="0">
            <label class="form-check-label" for="flexRadioDefault2">
                Không nổi bật
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
</form>