@extends('user.layoutManagement')
@section('content')
    <main role="main" class="ml-sm-auto col-lg-10">
        <div class="user_quick_info js-mobile-user-quick-info">
            <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>Hoàng Văn Khởi</strong>. Mã tài khoản: <strong>142774</strong></p>
            <p style="margin-bottom: 0;">Số dư TK của bạn là: <strong>0</strong></p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Phongtro123.com</a></li>
                <li class="breadcrumb-item"><a href="{{ route('get_user.profile.index') }}">Quản lý</a></li>
                <li class="breadcrumb-item active" aria-current="page">Đăng tin mới</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h1">Đăng tin mới</h1>
        </div>

        <div class="alert alert-danger mb-5" role="alert">
            Nếu bạn đã từng đăng tin trên Phongtro123.com, hãy sử dụng chức năng ĐẨY TIN / GIA HẠN / NÂNG CẤP VIP trong mục QUẢN LÝ TIN ĐĂNG để làm mới, đẩy tin lên cao thay vì đăng tin mới. Tin đăng trùng nhau sẽ không được duyệt.
        </div>

        @include('user.room.form')
                
    </main>
@endsection