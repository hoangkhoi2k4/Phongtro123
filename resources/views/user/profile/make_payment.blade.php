@extends('user.layoutManagement')
@section('content')
    <main role="main" class="ml-sm-auto col-lg-10">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">     
                <div class="note alert alert-info border-0 border-start border-2 border-info fs-9 js-promotion-payment-daily" role="alert">
                    <p class="mb-1 fw-bold">Ưu đãi nạp tiền:</p>
                    <p class="mb-1">• Nạp từ 50.000 đến dưới 1.000.000 tặng 10%</p>
                    <p class="mb-1">• Nạp từ 1.000.000 đến dưới 2.000.000 tặng 20%</p>
                    <p class="mb-0">• Nạp từ 2.000.000 trở lên tặng 25%</p>
                </div>
                <form class="js-form-submit-data" id="frm-payment-method-atm" action="/create-payment" method="POST" novalidate="novalidate">
                    @csrf
                    <div class="bg-white shadow-sm rounded p-4 mb-3">
                        <p>Chọn nhanh số tiền cần nạp
                        </p><div class="row gx-2 mt-3 js-btn-group-price">
                            <div class="col-3">
                                <div class="form-check btn btn-gray mb-2 p-0 rounded d-flex js-btn-price active">
                                    <input class="form-check-input cursor-pointer m-0 ms-2" type="radio" name="amount" id="radio50000" value="50000" checked="">
                                    <label class="form-check-label cursor-pointer p-2 fs-6" for="radio50000">
                                        50.000
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check btn btn-gray mb-2 p-0 rounded d-flex js-btn-price">
                                    <input class="form-check-input cursor-pointer m-0 ms-2" type="radio" name="amount" id="radio100000" value="100000">
                                    <label class="form-check-label cursor-pointer p-2 fs-6" for="radio100000">
                                    100.000
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check btn btn-gray mb-2 p-0 rounded d-flex js-btn-price">
                                    <input class="form-check-input cursor-pointer m-0 ms-2" type="radio" name="amount" id="radio200000" value="200000">
                                    <label class="form-check-label cursor-pointer p-2 fs-6" for="radio200000">
                                    200.000
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check btn btn-gray mb-2 p-0 rounded d-flex js-btn-price">
                                    <input class="form-check-input cursor-pointer m-0 ms-2" type="radio" name="amount" id="radio500000" value="500000">
                                    <label class="form-check-label cursor-pointer p-2 fs-6" for="radio500000">
                                    500.000
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check btn btn-gray mb-2 p-0 rounded d-flex js-btn-price">
                                    <input class="form-check-input cursor-pointer m-0 ms-2" type="radio" name="amount" id="radio1000000" value="1000000">
                                    <label class="form-check-label cursor-pointer p-2 fs-6" for="radio1000000">
                                    1.000.000
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check btn btn-gray mb-2 p-0 rounded d-flex js-btn-price">
                                    <input class="form-check-input cursor-pointer m-0 ms-2" type="radio" name="amount" id="radio20000000" value="2000000">
                                    <label class="form-check-label cursor-pointer p-2 fs-6" for="radio20000000">
                                    2.000.000
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check btn btn-gray mb-2 p-0 rounded d-flex js-btn-price">
                                    <input class="form-check-input cursor-pointer m-0 ms-2" type="radio" name="amount" id="radio50000000" value="5000000">
                                    <label class="form-check-label cursor-pointer p-2 fs-6" for="radio50000000">
                                    5.000.000
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p>Hoặc nhập số tiền cần nạp</p>
                            <div class="js-price-wrapper">
                                <div class="input-group input-group-lg mb-1">
                                    <input type="text" name="amount_input" class="form-control fs-6 border-secondary-subtle js-price" value="50000" placeholder="Nhập số tiền cần nạp">
                                    <span class="input-group-text fs-6 bg-white border-secondary-subtle">₫</span>
                                </div>
                                <div class="text-secondary fs-10 js-price-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-info-subtle shadow-sm rounded p-4 mb-3">
                        <div class="fs-5 fw-medium mb-3">Thông tin nạp tiền</div>
                        <table class="table table-info border-info-subtle fs-7 m-0">
                            <tbody><tr>
                                <td class="text-start ps-0">Số tiền nạp</td>
                                <td class="text-end pe-0 js-price-add">50.000₫</td>
                            </tr>
                            <tr>
                                <td class="text-start ps-0">Khuyến mãi</td>
                                <td class="text-end pe-0 js-payment-discount">+0₫</td>
                            </tr>
                            <tr>
                                <td class="text-start ps-0 border-0">Thực nhận</td>
                                <td class="text-end border-0 pe-0 js-payment-total">50.000₫</td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="d-flex mt-4">
                        <button type="submit" name="thanhtoan" class="btn btn-red btn-lg d-flex justify-content-center rounded-4 w-100 fs-6 p-25 mt-4 js-btn-hoan-tat" style="background-color: red">Tiếp tục <i class="icon arrow-right-long white size-20 ms-2"></i></button>			
                    </div>
                    <input type="hidden" name="type_charging" value="atm">
                </form>
                <p class="mt-3 mb-0 fs-10">Lưu ý: <strong>KHÔNG ĐÓNG TRÌNH DUYỆT</strong> trong quá trình thanh toán.</p>
                <p class="fs-10"> Nếu bạn cần hỗ trợ, vui lòng liên hệ <strong>0909316890</strong>.</p>
            </div>
        </div>
        <br>
        <br>
    </main>
@endsection