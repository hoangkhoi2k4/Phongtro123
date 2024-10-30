@extends('user.layoutManagement')
@section('content')
    <main role="main" class="ml-sm-auto col-lg-10">
        <div class="user_quick_info js-mobile-user-quick-info">
            <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>Hoàng Văn Khởi</strong>. Mã tài khoản: <strong>142774</strong></p>
            <p style="margin-bottom: 0;">Số dư TK của bạn là: <strong>0</strong></p>
        </div>                  
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home')}}">Phongtro123.com</a></li>
                <li class="breadcrumb-item"><a href="{{ route('get_user.profile.index')}}">Quản lý</a></li>
                <li class="breadcrumb-item"><a href="{{ route('get_user.profile.update.index')}}">Cập nhật thông tin cá nhân</a></li>
                <li class="breadcrumb-item active" aria-current="page">Đổi số điện thoại</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Đổi số điện thoại</h1>
        </div>

        <form class="js-form-submit-data" action="#" data-action-url="" method="POST" novalidate="novalidate">
            @csrf
            <div class="form-group row mt-5">
                <label for="user_phone" class="col-md-2 offset-md-2 col-form-label">Số điện thoại cũ</label>
                <div class="col-md-6">
                    <input type="phone" name="phone_old" readonly="" class="form-control disable" id="user_phone" value="{{$user->phone}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="user_phone" class="col-md-2 offset-md-2 col-form-label">Số điện thoại mới</label>
                <div class="col-md-6">
                    <input type="phone" name="phone_new" class="form-control js-input-phone" id="user_phone" value="">
                    @if ($errors->first('phone_new'))
                        <span class="text-error">{{ $errors->first('phone_new') }}</span>          
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-2 offset-md-2 col-form-label"></label>
                <div class="col-md-2">
                    <button class="btn btn-warning mb-2 btn-block js-btn-get-verify-code" data-action-url="#">Lấy mã xác thực</button>
                </div>
            </div>
            <div class="form-group row">
                <label for="user_phone2" class="col-md-2 offset-md-2 col-form-label">Mã xác thực</label>
                <div class="col-md-6">
                    <input type="text" name="code" class="form-control" id="user_phone2" value="">
                    @if ($errors->first('code'))
                        <span class="text-error">{{ $errors->first('code') }}</span>          
                    @endif
                </div>
            </div>
            <div class="form-group row mt-5">
                <label for="" class="col-md-2 col-form-label"></label>
                <div class="col-md-8">
                    <button type="submit" style="cursor: pointer" class="btn btn-primary mb-2 btn-block disabled js-btn-cap-nhat">Cập nhật</button>
                </div>
            </div>
        </form>
        <br>
        <br>   
    </main>
@endsection