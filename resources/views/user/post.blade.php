@extends('user.layoutManagement')
@section('content')
    <main role="main" class="ml-sm-auto col-lg-10">
        <div class="user_quick_info js-mobile-user-quick-info">
            <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>Hoàng Văn Khởi</strong>. Mã tài khoản: <strong>142774</strong></p>
            <p style="margin-bottom: 0;">Số dư TK của bạn là: <strong>0</strong></p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://phongtro123.com">Phongtro123.com</a></li>
                <li class="breadcrumb-item"><a href="https://phongtro123.com/quan-ly/index.html">Quản lý</a></li>
                <li class="breadcrumb-item active" aria-current="page">Đăng tin mới</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h1">Đăng tin mới</h1>
        </div>

        <div class="alert alert-danger mb-5" role="alert">
            Nếu bạn đã từng đăng tin trên Phongtro123.com, hãy sử dụng chức năng ĐẨY TIN / GIA HẠN / NÂNG CẤP VIP trong mục QUẢN LÝ TIN ĐĂNG để làm mới, đẩy tin lên cao thay vì đăng tin mới. Tin đăng trùng nhau sẽ không được duyệt.
        </div>

        <form id="form_dangtin" class="form-horizontal js-form-submit-data js-frm-manage-post" data-action-url="https://phongtro123.com/api/post/create" novalidate="novalidate">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Địa chỉ cho thuê</h3>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="province_id" class="col-form-label">Tỉnh/Thành phố</label>
                                <select id="province_id" name="province_id" class="form-control js-select-tinhthanhpho select2-hidden-accessible" required="" data-msg-required="Chưa chọn Tỉnh/TP" tabindex="-1" aria-hidden="true">
                                    <option value="">-- Chọn Tỉnh/TP --</option>
                                    <option value="90">Hồ Chí Minh</option>
                                    <option value="41">Hà Nội</option>
                                    <option value="72">Đà Nẵng</option>
                                    <option value="87">Bình Dương</option>
                                    <option value="88">Đồng Nai</option>
                                    <option value="89">Bà Rịa - Vũng Tàu</option>
                                    <option value="99">Cần Thơ</option>
                                    <option value="77">Khánh Hòa</option>
                                    <option value="60">Hải Phòng</option>
                                    <option value="97">An Giang</option>
                                    <option value="55">Bắc Giang</option>
                                    <option value="44">Bắc Kạn</option>
                                    <option value="102">Bạc Liêu</option>
                                    <option value="58">Bắc Ninh</option>
                                    <option value="93">Bến Tre</option>
                                    <option value="85">Bình Phước</option>
                                    <option value="79">Bình Thuận</option>
                                    <option value="75">Bình Định</option>
                                    <option value="103">Cà Mau</option>
                                    <option value="43">Cao Bằng</option>
                                    <option value="81">Gia Lai</option>
                                    <option value="42">Hà Giang</option>
                                    <option value="63">Hà Nam</option>
                                    <option value="68">Hà Tĩnh</option>
                                    <option value="59">Hải Dương</option>
                                    <option value="100">Hậu Giang</option>
                                    <option value="51">Hòa Bình</option>
                                    <option value="61">Hưng Yên</option>
                                    <option value="98">Kiên Giang</option>
                                    <option value="80">Kon Tum</option>
                                    <option value="48">Lai Châu</option>
                                    <option value="84">Lâm Đồng</option>
                                    <option value="53">Lạng Sơn</option>
                                    <option value="46">Lào Cai</option>
                                    <option value="91">Long An</option>
                                    <option value="64">Nam Định</option>
                                    <option value="67">Nghệ An</option>
                                    <option value="65">Ninh Bình</option>
                                    <option value="78">Ninh Thuận</option>
                                    <option value="56">Phú Thọ</option>
                                    <option value="76">Phú Yên</option>
                                    <option value="69">Quảng Bình</option>
                                    <option value="73">Quảng Nam</option>
                                    <option value="74">Quảng Ngãi</option>
                                    <option value="54">Quảng Ninh</option>
                                    <option value="70">Quảng Trị</option>
                                    <option value="101">Sóc Trăng</option>
                                    <option value="49">Sơn La</option>
                                    <option value="86">Tây Ninh</option>
                                    <option value="62">Thái Bình</option>
                                    <option value="52">Thái Nguyên</option>
                                    <option value="66">Thanh Hóa</option>
                                    <option value="71">Thừa Thiên Huế</option>
                                    <option value="92">Tiền Giang</option>
                                    <option value="94">Trà Vinh</option>
                                    <option value="45">Tuyên Quang</option>
                                    <option value="95">Vĩnh Long</option>
                                    <option value="57">Vĩnh Phúc</option>
                                    <option value="50">Yên Bái</option>
                                    <option value="82">Đắk Lắk</option>
                                    <option value="83">Đắk Nông</option>
                                    <option value="47">Điện Biên</option>
                                    <option value="96">Đồng Tháp</option>
                                </select>
                                <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 191.659px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-province_id-container"><span class="select2-selection__rendered" id="select2-province_id-container" title="-- Chọn Tỉnh/TP --">-- Chọn Tỉnh/TP --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label" for="district_id">Quận/Huyện</label>
                                <select name="district_id" id="district_id" class="form-control js-select-quanhuyen select2-hidden-accessible" required="" data-msg-required="Chưa chọn Quận/Huyện" tabindex="-1" aria-hidden="true">
                                    <option value="">chọn quận huyện</option>
                                </select>
                                <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 191.659px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-district_id-container"><span class="select2-selection__rendered" id="select2-district_id-container" title="chọn quận huyện">chọn quận huyện</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label" for="phuongxa">Phường/Xã</label>
                                <select class="form-control js-select-phuongxa select2-hidden-accessible" name="phuongxa" id="phuongxa" tabindex="-1" aria-hidden="true">
                                    <option value="">chọn phường xã</option>
                                </select>
                                <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 191.659px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-phuongxa-container"><span class="select2-selection__rendered" id="select2-phuongxa-container" title="chọn phường xã">chọn phường xã</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label" for="duong">Đường/Phố</label>
                                <select class="form-control js-select-duong select2-hidden-accessible" name="duong" id="duong" tabindex="-1" aria-hidden="true">
                                    <option value="">chọn đường phố</option>
                                </select>
                                <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 191.659px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-duong-container"><span class="select2-selection__rendered" id="select2-duong-container" title="chọn đường phố">chọn đường phố</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="street_number" class="col-form-label">Số nhà</label>
                                <input type="text" class="form-control js-input-street-number" name="street_number" id="street_number" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="diachi" class="col-form-label">Địa chỉ chính xác</label>
                                <input type="text" readonly="" class="form-control" name="dia_chi" id="diachi" required="" data-msg-required="Chưa chọn khu vực đăng tin">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <h3>Thông tin mô tả</h3>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="post_cat" class="col-md-12 col-form-label">Loại chuyên mục</label>
                        <div class="col-md-6">
                            <select class="form-control" id="post_cat" name="loai_chuyen_muc" required="" data-msg-required="Chưa chọn loại chuyên mục">
                                <option value="">-- Chọn loại chuyên mục --</option>
                                
                                <option value="1">Phòng trọ, nhà trọ</option>
                                <option value="2">Nhà thuê nguyên căn</option>
                                <optgroup label="Căn hộ">
                                    <option value="3">Cho thuê căn hộ</option>
                                    <option value="6">Cho thuê căn hộ mini</option>
                                    <option value="7">Cho thuê căn hộ dịch vụ</option>
                                </optgroup>
                                <option value="4">Tìm người ở ghép</option>
                                <option value="5">Cho thuê mặt bằng + Văn phòng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="post_title" class="col-md-12 col-form-label">Tiêu đề</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control js-title" name="tieu_de" id="post_title" value="" minlength="30" maxlength="120" required="" data-msg-required="Tiêu đề không được để trống" data-msg-minlength="Tiêu đề quá ngắn" data-msg-maxlength="Tiêu đề quá dài">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="post_content" class="col-md-12 col-form-label">Nội dung mô tả</label>
                        <div class="col-md-12">
                            <textarea class="form-control js-content" name="noi_dung" id="post_content" rows="10" required="" minlength="100" data-msg-required="Bạn chưa nhập nội dung" data-msg-minlength="Nội dung tối thiểu 100 kí tự"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-12 col-form-label">Thông tin liên hệ</label>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input id="ten_lien_he" type="text" name="ten_lien_he" class="form-control" readonly="readonly" required="" data-msg-required="Tên liên hệ" value="Hoàng Văn Khởi">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-12 col-form-label">Điện thoại</label>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input id="phone" type="number" name="phone" class="form-control" readonly="readonly" required="" data-msg-required="Số điện thoại" value="0334328824">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="giachothue" class="col-md-12 col-form-label">Giá cho thuê</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input id="giachothue" name="gia" pattern="[0-9.]+" type="text" class="form-control js-gia-cho-thue" required="" data-msg-required="Bạn chưa nhập giá phòng" data-msg-min="Giá phòng chưa đúng">
                                <div class="input-group-append">
                                    
                                    <select class="form-control js-unit" name="don_vi" id="don_vi">
                                        <option value="0">đồng/tháng</option>
                                        <option value="1">đồng/m2/tháng</option>
                                    </select>
                                </div>
                            </div>
                            <small class="form-text text-muted">Nhập đầy đủ số, ví dụ 1 triệu thì nhập là 1000000</small>
                        </div>
                        <label for="text_giachothue" id="text_giachothue" class="col-sm-12 control-label js-number-text" style="color: red;"></label>
                    </div>
                    <div class="form-group row">
                        <label for="post_acreage" class="col-md-12 col-form-label">Diện tích</label>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input id="post_acreage" type="number" attern="[0-9.]+" name="dien_tich" min="0" max="1000" class="form-control" required="" data-msg-required="Bạn chưa nhập diện tích">
                                <div class="input-group-append">
                                    <span class="input-group-text">m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="doi_tuong" class="col-md-12 col-form-label">Đối tượng cho thuê</label>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <select class="form-control" id="post_cat" name="doi_tuong">
                                    <option value="Tất cả">-- Tất cả --</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <h3>Hình ảnh</h3>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <p>Cập nhật hình ảnh rõ ràng sẽ cho thuê nhanh hơn</p>
                            <div class="form-group">
                                <div for="browse_photos" class="browse_photos js-dropzone dz-clickable">
                                    <i class="icon-upload-image"></i>
                                    <span class="js-btn-chon-anh">Thêm Ảnh</span>
                                    <input id="fileInput" style="display: none"type="file">
                                </div>
                            </div>
                            <div class="list_photos row dropzone-previews" id="list-photos-dropzone-previews"></div>
                            <div id="tpl" style="display:none">
                                <div class="photo_item col-md-2 col-3 js-photo-manual">
                                    <div class="photo"><img data-dz-thumbnail=""></div>
                                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                    <div class="bottom clearfix">
                                        <span class="photo_name" data-dz-name=""></span>
                                        <span class="photo_delete" data-dz-remove=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Xóa</span>
                                    </div> 
                                    <input name="" value="" type="hidden">
                                </div>
                            </div>
                                    
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <h3>Video</h3>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="youtube_url" class="col-md-12 col-form-label">Video Link (Youtube)</label>
                        <div class="col-md-12">
                            <input class="form-control" name="youtube_url" id="youtube_url">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <p>Hoặc upload Video từ máy của bạn</p>
                            <div class="form-group">
                                <div for="browse_photos" class="browse_videos js-dropzone-video dz-clickable">
                                    <i class="icon-upload-video"></i>
                                    <span class="js-btn-chon-video">Thêm Video</span>
                                    <input id="fileInputVideo" style="display: none"type="file">
                                </div>
                            </div>
                            <div class="list_photos row dropzone-previews" id="list-videos-dropzone-previews"></div>
                            <div id="tpl-video" style="display:none">
                                <div class="photo_item col-md-2 col-3 js-video-manual">
                                    <div class="photo">
                                        <video width="100%" height="100%" controls="" id="video">
                                            <source src="">
                                        </video>
                                    </div>
                                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                    <div class="bottom clearfix">
                                        <span class="photo_name" data-dz-name=""></span>
                                        <span class="photo_delete" data-dz-remove=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Xóa</span>
                                    </div> 
                                    <input name="" value="" type="hidden">
                                </div>
                            </div>
                                    
                        </div>
                    </div>

                    
                    
                    
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success mb-5 btn-lg btn-block js-btn-hoan-tat">Tiếp tục</button>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <!-- <div id="maps" style="width:100%; height:300px; margin-bottom: 30px;">
                        <iframe width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen="" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD6Coia3ssHYuRKJ2nDysWBdSlVlBCzKAw&amp;q=Hồ Chí Minh">
                            </iframe>
                    </div> -->

                    <div class="card mb-5" style="color: #856404; background-color: #fff3cd; border-color: #ffeeba;">
                        <div class="card-body">
                            <h4 class="card-title">Lưu ý khi đăng tin</h4>
                            <ul>
                                <li style="list-style-type: square; margin-left: 15px;">Nội dung phải viết bằng tiếng Việt có dấu</li>
                                <li style="list-style-type: square; margin-left: 15px;">Tiêu đề tin không dài quá 100 kí tự</li>
                                <li style="list-style-type: square; margin-left: 15px;">Các bạn nên điền đầy đủ thông tin vào các mục để tin đăng có hiệu quả hơn.</li>
                                <li style="list-style-type: square; margin-left: 15px;">Để tăng độ tin cậy và tin rao được nhiều người quan tâm hơn, hãy sửa vị trí tin rao của bạn trên bản đồ bằng cách kéo icon tới đúng vị trí của tin rao.</li>
                                <li style="list-style-type: square; margin-left: 15px;">Tin đăng có hình ảnh rõ ràng sẽ được xem và gọi gấp nhiều lần so với tin rao không có ảnh. Hãy đăng ảnh để được giao dịch nhanh chóng!</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            <input type="hidden" id="action" name="action" value="add_new_post">
            <input type="hidden" id="map_lat" name="map_lat" value="">
            <input type="hidden" id="map_long" name="map_long" value="">
            <input type="hidden" id="payment_method" name="payment_method" value="thanh_toan_sau">
        </form>
                
    </main>
@endsection