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
                <li class="breadcrumb-item active" aria-current="page">Nạp tiền</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Nạp tiền vào tài khoản</h1>
        </div>
        <div class="note alert alert-success js-promotion-payment-daily" role="alert">
            <p>Nạp từ 50.000 đến dưới 1.000.000 tặng 10%</p>
            <p>Nạp từ 1.000.000 đến dưới 2.000.000 tặng 20%</p>
            <p>Nạp từ 2.000.000 trở lên tặng 25%</p>
        </div>


        <div class="row">
            <div class="col-md-9">
                <h3 class="mt-5 mb-3">Mời bạn chọn phương thức nạp tiền</h3>
                <div class="list-group dashboard_list_payment_method d-md-none">
                    <a href="#" class="list-group-item"><div class="item-icon"><img src="{{asset('user/asset/image/bank-transfer.png')}}"></div> Chuyển khoản <svg style="position: absolute; right: 10px; top: 50%; margin-top: -8px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                    <a href="#" class="list-group-item"><div class="item-icon"><img src="{{asset('user/asset/image/payment-method.svg')}}"></div> Thẻ ATM Internet Banking <svg style="position: absolute; right: 10px; top: 50%; margin-top: -8px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                    <a href="#" class="list-group-item"><div class="item-icon"><img src="{{asset('user/asset/image/credit-card.png')}}"></div> Thẻ tín dụng quốc tế <svg style="position: absolute; right: 10px; top: 50%; margin-top: -8px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                    
                    <a href="#" class="list-group-item"><div class="item-icon"><img src="{{asset('user/asset/image/momo.png')}}"></div> Ví điện tử MOMO <svg style="position: absolute; right: 10px; top: 50%; margin-top: -8px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                    
                    <a href="#" class="list-group-item"><div class="item-icon"><img src="{{asset('user/asset/image/zalopay.png')}}"></div> Ví điện tử ZALOPAY <svg style="position: absolute; right: 10px; top: 50%; margin-top: -8px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                    <a href="#" class="list-group-item"><div class="item-icon"><img src="{{asset('user/asset/image/online-store.svg')}}"></div> Điểm giao dịch, cửa hàng tiện lợi <svg style="position: absolute; right: 10px; top: 50%; margin-top: -8px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                    <a href="#" class="list-group-item"><div class="item-icon"><img src="{{asset('user/asset/image/qr-code.png')}}"></div> Quét mã QRCode <svg style="position: absolute; right: 10px; top: 50%; margin-top: -8px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                </div>
                <div class="d-none d-md-block">
                    <div class="row addfund_method_list clearfix">
                        <div class="col-md-4">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="{{asset('user/asset/image/bank-transfer.png')}}" alt="Chuyển khoản trực tiếp" title="Chuyển khoản trực tiếp">
                                    </div>
                                    <div class="method_item_name">
                                        Chuyển khoản
                                    </div>
                                    <button class="btn btn_select_method">Chọn</button>
                                </a>
                            </div>
                        </div>
                                            
                        <div class="col-md-4">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="{{asset('user/asset/image/payment-method.svg')}}" alt="Nạp tiền bằng ATM Internet Banking" title="Nạp tiền bằng Internet Banking">
                                    </div>
                                    <div class="method_item_name">
                                        Thẻ ATM Internet Banking
                                    </div>
                                    <button class="btn btn_select_method">Chọn</button>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="{{asset('user/asset/image/credit-card.png')}}" alt="Nạp tiền bằng thẻ tín dụng quốc tế" title="Nạp tiền bằng thẻ tín dụng quốc tế">
                                    </div>
                                    <div class="method_item_name">
                                        Thẻ tín dụng quốc tế
                                    </div>
                                    <button class="btn btn_select_method">Chọn</button>
                                </a>
                            </div>
                        </div>

                        
                        <div class="col-md-4">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="{{asset('user/asset/image/momo.png')}}" alt="Nạp tiền bằng MOMO" title="Nạp tiền bằng MOMO">
                                    </div>
                                    <div class="method_item_name">
                                        MOMO
                                    </div>
                                    <button class="btn btn_select_method">Chọn</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="{{asset('user/asset/image/zalopay.png')}}" alt="Nạp tiền bằng ZaloPay" title="Nạp tiền bằng ZaloPay">
                                    </div>
                                    <div class="method_item_name">
                                        ZaloPay
                                    </div>
                                    <button class="btn btn_select_method">Chọn</button>
                                </a>
                            </div>
                        </div>
                                                <div class="col-md-4">
                                <div class="method_item">
                                    <a href="#">
                                        <div class="method_item_icon">
                                            <img src="{{asset('user/asset/image/shopeepay2.svg')}}" alt="Nạp tiền bằng ShopeePay" title="Nạp tiền bằng ShopeePay">
                                        </div>
                                        <div class="method_item_name">
                                            ShopeePay
                                        </div>
                                        <button class="btn btn_select_method">Chọn</button>
                                    </a>
                                </div>
                            </div>
                                            
                        <div class="col-md-4">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="{{asset('user/asset/image/online-store.svg')}}" alt="Điểm giao dịch, cửa hàng tiện lợi" title="Điểm giao dịch, cửa hàng tiện lợi">
                                    </div>
                                    <div class="method_item_name">
                                        Điểm giao dịch, cửa hàng tiện lợi
                                    </div>
                                    <button class="btn btn_select_method">Chọn</button>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="method_item">
                                <a href="#">
                                    <div class="method_item_icon">
                                        <img src="{{asset('user/asset/image/qr-code.png')}}" alt="Quét mã QRCode" title="Quét mã QRCode">
                                    </div>
                                    <div class="method_item_name">
                                        Quét mã QRCode
                                    </div>
                                    <button class="btn btn_select_method">Chọn</button>
                                </a>
                            </div>
                        </div>
                        
                        <!--
                        <div class="col-md-4">
                            <div class="method_item">
                                <a href="https://phongtro123.com/quan-ly/nap-tien/ma-thanh-toan.html">
                                    <div class="method_item_icon">
                                        <img src="/images/gift.svg" alt="Nạp tiền bằng mã thanh toán" title="Nạp tiền bằng mã thanh toán">
                                    </div>
                                    <div class="method_item_name">
                                        Mã thanh toán
                                    </div>
                                    <button class="btn btn_select_method">Chọn</button>
                                </a>
                            </div>
                        </div>
                        -->
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-none d-md-block">
                <div class="card mb-3">
                    <div class="card-body">
                        <div>Số dư tài khoản</div>
                        <h3 class="heading" style="margin-top: 0; margin-bottom: 0; color: #28a745;"><strong>0đ</strong></h3>
                    </div>
                </div>
                <a class="btn btn-secondary btn-block" href="#">Lịch sử nạp tiền <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                <a class="btn btn-secondary btn-block" href="#">Lịch sử thanh toán <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                <a class="btn btn-secondary btn-block" href="#">Bảng giá dịch vụ <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
            </div>
        </div>


        <br>
        <br>
    </main>
@endsection