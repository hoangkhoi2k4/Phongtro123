@extends('user.main')
@section('category')
    <div style="height: 60px; margin-bottom: 10px;">
        <section id="filter-top-inner">
            <section id="filter-top">
                <div class="filter-body">
                    <div class="active filter-item post-estate-type">
                        <span>Phòng trọ, nhà trọ</span>
                        <span class="delete-item"></span>
                    </div>
                    <div class="filter-item location">
                        <span>Toàn quốc</span>
                    </div>
                    <div class="filter-item post-price">
                        <span>Chọn giá</span>
                    </div>
                    <div class="filter-item post-acreage">
                        <span>Chọn diện tích</span>
                    </div>
                    <div class="filter-item submit">
                        <span>Tìm kiếm</span>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <div id="breadcrumb">
        <ol class="clearfix">

        </ol>
    </div>
    <header class="page-header category clearfix">
        <h1 class="page-h1">
            Cho Thuê Phòng Trọ, Giá Rẻ, Tiện Nghi, Mới Nhất 2024
        </h1>
        <p class="page-description">Cho thuê phòng trọ - Kênh thông tin số 1 về phòng trọ giá rẻ,
            phòng trọ sinh viên, phòng trọ cao cấp mới nhất năm 2024. 
            Tất cả nhà trọ cho thuê giá tốt nhất tại Việt Nam.
        </p> 
    </header>
    @include('user.component.category')
@endsection
@section('content')
    <div class="container clearfix">
        <div id="left-col">
            <section class="section section-post-listing">
                <div class="section-header clearfix">
                    <span class="section-title">Tổng {{$totalRooms}} kết quả</span>
                </div>
                <div class="post-sort">
                    <span>Sắp xếp: </span>
                    <a class="active" href="#">Mặc định</a>
                    <a class="" href="#">Mới nhất</a>
                    <a class="" href="#">Có video</a>
                </div>
                <ul class="post-listing clearfix">
                    @foreach ($posts as $item)
                        <li class="post-item post-id-277630 style-4 clearfix tin-vip vipnoibat" style="border-color: #E13427;" post-id="277630">
                            <script type="application/ld+json"> { "@type":"Hostel", "@context":"http://schema.org", "name": "Phòng trọ dạng căn hộ mini cao cấp tại 796 Lê Đức Thọ, P.15, Quận Gò Vấp", "description": "Cho thuê căn hộ mini cao cấp tại 796 Lê Đức Thọ, Phường 15, Quận Gò Vấp, Tp. Hồ Chí Minh. Diện tích 30m2, giá 3… - 277630", "address":{ "@type":"PostalAddress", "@context":"http://schema.org", "streetAddress":"796 Đường Lê Đức Thọ, Phường 15, Quận Gò Vấp, Hồ Chí Minh", "addressLocality":"Hồ Chí Minh", "postalCode":"700000", "addressCountry":{ "@type":"Country", "name":"VN" } }, "url":"https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-tro-dang-can-ho-mini-cao-cap-tai-796-le-duc-tho-p-15-quan-go-vap.html", "image": "https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2019/02/25/63b548ae81a263fc3ab3_1551067966.jpg", "priceRange": "3000000", "telephone": "0328837249" }</script>
                            <figure class="post-thumb">
                                <a class="clearfix" href="{{route('get.category.page', ['page' => $item -> id])}}">
                                @if(isset($item->images[0]))
                                    <img class="lazy_done" src="{{$item->images[0]}}" data-src="{{$item->images[0]}}" alt="{{$item -> name}}" height="100" width="100" layout="responsive" data-loaded="true">
                                    <span class="images-number">{{count($item->images)}} ảnh</span>
                                @else
                                    <img class="lazy_done" src="{{asset('user/asset/image/thumb_default.jpg')}}" id="none" data-src="{{$image_default}}" alt="{{$item -> name}}" height="100" width="100" layout="responsive" data-loaded="true">
                                    <span class="images-number">0 ảnh</span>
                                @endif
                                </a>
                                <span class="chothuenhanh-label"></span>
                                <span class="post-save js-btn-save" data-post-id="277630">
                                    <i></i>
                                </span>
                            </figure>
                            <div class="post-meta">
                                <h3 class="post-title">
                                    <a style="color: #E13427;" href="{{route('get.category.page', ['page' => $item -> id])}}">
                                        <span class="star star-5"></span> 
                                        {{$item -> name}}
                                    </a>
                                </h3>
                                <div class="meta-row clearfix">
                                    <span class="post-price">{{ number_format($item -> price)}}<sup>đ</sup></span>
                                    <span class="post-acreage">{{$item -> area}}m²</span>
                                    <span class="post-location">
                                        <a href="{{route('get.category.page', ['page' => $item -> id])}}" title="{{$item -> name}}"></a>
                                    </span>
                                    <time class="post-time" title="Thứ 3, 17:34 06/08/2024">{{$item -> updated_at}}</time>
                                </div>
                                <div class="meta-row clearfix">
                                    <p class="post-summary" >{{ Str::limit($item->description, 150) }}...</p>
                                </div>
                                <div class="meta-row clearfix">
                                    <div class="post-author">
                                        <img src="https://phongtro123.com/images/default-user.png">
                                        <span class="author-name">{{$item -> user -> name ?? ""}}</span>
                                    </div>
                                        <a rel="nofollow" target="_blank" href="{{'https://zalo.me/'.($item -> user -> phone ?? "")}}" class="btn-quick-zalo">Nhắn Zalo</a>
                                        <a rel="nofollow" target="_blank" href="tel:0328837249" class="btn-quick-call">Gọi {{$item -> user -> phone ?? ""}}</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    
                </ul>
            </section>
            <div class="pagination">
                {{$posts->links()}}
            </div>
        </div>

        <aside id="aside">
            @include('user.component.aside')
            @include('user.component.postnew')

            <section class="section section-sublink">
                <div class="section-header">
                    <span class="section-title">Bài viết mới</span>
                </div>
                <ul class="list-links clearfix">
                    <li>
                        <a href="/quy-dinh-an-toan-phong-chay-chua-chay-tai-cac-nha-tro-cho-thue.html" title="Vấn nạn an toàn phòng cháy chữa cháy tại các nhà trọ cho thuê">Vấn nạn an toàn phòng cháy chữa cháy tại các nhà trọ cho thuê</a>
                    </li>
                    <li>
                        <a href="/tien-dat-coc-thue-phong-tro-co-lay-lai-duoc-khong.html" title="Tiền đặt cọc thuê phòng trọ có lấy lại được không?">Tiền đặt cọc thuê phòng trọ có lấy lại được không?</a>
                    </li>
                    <li>
                        <a href="/dong-tien-thue-phong-tro-dau-thang-hay-cuoi-thang.html" title="Đóng tiền thuê phòng trọ đầu tháng hay cuối tháng?">Đóng tiền thuê phòng trọ đầu tháng hay cuối tháng?</a>
                    </li>
                    <li>
                        <a href="/lo-dien-top-5-khu-vuc-hot-nhat-de-thue-phong-tro-tai-tphcm.html" title="Lộ diện top 5 khu vực &quot;hot&quot; nhất để thuê phòng trọ tại TPHCM">Lộ diện top 5 khu vực "hot" nhất để thuê phòng trọ tại TPHCM</a>
                    </li>
                    <li>
                        <a href="/quy-trinh-dang-ky-tam-tru-cho-nguoi-thue-phong-tro-moi-nhat.html" title="Quy trình đăng ký tạm trú cho người thuê phòng trọ mới nhất">Quy trình đăng ký tạm trú cho người thuê phòng trọ mới nhất</a>
                    </li>
                    <li>
                        <a href="/thu-tuc-thue-phong-tro-chinh-xac-danh-cho-nguoi-nuoc-ngoai.html" title="Thủ tục thuê phòng trọ chính xác dành cho người nước ngoài">Thủ tục thuê phòng trọ chính xác dành cho người nước ngoài</a>
                    </li>
                </ul>
            </section>
            
            <section class="section section-sublink">
                <div class="section-header">
                    <span class="section-title">Có thể bạn quan tâm</span>
                </div>
                <ul class="list-links clearfix">
                    <li>
                        <a href="/news/hop-dong-thue-nha-tro-phong-tro" title="Mẫu hợp đồng cho thuê phòng trọ">Mẫu hợp đồng cho thuê phòng trọ</a>
                    </li>
                    <li>
                        <a href="/kinh-nghiem/kinh-nghiem-thue-phong-tro-tranh-bi-lua-gat.html" title="Cẩn thận các kiểu lừa đảo khi thuê phòng trọ">Cẩn thận các kiểu lừa đảo khi thuê phòng trọ</a>
                    </li>
                    <li>
                        <a href="/kinh-nghiem/chia-se-10-kinh-nghiem-khi-thue-phong-tro-cho-sinh-vien.html" title="Kinh nghiệm thuê phòng trọ cho Sinh Viên">Kinh nghiệm thuê phòng trọ Sinh Viên</a>
                    </li>
                </ul>
            </section>
        </aside>
    </div>


@endsection
@section('banner')
    <div id="fixed_Left" class="banner_fixed" style="display: block; left: calc(100%/12);">
        <a target="_blank" rel="nofollow" href="https://bds123.vn">
            <img class="lazy_done" src="{{asset('user/asset/image/bds123_120_300.gif')}}" data-src="/images/bds123_120_300.gif" data-loaded="true">
        </a>
    </div>
    <div id="fixed_Right" class="banner_fixed" style="display: block; right: calc(100%/12);">
        <a target="_blank" rel="nofollow" href="https://thuecanho123.com/">
            <img class="lazy_done" src="{{asset('user/asset/image/banner-thuecanho.jpg')}}" style="width: 120px" data-src="/images/banner-thuecanho.jpg" data-loaded="true">
        </a>
    </div>
@endsection