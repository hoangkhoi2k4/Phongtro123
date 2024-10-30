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
                <li class="breadcrumb-item active" aria-current="page">Danh sách tin đăng</li>
            </ol>
        </nav>  
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Quản lý tin đăng</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="dropdown mr-1">
                    <form class="form_search">
                        <div class="input-group input-group-search">
                            <input style="padding:2px; width: 200px; border-color:#6c757d;" type="text" name="s" value="" class="form-control" placeholder="Tìm theo mã tin hoặc tiêu đề">
                        </div>
                    </form>
                </div>
                <div class="dropdown mr-1">
                    <button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lọc theo loại VIP
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="https://phongtro123.com/quan-ly/tin-dang.html?status=all&amp;package=vip50">Tin Hot</a>
                        <a class="dropdown-item" href="https://phongtro123.com/quan-ly/tin-dang.html?status=all&amp;package=vip30">Tin VIP 30</a>
                        <a class="dropdown-item" href="https://phongtro123.com/quan-ly/tin-dang.html?status=all&amp;package=vip20">Tin VIP 20</a>
                        <a class="dropdown-item" href="https://phongtro123.com/quan-ly/tin-dang.html?status=all&amp;package=vip10">Tin VIP 10</a>
                        <a class="dropdown-item" href="https://phongtro123.com/quan-ly/tin-dang.html?status=all&amp;package=normal">Tin thường</a>
                    </div>
                </div>
                <div class="dropdown mr-1">
                    <button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lọc theo trạng thái
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="https://phongtro123.com/quan-ly/tin-dang.html?status=publish&amp;package=all">Tin đang hiển thị</a>
                        <a class="dropdown-item" href="https://phongtro123.com/quan-ly/tin-dang.html?status=expired&amp;package=all">Tin hết hạn</a>
                        <a class="dropdown-item" href="https://phongtro123.com/quan-ly/tin-dang.html?status=hidden&amp;package=all">Tin đang ẩn</a>
                    </div>
                </div>
                <a class="btn btn-danger btn-sm d-none d-md-block" href="https://phongtro123.com/quan-ly/dang-tin-moi.html">Đăng tin mới</a>
                <!-- <div class="d-lg-none" style="width: 100%;"><a class="btn btn-danger btn-block mt-3" href="https://phongtro123.com/quan-ly/dang-tin-moi.html">Đăng tin mới</a></div> -->
            </div>
        </div>

        <div class="d-none d-md-block">
            <div class="table-responsive">
                <table class="table table_post_listing table-bordered _table-hover">
                    <thead>
                        <tr>
                            <th>Mã tin</th>
                            <th style="text-align: center; white-space: nowrap;">Ảnh đại diện</th>
                            <th>Tiêu đề</th>
                            <th>Giá</th>
                            <th style="white-space: nowrap;">Ngày bắt đầu</th>
                            <th style="white-space: nowrap;">Ngày hết hạn</th>
                            <th style="white-space: nowrap;">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr class="t-center">
                                <td>#1234</td>
                                <td><img height="100px" src="{{asset('user/asset/image/location_dn.jpg')}}" alt=""></td>
                                <td>Phòng trọ cấp 4 tại Hồ Chí Minh</td>
                                <td>10.000.000<sup>đ</sup>/tháng</td>
                                <td>10/08/2024</td>
                                <td>20/08/2024</td>
                                <td style="font-weight: 600;">Tin đăng đăng</td>
                            </tr>
                        
                            <tr>
                                <td colspan="7">Bạn chưa có tin đăng nào. Bấm <a href="https://phongtro123.com/quan-ly/dang-tin-moi.html">vào đây</a> để bắt đầu đăng tin</td>
                            </tr>
                        
                    </tbody>
                </table>
            </div>

                    
            <!-- end pagination -->
        </div>
        <br>
        <br>
                
    </main>
@endsection