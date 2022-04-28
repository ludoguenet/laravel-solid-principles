<?php

namespace App\Services\PaymentMethod;

use App\Contracts\PaymentMethodInterface;

class Stripe extends PaymentMethod
{
    public function pay()
    {
        return 'Processing Stripe payment...';
    }
}