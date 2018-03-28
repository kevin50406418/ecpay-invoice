<?php
return [
    'TestMode'   => env('Ecpay_TestMode', true),
    'Invoice_ServiceURL' => env('Ecpay_Invoice_ServiceURL', 'https://einvoice-stage.ecpay.com.tw/Invoice/Issue'),
    'HashKey'    => env('Ecpay_HashKey', 'ejCk326UnaZWKisg'),
    'HashIV'     => env('Ecpay_HashIV', 'q9jcZX8Ib9LM8wYk'),
    'MerchantID' => env('Ecpay_MerchantID', '2000132'),
];