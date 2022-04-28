<?php

namespace App\Services\PaymentMethod;

use App\Contracts\PaymentMethodInterface;
use RuntimeException;

abstract class PaymentMethod implements PaymentMethodInterface
{
    public function __construct(protected int|float $amount)
    {}

    public function pay(string $currency, float|int $amount, array $params = []): int
    {
        if (! $currency) {
            throw new RuntimeException('Erreur!');
        }

        // Logic...

        if ($totalAmount) {
            return 0;
        }
    }
}