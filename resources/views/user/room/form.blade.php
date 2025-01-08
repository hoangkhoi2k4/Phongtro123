<form id="form_dangtin" class="form-horizontal js-form-submit-data js-frm-manage-post" method="POST" >
    @csrf
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
                        <select id="province_id" name="city_id" class="form-control js-select-tinhthanhpho select2-hidden-accessible"  data-msg-required="Chưa chọn Tỉnh/TP" tabindex="-1" aria-hidden="true">
                            <option value="">--chọn Tỉnh/Thành phố--</option>
                            @foreach ($cities ?? [] as $item)
                                <option value="{{$item -> id}}" {{$item->id == ($room->category_id ?? 0) ? "selected" : "" }}>{{ $item->name}}</option>
                            @endforeach
                            
                        </select>
                        @if ($errors->first('city_id'))
                            <span class="text-error">{{ $errors->first('city_id') }}</span>          
                        @endif
                        <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 191.659px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-province_id-container"><span class="select2-selection__rendered" id="select2-province_id-container" title="-- Chọn Tỉnh/TP --">-- Chọn Tỉnh/TP --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    
                    <div class="form-group">
                        <label class="col-form-label" for="district_id">Quận/Huyện</label>
                        <select name="district_id" id="district_id" class="form-control js-select-quanhuyen select2-hidden-accessible" data-msg-required="Chưa chọn Quận/Huyện" tabindex="-1" aria-hidden="true" >
                            <option value="">--chọn Quận/Huyện--</option>
                            @foreach ($districts ?? [] as $item)
                                <option value="{{$item -> id}}" {{$item->id == ($room->district_id ?? 0) ? "selected" : "" }}>{{ $item->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->first('city_id'))
                            <span class="text-error">{{ $errors->first('district_id') }}</span>          
                        @endif
                        <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 191.659px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-district_id-container"><span class="select2-selection__rendered" id="select2-district_id-container" title="chọn quận huyện">chọn quận huyện</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="col-form-label" for="phuongxa">Phường/Xã</label>
                        <select class="form-control js-select-phuongxa select2-hidden-accessible" name="wards_id" id="phuongxa" tabindex="-1" aria-hidden="true">
                            <option value="">--chọn Phường/Xã--</option>
                            @foreach ($wards ?? [] as $item)
                                <option value="{{$item -> id}}" {{$item->id == ($room->wards_id ?? 0) ? "selected" : "" }}>{{ $item->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->first('wards_id'))
                            <span class="text-error">{{ $errors->first('wards_id') }}</span>          
                        @endif
                        <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 191.659px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-phuongxa-container"><span class="select2-selection__rendered" id="select2-phuongxa-container" title="chọn phường xã">chọn phường xã</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                    </div>
                </div>
                {{-- <div class="col-md-3">
                    <div class="form-group">
                        <label class="col-form-label" for="duong">Đường/Phố</label>
                        <select class="form-control js-select-duong select2-hidden-accessible" name="" id="duong" tabindex="-1" aria-hidden="true">
                            <option value="">--chọn Đường Phố--</option>
                        </select>
                        <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 191.659px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-duong-container"><span class="select2-selection__rendered" id="select2-duong-container" title="chọn đường phố">chọn đường phố</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="street_number" class="col-form-label">Số nhà</label>
                        <input type="text" class="form-control js-input-street-number" name="apartment_number" value="{{$room -> apartment_number ?? ""}}" id="street_number" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="diachi" class="col-form-label">Địa chỉ chính xác</label>
                        <input type="text" readonly="" class="form-control" name="full_address" id="diachi" required="" data-msg-required="Chưa chọn khu vực đăng tin">
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
                    <select class="form-control" id="post_cat" name="category_id" required="" data-msg-required="Chưa chọn loại chuyên mục">
                        <option value="">-- Chọn loại chuyên mục --</option>
                        @foreach ($categories ?? [] as $item)
                            <option value="{{$item -> id}}" {{$item->id == ($room->category_id ?? 0) ? "selected" : "" }}>{{$item -> name}}</option>
                        @endforeach
                        {{-- <option value="1">Phòng trọ, nhà trọ</option>
                        <option value="2">Nhà thuê nguyên căn</option>
                        <optgroup label="Căn hộ">
                            <option value="3">Cho thuê căn hộ</option>
                            <option value="6">Cho thuê căn hộ mini</option>
                            <option value="7">Cho thuê căn hộ dịch vụ</option>
                        </optgroup>
                        <option value="4">Tìm người ở ghép</option>
                        <option value="5">Cho thuê mặt bằng + Văn phòng</option> --}}
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="post_title" class="col-md-12 col-form-label">Tiêu đề</label>
                <div class="col-md-12">
                    <input type="text" class="form-control js-title" name="name" id="post_title" value="{{ $room -> name ?? ""}}" minlength="30" maxlength="120"  data-msg-required="Tiêu đề không được để trống" data-msg-minlength="Tiêu đề quá ngắn" data-msg-maxlength="Tiêu đề quá dài">
                    @if ($errors->first('name'))
                        <span class="text-error">{{ $errors->first('name') }}</span>          
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="post_content" class="col-md-12 col-form-label">Nội dung mô tả</label>
                <div class="col-md-12">
                    <textarea class="form-control js-content" name="description" id="post_content" rows="10"  minlength="100" data-msg-required="Bạn chưa nhập nội dung" data-msg-minlength="Nội dung tối thiểu 100 kí tự">{{ $room -> description ?? ""}}</textarea>
                    @if ($errors->first('description'))
                        <span class="text-error">{{ $errors->first('description') }}</span>          
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-md-12 col-form-label">Thông tin liên hệ</label>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input id="ten_lien_he" type="text" name="" class="form-control" readonly="readonly" required="" data-msg-required="Tên liên hệ" value="{{Auth::user()->name}}">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-md-12 col-form-label">Điện thoại</label>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input id="phone" type="number" name="" class="form-control" readonly="readonly" required="" data-msg-required="Số điện thoại" value="{{Auth::user()->phone}}">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="giachothue" class="col-md-12 col-form-label">Giá cho thuê</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <input id="giachothue" name="price" pattern="[0-9.]+" type="text" class="form-control js-gia-cho-thue" value="{{ $room -> price  ?? 0}}" required="" data-msg-required="Bạn chưa nhập giá phòng" data-msg-min="Giá phòng chưa đúng">
                        <div class="input-group-append">
                            
                            <select class="form-control js-unit" name="" id="don_vi">
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
                        <input id="post_acreage" type="number" attern="[0-9.]+" name="area" min="0" max="1000" class="form-control" required="" value="{{ $room -> area ?? 0}}" data-msg-required="Bạn chưa nhập diện tích">
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
                        <select class="form-control" id="post_cat" name="subject_id">
                            <option value="0" {{($room -> subject_id ?? 0) == 0 ? "selected" : ""}}>-- Tất cả --</option>
                            <option value="1" {{($room -> subject_id ?? 0) == 1 ? "selected" : ""}}>Nam</option>
                            <option value="2" {{($room -> subject_id ?? 0) == 2 ? "selected" : ""}}>Nữ</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row mt-5">
                <div class="col-md-12">
                    <h3>Hình ảnh</h3>
                </div>
            </div>
            <div class="form-group row"> {{-- upload image--}}
                <div class="col-md-12">
                    <p>Cập nhật hình ảnh rõ ràng sẽ cho thuê nhanh hơn</p>
                    <div class="form-group">
                        <div for="browse_photos" class="browse_photos js-dropzone dz-clickable">
                            <i class="icon-upload-image"></i>
                            <span class="js-btn-chon-anh">Thêm Ảnh</span>
                            <input id="fileInput" style="display: none" type="file" name="" multiple>
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
            <div class="hidden" id="input-ids">
            </div>
            <div class="image-shows" id="input-file-imgs">
            </div>
            <div class="form-group row mt-5">
                <div class="col-md-12">
                    <h3>Video</h3>
                </div>
            </div>
            <div class="form-group row"> {{-- video link /--}}
                <label for="youtube_url" class="col-md-12 col-form-label">Video Link (Youtube)</label>
                <div class="col-md-12">
                    <input class="form-control" name="" id="youtube_url">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <p>Hoặc upload Video từ máy của bạn</p>
                    <div class="form-group">
                        <div for="browse_photos" class="browse_videos browse_photos js-dropzone-video dz-clickable">
                            <i class="icon-upload-video"></i>
                            <span class="js-btn-chon-video">Thêm Video</span>
                            <input id="fileInputVideo" style="display: none"type="file" name="">
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
                                <span class="photo_delete" data-dz-remove="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg> 
                                    Xóa
                                </span>
                            </div> 
                            <input name="" value="" type="hidden">
                        </div>
                    </div>
                    <div id="input-file-video">
                        
                    </div>
                    <div id="input-file-video-hidden">

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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.7534152727635!2d105.78486297526226!3d20.980908489420404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdd8a1ad71%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IGNow61uaCB2aeG7hW4gdGjDtG5n!5e1!3m2!1svi!2s!4v1724941136591!5m2!1svi!2s" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <div id="maps" style="width:100%; height:300px; margin-bottom: 30px;">
                <iframe width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen="" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD6Coia3ssHYuRKJ2nDysWBdSlVlBCzKAw&amp;q=Hồ Chí Minh">
                    </iframe>
            </div> -->
            <br>
            <br>

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
    {{-- <input type="hidden" id="action" name="action" value="add_new_post">
    <input type="hidden" id="map_lat" name="map_lat" value="">
    <input type="hidden" id="map_long" name="map_long" value="">
    <input type="hidden" id="payment_method" name="payment_method" value="thanh_toan_sau"> --}}
</form>