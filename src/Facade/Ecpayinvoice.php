<?php

namespace Kevin50406418\Ecpayinvoice\Facade;

use Illuminate\Support\Facades\Facade;

class Ecpayinvoice extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Ecpayinvoice';
    }
}