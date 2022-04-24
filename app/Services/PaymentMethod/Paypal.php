<?php

namespace App\Services\PaymentMethod;

use App\Contracts\PaymentMethodInterface;

class Paypal implements PaymentMethodInterface
{
    public function pay()
    {
        return 'Processing Paypal payment...';
    }
}