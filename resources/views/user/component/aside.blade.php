<section class="section section-sublink">
    <div class="section-header">
        <span class="section-title">Xem theo giá</span>
    </div>
    <ul class="list-links price clearfix">
        <li>
            <a href="#">Dưới 1 triệu</a>
        </li>
        <li>
            <a href="#">Từ 1 - 2 triệu</a>
        </li>
        <li>
            <a href="#">Từ 2 - 3 triệu</a>
        </li>
        <li>
            <a href="#">Từ 3 - 5 triệu</a>
        </li>
        <li>
            <a href="#">Từ 5 - 7 triệu</a>
        </li>
        <li>
            <a href="#">Từ 7 - 10 triệu</a>
        </li>
        <li>
            <a href="#">Từ 10 - 15 triệu</a>
        </li>
        <li>
            <a href="#">Trên 15 triệu</a>
        </li>
    </ul>
</section>
<section class="section section-sublink">
    <div class="section-header">
        <span class="section-title">Xem theo diện tích</span>
    </div>
    <ul class="list-links acreage clearfix">
        <li>
            <a href="#">Dưới 20 m<sup>2</sup></a>
        </li>
        <li>
            <a href="#">Từ 20 - 30m<sup>2</sup></a>
        </li>
        <li>
            <a href="#">Từ 30 - 50m<sup>2</sup></a>
        </li>
        <li>
            <a href="#">Từ 50 - 70m<sup>2</sup></a>
        </li>
        <li>
            <a href="#">Từ 70 - 90m<sup>2</sup></a>
        </li>
        <li>
            <a href="#">Trên 90m<sup>2</sup></a>
        </li>
    </ul>
</section>
<section class="section section-sublink">
    <div class="section-header">
        <h2 class="section-title">Danh mục cho thuê</h2>
    </div>
    <ul class="list-links clearfix">
        @foreach ($categoriesGlobalSidebar as $item)
            <li>
                <a href="{{ route('get.category.item', ['slug' => $item -> slug, 'id' => $item -> id])}}" title="{{$item -> name}}">{{ $item-> name}}</a>
                <span class="count">{{$item -> room_count}}</span>
            </li>
        @endforeach
        
        {{-- <li>
            <a href="#" title="Cho thuê nhà nguyên căn">Cho thuê nhà nguyên căn</a>
            <span class="count">(11.782)</span>
        </li>
        <li>
            <a href="#" title="Cho thuê căn hộ">Cho thuê căn hộ</a>
            <span class="count">(13.570)</span>
        </li>
        <li class="sub">
            <a href="#" title="Cho Thuê Căn Hộ Chung Cư Mini">Cho thuê căn hộ mini</a>
            <span class="count">(2.926)</span>
        </li>
        <li class="sub">
            <a href="#" title="Cho Thuê Căn Hộ Dịch Vụ">Cho thuê căn hộ dịch vụ</a>
            <span class="count">(7.359)</span>
        </li>
        <li>
            <a href="#" title="Cho thuê mặt bằng">Cho thuê mặt bằng</a>
            <span class="count">(3.243)</span>
        </li>
        <li>
            <a href="#" title="Tìm người ở ghép">Tìm người ở ghép</a>
            <span class="count">(15.819)</span>
        </li> --}}
    </ul>
</section>
