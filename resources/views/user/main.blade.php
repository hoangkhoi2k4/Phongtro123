@include('user.component.head')
<body class="page page-4 cho-thue-phong-tro page_category_and_location loaded ready">
    <div id="webpage">
        @include('user.component.header')
            <main id="main">
                @yield('category')
                @yield('content')
                @yield('description')
            </main>
            
        @include('user.component.footer')

        @yield('banner')
    </div>
    @include('user.component.filter-popup')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('user/asset/js/script.js')}}"></script>
    <script src="{{asset('user/asset/js/detail.js')}}"></script>
    
</body>
</html>