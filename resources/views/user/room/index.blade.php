@extends('user.layoutManagement')
@section('content')
    <main role="main" class="ml-sm-auto col-lg-10">
        <div class="user_quick_info js-mobile-user-quick-info">
            <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>Hoàng Văn Khởi</strong>. Mã tài khoản:
                <strong>142774</strong></p>
            <p style="margin-bottom: 0;">Số dư TK của bạn là: <strong>0</strong></p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Phongtro123.com</a></li>
                <li class="breadcrumb-item"><a href="{{ route('get_user.profile.index') }}">Quản lý</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Đăng tin mới</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Quản lý tin đăng</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="dropdown mr-1">
                    <form class="form_search">
                        <div class="input-group input-group-search">
                            <input style="padding:2px; width: 200px; border-color:#6c757d;" type="text" name="s"
                                value="" class="form-control" placeholder="Tìm theo mã tin hoặc tiêu đề">
                        </div>
                    </form>
                </div>
                <div class="dropdown mr-1">
                    <button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lọc theo loại VIP
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item"
                            href="https://phongtro123.com/quan-ly/tin-dang.html?status=all&amp;package=vip50">Tin Hot</a>
                        <a class="dropdown-item"
                            href="https://phongtro123.com/quan-ly/tin-dang.html?status=all&amp;package=vip30">Tin VIP 30</a>
                        <a class="dropdown-item"
                            href="https://phongtro123.com/quan-ly/tin-dang.html?status=all&amp;package=vip20">Tin VIP 20</a>
                        <a class="dropdown-item"
                            href="https://phongtro123.com/quan-ly/tin-dang.html?status=all&amp;package=vip10">Tin VIP 10</a>
                        <a class="dropdown-item"
                            href="https://phongtro123.com/quan-ly/tin-dang.html?status=all&amp;package=normal">Tin
                            thường</a>
                    </div>
                </div>
                <div class="dropdown mr-1">
                    <button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lọc theo trạng thái
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item"
                            href="https://phongtro123.com/quan-ly/tin-dang.html?status=publish&amp;package=all">Tin đang
                            hiển thị</a>
                        <a class="dropdown-item"
                            href="https://phongtro123.com/quan-ly/tin-dang.html?status=expired&amp;package=all">Tin hết
                            hạn</a>
                        <a class="dropdown-item"
                            href="https://phongtro123.com/quan-ly/tin-dang.html?status=hidden&amp;package=all">Tin đang
                            ẩn</a>
                    </div>
                </div>
                <a class="btn btn-danger btn-sm d-none d-md-block" href="{{ route('room.create') }}">Đăng tin mới</a>
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
                            <th style="white-space: nowrap;">Xóa tin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <h1 class="page-title-h1">Cho thuê phòng trọ, cho thuê nhà trọ, tìm phòng trọ <a
                                href="{{ route('room.create') }}" title="Thêm mới">Thêm tin mới</a></h1>
                        @if (count($rooms) > 0)
                            @foreach ($rooms as $item)
                                <tr class="t-center">
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        @if (isset($item->images[0]))
                                            <img height="100px" src="{{ $item->images[0] }}" alt="">
                                        @else
                                            <img height="100px" src="{{ asset('user/asset/image/thumb_default.jpg') }}"
                                                alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <a style="font-size:18px;"href="">
                                            {{ mb_strtoupper(mb_substr(mb_strtolower($item->name, 'UTF-8'), 0, 1), 'UTF-8') . mb_substr(mb_strtolower($item->name, 'UTF-8'), 1) }}
                                        </a>
                                        <p>
                                            <a style="color: #000; font-size:16px; margin-right: 3px" href="{{ route('room.repost', $item->id) }}"><i
                                                    class="fa-solid fa-arrows-rotate"></i>Đăng lại</a>
                                            <a style="color: #000; font-size:16px; margin-right: 3px" href=" {{ route('room.hidden', $item->id) }}"><i
                                                    class="fa-solid fa-eye-slash"></i>Ẩn tin</a>
                                            <a
                                                style="color: #000; font-size:16px; "href="{{ route('room.update', $item->id) }}"><i
                                                    class="fa-solid fa-pencil"></i>Sửa tin</a>
                                        </p>
                                    </td>
                                    <td>{{ number_format($item->price) }}<sup>đ</sup>/tháng</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>20/10/2024</td>
                                    @if($item->status == 1)
                                        <td style="font-weight: 600; color: rgb(23, 203, 44)">Tin đăng đăng</td>
                                    @else
                                        <td style="font-weight: 600; color: rgb(227, 26, 26)">Tin đăng ẩn</td>
                                    @endif
                                    <td>
                                        <form action="/user/delete/{{ $item->id }}" method="POST"
                                            onsubmit="return confirmDelete()">
                                            @csrf
                                            <button type="submit"
                                                style="border: none;padding: 2px; font-weight: 600;cursor: pointer; color: white; background-color: rgb(227, 26, 26)"
                                                href="">Xóa</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">Bạn chưa có tin đăng nào. Bấm <a href="{{ route('room.create') }}">vào
                                        đây</a> để bắt đầu đăng tin</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>


            <!-- end pagination -->
        </div>
        <br>
        <br>

    </main>
@endsection
