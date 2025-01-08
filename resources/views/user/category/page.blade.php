@extends('user.main')
@section('content')
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
            <li class="first link">
                <a href="https://phongtro123.com/cho-thue-phong-tro" title="Cho thuê phòng trọ">
                    <span>Cho thuê phòng trọ</span>
                </a>
            </li>
            <li class="link last">
                <span>Cực phẩm KTX, Phòng trọ, Sang, Xịn, Mịn Giá siêu rẻ tại Thủ Đức</span>
            </li>
        </ol>
    </div>
    
    <div class="container clearfix">
        <div id="left-col">
            <article class="the-post tin-vip vipnoibat">
                <div class="post-images">
                    <div class="images-swiper-container swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transition: 0.5s;">
                            <!-- style="transition-duration: 0ms; transform: translate3d(-5096px, 0px, 0px);" -->
                            <!-- <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="7" style="width: 728px;">
                                <img alt="Cực phẩm KTX, Phòng trọ, Sang, Xịn, Mịn Giá siêu rẻ tại Thủ Đức" src="https://pt123.cdn.static123.com/images/thumbs/900x600/fit/2022/07/03/507ce676-0681-4fe6-bac3-55a7eef70fc3_1656803285.jpg">
                            </div> -->
                            @php
                                $cnt = 0;
                            @endphp
                            @if(isset($room->images))
                                @foreach ($room->images as $item)         
                                    <div class="swiper-slide" data-swiper-slide-index="{{$cnt}}" style="width: 728px;">
                                        <img alt="{{$room->name}}" src="{{$item}}">
                                    </div>
                                    @php
                                        $cnt ++;
                                    @endphp
                                @endforeach
                            @else
                                <div class="swiper-slide" data-swiper-slide-index="{{$cnt}}" style="width: 728px;">
                                    <img alt="Cực phẩm KTX, Phòng trọ, Sang, Xịn, Mịn Giá siêu rẻ tại Thủ Đức" src="{{asset('user/asset/image/thumb_default.jpg')}}">
                                </div> 
                            @endif
                        </div>
                        <div class="swiper-pagination swiper-pagination-fraction">
                            <span class="swiper-pagination-current">1</span> / 
                            <span class="swiper-pagination-total">8</span>
                        </div>
                        <div id="swiper-button-prev" class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                        <div id="swiper-button-next" class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
                <header class="page-header">
                    <h1 class="page-h1">
                        <span class="star star-5" style="float: left;"></span>
                        <a style="color: #E13427;" href="{{ route('get.category.page', ['page' => $room->id])}}" title="{{$room -> name}}">{{$room -> name}}</a>
                    </h1>
                    <div class="clearfix"></div>
                    <address class="post-address">Địa chỉ: 101 Đường số 8, Phường Linh Đông, Quận Thủ Đức, Hồ Chí Minh</address>
                    <div class="post-attributes">
                        <div class="item price">
                            <i></i>
                            <span style="color: #16c784; font-weight: bold; font-size: 1.5rem">{{number_format($room->price)}}đ/tháng</span>
                        </div>
                        <div class="item acreage">
                            <i></i>
                            <span> {{$room->area}}m<sup>2</sup></span>
                        </div>
                        <div class="item published">
                            <i></i>
                            <span title="Thứ 4, 06:40 14/08/2024">{{$room->created_at}}</span>
                        </div>
                        <div class="item hashtag">
                            <i></i>
                            <span>{{$room -> id}}</span>
                        </div>
                    </div>
                </header>
                <section class="section post-main-content">
                    <div class="section-header">
                        <h2 class="section-title">Thông tin mô tả</h2>
                    </div>
                    <div class="section-content">
                        {{-- <p>&gt; Giá trọn gói, không phát sinh bất cứ khoản phí nào nữa.</p>
                        <p>*** Miễn phí :</p>
                        <p>- Để xe máy ( Để xe trong sân cực rộng và thoáng)</p>
                        <p>- Điện, nước.</p>
                        <p>- Wifi, rác, vệ sinh - Nước uống. ....</p>
                        <p>*** Nội thất gồm : - Giường, Chăn, Ga, Gối, Nệm, đèn đọc sách, bàn học, gương trang điểm, tủ quần áo ( mỗi người 2 tủ ), tủ tài chính, tất cả đều là hàng cao cấp ( các bạn xem hình là hiểu, hình thật 100% ). Có phòng nấu ăn và phòng sinh hoạt chung - Máy lạnh, máy giặt, tivi, tủ lạnh ( mỗi phòng 1 tủ để trong phòng ) không thiếu bất cứ thứ gì. - Khoá Vân tay 2 chiều. - Tolet riêng trong phòng ( có nước nóng năng lượng mặt trời ). ***** Đặc biệt: Dịch vụ vệ sinh miễn phí Tollet , phòng, hành lang 2 lần 1 tuần. Cảm ơn các bạn đã xem tin. Nếu xem phòng vui lòng call :</p>
                        <p>Mr Bình. 0936.456.678.</p>
                        <p>Địa chỉ : 101 Đường số 8, Phường Linh Đông. Q. Thủ Đức</p> --}}
                        {!! nl2br(e($room->description)) !!}
                    </div>
                </section>
                <section class="section post-overview">
                    <div class="section-header">
                        <h3 class="section-title">Đặc điểm tin đăng</h3>
                    </div>
                    <div class="section-content">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="name">Mã tin:</td>
                                    <td>#{{$room -> id}}</td>
                                </tr>
                                <tr>
                                    <td class="name">Chuyên mục:</td>
                                    <td>
                                        <a style="text-decoration: underline; " title="Phòng trọ Thủ Đức" href="#"><strong>Cho thuê phòng trọ Thủ Đức</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Khu vực</td>
                                    <td> Cho thuê phòng trọ Hồ Chí Minh </td>
                                </tr>
                                <tr>
                                    <td class="name">Loại tin rao:</td>
                                    <td>{{$category -> name}}</td>
                                </tr>
                                <tr>
                                    <td class="name">Đối tượng thuê:</td>
                                        @if ($room -> subject_id ==  0)
                                            <td>Tất cả</td>
                                        @elseif($room -> subject_id == 1)
                                            <td>Nam</td>
                                        @else    
                                            <td>Nữ</td>
                                        @endif
                                        
                                </tr>
                                <tr>
                                    <td class="name">Gói tin:</td>
                                    <td>
                                        <span style="color: #E13427;">{{$room->hot == 1 ? "Tin VIP nổi bật" : "Tin thường"}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Ngày đăng:</td>
                                    <td>
                                        <time title="Thứ 4, 06:40 14/08/2024">Thứ 4, 06:40 14/08/2024</time>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Ngày hết hạn:</td>
                                    <td>
                                        <time title="Thứ 5, 19:45 15/08/2024">Thứ 5, 19:45 15/08/2024</time>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="section post-contact">
                    <div class="section-header">
                        <h3 class="section-title">Thông tin liên hệ</h3>
                    </div>
                    <div class="section-content">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="name">Liên hệ:</td>
                                    <td>{{$room -> user -> name}}</td>
                                </tr>
                                <tr>
                                    <td class="name">Điện thoại:</td>
                                    <td> {{$room -> user -> phone}} </td>
                                </tr>
                                <tr>
                                    <td class="name">Zalo</td>
                                    <td> {{$room -> user -> phone}} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="section post-map">
                    <div class="section-header">
                        <h3 class="section-title">Bản đồ</h3>
                        <address class="section-description">Địa chỉ: 101 Đường số 8, Phường Linh Đông, Quận Thủ Đức, Hồ Chí Minh</address>
                    </div>
                    <div class="section-content">
                        <div id="__maps_content" style="width:100%; height:300px;" data-lat="" data-long="" data-address="101 Đường số 8, Phường Linh Đông, Quận Thủ Đức, Hồ Chí Minh">
                            <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=101 Đường số 8, Phường Linh Đông, Quận Thủ Đức, Hồ Chí Minh&amp;key=AIzaSyD6Coia3ssHYuRKJ2nDysWBdSlVlBCzKAw&amp;zoom=14" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </section>
                <section class="section post-report">
                    <div class="section-content">
                        <p>Bạn đang xem nội dung tin đăng: <em>"Cực phẩm KTX, Phòng trọ, Sang, Xịn, Mịn Giá siêu rẻ tại Thủ Đức - Mã tin: 603516"</em>. Mọi thông tin liên quan đến tin đăng này chỉ mang tính chất tham khảo. Nếu bạn có phản hồi với tin đăng này (báo xấu, tin đã cho thuê, không liên lạc được,...), vui lòng thông báo để PhòngTrọ123 có thể xử lý.</p>
                        <a class="btn btn-report btn-outline" target="_blank" rel="nofollow" href="https://phongtro123.com/lien-he">
                            <i></i> 
                            Gửi phản hồi
                        </a>
                    </div>
                </section>
                <div class="post-fix-bar">
                    <div class="inner clearfix">
                        <div class="left-bar">
                            <span class="post-fix-bar-price">{{number_format($room -> price)}}đ/tháng 
                                <span style="color: #333; font-weight: normal;">- {{$room -> area}}m<sup>2</sup>
                                </span>
                            </span>
                            <span class="post-fix-bar-address">101 Đường số 8, Phường Linh Đông, Quận Thủ Đức, Hồ Chí Minh</span>
                        </div>
                        <div class="right-bar">
                            <span class="post-fix-bar-save js-btn-save" data-post-id="603516" title="Lưu tin này">
                                <i></i> 
                                Yêu thích
                            </span>
                            <a class="post-fix-bar-zalo" rel="nofollow" target="_blank" href="https://zalo.me/{{$room -> user -> phone}}">Nhắn Zalo</a>
                            <a class="post-fix-bar-phone" rel="nofollow" target="_blank" href="tel:{{$room -> user -> phone}}">
                                <i></i> 
                                Gọi ngay {{$room -> user -> phone}}
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <section class="section section-post-listing">
                <ul class="post-listing clearfix">
                    <li class="post-item post-id-662436 style-4 clearfix normal" style="border-color: #055699;" post-id="662436">
                        <figure class="post-thumb">
                            <a class="clearfix" href="/cho-thue-phong-duplex-moi-thoang-mat-an-ninh-gia-cuc-tot-tai-thu-duc-pr662436.html">
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/14/1i48keam3-affbip_1723631517.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/14/1i48keam3-affbip_1723631517.jpg" alt="Cho thuê phòng Duplex mới thoáng mát, an ninh, GIÁ CỰC TỐT TẠI THỦ ĐỨC" height="100" width="100" layout="responsive" data-loaded="true">
                            </a>
                            <span class="images-number">6 ảnh</span>
                            <span class="post-save js-btn-save" data-post-id="662436" title="Lưu tin này">
                                <i></i>
                            </span>
                        </figure>
                        <div class="post-meta">
                            <h3 class="post-title">
                                <a style="color: #055699;" href="/cho-thue-phong-duplex-moi-thoang-mat-an-ninh-gia-cuc-tot-tai-thu-duc-pr662436.html"> Cho thuê phòng Duplex mới thoáng mát, an ninh, GIÁ CỰC TỐT TẠI THỦ ĐỨC </a>
                            </h3>
                            <div class="meta-row clearfix">
                                <span class="post-price">4.5 triệu/tháng</span>
                                <span class="post-acreage">30m²</span>
                                <span class="post-location">
                                    <a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-thu-duc" title="Cho thuê phòng trọ Thủ Đức, Hồ Chí Minh">Thủ Đức, Hồ Chí Minh</a>
                                </span>
                                <time class="post-time" title="Thứ 4, 17:32 14/08/2024">2 giờ trước</time>
                            </div>
                            <div class="meta-row clearfix">
                                <p class="post-summary">Cho thuê phòng Duplex sạch sẽ,thoáng mát và an ninh nhưng giá cực tốt tại Thủ ĐứcĐịa chỉ: Đường số 19, Hiệp Bình Chánh, Thủ ĐứcĐầy đủ nội…</p>
                            </div>
                            <div class="meta-row clearfix">
                                <div class="post-author">
                                    <img src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2023/11/22/345841182-3341370996174397-6497086550604759569-n_1700627743.jpg">
                                    <span class="author-name">Trần Gia</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="post-item post-id-662428 style-3 clearfix tin-vip vip3" style="border-color: #3763e0;" post-id="662428"><figure class="post-thumb"><a class="clearfix" href="/cho-thue-phong-tro-yen-tinh-gan-cho-tam-ha-2-pr662428.html"><img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/14/img-20240810-180630_1723628020.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/14/img-20240810-180630_1723628020.jpg" alt="Cho thuê phòng trọ yên tĩnh gần chợ Tam Hà" height="100" width="100" layout="responsive" data-loaded="true"></a><span class="images-number">3 ảnh</span><span class="post-save js-btn-save" data-post-id="662428" title="Lưu tin này"><i></i></span></figure><div class="post-meta"><h3 class="post-title"><a style="color: #3763e0;" href="/cho-thue-phong-tro-yen-tinh-gan-cho-tam-ha-2-pr662428.html"><span class="star star-2"></span> Cho thuê phòng trọ yên tĩnh gần chợ Tam Hà </a></h3><div class="meta-row clearfix"><span class="post-price">3 triệu/tháng</span><span class="post-acreage">20.8m²</span><span class="post-location"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-thu-duc" title="Cho thuê phòng trọ Thủ Đức, Hồ Chí Minh">Thủ Đức, Hồ Chí Minh</a></span><time class="post-time" title="Thứ 4, 16:33 14/08/2024">3 giờ trước</time></div><div class="meta-row clearfix"><p class="post-summary">Cho thuê phòng trọ yên tĩnh gần chợ Tam Hà- Phòng ở khu vực gần nhà thờ, bệnh viện, trường học, siêu thị, chợ,...- Chỗ ở an ninh, sạch sẽ, yên…</p></div><div class="meta-row clearfix"><div class="post-author"><img src="https://phongtro123.com/images/default-user.png"><span class="author-name">Huyen</span></div></div></div></li>
                    <li class="post-item post-id-662411 style-3 clearfix normal" style="border-color: #055699;" post-id="662411"><figure class="post-thumb"><a class="clearfix" href="/cho-thue-phong-tro-duong-so-1-phuong-truong-tho-tp-thu-duc-pr662411.html"><img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/14/68a3e1ebb5cb119548da_1723618814.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/14/68a3e1ebb5cb119548da_1723618814.jpg" alt="Cho thuê phòng trọ Đường số 1, Phường Trường Thọ, Tp. Thủ Đức" height="100" width="100" layout="responsive" data-loaded="true"></a><span class="images-number">3 ảnh</span><span class="post-save js-btn-save" data-post-id="662411" title="Lưu tin này"><i></i></span></figure><div class="post-meta"><h3 class="post-title"><a style="color: #055699;" href="/cho-thue-phong-tro-duong-so-1-phuong-truong-tho-tp-thu-duc-pr662411.html"> Cho thuê phòng trọ Đường số 1, Phường Trường Thọ, Tp. Thủ Đức </a></h3><div class="meta-row clearfix"><span class="post-price">2.7 triệu/tháng</span><span class="post-acreage">15m²</span><span class="post-location"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-thu-duc" title="Cho thuê phòng trọ Thủ Đức, Hồ Chí Minh">Thủ Đức, Hồ Chí Minh</a></span><time class="post-time" title="Thứ 4, 14:00 14/08/2024">6 giờ trước</time></div><div class="meta-row clearfix"><p class="post-summary">Hiện tại mình có dư phòng tại Đường số 1, Cư xá Điện lực, Phường Trường Thọ, Tp.Thủ Đức, Tp. HCM nên cần cho thuê lại.Tình trạng nội thất: có…</p></div><div class="meta-row clearfix"><div class="post-author"><img src="https://phongtro123.com/images/default-user.png"><span class="author-name">Anh Phuong</span></div></div></div></li>
                    <li class="post-item post-id-662251 style-4 clearfix normal" style="border-color: #055699;" post-id="662251"><figure class="post-thumb"><a class="clearfix" href="/phong-tro-gan-cho-dau-moi-thu-duc-pr662251.html"><img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/12/img-7970_1723451423.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/12/img-7970_1723451423.jpg" alt="Phòng trọ gần chợ đầu mối Thủ Đức" height="100" width="100" layout="responsive" data-loaded="true"></a><span class="images-number">4 ảnh</span><span class="post-save js-btn-save" data-post-id="662251" title="Lưu tin này"><i></i></span></figure><div class="post-meta"><h3 class="post-title"><a style="color: #055699;" href="/phong-tro-gan-cho-dau-moi-thu-duc-pr662251.html"> Phòng trọ gần chợ đầu mối Thủ Đức </a></h3><div class="meta-row clearfix"><span class="post-price">2.7 triệu/tháng</span><span class="post-acreage">20m²</span><span class="post-location"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-thu-duc" title="Cho thuê phòng trọ Thủ Đức, Hồ Chí Minh">Thủ Đức, Hồ Chí Minh</a></span><time class="post-time" title="Thứ 2, 15:31 12/08/2024">2 ngày trước</time></div><div class="meta-row clearfix"><p class="post-summary">Cần pass lại 1 phòng trọ trên đường Gò Dưa, p. Tam Bình, Thủ Đức- ở dc 1,2 ng 2 xe, hẽm rộng xe tãi vô được- phòng sạch, thoáng, có cửa sổ, phòng…</p></div><div class="meta-row clearfix"><div class="post-author"><img src="https://phongtro123.com/images/default-user.png"><span class="author-name">Hoàng Yến</span></div></div></div></li>
                    <li class="post-item post-id-662102 style-4 clearfix normal" style="border-color: #055699;" post-id="662102"><figure class="post-thumb"><a class="clearfix" href="/sleep-box-cao-cap-day-du-tien-nghi-hoang-dieu-2-canh-dh-ngan-hang-pr662102.html"><img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/10/z5707441589342-ff7025e9c65710f4726d12afdec59947_1723267623.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/10/z5707441589342-ff7025e9c65710f4726d12afdec59947_1723267623.jpg" alt="Sleep Box Cao Cấp đầy đủ tiện nghi Hoàng Diệu 2 cạnh ĐH Ngân Hàng" height="100" width="100" layout="responsive" data-loaded="true"></a><span class="images-number">6 ảnh</span><span class="post-save js-btn-save" data-post-id="662102" title="Lưu tin này"><i></i></span></figure><div class="post-meta"><h3 class="post-title"><a style="color: #055699;" href="/sleep-box-cao-cap-day-du-tien-nghi-hoang-dieu-2-canh-dh-ngan-hang-pr662102.html"> Sleep Box Cao Cấp đầy đủ tiện nghi Hoàng Diệu 2 cạnh ĐH Ngân Hàng </a></h3><div class="meta-row clearfix"><span class="post-price">1.5 triệu/tháng</span><span class="post-acreage">30m²</span><span class="post-location"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-thu-duc" title="Cho thuê phòng trọ Thủ Đức, Hồ Chí Minh">Thủ Đức, Hồ Chí Minh</a></span><time class="post-time" title="Thứ 7, 12:27 10/08/2024">4 ngày trước</time></div><div class="meta-row clearfix"><p class="post-summary">Sleep Box KTX Đầy Đủ Tiện Nghi Giá Rẻ Cạnh Đại Học Ngân Hàng Thủ ĐứcGiá chỉ từ 1tr6/Người/Tháng.Tiết kiệm - Đầy đủ tiện nghi - Không phải sắm…</p></div><div class="meta-row clearfix"><div class="post-author"><img src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/03/09/z5054421904274-4bd842dd09524e8abac0ff2b4665ce83_1709959100.jpg"><span class="author-name">Hoàng Nhà Trọ</span></div></div></div></li>
                </ul>
            </section>
        </div>

        <aside id="aside">
            <div class="author-aside">
                <figure class="author-avatar">
                    <img src="https://phongtro123.com/images/default-user.png">
                </figure>
                <span class="author-name">{{$room -> user -> name}}</span>
                <div style="min-height: 16px; margin-bottom: 10px;">
                    <div class="author-online-status online" author_id="67149">
                        <i></i>
                        <span>Đang hoạt động</span>
                    </div>
                </div>
                <a class="btn author-phone" rel="nofollow" href="tel:{{$room -> user -> phone}}">
                    <i></i>
                    {{$room -> user -> phone}}
                </a>
                <a class="btn author-zalo" target="_blank" rel="nofollow" href="https://zalo.me/{{$room -> user -> phone}}">
                    <i></i> Nhắn Zalo
                </a>
                <span class="btn post-save js-btn-save" data-post-id="603516" title="Lưu tin này">
                    <i></i> Yêu thích
                </span>
            </div>

            <section class="section section-aside-tinmoidang">
                <div class="section-header">
                    <span class="section-title">Tin nổi bật</span>
                </div>
                <ul class="post-listing aside clearfix">
                    @foreach ($featureNew as $item)
                        <li class="post-item clearfix tin-vip vipnoibat" post-id="603516">
                            <a href="{{route('get.category.page', ['page' => $item -> id])}}">
                                <figure>
                                    @if(isset($item->images[0]))
                                        <img class="lazy_done" src="{{$item->images[0]}}" data-src="{{$item->images[0]}}" alt="{{$item -> name}}" height="100" width="100" layout="responsive" data-loaded="true">
                                    @else
                                        <img class="lazy_done" src="{{asset('user/asset/image/thumb_default.jpg')}}" id="none" data-src="{{$image_default}}" height="100" width="100" layout="responsive" data-loaded="true">
                                    @endif
                                </figure>
                                <div class="post-meta">
                                    <h3 class="post-title">
                                        <a style="color: #E13427;" href="{{route('get.category.page', ['page' => $item -> id])}}">
                                            <span class="star star-5"></span> 
                                            {{$item -> name}}
                                        </a>
                                    </h3>
                                    <span class="post-price">{{number_format($item -> price)}}<sup>đ</sup>/tháng</span>
                                    <time class="post-time" title="{{$item->created_at}}">{{$item->created_at}}</time>
                                </div>
                            </a>
                        </li>
                    @endforeach
                    
                    {{-- <li class="post-item clearfix tin-vip vipnoibat" post-id="632582">
                        <a href="/ky-tuc-xa-cao-cap-red-home-dorm-elegance-lifestyle-pr632582.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2023/08/09/z4566760882465-ffd1f84f1eefc1f3ed604f4811dadca7_1691531987.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2023/08/09/z4566760882465-ffd1f84f1eefc1f3ed604f4811dadca7_1691531987.jpg" alt="Ký túc xá cao cấp, Sleep box giá rẻ 1.4 tr/tháng bao hết chi phí, Nhận giữ chỗ cho SV tối đa 30 ngày không tính phí" height="100" width="100" layout="responsive" data-loaded="true">
                                <span class="has-video"></span>
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #E13427;">
                                    <span class="star star-5"></span> Ký túc xá cao cấp, Sleep box giá rẻ 1.4… 
                                </span>
                                <span class="post-price">1.4 triệu/tháng</span>
                                <time class="post-time" title="Thứ 7, 14:36 10/08/2024">4 ngày trước</time>
                            </div>
                        </a>
                    </li>
                    <li class="post-item clearfix tin-vip vip1" post-id="662058">
                        <a href="/cho-thue-phong-tro-an-khang-gia-re-2tr5-phuong-linh-dong-pr662058.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/09/image3_1723218012.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/09/image3_1723218012.jpg" alt="Cho thuê phòng trọ An Khang giá rẻ 2tr5 phường Linh Đông" height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #ea2e9d;">
                                    <span class="star star-4"></span> Cho thuê phòng trọ An Khang giá rẻ 2tr5 phường… 
                                </span>
                                <span class="post-price">2.5 triệu/tháng</span>
                                <time class="post-time" title="Thứ 6, 22:49 09/08/2024">4 ngày trước</time>
                            </div>
                        </a>
                    </li> --}}
                </ul>
            </section>

            <section class="section section-aside-tinmoidang">
                <div class="section-header">
                    <span class="section-title">Tin mới đăng</span>
                </div>
                <ul class="post-listing aside clearfix">
                    <li class="post-item clearfix normal" post-id="661815">
                        <a href="/khai-truong-can-ho-sieu-rong-thoang-mat-2-ban-cong-full-noi-that-pr661815.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/9214aeeb-e545-49e3-9d86-deb2a644e352_1722989353.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/9214aeeb-e545-49e3-9d86-deb2a644e352_1722989353.jpg" alt="KHAI TRƯƠNG CĂN HỘ SIÊU RỘNG THOÁNG MÁT 2 BAN CÔNG FULL NỘI THẤT ????" height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #055699;"> KHAI TRƯƠNG CĂN HỘ SIÊU RỘNG THOÁNG MÁT 2 BAN… </span>
                                <span class="post-price">4.3 triệu/tháng</span>
                                <time class="post-time" title="Thứ 4, 07:10 07/08/2024">5 phút trước</time>
                            </div>
                        </a>
                    </li>
                    <li class="post-item clearfix normal" post-id="661814">
                        <a href="/cho-thue-phong-duong-buoi-ba-dinh-ha-noi-5-5-tr-thang-du-do-o-luon-pr661814.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/z5705637845591-089dcddeef871896b5481375761276d9_1722981024.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/z5705637845591-089dcddeef871896b5481375761276d9_1722981024.jpg" alt="Cho thuê phòng Đường Bưởi, Ba Đình, Hà Nội. 5,5 tr/tháng. Đủ đồ ở luôn" height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #055699;"> Cho thuê phòng Đường Bưởi, Ba Đình, Hà… </span>
                                <span class="post-price">5.5 triệu/tháng</span>
                                <time class="post-time" title="Thứ 4, 04:51 07/08/2024">2 giờ trước</time>
                            </div>
                        </a>
                    </li>
                    <li class="post-item clearfix normal" post-id="661813">
                        <a href="/du-phong-trong-nha-nguyen-can-can-cho-thue-tien-di-cac-quan-trung-tam-pr661813.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/img-7012_1722972302.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/img-7012_1722972302.jpg" alt="Dư phòng trong nhà nguyên căn cần cho thuê, tiện đi các quận trung tâm" height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #055699;"> Dư phòng trong nhà nguyên căn cần cho thuê,… </span>
                                <span class="post-price">4 triệu/tháng</span>
                                <time class="post-time" title="Thứ 4, 02:25 07/08/2024">4 giờ trước</time>
                            </div>
                        </a>
                    </li>
                    <li class="post-item clearfix normal" post-id="661812">
                        <a href="/tro-sinh-vien-ngay-nga-tu-phu-nhuan-gac-cao-2m-wiffi-rieng-tung-phong-pr661812.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/img-3051_1722971109.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/img-3051_1722971109.jpg" alt="Trọ Sinh Viên - Ngay Ngã Tư Phú Nhuận - gác cao 2m - wiffi riêng từng phòng" height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #055699;"> Trọ Sinh Viên - Ngay Ngã Tư Phú Nhuận - gác cao… </span>
                                <span class="post-price">3.5 triệu/tháng</span>
                                <time class="post-time" title="Thứ 4, 02:05 07/08/2024">5 giờ trước</time>
                            </div>
                        </a>
                    </li>
                    <li class="post-item clearfix normal" post-id="661811">
                        <a href="/ngay-dai-hoc-bach-khoa-tro-sinh-vien-gia-re-thuan-tien-di-chuyen-cac-quan-pr661811.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/img-7689_1722970696.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/img-7689_1722970696.jpg" alt="NGAY ĐẠI HỌC BÁCH KHOA - TRỌ SINH VIÊN - GIÁ RẺ - Thuận Tiện Di Chuyển Các Quận" height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #055699;"> NGAY ĐẠI HỌC BÁCH KHOA - TRỌ SINH VIÊN - GIÁ… </span>
                                <span class="post-price">4.1 triệu/tháng</span>
                                <time class="post-time" title="Thứ 4, 02:00 07/08/2024">5 giờ trước</time>
                            </div>
                        </a>
                    </li>
                    <li class="post-item clearfix normal" post-id="661810">
                        <a href="/ngay-cho-bau-cat-nga-tu-bay-hien-tro-moi-xay-chinh-chu-cho-thue-pr661810.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/img-7710_1722970462.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/img-7710_1722970462.jpg" alt="NGAY CHỢ BÀU CÁT - NGÃ TƯ BẢY HIỀN - TRỌ MỚI XÂY - CHÍNH CHỦ CHO THUÊ " height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #055699;"> NGAY CHỢ BÀU CÁT - NGÃ TƯ BẢY HIỀN - TRỌ… </span>
                                <span class="post-price">3.8 triệu/tháng</span>
                                <time class="post-time" title="Thứ 4, 01:54 07/08/2024">5 giờ trước</time>
                            </div>
                        </a>
                    </li>
                    <li class="post-item clearfix normal" post-id="661809">
                        <a href="/can-ho-1pn-bancol-view-dep-full-noi-that-45m2-thuan-tien-qua-q4-q1-pr661809.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/img-4773_1722964241.png" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/07/img-4773_1722964241.png" alt="Căn hộ 1PN Bancol view đẹp full nội thất 45m2 thuận tiện qua Q4,Q1" height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #055699;"> Căn hộ 1PN Bancol view đẹp full nội thất 45m2… </span>
                                <span class="post-price">8.5 triệu/tháng</span>
                                <time class="post-time" title="Thứ 4, 00:12 07/08/2024">7 giờ trước</time>
                            </div>
                        </a>
                    </li>
                    <li class="post-item clearfix normal" post-id="661808">
                        <a href="/tim-nguoi-o-ghep-1-5-tr-phong-rat-thoang-mat-pr661808.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/06/20240805-182655_1722958979.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/06/20240805-182655_1722958979.jpg" alt="Tìm người ở ghép 1.5 tr. Phòng rất thoáng mát" height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta"><span class="post-title" style="color: #055699;"> Tìm người ở ghép 1.5 tr. Phòng rất thoáng mát </span>
                                <span class="post-price">1.5 triệu/tháng</span>
                                <time class="post-time" title="Thứ 3, 22:46 06/08/2024">8 giờ trước</time>
                            </div>
                        </a>
                    </li>
                    <li class="post-item clearfix normal" post-id="661807">
                        <a href="/can-ho-mini-sieu-re-cuc-thoang-mat-phong-rong-co-may-lanh-gan-au-co-luy-ban-bich-gan-vhu-pr661807.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/06/img-9038_1722957394.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/06/img-9038_1722957394.jpg" alt="Căn Hộ mini_ Siêu Rẻ_Cực Thoáng mát_phòng rộng có máy lạnh gần Âu Cơ - Luỹ Bán Bích gần VHU" height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #055699;"> Căn Hộ mini_ Siêu Rẻ_Cực Thoáng mát_phòng… </span>
                                <span class="post-price">3.6 triệu/tháng</span>
                                <time class="post-time" title="Thứ 3, 22:20 06/08/2024">8 giờ trước</time>
                            </div>
                        </a>
                    </li>
                    <li class="post-item clearfix normal" post-id="661806">
                        <a href="/khai-truong-can-ho-studio-1pn-full-noi-that-gan-cau-nguyen-van-cu-nowzone-sat-quan-1-pr661806.html">
                            <figure>
                                <img class="lazy_done" src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/06/img-3176_1722956568.jpg" data-src="https://pt123.cdn.static123.com/images/thumbs/450x300/fit/2024/08/06/img-3176_1722956568.jpg" alt="Khai trương căn hộ Studio/1PN full nội thất gần cầu Nguyễn Văn Cừ Nowzone sát Quận 1" height="100" width="100" layout="responsive" data-loaded="true">
                            </figure>
                            <div class="post-meta">
                                <span class="post-title" style="color: #055699;"> Khai trương căn hộ Studio/1PN full nội thất… </span>
                                <span class="post-price">8 triệu/tháng</span>
                                <time class="post-time" title="Thứ 3, 22:06 06/08/2024">9 giờ trước</time>
                            </div>
                        </a>
                    </li>
                </ul>
            </section>

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
@section('description')
    @include('user.component.description')  
@endsection