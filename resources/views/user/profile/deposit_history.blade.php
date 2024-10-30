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
            <h1 class="h2">Lịch sử nạp tiền</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="nowrap">Ngày nạp</th>
                        <th class="nowrap">Mã giao dịch</th>
                        <th class="nowrap">Phương thức</th>
                        <th class="nowrap">Số tiền</th>
                        <th class="nowrap">Khuyến mãi</th>
                        <th class="nowrap">Thực nhận</th>
                        <th class="nowrap">Trạng thái</th>
                        <th class="nowrap" style="width:200px;">Ghi chú</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>17:13 14/9/2024</td>
                        <td>1427741726308823</td>
                        <td>ATM Online</td>
                        <td>50.000</td>
                        <td>0</td>
                        <td>0</td>
                        <td align="center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle" style="width: 16px; height: 16px; color: red;"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        </td>
                        <td></td>
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