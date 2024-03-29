<?php

namespace App\Services\PaymentMethod;

class Paypal extends PaymentMethod
{
    public function pay(string $currency, float|int $amount, array $params = []): int
    {
        if (! $currency) {
            throw new RuntimeException('Erreur!');
        }

        // Logic..

        if ($totalAmount && array_key_first($params, 123)) {
            return 0;
        }
    }
}