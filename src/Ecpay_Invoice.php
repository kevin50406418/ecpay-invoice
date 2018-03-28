<?php

namespace Kevin50406418\Ecpayinvoice;

use Kevin50406418\Ecpayinvoice\EcpayinvoiceFactory;

class Ecpay_Invoice
{
    private $instance = null;

    public function __construct()
    {
        $this->instance = new EcpayinvoiceFactory();
        config('ecpay.TestMode') ? $this->setForTest() : $this->setForProd();
    }

    public function instance()
    {
        return $this->instance;
    }

    public function i()
    {
        return $this->instance;
    }

    private function setForTest()
    {
        $this->instance->Invoice_Method = 'INVOICE';
        $this->instance->ServiceURL     = 'https://einvoice-stage.ecpay.com.tw/Invoice/Issue';
        $this->instance->HashKey        = 'ejCk326UnaZWKisg';
        $this->instance->HashIV         = 'q9jcZX8Ib9LM8wYk';
        $this->instance->MerchantID     = '2000132';
    }

    private function setForProd()
    {
        $this->instance->Invoice_Method = 'INVOICE';
        $this->instance->ServiceURL     = config('ecpay.Invoice_ServiceURL');
        $this->instance->HashKey        = config('ecpay.HashKey');
        $this->instance->HashIV         = config('ecpay.HashIV');
        $this->instance->MerchantID     = config('ecpay.MerchantID');
    }
}