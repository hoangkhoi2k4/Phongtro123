@extends('user.main')
@section('content')
    <main id="main">
        <section class="section section-access">
            <div class="section-header">
                <h1 class="section-title big">Tạo tài khoản mới</h1>
            </div>
            <div class="section-content">
                <form class="form-access register-form js-register-form clearfix" action="{{ route('register')}}" method="POST" autocomplete="off">
                    <div class="form-group form-group-fullname">
                        <label for="inputFullName">Họ tên</label>
                        <input type="text" class="form-control" min-length="3" id="inputFullName" name="name" required="" data-msg="Không được phép để trống">
                    </div>
                    <div class="form-group form-group-fullname">
                        <label for="inputFullName">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" required="" data-msg="Không được phép để trống">
                    </div>
                    <div class="form-group form-group-phone">
                        <label for="inputPhone">Số điện thoại</label>
                        <input type="text" class="form-control" min-length="10" max-length="11" id="inputPhone" name="phone" required="" data-msg="Không được phép để trống">
                    </div>
                    <div class="form-group form-group-password">
                        <label for="password">Tạo mật khẩu</label>
                        <input type="password" class="form-control" min-length="6" id="password" name="password" required="" data-msg="Không được phép để trống">
                    </div>
                    <div class="form-group row">
                        <label class="label-title">Loại tài khoản</label>
                        <div class="col-sm-10">
                            <div class="radio-group row post_cat_group section-support">
                                <label class="col-md-2 col-sm-12 col-xs-12 support-item clearfix">
                                    <div class="form-group">
                                        <label for="user_type_guest" class="css-label">
                                            <input type="radio" name="user_type" required="" data-msg="Chọn loại tài khoản" id="user_type_guest" class="css-checkbox" value="1"> Tìm kiếm
                                        </label>
                                    </div>
                                </label>
                                <label class="col-md-2 col-sm-12 col-xs-12 support-item">
                                    <div class="form-group">
                                        <label for="user_type_owner" class="css-label">
                                            <input type="radio" name="user_type" required="" data-msg="Chọn loại tài khoản" id="user_type_owner" class="css-checkbox" value="2"> Chính chủ
                                        </label>
                                    </div>
                                </label>
                                <label class="col-md-2 col-sm-12 col-xs-12 support-item">
                                    <div class="form-group">
                                        <label for="user_type_broker" class="css-label">
                                            <input type="radio" name="user_type" required="" data-msg="Chọn loại tài khoản" id="user_type_broker" class="css-checkbox" value="3"> Môi giới
                                        </label>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="wp-submit-register" class="btn btn-submit">Tạo tài khoản</button>
                    </div>
                    <div class="form-group">
                        <p style="padding: 5px 0;">Bấm vào nút đăng ký tức là bạn đã đồng ý với 
                            <a href="#" target="_blank">quy định sử dụng</a>
                                của chúng tôi
                        </p>
                        <p style="padding: 5px 0;">Bạn đã có tài khoản? 
                            <a class="link" href="{{route('login')}}">Đăng nhập ngay</a>
                        </p>
                    </div>
                    <input type="hidden" name="redirect" value="">
                    @csrf
                </form>
            </div>
        </section>
        <section class="section section-whyus">
            <div class="section-content">
                <h4 class="section-title">Tại sao lại chọn PhongTro123.com?</h4>
                <p>Chúng tôi biết bạn có rất nhiều lựa chọn, nhưng Phongtro123.com tự hào là trang web đứng top google về các từ khóa: 
                    <a href="/cho-thue-phong-tro" title="Cho thuê phòng trọ">
                        <strong>cho thuê phòng trọ</strong>
                    </a>, 
                    <strong>nhà trọ</strong>, 
                    <a href="/nha-cho-thue" title="Cho thuê nhà nguyên căn">
                        <strong>thuê nhà nguyên căn</strong></a>, 
                    <a href="/cho-thue-can-ho" title="Cho thuê căn hộ"><strong>cho thuê căn hộ</strong></a>, 
                    <a href="/tim-nguoi-o-ghep" title="Tìm người ở ghép"><strong>tìm người ở ghép</strong></a>, 
                    <a href="/cho-thue-mat-bang" title="Cho thuê mặt bằng"><strong>cho thuê mặt bằng</strong></a>
                    ...Vì vậy tin của bạn đăng trên website sẽ tiếp cận được với nhiều khách hàng hơn, do đó giao dịch nhanh hơn, tiết kiệm chi phí hơn
                </p>
                <div class="whyus-countup clearfix">
                    <div class="whyus-countup-item">
                        <span class="whyus-countup-item-number">116.998+</span>
                        <span class="whyus-countup-item-text">Thành viên</span>
                    </div>
                    <div class="whyus-countup-item">
                        <span class="whyus-countup-item-number">103.348+</span>
                        <span class="whyus-countup-item-text">Tin đăng</span>
                    </div>
                    <div class="whyus-countup-item">
                        <span class="whyus-countup-item-number">300.000+</span>
                        <span class="whyus-countup-item-text">Lượt truy cập/tháng</span>
                    </div><div class="whyus-countup-item">
                        <span class="whyus-countup-item-number">2.500.000+</span>
                        <span class="whyus-countup-item-text">Lượt xem/tháng</span>
                    </div>
                </div>
                <br>
                <br>
                <h5 class="section-title">Chi phí thấp, hiệu quả tối đa</h5>
                <div class="clearfix" style="display: flex; justify-content: center; margin: 10px 0">
                    <span class="star star-5"></span>
                </div>
                <p class="testimonial">"Trước khi biết website phongtro123, mình phải tốn nhiều công sức và chi phí cho việc đăng tin cho thuê: từ việc phát tờ rơi, dán giấy, và đăng lên các website khác nhưng hiệu quả không cao. Từ khi biết website phongtro123.com, mình đã thử đăng tin lên và đánh giá hiệu quả khá cao trong khi chi phí khá thấp, không còn tình trạng phòng trống kéo dài." 
                    <br>
                    <span style="font-style: normal; display: block; margin-top: 10px;">Anh Khánh (chủ hệ thống phòng trọ tại Tp.HCM)</span>
                </p>
                <br>
                <h6 class="section-title">Bạn đang có phòng trọ / căn hộ cho thuê?</h6>
                <p>Không phải lo tìm người cho thuê, phòng trống kéo dài</p>
                <br>
                <a class="btn red" style="padding: 10px 30px;" rel="nofollow" href="https://phongtro123.com/quan-ly/dang-tin-moi.html">Đăng tin ngay</a>
            </div>
        </section>
    </main>
@endsection