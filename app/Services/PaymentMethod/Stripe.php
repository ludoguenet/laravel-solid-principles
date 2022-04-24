<?php

namespace App\Services\PaymentMethod;

use App\Contracts\PaymentMethodInterface;

class Stripe implements PaymentMethodInterface
{
    public function pay()
    {
        return 'Processing Stripe payment...';
    }
}