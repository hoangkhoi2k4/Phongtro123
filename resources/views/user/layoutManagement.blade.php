@include('user.userManagement.head')
<body class="desktop dashboard quan-ly index loaded ready">
    <div id="webpage">
        @include('user.userManagement.header')

        <div class="container-fluid">
            <div class="row">
                @include('user.userManagement.user')
                    @yield('content')
                @include('user.userManagement.footer')
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('user/asset/js/manage.js')}}"></script>
    <script src="{{asset('user/asset/js/profile.js')}}"></script>
    <script src="{{asset('user/asset/js/upload.js')}}"></script>
    <script>
        document.querySelectorAll('input[name="amount"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                const selectedAmount = document.querySelector('input[name="amount"]:checked').value;
                document.querySelector('.js-price').value = selectedAmount;
            });
        });
    </script>
</body>
</html>