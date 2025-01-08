<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VNPayController extends Controller
{
    public function createPayment(Request $request)
    {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/user/make-payment";
        $vnp_TmnCode = "94QXEZR3";//Mã website tại VNPAY 
        $vnp_HashSecret = "KVGUNUZCZDD8GPFRFP916NK0632B37YB"; //Chuỗi bí mật
        
        $vnp_TxnRef = "100000"; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này  sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn";
        $vnp_OrderType = "Tìm phòng trọ";
        $vnp_Amount = $request -> amount_input * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "BIDV";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );
        
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }
        
        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        
        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            if (isset($_POST['redirect'])) {
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
                return redirect()-> to($vnp_Url);
            }
    }

    // public function paymentReturn(Request $request)
    // {
    //     $vnp_HashSecret = env('VNPAY_HASH_SECRET');
    //     $inputData = array();
    //     foreach ($request->all() as $key => $value) {
    //         if (substr($key, 0, 4) == "vnp_") {
    //             $inputData[$key] = $value;
    //         }
    //     }
    //     $vnp_SecureHash = $inputData['vnp_SecureHash'];
    //     unset($inputData['vnp_SecureHashType']);
    //     unset($inputData['vnp_SecureHash']);
    //     ksort($inputData);
    //     $hashData = "";
    //     foreach ($inputData as $key => $value) {
    //         $hashData .= urlencode($key) . '=' . urlencode($value) . '&';
    //     }
    //     $hashData = rtrim($hashData, '&');
    //     $secureHash = hash('sha256', $vnp_HashSecret . $hashData);
    //     if ($secureHash == $vnp_SecureHash) {
    //         if ($inputData['vnp_ResponseCode'] == '00') {
    //             // Payment success
    //             return view('payment.success');
    //         } else {
    //             // Payment failed
    //             return view('payment.failed');
    //         }
    //     } else {
    //         // Invalid signature
    //         return view('payment.invalid');
    //     }
    // }
}