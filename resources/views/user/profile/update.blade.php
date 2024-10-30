@extends('user.layoutManagement')
@section('content')
    <main role="main" class="ml-sm-auto col-lg-10">
        <div class="user_quick_info js-mobile-user-quick-info">
            <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>Hoàng Văn Khởi</strong>. Mã tài khoản: <strong>142774</strong></p>
            <p style="margin-bottom: 0;">Số dư TK của bạn là: <strong>0</strong></p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Phongtro123.com</a></li>
                <li class="breadcrumb-item"><a href="{{route('get_user.profile.index')}}">Quản lý</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cập nhật thông tin cá nhân</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Cập nhật thông tin cá nhân</h1>
        </div>

        <form class="js-form-submit-data" action="#" data-action-url="" method="POST" novalidate="novalidate">
            @csrf
            <div class="form-group row mt-5">
                <label for="user_id" class="col-md-2 offset-md-2 col-form-label">Mã thành viên</label>
                <div class="col-md-6">
                    <input type="text" readonly="" class="form-control disable valid" id="user_id" value="{{'#'.($user->id + 123456)}}" aria-invalid="false">
                </div>
            </div>
            <div class="form-group row">
                <label for="user_phone" class="col-md-2 offset-md-2 col-form-label">Số điện thoại</label>
                <div class="col-md-6">
                    <input type="phone" readonly="" class="form-control disable" id="user_phone" value="{{$user->phone}}">
                    <div class="form-text text-muted"><a style="display: inline-block; margin-top: 5px;" href="{{ route('get_user.profile.update_phone')}}">Đổi số điện thoại</a></div>
                </div>
            </div>
            <div class="form-group row mt-5">
                <label for="user_name" class="col-md-2 offset-md-2 col-form-label">Tên hiển thị</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="user_name" name="name" value="{{$user->name}}" placeholder="Ex: Nguyễn Văn A">
                </div>
            </div>
            <div class="form-group row">
                <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Email</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="user_email" name="email" value="{{$user->email}}" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="user_zalo" class="col-md-2 offset-md-2 col-form-label">Số Zalo</label>
                <div class="col-md-6">
                    <input type="phone" class="form-control" id="user_zalo" name="zalo" value="{{$user->phone}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="user_facebook" class="col-md-2 offset-md-2 col-form-label">Facebook</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="user_facebook" name="facebook" value="{{$user->facebook ?? ""}}">
                </div>
            </div>
            <div class="form-group row mt-5">
                <label for="user_password" class="col-md-2 offset-md-2 col-form-label" style="padding-top: 0;">Mật khẩu</label>
                <div class="col-md-6">
                    <a class="" href="{{route('get_user.profile.update_password')}}">Đổi mật khẩu</a>
                </div>
            </div>


            <div class="form-group row mt-5">
                <label for="user_avatar" class="col-md-2 offset-md-2 col-form-label" style="padding-top: 0;">Ảnh đại diện</label>
                <div class="col-md-6">
                    <div class="user-avatar-upload-wrapper js-one-image-wrapper ">
                        <div class="user-avatar-inner js-one-image-inner">
                            <div class="user-avatar-preview js-one-image-preview" style="background:url(https://phongtro123.com/images/default-user.png) center no-repeat; background-size: cover;"></div>
                        </div>
                        <div class="user-avatar-upload clearfix">
                            <a class="remove-image js-remove-one-image">Xóa hình này</a>
                            <input type="file" class="btn-add-avatar js-change-image-file" name="avatar"multiple="">
                            <input type="hidden" name="" class="js-input-value" value="">
                        </div>
                    </div> <!-- end one_featured_image_wrapper -->
                </div>
            </div>
            <div class="form-group row mt-5">
                <label for="user_email" class="col-md-2 col-form-label"></label>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary btn-lg mb-2 btn-block">Lưu &amp; Cập nhật</button>
                </div>
            </div>
            <input type="hidden" name="" value="142774">
        </form>
        <br>
        <br>
    </main>
@endsection