<div class="container-header">
    <a id="top-logo" href="{{ route('home')}}" title="cho thuê phòng trọ, cho thuê nhà trọ, tìm phòng trọ">cho thuê phòng trọ, cho thuê nhà trọ, tìm phòng trọ</a>
    <div class="user-welcome">
        @if (isset(Auth::user()->name))
            <a class="welcome-text" href="/user/room" rel="nofollow">
                <img src="{{asset('user/asset/image/default-user.png')}}" style="border: 1px solid #ddd; width: 40px; height: 40px; border-radius: 50%; margin-right: 5px;">
                <div>
                    <span style="display: block;font-size: 1.2rem;margin-bottom: 3px;max-width: 200px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">
                        Xin chào, <strong>{{Auth::user()->name}}</strong>
                    </span>
                    <span style="font-size: 0.9rem">
                        Mã tài khoản: <strong>{{Auth::user()->id + 123456}}</strong>
                        <br> TK Chính: <strong>{{Auth::user()->account_balance}} VNĐ</strong>
                    </span>
                </div>
            </a>
            <a rel="nofollow" class="btn" href="{{ route('logout') }}">
                <i class="ri-logout-box-line"></i>
                <span>Đăng xuất</span>
            </a>
            <a rel="nofollow" class="btn" href="{{ route('get_user.profile.index')}}">
                <i class="ri-dashboard-line"></i>
                <span>Quản lý tài khoản</span>
            </a>
        @else
            <a rel="nofollow" class="btn" href="#">
                <i class="ri-heart-3-line"></i>
                <span>Yêu thích</span>
            </a>
            <a rel="nofollow" class="btn" href="{{ route('login') }}">
                <i class="ri-user-add-fill"></i>
                <span>Đăng nhập</span>
            </a>
            <a rel="nofollow" class="btn" href="{{ route('register') }}">
                <i class="ri-login-box-line"></i>
                <span>Đăng ký</span>
            </a>
        @endif
        <a rel="nofollow" class="btn btn-add-post" href="{{ Auth::user() ? route('room.index') : route('login')}}">
            <span>Đăng tin miễn phí</span>
            <i class="ri-add-circle-line"></i>
        </a>
    </div>
</div>
<nav id="navbar-menu" class="fix-nav">
    <ul id="menu-main-menu" class="container-menu clearfix level-1">
        <li class ="{{ \Request::route()-> getName() == 'home' ? "active" : ""}}"><a href="{{ route('home')}}">Trang chủ</a></li>
        @foreach ($categoriesGlobal ?? [] as $item)
            <li class="{{\Request::path() == 'chuyen-muc-'.$item->slug.'-'.$item->id ? 'active' : ''}}">
                <a href="{{ route('get.category.item', ['slug' => $item -> slug, 'id' => $item -> id])}}" title="{{$item -> name}}">{{$item->name}}</a>
            </li>
        @endforeach
            
        {{-- <li><a href="#">Nhà cho thuê</a></li>
        <li><a href="#">Cho thuê căn hộ</a></li>
        <li><a href="#">Cho thuê mặt bằng</a></li>
        <li><a href="#">Tìm người ở ghép</a></li> --}}
        <li><a href="#">Tin tức</a></li>
        <li><a href="#">Bảng giá dịch vụ</a></li>
    </ul>
</nav>