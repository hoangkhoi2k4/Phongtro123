@extends('user.main')
@section('content')
    <main role="main">
        <header class="page-header category clearfix">
            <h1 class="page-h1" style="float: none; margin-top: 50px; margin-bottom: 30px; text-align: center;">
                Giới thiệu phongtro123.com 
            </h1>
        </header>
        <div class="container clearfix" style="padding: 20px 0">
            <section class="section" style="padding: 20px; border: 0; box-shadow: 0 0 30px 10px rgb(0 0 0 / 3%);">
                <div class="section-content" id="padding_bottom">
                    <p>ĐỪNG ĐỂ PHÒNG TRỐNG THÊM BẤT CỨ NGÀY NÀO!, đăng tin ngay tại PHONGTRO123.COM và tất cả các vấn đề sẽ được giải quyết một cách nhanh nhất.</p>
                    <p>ƯU ĐIỂM PHONGTRO123:</p>
                    <p>
                        <img style="display: inline-block;float: left;margin-right: 10px;" src="{{asset('user/asset/image/icon-tick-green.svg')}}">
                        <strong>Top đầu google</strong>
                         về từ khóa: cho thuê phòng trọ, thuê phòng trọ, phòng trọ hồ chí minh, phòng trọ hà nội, thuê nhà nguyên căn, cho thuê căn hộ, tìm người ở ghép…với lưu lượng truy cập (traffic) cao nhất trong lĩnh vực. 
                    </p>
                    <p>
                        <img style="display: inline-block;float: left;margin-right: 10px;" src="{{asset('user/asset/image/icon-tick-green.svg')}}"> Phongtro123.com tự hào có lượng dữ liệu bài đăng lớn nhất trong lĩnh vực cho thuê phòng trọ với hơn 
                        <strong>103.348</strong> 
                        tin trên hệ thống và tiếp tục tăng.
                    </p>
                    <p>
                        <img style="display: inline-block;float: left;margin-right: 10px;" src="{{asset('user/asset/image/icon-tick-green.svg')}}"> Phongtro123.com tự hào có số lượng người dùng lớn nhất trong lĩnh vực cho thuê phòng trọ với hơn 
                        <strong>300.000</strong>
                         khách truy cập thường xuyên và hơn 
                         <strong>2.500.000</strong> 
                         lượt pageview mỗi tháng.
                    </p>
                    <p>
                        <img style="display: inline-block;float: left;margin-right: 10px;" src="{{asset('user/asset/image/icon-tick-green.svg')}}"> Phongtro123.com tự hào được sự tin tưởng sử dụng của hơn 
                        <strong>116.998 khách hàng</strong> 
                        là chủ nhà, đại lý, môi giới đăng tin thường xuyên tại website.
                    </p>
                    <p>
                        <img style="display: inline-block;float: left;margin-right: 10px;" src="{{asset('user/asset/image/icon-tick-green.svg')}}"> Phongtro123.com tự hào ghi nhận 
                        <strong>88.879</strong>
                         giao dịch thành công khi sử dụng dịch vụ tại web, mức độ 
                         <strong>hiệu quả đạt xấp xỉ 85% tổng tin đăng</strong>.
                    </p>
                </div>
            </section>
        </div>
        <div class="container clearfix" style="width: 100%; max-width: 1400px;">
            <section class="section" style="padding: 50px 0; border: none; background-color: transparent;">
                <div class="section-header">
                    <div class="section-title big" style="text-align: center; margin-bottom: 0;">Bảng giá dịch vụ</div>
                    <p style="margin-top: 0; margin-bottom: 30px; text-align: center;">Áp dụng từ ngày 31/05/2024</p>
                </div>
                <div class="section-content">
                    <table class="table table-pricing">
                        <thead>
                            <tr>
                                <th style="background: #fff; border: 0;"></th>
                                <th class="package_vip1" style="background-color:#E13427; color: #fff; vertical-align: middle;">Tin VIP nổi bật
                                    <span class="star star-5"></span>
                                </th>
                                <th class="package_vip2" style="background-color:#ea2e9d; color: #fff; vertical-align: middle;">Tin VIP 1
                                    <span class="star star-4"></span>
                                </th>
                                <th class="package_vip3" style="background-color:#FF6600; color: #fff; vertical-align: middle;">Tin VIP 2
                                    <span class="star star-3"></span>
                                </th>
                                <th class="package_vip4" style="background-color:#007BFF; color: #fff; vertical-align: middle;">Tin VIP 3
                                    <span class="star star-2"></span>
                                </th>
                                    <th class="package_tinthuong" style="background-color:#055699; color: #fff; vertical-align: middle;">Tin thường</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="nowrap">
                                    <strong>Giá ngày</strong>
                                </td>
                                <td>
                                    <span class="price-day">50.000đ</span>
                                    <span style="display: block; font-size: 0.8rem;">(Tối thiểu 3 ngày)</span>
                                </td>
                                <td>
                                    <span class="price-day">30.000đ</span>
                                    <span style="display: block; font-size: 0.8rem;">(Tối thiểu 3 ngày)</span>
                                </td>
                                <td>
                                    <span class="price-day">20.000đ</span>
                                    <span style="display: block; font-size: 0.8rem;">(Tối thiểu 3 ngày)</span>
                                </td>
                                <td>
                                    <span class="price-day">10.000đ</span>
                                    <span style="display: block; font-size: 0.8rem;">(Tối thiểu 3 ngày)</span>
                                </td>
                                <td>
                                    <span class="price-day">2.000đ</span>
                                    <span style="display: block; font-size: 0.8rem;">(Tối thiểu 5 ngày)</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap">
                                    <strong>Giá tuần (7 ngày)</strong>
                                </td>
                                <td>
                                    <span class="price-week">315.000đ</span>
                                </td>
                                <td>
                                    <span class="price-week">190.000đ</span>
                                </td>
                                <td>
                                    <span class="price-week">133.000đ</span>
                                </td>
                                <td>
                                    <span class="price-week">63.000đ</span>
                                </td>
                                <td>
                                    <span class="price-week">12.000đ</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap">
                                    <strong>Giá tháng (30 ngày)</strong>
                                    <span style="display: block; font-size: 0.8rem; color: #4caf50;">Rẻ hơn 10% so với giá ngày</span>
                                </td>
                                <td>
                                    <span style="display: block; text-decoration: line-through; color: red;">1.500.000đ</span>
                                    <span style="display: block; color: #4caf50;">Giảm 20% chỉ còn</span>
                                    <span class="price-month">1.200.000đ</span>
                                </td>
                                <td>
                                    <span style="display: block; text-decoration: line-through; color: red;">900.000đ</span>
                                    <span style="display: block; color: #4caf50;">Giảm 11% chỉ còn</span>
                                    <span class="price-month">800.000đ</span>
                                </td>
                                <td>
                                    <span style="display: block; text-decoration: line-through; color: red;">600.000đ</span>
                                    <span style="display: block; color: #4caf50;">Giảm 10% chỉ còn</span>
                                    <span class="price-month">540.000đ</span>
                                </td>
                                <td>
                                    <span style="display: block; text-decoration: line-through; color: red;">300.000đ</span>
                                    <span style="display: block; color: #4caf50;">Giảm 20% chỉ còn</span>
                                    <span class="price-month">240.000đ</span>
                                </td>
                                <td>
                                    <span style="display: block; text-decoration: line-through; color: red;">60.000đ</span>
                                    <span style="display: block; color: #4caf50;">Giảm 20% chỉ còn</span>
                                    <span class="price-month">48.000đ</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap">
                                    <strong>Giá đẩy tin</strong>
                                </td>
                                <td>5.000đ</td>
                                <td>3.000đ</td>
                                <td>2.000đ</td>
                                <td>2.000đ</td>
                                <td>2.000đ</td>
                            </tr>
                            <tr>
                                <td class="nowrap" style="vertical-align: middle;">
                                    <strong>Màu sắc tiêu đề</strong>
                                </td>
                                <td>
                                    <p>
                                        <span style="color:#E13427; font-weight: bold;">TIÊU ĐỀ MÀU ĐỎ, IN HOA</span>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <span style="color:#ea2e9d; font-weight: bold;">TIÊU ĐỀ MÀU HỒNG, IN HOA</span>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <span style="color:#FF6600; font-weight: bold;">TIÊU ĐỀ MÀU CAM, IN HOA</span>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <span style="color:#007BFF; font-weight: bold;">TIÊU ĐỀ MÀU XANH, IN HOA</span>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <span style="color:#055699; font-weight: bold;">Tiêu đề màu mặc định, viết thường</span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap" style="vertical-align: middle;">
                                    <strong>Tự động duyệt</strong>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-tick-green.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-tick-green.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-tick-green.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-tick-green.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-x-red.svg')}}">
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap" style="vertical-align: middle;">
                                    <strong>Hiển thị số điện thoại<br> ở trang danh sách</strong>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-tick-green.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-x-red.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-x-red.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-x-red.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-x-red.svg')}}">
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap" style="vertical-align: middle;">
                                    <strong>Huy hiệu nổi bật</strong>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-tick-green.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-x-red.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-x-red.svg')}}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-x-red.svg')}}">
                                    
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img style="margin: 0 auto;" src="{{asset('user/asset/image/icon-x-red.svg')}}">
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #fff; border-bottom: 0;"></td>
                                <td style="background: #fff; border-bottom: 0;">
                                    <button class="btn btn-primary btn-block js-jump-to" data-jumpto="demo-vip-noibat">Xem demo</button>
                                </td>
                                <td style="background: #fff; border-bottom: 0;">
                                    <button class="btn btn-primary btn-block js-jump-to" data-jumpto="demo-vip-1">Xem demo</button>
                                </td>
                                <td style="background: #fff; border-bottom: 0;">
                                    <button class="btn btn-primary btn-block js-jump-to" data-jumpto="demo-vip-2">Xem demo</button>
                                </td>
                                <td style="background: #fff; border-bottom: 0;">
                                    <button class="btn btn-primary btn-block js-jump-to" data-jumpto="demo-vip-3">Xem demo</button>
                                </td>
                                <td style="background: #fff; border-bottom: 0;">
                                    <button class="btn btn-primary btn-block js-jump-to" data-jumpto="demo-tinthuong">Xem demo</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div class="container">
            <section class="section" style="padding: 0; border: 0; margin-bottom: 100px;">
                <div class="section-title big" style="text-align: center; margin-bottom: 50px;">Phương thức thanh toán</div>
                <div class="section-content">
                    <div class="row addfund_method_list clearfix">
                        <div class="col-md-3" style="margin-bottom: 25px;">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="https://phongtro123.com/images/bank-transfer.png" alt="Chuyển khoản trực tiếp" title="Chuyển khoản trực tiếp">
                                    </div>
                                    <div class="method_item_name">Chuyển khoản</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 25px;">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="https://phongtro123.com/images/payment-method.svg" alt="Nạp tiền bằng ATM Internet Banking" title="Nạp tiền bằng Internet Banking">
                                    </div>
                                    <div class="method_item_name">Thẻ ATM Internet Banking</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 25px;">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="https://phongtro123.com/images/credit-card.png" alt="Nạp tiền bằng thẻ tín dụng quốc tế" title="Nạp tiền bằng thẻ tín dụng quốc tế">
                                    </div>
                                    <div class="method_item_name">Thẻ tín dụng quốc tế</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 25px;">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="https://phongtro123.com/images/cash.svg" alt="Nạp tiền bằng tiền mặt" title="Nạp tiền bằng tiền mặt">
                                    </div>
                                    <div class="method_item_name">Tiền mặt</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 25px;">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="https://phongtro123.com/images/momo.png" alt="Nạp tiền bằng MOMO" title="Nạp tiền bằng MOMO">
                                    </div>
                                    <div class="method_item_name">MOMO</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 25px;">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="https://phongtro123.com/images/zalopay.png" alt="Nạp tiền bằng ZaloPay" title="Nạp tiền bằng ZaloPay">
                                    </div>
                                    <div class="method_item_name">ZaloPay</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 25px;">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="https://phongtro123.com/images/online-store.svg" alt="Điểm giao dịch, cửa hàng tiện lợi" title="Điểm giao dịch, cửa hàng tiện lợi">
                                    </div>
                                    <div class="method_item_name">Điểm giao dịch, cửa hàng tiện lợi</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 25px;">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="https://phongtro123.com/images/qr-code.png" alt="Quét mã QRCode" title="Quét mã QRCode">
                                    </div>
                                    <div class="method_item_name">Quét mã QRCode</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section" style="padding: 50px; border: 0; margin-bottom: 100px; box-shadow: 0 0 30px 10px rgb(0 0 0 / 3%);">
                <div class="section-title big" style="text-align: center;">Liên hệ với chúng tôi</div>
                <div class="section-content" style="text-align: center;">
                    <p>Địa chỉ: Căn 02.34, Lầu 2, Tháp 3, The Sun Avenue, Số 28 Mai Chí Thọ, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam</p>
                    <p>Hotline: 0917686101</p>
                    <p>Email: cskh.phongtro123@gmail.com</p>
                </div>
            </section>
        </div>
    </main>
@endsection