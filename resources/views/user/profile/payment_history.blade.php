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
                <li class="breadcrumb-item active" aria-current="page">Lịch sử nạp tiền</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Lịch sử thanh toán tin</h1>
        </div>
        <div class="table-responsive">
            <table class="table table_listing table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Thời gian</th>
                        <th>Loại hoạt động</th>
                        <th>Mã tin đăng</th>
                        <th>Loại tin</th>
                        <th>Số dư</th>
                        <th>Phí</th>
                        <th>Còn lại</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                                    
                    <tr>
                        <td>21:29 17/09/2024</td>
                        <td><span class="badge badge-success" style="font-size: 0.8rem;">Ẩn nhãn</span></td>
                        <td><a href="https://phongtro123.com/nha-tro-gia-re-chi-co-o-phuong-minh-khai-pr664651.html">664651</a></td>
                        <td><span style="color:#055699;">Tin thường</span></td>
                        <td>0đ</td>
                        <td>0đ</td>
                        <td>0đ</td>
                        <td><span class="badge badge-success">Thành công</span></td>
                    </tr>
                                    
                    <tr>
                        <td>21:29 17/09/2024</td>
                        <td><span class="badge badge-success" style="font-size: 0.8rem;">Đăng tin mới</span></td>
                        <td><a href="https://phongtro123.com/nha-tro-gia-re-chi-co-o-phuong-minh-khai-pr664651.html">664651</a></td>
                        <td><span style="color:#055699;">Tin miễn phí</span></td>
                        <td>0đ</td>
                        <td>0đ</td>
                        <td>0đ</td>
                        <td><span class="badge badge-success">Thành công</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <!-- pagination -->

    <!-- end pagination -->
        <br>
        <br>   
    </main>
@endsection