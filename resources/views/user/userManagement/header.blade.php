<nav class="navbar navbar-expand-md fixed-top flex-md-nowrap p-0" id="mobile_navbar_top">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('home')}}">Phongtro123.com</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="{{ route('home')}}">Trang chủ</a>
            </li>
         
            @foreach ($categoriesGlobal ?? [] as $item)
                <li>
                    <a class="nav-link" target="_blank"  href="{{ route('get.category.item', ['slug' => $item -> slug, 'id' => $item -> id])}}" title="{{$item -> description}}">{{$item->description}}</a>
                </li>
            @endforeach
            <li class="nav-item d-none d-md-block">
                <a class="nav-link" target="_blank" href="{{ route('get_user.profile.price_list')}}">Bảng giá dịch vụ</a>
            </li>
            
        </ul>
        <!-- <ul class="navbar-nav float-right pr-4">
            <div class="dropdown">
                <button class="btn btn_account d-none d-md-flex" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Xin chào <strong>Hoàng Văn Khởi</strong>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="https://phongtro123.com/thoat">Thoát</a>
                </div>
            </div>
        </ul> -->
    </div>

    <div class="button-item menu js_btn_menu">
        <img src="{{asset('user/asset/image/menu-hamburger.svg')}}">
        <span class="text">Danh mục</span>
    </div>
</nav>