<nav class="col-lg-2 d-none d-lg-block bg-light sidebar">
    <div class="user_info">
        <a href="{{ route('get_user.profile.index')}}" class="clearfix">
            <div class="user_avatar"><img src="{{asset('user/asset/image/default-user.png')}}"></div>
            <div class="user_meta">
                <div class="inner">					
                    <div class="user_name">{{Auth::user()->name}}</div>
                    <div class="user_verify" style="color: #555; font-size: 0.9rem;">{{Auth::user()->phone}}</div>
                </div>
            </div>
        </a>
        <ul>
            <li><span>Mã thành viên:</span> <span style="font-weight: 700;"> {{Auth::user()->id + 123456}}</span></li>
            <li><span>TK Chính:</span> <span style="font-weight: 700;">{{Auth::user()->account_balance}}</span></li>
            
        </ul>
        <a class="btn btn-warning btn-sm mr-1" href="#">Nạp tiền</a>
        <a class="btn btn-danger btn-sm" href="#">Đăng tin</a>
    </div>

    <div style="font-size: 0.9rem; background-color: #fff9e6; padding: 10px 10px 7px; margin: 0 0 10px; border-radius: 5px; display: flex;">
        <div style="margin-top: 5px; opacity: 0.1;"><i class="icon phone circle size-20"></i></div>
        <div>
            <span style="display: block; font-size: 0.8rem;">Nhân viên hỗ trợ riêng của bạn:</span>
            <span style="display: -webkit-box; -webkit-box-orient: vertical; --webkit-line-clamp: 1; overflow: hidden; white-space: normal; font-weight: bold;">Thanh Ly - LBKCorp</span>
            <span style="display: block; font-weight: bold;">0901424123</span>
        </div>
    </div>

    <ul class="nav nav-sidebar">
        <a class="nav-link" target="_blank" href="#">
            <!--?xml version="1.0" encoding="utf-8"?--><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
            <svg width="20" color="#000000" height="20" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#000000" fill="none"><path d="M46.84,15.43l1,3a4.43,4.43,0,0,0,1.75,2.31l2.53,1.7a4.47,4.47,0,0,1,1.66,5.37l-1,2.43a4.46,4.46,0,0,0,0,3.35l1,2.37a4.47,4.47,0,0,1-1.54,5.32L50,42.92a4.44,4.44,0,0,0-1.7,2.41l-.81,2.84a4.46,4.46,0,0,1-4.67,3.23l-2.43-.2a4.41,4.41,0,0,0-3.18,1l-2.34,1.89a4.47,4.47,0,0,1-5.65,0l-2-1.64a4.45,4.45,0,0,0-2.84-1H20.82a4.45,4.45,0,0,1-4.35-3.46l-.64-2.72A4.44,4.44,0,0,0,14,42.51L11.84,41a4.45,4.45,0,0,1-1.69-5.21l1-2.74a4.44,4.44,0,0,0,0-3.09l-.9-2.4A4.46,4.46,0,0,1,12,22.28l2.37-1.53a4.48,4.48,0,0,0,1.88-2.55l.7-2.52a4.47,4.47,0,0,1,4.69-3.25l2.24.19a4.48,4.48,0,0,0,3.19-1l2.13-1.72a4.48,4.48,0,0,1,5.67,0l1.86,1.56a4.44,4.44,0,0,0,3.2,1l2.35-.17A4.47,4.47,0,0,1,46.84,15.43Z"></path><circle cx="26.44" cy="24.08" r="3.77"></circle><circle cx="37.94" cy="39.92" r="3.77"></circle><line x1="41.71" y1="22.19" x2="21.85" y2="42.06"></line></svg>
            Ưu đãi thành viên mới 
            <img src="{{asset('user/asset/image/hot.gif')}}" width="25px">
        </a>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('room.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                Quản lý tin đăng
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('get_user.profile.update.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                Sửa thông tin cá nhân
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('get_user.profile.deposit')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                Nạp tiền vào tài khoản
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('get_user.profile.deposit_history')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                Lịch sử nạp tiền
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('get_user.profile.payment_history')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Lịch sử thanh toán
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('get_user.profile.price_list')}}" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                Bảng giá dịch vụ
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                Liên hệ
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link js-user-logout" href="{{ route('logout') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                Thoát
            </a>
        </li>
    </ul>
</nav>