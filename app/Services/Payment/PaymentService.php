<?php

namespace App\Services\Payment;

use App\Contracts\PaymentMethodInterface;

class PaymentService
{
    public function pay(PaymentMethodInterface $paymentMethod)
    {
        return $paymentMethod->pay();
    }
}