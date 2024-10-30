@extends('user.layoutManagement')
@section('content')
    <main role="main" class="ml-sm-auto col-lg-10">
        <div class="user_quick_info js-mobile-user-quick-info">
            <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>Hoàng Văn Khởi</strong>. Mã tài khoản: <strong>142774</strong></p>
            <p style="margin-bottom: 0;">Số dư TK của bạn là: <strong>0</strong></p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Phongtro123.com</a></li>
                <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                <li class="breadcrumb-item"><a href="#">Cập nhật thông tin cá nhân</a></li>
                <li class="breadcrumb-item active" aria-current="page">Đổi mật khẩu</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Đổi mật khẩu</h1>
        </div>

        <form class="js-form-submit-data" action="/user/update-password" data-action-url="" method="POST" novalidate="novalidate">
            @csrf
            <div class="form-group row mt-5">
                <label for="user_password1" class="col-md-2 offset-md-2 col-form-label">Mật khẩu cũ</label>
                <div class="col-md-6">
                    <input type="password" name="old_password" class="form-control" id="old_password" value="">
                    @if($errors->first('old_password'))
                        <span class="text-error">{{ $errors->first('old_password') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="user_password2" class="col-md-2 offset-md-2 col-form-label">Mật khẩu mới</label>
                <div class="col-md-6">
                    <input type="password" name="password" class="form-control" id="password" value="">
                    @if($errors->first('password'))
                        <span class="text-error">{{$errors->first('password')}}</span>
                    @endif
                    @if($errors->first('different'))
                        <span class="text-error">{{$errors->first('different')}}</span>
                    @endif
                    @if(session('error'))
                        <span class="text-error">{{session('error')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row mt-5">
                <label for="" class="col-md-2 col-form-label"></label>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary mb-2 btn-block">Cập nhật</button>
                </div>
            </div>
        </form>
        <br>
        <br>        
    </main>
@endsection